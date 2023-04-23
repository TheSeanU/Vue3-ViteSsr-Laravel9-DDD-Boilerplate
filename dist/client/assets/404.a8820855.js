import { _ as _export_sfc, o as openBlock, c as createElementBlock, a as createBaseVNode, h as createVNode, i as withCtx, f as createTextVNode, j as resolveComponent } from "./index.03d96985.js";
const _sfc_main = {};
const _hoisted_1 = { class: "d-flex align-items-center justify-content-center vh-75" };
const _hoisted_2 = { class: "text-center" };
const _hoisted_3 = /* @__PURE__ */ createBaseVNode("h1", { class: "display-1 fw-bold" }, "404", -1);
const _hoisted_4 = /* @__PURE__ */ createBaseVNode("p", { class: "fs-3" }, [
  /* @__PURE__ */ createBaseVNode("span", { class: "text-primary" }, "Opps!"),
  /* @__PURE__ */ createTextVNode(" Page not found. ")
], -1);
const _hoisted_5 = /* @__PURE__ */ createBaseVNode("p", { class: "lead" }, "The page you\u2019re looking for doesn\u2019t exist.", -1);
const _hoisted_6 = /* @__PURE__ */ createTextVNode("Go Home");
function _sfc_render(_ctx, _cache) {
  const _component_RouterLink = resolveComponent("RouterLink");
  return openBlock(), createElementBlock("div", _hoisted_1, [
    createBaseVNode("div", _hoisted_2, [
      _hoisted_3,
      _hoisted_4,
      _hoisted_5,
      createVNode(_component_RouterLink, { to: "/" }, {
        default: withCtx(() => [
          _hoisted_6
        ]),
        _: 1
      })
    ])
  ]);
}
const _404 = /* @__PURE__ */ _export_sfc(_sfc_main, [["render", _sfc_render]]);
export {
  _404 as default
};
