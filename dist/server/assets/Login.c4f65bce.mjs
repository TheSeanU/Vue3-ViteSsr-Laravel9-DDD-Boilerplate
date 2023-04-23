import { defineComponent, mergeProps, useSSRContext, ref, resolveComponent, withCtx, createTextVNode } from "vue";
import { ssrRenderAttrs, ssrRenderAttr, ssrIncludeBooleanAttr, ssrLooseContain, ssrRenderComponent } from "vue/server-renderer";
import { _ as _export_sfc, l as login } from "../entry-server.mjs";
import "path";
import "vue-router";
import "axios";
const _sfc_main$1 = /* @__PURE__ */ defineComponent({
  __name: "Form",
  __ssrInlineRender: true,
  props: {
    data: null
  },
  emits: ["login"],
  setup(__props) {
    return (_ctx, _push, _parent, _attrs) => {
      _push(`<div${ssrRenderAttrs(mergeProps({ class: "d-flex justify-content-center align-items-center w-100 p-3" }, _attrs))} data-v-f7291f3f><form class="form-signin" data-v-f7291f3f><div class="form-floating" data-v-f7291f3f><input id="emailInput"${ssrRenderAttr("value", __props.data.email)} type="email" class="form-control" placeholder="name@example.com" autocomplete="username" data-v-f7291f3f><label for="emailInput" data-v-f7291f3f>Email address</label></div><div class="form-floating" data-v-f7291f3f><input id="loginPassword"${ssrRenderAttr("value", __props.data.password)} type="password" class="form-control" placeholder="Password" autocomplete="current-password" data-v-f7291f3f><label for="loginPassword" data-v-f7291f3f>Password</label></div><div class="checkbox my-3 ms-1" data-v-f7291f3f><label name="remember" data-v-f7291f3f><input id="remember"${ssrIncludeBooleanAttr(Array.isArray(__props.data.remember_token) ? ssrLooseContain(__props.data.remember_token, null) : __props.data.remember_token) ? " checked" : ""} type="checkbox" data-v-f7291f3f> Remember me </label></div><button class="w-100 btn btn-lg btn-primary" type="submit" data-v-f7291f3f>Sign in</button></form></div>`);
    };
  }
});
const Form_vue_vue_type_style_index_0_scoped_f7291f3f_lang = "";
const _sfc_setup$1 = _sfc_main$1.setup;
_sfc_main$1.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("ssr/domains/auth/login/components/Form.vue");
  return _sfc_setup$1 ? _sfc_setup$1(props, ctx) : void 0;
};
const LoginForm = /* @__PURE__ */ _export_sfc(_sfc_main$1, [["__scopeId", "data-v-f7291f3f"]]);
const _sfc_main = /* @__PURE__ */ defineComponent({
  __name: "Login",
  __ssrInlineRender: true,
  setup(__props) {
    const form = ref({
      email: "",
      password: "",
      remember_token: true
    });
    const submit = (data) => login(data);
    return (_ctx, _push, _parent, _attrs) => {
      const _component_RouterLink = resolveComponent("RouterLink");
      _push(`<div${ssrRenderAttrs(mergeProps({ class: "d-sm-flex justify-content-center" }, _attrs))} data-v-b858de9c><div class="d-flex-inline text-sm-end mb-3 mb-sm-0 col-sm-5 col-lg-3 bg-primary rounded-start bg-gradient rounded-sm p-3" data-v-b858de9c><h1 class="text-light" data-v-b858de9c>Login</h1>`);
      _push(ssrRenderComponent(_component_RouterLink, {
        class: "link-light my-2",
        to: "/register"
      }, {
        default: withCtx((_, _push2, _parent2, _scopeId) => {
          if (_push2) {
            _push2(`No account yet?`);
          } else {
            return [
              createTextVNode("No account yet?")
            ];
          }
        }),
        _: 1
      }, _parent));
      _push(`</div><div class="d-sm-inline-flex col-sm-7 col-lg-4 p-sm-4 pt-sm-4 bg-white rounded-end shadow-lg" data-v-b858de9c>`);
      _push(ssrRenderComponent(LoginForm, {
        data: form.value,
        onLogin: submit
      }, null, _parent));
      _push(`</div></div>`);
    };
  }
});
const Login_vue_vue_type_style_index_0_scoped_b858de9c_lang = "";
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("ssr/domains/auth/login/pages/Login.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
const Login = /* @__PURE__ */ _export_sfc(_sfc_main, [["__scopeId", "data-v-b858de9c"]]);
export {
  Login as default
};
