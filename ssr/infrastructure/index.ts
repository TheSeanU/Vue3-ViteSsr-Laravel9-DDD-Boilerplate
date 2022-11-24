import {ViteDevServer} from 'vite';
import {resolve} from 'path';
import express from 'express';
import fs from 'fs';

// eslint-disable-next-line complexity
(async function startServer(root = process.cwd(), isProd = process.env.NODE_ENV === 'production', hmrPort) {
    const indexProd = isProd ? resolve(`${root}/dist/client`) : '';
    const manifest = isProd ? (await import(`${root}/dist/client/ssr-manifest.json` ?? '')).default : {};
    
    const server = express();

    if (isProd) {
        server.use((await import('compression')).default());
        server.use('/', (await import('serve-static')).default(resolve('dist/client'), {index: false}));
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
                render = (await import(`${root}/dist/server/entry-server.js` ?? '')).entryServer;
            } else {
                template = fs.readFileSync('ssr/infrastructure/index.html', 'utf-8');               
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

    const port = process.env.PORT || 6173
    
    server.listen(port)
    
    // eslint-disable-next-line no-console
    console.log(`Server running at http://localhost:${port}`)

    return {server, viteDevServer};
})();
