import { d as defineComponent, o as openBlock, c as createElementBlock, a as createBaseVNode, m as renderSlot, F as Fragment, h as createVNode, i as withCtx, n as createStaticVNode, f as createTextVNode } from "./index.03d96985.js";
const _hoisted_1$1 = ["data-bs-target"];
const _hoisted_2$1 = ["id"];
const _hoisted_3$1 = { class: "modal-dialog" };
const _hoisted_4$1 = { class: "modal-content" };
const _hoisted_5$1 = { class: "modal-header" };
const _hoisted_6$1 = {
  id: "exampleModalLabel",
  class: "modal-title"
};
const _hoisted_7$1 = /* @__PURE__ */ createBaseVNode("button", {
  type: "button",
  class: "btn-close",
  "data-bs-dismiss": "modal",
  "aria-label": "Close"
}, null, -1);
const _hoisted_8$1 = { class: "modal-body" };
const _hoisted_9 = /* @__PURE__ */ createBaseVNode("div", { class: "modal-footer" }, [
  /* @__PURE__ */ createBaseVNode("button", {
    type: "button",
    class: "btn btn-secondary",
    "data-bs-dismiss": "modal"
  }, "Close"),
  /* @__PURE__ */ createBaseVNode("button", {
    type: "button",
    class: "btn btn-primary"
  }, "Save changes")
], -1);
const _sfc_main$1 = /* @__PURE__ */ defineComponent({
  __name: "Modal",
  props: {
    id: null
  },
  setup(__props) {
    return (_ctx, _cache) => {
      return openBlock(), createElementBlock(Fragment, null, [
        createBaseVNode("button", {
          type: "button",
          class: "btn btn-primary",
          "data-bs-toggle": "modal",
          "data-bs-target": `#${__props.id}`
        }, [
          renderSlot(_ctx.$slots, "button")
        ], 8, _hoisted_1$1),
        createBaseVNode("div", {
          id: `${__props.id}`,
          class: "modal fade",
          tabindex: "-1",
          "aria-labelledby": "exampleModalLabel",
          "aria-hidden": "true"
        }, [
          createBaseVNode("div", _hoisted_3$1, [
            createBaseVNode("div", _hoisted_4$1, [
              createBaseVNode("div", _hoisted_5$1, [
                createBaseVNode("h5", _hoisted_6$1, [
                  renderSlot(_ctx.$slots, "title")
                ]),
                _hoisted_7$1
              ]),
              createBaseVNode("div", _hoisted_8$1, [
                renderSlot(_ctx.$slots, "body")
              ]),
              _hoisted_9
            ])
          ])
        ], 8, _hoisted_2$1)
      ], 64);
    };
  }
});
const _hoisted_1 = /* @__PURE__ */ createStaticVNode('<div class="row pb-3"><div class="d-grid gap-3" style="grid-template-columns:1fr 2fr;"><div class="bg-light border rounded-3"><br><br><br><br><br><br><br><br><br><br></div><div class="bg-light border rounded-3"><br><br><br><br><br><br><br><br><br><br></div></div></div>', 1);
const _hoisted_2 = { class: "row m-1 p-4 mb-3 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow" };
const _hoisted_3 = { class: "col-lg-7 p-3 p-lg-5 pt-lg-3" };
const _hoisted_4 = /* @__PURE__ */ createBaseVNode("h1", { class: "display-4 fw-bold lh-1" }, "Border hero with cropped image and shadows", -1);
const _hoisted_5 = /* @__PURE__ */ createBaseVNode("p", { class: "lead" }, " Quickly design and customize responsive mobile-first sites with Bootstrap, the world\u2019s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins. ", -1);
const _hoisted_6 = { class: "d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3" };
const _hoisted_7 = /* @__PURE__ */ createTextVNode("Modal");
const _hoisted_8 = /* @__PURE__ */ createBaseVNode("button", {
  type: "button",
  class: "btn btn-outline-secondary btn-lg px-4"
}, "Default", -1);
const _sfc_main = {
  __name: "Home",
  setup(__props) {
    return (_ctx, _cache) => {
      return openBlock(), createElementBlock(Fragment, null, [
        _hoisted_1,
        createBaseVNode("div", _hoisted_2, [
          createBaseVNode("div", _hoisted_3, [
            _hoisted_4,
            _hoisted_5,
            createBaseVNode("div", _hoisted_6, [
              createVNode(_sfc_main$1, { id: "homepage" }, {
                button: withCtx(() => [
                  _hoisted_7
                ]),
                _: 1
              }),
              createBaseVNode("button", {
                type: "button",
                class: "btn btn-primary btn-lg px-4 me-md-2 fw-bold",
                onClick: _cache[0] || (_cache[0] = (...args) => _ctx.hallo && _ctx.hallo(...args))
              }, " Primary "),
              _hoisted_8
            ])
          ])
        ])
      ], 64);
    };
  }
};
export {
  _sfc_main as default
};
