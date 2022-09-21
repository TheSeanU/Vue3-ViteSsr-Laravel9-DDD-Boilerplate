import {fileURLToPath} from 'node:url';
import fs from 'node:fs';
import path from 'node:path';

const dirname = path.dirname(fileURLToPath(import.meta.url));
const toAbsolute = (route: string) => path.resolve(dirname, route);

const manifest = (await import('../../../dist/static/ssr-manifest.json' ?? '', {assert: {type: 'json'}})).default;
const template = fs.readFileSync(toAbsolute('../../../dist/static/index.html'), 'utf-8');
const {render} = await import('../../../dist/server/entry-server.js' ?? '');

const pages = import.meta.glob('ssr/domains/*/pages/*.vue');

const routesToPrerender = Object.keys(pages).map(file => {
    const name = file.split('/').pop()?.replace('.vue', '').toLocaleLowerCase();
    return name === 'home' ? '/' : `/${name}`;
});

(async () => {
    for (const url of routesToPrerender) {
        const [appHtml, preloadLinks] = await render(url, manifest);

        const html = template.replace('<!--preload-links-->', preloadLinks).replace('<!--app-html-->', appHtml);

        const filePath = `../../../dist/static${url === '/' ? '/index' : url}.html`;
        fs.writeFileSync(toAbsolute(filePath), html);
        // eslint-disable-next-line no-console
        console.log('pre-rendered:', filePath);
    }

    fs.unlinkSync(toAbsolute('dist/static/ssr-manifest.json'));
})();
