import { defineComponent, useSSRContext, withCtx, createTextVNode } from "vue";
import { ssrRenderAttr, ssrRenderSlot, ssrRenderStyle, ssrRenderComponent } from "vue/server-renderer";
const _sfc_main$1 = /* @__PURE__ */ defineComponent({
  __name: "Modal",
  __ssrInlineRender: true,
  props: {
    id: null
  },
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<!--[--><button type="button" class="btn btn-primary" data-bs-toggle="modal"${ssrRenderAttr("data-bs-target", `#${__props.id}`)}>`);
      ssrRenderSlot(_ctx.$slots, "button", {}, null, _push, _parent);
      _push(`</button><div${ssrRenderAttr("id", `${__props.id}`)} class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 id="exampleModalLabel" class="modal-title">`);
      ssrRenderSlot(_ctx.$slots, "title", {}, null, _push, _parent);
      _push(`</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body">`);
      ssrRenderSlot(_ctx.$slots, "body", {}, null, _push, _parent);
      _push(`</div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button><button type="button" class="btn btn-primary">Save changes</button></div></div></div></div><!--]-->`);
    };
  }
});
const _sfc_setup$1 = _sfc_main$1.setup;
_sfc_main$1.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("ssr/application/components/Modal.vue");
  return _sfc_setup$1 ? _sfc_setup$1(props, ctx) : void 0;
};
const _sfc_main = {
  __name: "Home",
  __ssrInlineRender: true,
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<!--[--><div class="row pb-3"><div class="d-grid gap-3" style="${ssrRenderStyle({ "grid-template-columns": "1fr 2fr" })}"><div class="bg-light border rounded-3"><br><br><br><br><br><br><br><br><br><br></div><div class="bg-light border rounded-3"><br><br><br><br><br><br><br><br><br><br></div></div></div><div class="row m-1 p-4 mb-3 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow"><div class="col-lg-7 p-3 p-lg-5 pt-lg-3"><h1 class="display-4 fw-bold lh-1">Border hero with cropped image and shadows</h1><p class="lead"> Quickly design and customize responsive mobile-first sites with Bootstrap, the world\u2019s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins. </p><div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">`);
      _push(ssrRenderComponent(_sfc_main$1, { id: "homepage" }, {
        button: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`Modal`);
          } else {
            return [
              createTextVNode("Modal")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`<button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold"> Primary </button><button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button></div></div></div><!--]-->`);
    };
  }
};
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("ssr/domains/home/pages/Home.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
export {
  _sfc_main as default
};
