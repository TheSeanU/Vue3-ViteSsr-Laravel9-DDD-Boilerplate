import {ViteDevServer} from 'vite';
import {fileURLToPath} from 'url';
import express from 'express';
import fs from 'fs';
import path, {resolve} from 'path';

(async function startServer(root = process.cwd(), isProd = process.env.NODE_ENV === 'production', hmrPort) {
    const getPath = (route: string) => path.resolve(dirname, route);

    const dirname = path.dirname(fileURLToPath(import.meta.url));
    const indexProd = isProd ? fs.readFileSync(getPath('dist/client/index.html'), 'utf-8') : '';
    const manifest = isProd ? (await import('./dist/client/ssr-manifest.json' ?? '')).default : {};

    const server = express();

    if (isProd) {
        server.use((await import('compression')).default());
        server.use('/', (await import('express')).static(resolve('dist/client'), {index: false}));
    }

    const viteDevServer: ViteDevServer = await (
        await import('vite')
    ).createServer({
        base: '/',
        root,
        server: {
            middlewareMode: true,
            watch: {
                usePolling: true,
                interval: 100,
            },
            hmr: {
                port: hmrPort,
            },
        },
        appType: 'custom',
    });

    server.use(viteDevServer.middlewares);

    server.use('*', async (req, res, next) => {
        try {
            let template, render;

            if (isProd) {
                template = indexProd;
                render = (await import('./dist/server/entry-server.ts' ?? '')).entryServer;
            } else {
                template = fs.readFileSync(getPath('index.html'), 'utf-8');
                template = await viteDevServer.transformIndexHtml(req.originalUrl, template);
                render = (await viteDevServer.ssrLoadModule('ssr/infrastructure/build/entry-server.ts')).entryServer;
            }

            const [appHtml, preloadLinks] = await render(req.originalUrl, manifest);
            const html = template.replace('<!--preload-links-->', preloadLinks).replace('<!--app-html-->', appHtml);

            res.status(200).set({'Content-Type': 'text/html'}).end(html);
        } catch (e) {
            if (e instanceof Error) viteDevServer.ssrFixStacktrace(e);
            next(e);
        }
    });

    // eslint-disable-next-line no-console
    server.listen(6173, () => console.log('Server running at http://localhost:6173'));

    return {server, viteDevServer};
})();