import { ssrRenderAttrs, ssrRenderComponent, ssrRenderStyle, ssrRenderSuspense, ssrRenderVNode, renderToString } from "vue/server-renderer";
import { basename } from "path";
import { createRouter as createRouter$1, createMemoryHistory, useRouter, RouterLink } from "vue-router";
import { ref, mergeProps, useSSRContext, defineComponent, unref, withCtx, createVNode, createTextVNode, resolveComponent, resolveDynamicComponent, openBlock, createBlock, Suspense, createSSRApp } from "vue";
import axios from "axios";
const pages = /* @__PURE__ */ Object.assign({ "../../domains/auth/login/pages/Login.vue": () => import("./assets/Login.c4f65bce.mjs"), "../../domains/auth/register/pages/Register.vue": () => import("./assets/Register.da1eb93c.mjs"), "../../domains/home/pages/Home.vue": () => import("./assets/Home.48d0d5f6.mjs"), "../../domains/password/pages/Password.vue": () => import("./assets/Password.588c410c.mjs"), "../../domains/profile/pages/Profile.vue": () => import("./assets/Profile.08649552.mjs") });
const routes = Object.keys(pages).map((path) => {
  var _a;
  const name = (_a = path.split("/").pop()) == null ? void 0 : _a.replace(".vue", "").toLocaleLowerCase();
  return {
    path: name === "home" ? "/" : `/${name}`,
    linkActiveClass: "active-link",
    component: pages[path]
  };
});
const createRouter = () => createRouter$1({
  history: createMemoryHistory(),
  routes: [
    ...routes,
    {
      path: "/:pathMatch(.*)*",
      component: () => import("./assets/404.f55b267f.mjs")
    }
  ]
});
const BACKEND = "http://localhost:8000/api";
const api = axios.create({
  baseURL: BACKEND,
  withCredentials: true,
  headers: {
    Accept: "application/json",
    "Content-Type": "application/json"
  }
});
const postToApi = (uri, body) => api.post(uri, body);
const setCookies = (name, value, ttl) => {
  if (!name)
    throw new Error("Cookie name is not found in the first argument.");
  if (/^(?:expires|max\-age|path|domain|secure|SameSite)$/i.test(name)) {
    throw new Error(
      `Cookie name illegality. Cannot be set to ["expires","max-age","path","domain","secure","SameSite"]	 current name name: ${name}`
    );
  }
  if (value && value.constructor === Object)
    value = JSON.stringify(value);
  return document.cookie = `${name}=${value}; path=/; max-age=${ttl}; secure; samesite=strict`;
};
const AUTH_TOKEN = "Authorization";
const loggedIn = ref({ bool: false, data: [] });
const login = async (form) => {
  try {
    const resp = await postToApi("auth/login", form);
    if (resp.status === 200) {
      setCookies(AUTH_TOKEN, resp.data.token, resp.data.tokenTTL);
      loggedIn.value.bool = true;
      loggedIn.value.data = resp.data.user;
    }
  } catch (e) {
    console.error(e);
  }
};
const _export_sfc = (sfc, props) => {
  const target = sfc.__vccOpts || sfc;
  for (const [key, val] of props) {
    target[key] = val;
  }
  return target;
};
const _sfc_main$2 = {};
function _sfc_ssrRender(_ctx, _push, _parent, _attrs) {
  _push(`<svg${ssrRenderAttrs(mergeProps({
    xmlns: "http://www.w3.org/2000/svg",
    width: "28",
    height: "30",
    fill: "currentColor"
  }, _attrs))}><path d="M11.447 8.894a1 1 0 1 0-.894-1.789l.894 1.789zm-2.894-.789a1 1 0 1 0 .894 1.789l-.894-1.789zm0 1.789a1 1 0 1 0 .894-1.789l-.894 1.789zM7.447 7.106a1 1 0 1 0-.894 1.789l.894-1.789zM10 9a1 1 0 1 0-2 0h2zm-2 2.5a1 1 0 1 0 2 0H8zm9.447-5.606a1 1 0 1 0-.894-1.789l.894 1.789zm-2.894-.789a1 1 0 1 0 .894 1.789l-.894-1.789zm2 .789a1 1 0 1 0 .894-1.789l-.894 1.789zm-1.106-2.789a1 1 0 1 0-.894 1.789l.894-1.789zM18 5a1 1 0 1 0-2 0h2zm-2 2.5a1 1 0 1 0 2 0h-2zm-5.447-4.606a1 1 0 1 0 .894-1.789l-.894 1.789zM9 1l.447-.894a1 1 0 0 0-.894 0L9 1zm-2.447.106a1 1 0 1 0 .894 1.789l-.894-1.789zm-6 3a1 1 0 1 0 .894 1.789L.553 4.106zm2.894.789a1 1 0 1 0-.894-1.789l.894 1.789zm-2-.789a1 1 0 1 0-.894 1.789l.894-1.789zm1.106 2.789a1 1 0 1 0 .894-1.789l-.894 1.789zM2 5a1 1 0 1 0-2 0h2zM0 7.5a1 1 0 1 0 2 0H0zm8.553 12.394a1 1 0 1 0 .894-1.789l-.894 1.789zm-1.106-2.789a1 1 0 1 0-.894 1.789l.894-1.789zm1.106 1a1 1 0 1 0 .894 1.789l-.894-1.789zm2.894.789a1 1 0 1 0-.894-1.789l.894 1.789zM8 19a1 1 0 1 0 2 0H8zm2-2.5a1 1 0 1 0-2 0h2zm-7.447.394a1 1 0 1 0 .894-1.789l-.894 1.789zM1 15H0a1 1 0 0 0 .553.894L1 15zm1-2.5a1 1 0 1 0-2 0h2zm12.553 2.606a1 1 0 1 0 .894 1.789l-.894-1.789zM17 15l.447.894A1 1 0 0 0 18 15h-1zm1-2.5a1 1 0 1 0-2 0h2zm-7.447-5.394l-2 1 .894 1.789 2-1-.894-1.789zm-1.106 1l-2-1-.894 1.789 2 1 .894-1.789zM8 9v2.5h2V9H8zm8.553-4.894l-2 1 .894 1.789 2-1-.894-1.789zm.894 0l-2-1-.894 1.789 2 1 .894-1.789zM16 5v2.5h2V5h-2zm-4.553-3.894l-2-1-.894 1.789 2 1 .894-1.789zm-2.894-1l-2 1 .894 1.789 2-1L8.553.106zM1.447 5.894l2-1-.894-1.789-2 1 .894 1.789zm-.894 0l2 1 .894-1.789-2-1-.894 1.789zM0 5v2.5h2V5H0zm9.447 13.106l-2-1-.894 1.789 2 1 .894-1.789zm0 1.789l2-1-.894-1.789-2 1 .894 1.789zM10 19v-2.5H8V19h2zm-6.553-3.894l-2-1-.894 1.789 2 1 .894-1.789zM2 15v-2.5H0V15h2zm13.447 1.894l2-1-.894-1.789-2 1 .894 1.789zM18 15v-2.5h-2V15h2z"></path></svg>`);
}
const _sfc_setup$2 = _sfc_main$2.setup;
_sfc_main$2.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("ssr/application/assets/icons/Icon.vue");
  return _sfc_setup$2 ? _sfc_setup$2(props, ctx) : void 0;
};
const Icon = /* @__PURE__ */ _export_sfc(_sfc_main$2, [["ssrRender", _sfc_ssrRender]]);
const _sfc_main$1 = /* @__PURE__ */ defineComponent({
  __name: "Navigation",
  __ssrInlineRender: true,
  setup(__props) {
    ref();
    const closeCanvas = ref();
    const route = useRouter();
    route.afterEach(() => closeCanvas.value.click());
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<header${ssrRenderAttrs(mergeProps({ class: "p-3 mb-3 border-bottom bg-white" }, _attrs))}><div class="container d-flex align-items-between justify-content-between">`);
      _push(ssrRenderComponent(unref(RouterLink), {
        to: "/",
        class: "d-flex mt-2 mb-sm-0 text-dark text-decoration-none"
      }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(ssrRenderComponent(Icon, null, null, _parent2, _scopeId));
          } else {
            return [
              createVNode(Icon)
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`<ul class="nav d-none d-sm-block col-sm-auto me-sm-auto mb-2 justify-content-center mb-sm-0"><li>`);
      _push(ssrRenderComponent(unref(RouterLink), {
        to: "/",
        class: "nav-link px-2 text-dark"
      }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`Home`);
          } else {
            return [
              createTextVNode("Home")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li></ul><form class="col-sm-auto mb-3 mb-sm-0 me-sm-3 d-none d-sm-block"><input type="search" class="form-control" placeholder="Search..." aria-label="Search"></form><div class="d-flex align-self-end d-sm-none"><div class="me-3"><svg data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" width="20" height="20" class="DocSearch-Search-Icon" viewBox="0 0 20 20"><path d="M14.386 14.386l4.0877 4.0877-4.0877-4.0877c-2.9418 2.9419-7.7115 2.9419-10.6533 0-2.9419-2.9418-2.9419-7.7115 0-10.6533 2.9418-2.9419 7.7115-2.9419 10.6533 0 2.9419 2.9418 2.9419 7.7115 0 10.6533z" stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"></path></svg></div><div><div class="dropdown text-end" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><a id="dropdownUser1" href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><img src="https://via.placeholder.com/150" alt="smo" width="32" height="32" class="rounded-circle"></a></div></div></div><div id="offcanvasRight" class="offcanvas offcanvas-end" tabindex="-1" aria-labelledby="offcanvasRightLabel"><div class="offcanvas-header"><div class="d-flex col-12 align-items-center justify-content-around"><input id="focusSearch" type="search" class="form-control" placeholder="Search..." aria-label="Search"><button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button></div></div><div class="offcanvas-body"><ul class="nav d-flex flex-column"><li>`);
      _push(ssrRenderComponent(unref(RouterLink), {
        to: "/",
        class: "nav-link px-2 text-dark"
      }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`Home`);
          } else {
            return [
              createTextVNode("Home")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li><li>`);
      _push(ssrRenderComponent(unref(RouterLink), {
        to: "/register",
        class: "nav-link px-2 text-dark"
      }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`Register`);
          } else {
            return [
              createTextVNode("Register")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li><li>`);
      _push(ssrRenderComponent(unref(RouterLink), {
        to: "/login",
        class: "nav-link px-2 text-dark"
      }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`Login`);
          } else {
            return [
              createTextVNode("Login")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</li></ul></div></div><div class="dropdown d-none d-sm-block text-end"><a id="dropdownUser1" href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><img src="https://via.placeholder.com/150" alt="smo" width="32" height="32" class="rounded-circle"></a>`);
      if (unref(loggedIn)) {
        _push(`<ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="${ssrRenderStyle({})}"><li>`);
        _push(ssrRenderComponent(unref(RouterLink), {
          to: "/register",
          class: "dropdown-item"
        }, {
          default: withCtx((_, _push2, _parent2, _scopeId) => {
            if (_push2) {
              _push2(`Register`);
            } else {
              return [
                createTextVNode("Register")
              ];
            }
          }),
          _: 1
        }, _parent));
        _push(`</li><li><hr class="dropdown-divider"></li><li>`);
        _push(ssrRenderComponent(unref(RouterLink), {
          to: "/login",
          class: "dropdown-item"
        }, {
          default: withCtx((_, _push2, _parent2, _scopeId) => {
            if (_push2) {
              _push2(`Login`);
            } else {
              return [
                createTextVNode("Login")
              ];
            }
          }),
          _: 1
        }, _parent));
        _push(`</li></ul>`);
      } else {
        _push(`<!---->`);
      }
      _push(`</div></div></header>`);
    };
  }
});
const Navigation_vue_vue_type_style_index_0_lang = "";
const _sfc_setup$1 = _sfc_main$1.setup;
_sfc_main$1.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("ssr/application/layout/Navigation.vue");
  return _sfc_setup$1 ? _sfc_setup$1(props, ctx) : void 0;
};
const _sfc_main = /* @__PURE__ */ defineComponent({
  __name: "BasicLayout",
  __ssrInlineRender: true,
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      const _component_router_view = resolveComponent("router-view");
      _push(`<!--[-->`);
      _push(ssrRenderComponent(_sfc_main$1, null, null, _parent));
      _push(ssrRenderComponent(_component_router_view, null, {
        default: withCtx(({ Component }, _push2, _parent2, _scopeId) => {
          if (_push2) {
            ssrRenderSuspense(_push2, {
              default: () => {
                _push2(`<div class="container"${_scopeId}>`);
                ssrRenderVNode(_push2, createVNode(resolveDynamicComponent(Component), null, null), _parent2, _scopeId);
                _push2(`</div>`);
              },
              _: 2
            });
          } else {
            return [
              (openBlock(), createBlock(Suspense, null, {
                default: withCtx(() => [
                  createVNode("div", { class: "container" }, [
                    (openBlock(), createBlock(resolveDynamicComponent(Component)))
                  ])
                ]),
                _: 2
              }, 1024))
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`<!--]-->`);
    };
  }
});
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("ssr/application/layout/BasicLayout.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
const createApp = () => {
  const pageProps = {
    ...RouterLink.props,
    inactiveClass: String
  };
  const app = createSSRApp(_sfc_main, pageProps);
  const router = createRouter();
  app.use(router);
  return { app, pageProps, router };
};
const entryServer = async (url, manifest) => {
  const { app, router, pageProps } = createApp();
  await router.push(url);
  await router.isReady();
  const ctx = {
    ...pageProps
  };
  const html = await renderToString(app, ctx);
  const preloadLinks = renderPreloadLinks(ctx.modules, manifest);
  return [html, preloadLinks];
};
const renderPreloadLinks = (modules, manifest) => {
  let links = "";
  const seen = /* @__PURE__ */ new Set();
  modules.forEach((id) => {
    const files = manifest[id];
    if (files) {
      files.forEach((file) => {
        if (!seen.has(file)) {
          seen.add(file);
          const filename = basename(file);
          if (manifest[filename]) {
            for (const depFile of manifest[filename]) {
              links += renderPreloadLink(depFile);
              seen.add(depFile);
            }
          }
          links += renderPreloadLink(file);
        }
      });
    }
  });
  return links;
};
const renderPreloadLink = (file) => {
  if (file.endsWith(".js"))
    return `<link rel="modulepreload" crossorigin href="${file}">`;
  if (file.endsWith(".cjs"))
    return `<link rel="modulepreload" crossorigin href="${file}">`;
  if (file.endsWith(".esm"))
    return `<link rel="modulepreload" crossorigin href="${file}">`;
  if (file.endsWith(".css"))
    return `<link rel="stylesheet" href="${file}">`;
  if (file.endsWith(".woff"))
    return `<link rel="preload" href="${file}" as="font" type="font/woff" crossorigin>`;
  if (file.endsWith(".woff2"))
    return `<link rel="preload" href="${file}" as="font" type="font/woff2" crossorigin>`;
  if (file.endsWith(".gif"))
    return `<link rel="preload" href="${file}" as="image" type="image/gif">`;
  if (file.endsWith(".jpg") || file.endsWith(".jpeg"))
    return `<link rel="preload" href="${file}" as="image" type="image/jpeg">`;
  if (file.endsWith(".png"))
    return `<link rel="preload" href="${file}" as="image" type="image/png">`;
  return "";
};
export {
  _export_sfc as _,
  entryServer,
  login as l,
  postToApi as p
};
