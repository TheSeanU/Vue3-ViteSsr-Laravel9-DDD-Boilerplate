import { ref, defineComponent, mergeProps, useSSRContext, resolveComponent, withCtx, createTextVNode } from "vue";
import { ssrRenderAttrs, ssrRenderAttr, ssrRenderComponent } from "vue/server-renderer";
import { p as postToApi, _ as _export_sfc } from "../entry-server.mjs";
import "path";
import "vue-router";
import "axios";
ref({ bool: false, data: Array });
const register = async (form) => {
  try {
    await postToApi("auth/register", form);
  } catch (e) {
    console.error(e);
  }
};
const _sfc_main$1 = /* @__PURE__ */ defineComponent({
  __name: "Form",
  __ssrInlineRender: true,
  props: {
    data: null
  },
  emits: ["register"],
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<div${ssrRenderAttrs(mergeProps({ class: "d-flex justify-content-center align-items-center w-100 p-3" }, _attrs))} data-v-ccbe34c0><form class="form-register" data-v-ccbe34c0><div class="form-floating" data-v-ccbe34c0><input id="nameInput"${ssrRenderAttr("value", __props.data.name)} type="text" class="form-control" placeholder="name" autocomplete="off" data-v-ccbe34c0><label for="nameInput" data-v-ccbe34c0>Naam</label></div><div class="form-floating" data-v-ccbe34c0><input id="emailInput"${ssrRenderAttr("value", __props.data.email)} type="email" class="form-control" placeholder="name@example.com" autocomplete="off" data-v-ccbe34c0><label for="emailInput" data-v-ccbe34c0>Email address</label></div><div class="form-floating" data-v-ccbe34c0><input id="password"${ssrRenderAttr("value", __props.data.password)} type="password" class="form-control" placeholder="Password" autocomplete="off" data-v-ccbe34c0><label for="password" data-v-ccbe34c0>Password</label></div><div class="form-floating" data-v-ccbe34c0><input id="confirm_password"${ssrRenderAttr("value", __props.data.confirm_password)} type="password" class="form-control mb-3" placeholder="Confirm password" autocomplete="off" data-v-ccbe34c0><label for="repeatPassword" data-v-ccbe34c0>Confirm password</label></div><button class="w-100 btn btn-lg btn-success" type="submit" data-v-ccbe34c0>Register</button></form></div>`);
    };
  }
});
const Form_vue_vue_type_style_index_0_scoped_ccbe34c0_lang = "";
const _sfc_setup$1 = _sfc_main$1.setup;
_sfc_main$1.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("ssr/domains/auth/register/components/Form.vue");
  return _sfc_setup$1 ? _sfc_setup$1(props, ctx) : void 0;
};
const RegisterForm = /* @__PURE__ */ _export_sfc(_sfc_main$1, [["__scopeId", "data-v-ccbe34c0"]]);
const _sfc_main = /* @__PURE__ */ defineComponent({
  __name: "Register",
  __ssrInlineRender: true,
  setup(__props) {
    const form = ref({
      name: "",
      email: "",
      password: "",
      confirm_password: ""
    });
    const submit = (data) => register(data);
    return (_ctx, _push, _parent, _attrs) => {
      const _component_RouterLink = resolveComponent("RouterLink");
      _push(`<div${ssrRenderAttrs(mergeProps({ class: "d-sm-flex justify-content-center" }, _attrs))} data-v-0c393ca1><div class="d-flex-inline text-sm-end col-sm-5 col-lg-3 rounded-start bg-gradient rounded-sm p-3" data-v-0c393ca1><h1 class="text-light" data-v-0c393ca1>Register</h1>`);
      _push(ssrRenderComponent(_component_RouterLink, {
        class: "link-light my-2",
        to: "/login"
      }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`Already have an account?`);
          } else {
            return [
              createTextVNode("Already have an account?")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</div><div class="d-sm-inline-flex h-100 col-sm-7 col-lg-4 p-sm-4 pt-sm-4 bg-white rounded-end shadow-lg" data-v-0c393ca1>`);
      _push(ssrRenderComponent(RegisterForm, {
        data: form.value,
        onRegister: submit
      }, null, _parent));
      _push(`</div></div>`);
    };
  }
});
const Register_vue_vue_type_style_index_0_scoped_0c393ca1_lang = "";
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("ssr/domains/auth/register/pages/Register.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
const Register = /* @__PURE__ */ _export_sfc(_sfc_main, [["__scopeId", "data-v-0c393ca1"]]);
export {
  Register as default
};
