import { d as defineComponent, o as openBlock, c as createElementBlock, a as createBaseVNode, w as withDirectives, v as vModelText, b as vModelCheckbox, e as withModifiers, f as createTextVNode, p as pushScopeId, g as popScopeId, _ as _export_sfc, r as ref, h as createVNode, i as withCtx, l as login, j as resolveComponent } from "./index.03d96985.js";
const _withScopeId$1 = (n) => (pushScopeId("data-v-f7291f3f"), n = n(), popScopeId(), n);
const _hoisted_1$1 = { class: "d-flex justify-content-center align-items-center w-100 p-3" };
const _hoisted_2$1 = { class: "form-floating" };
const _hoisted_3$1 = /* @__PURE__ */ _withScopeId$1(() => /* @__PURE__ */ createBaseVNode("label", { for: "emailInput" }, "Email address", -1));
const _hoisted_4$1 = { class: "form-floating" };
const _hoisted_5$1 = /* @__PURE__ */ _withScopeId$1(() => /* @__PURE__ */ createBaseVNode("label", { for: "loginPassword" }, "Password", -1));
const _hoisted_6 = { class: "checkbox my-3 ms-1" };
const _hoisted_7 = { name: "remember" };
const _hoisted_8 = /* @__PURE__ */ createTextVNode(" Remember me ");
const _hoisted_9 = /* @__PURE__ */ _withScopeId$1(() => /* @__PURE__ */ createBaseVNode("button", {
  class: "w-100 btn btn-lg btn-primary",
  type: "submit"
}, "Sign in", -1));
const _sfc_main$1 = /* @__PURE__ */ defineComponent({
  __name: "Form",
  props: {
    data: null
  },
  emits: ["login"],
  setup(__props) {
    return (_ctx, _cache) => {
      return openBlock(), createElementBlock("div", _hoisted_1$1, [
        createBaseVNode("form", {
          class: "form-signin",
          onSubmit: _cache[3] || (_cache[3] = withModifiers(($event) => _ctx.$emit("login", __props.data), ["prevent"]))
        }, [
          createBaseVNode("div", _hoisted_2$1, [
            withDirectives(createBaseVNode("input", {
              id: "emailInput",
              "onUpdate:modelValue": _cache[0] || (_cache[0] = ($event) => __props.data.email = $event),
              type: "email",
              class: "form-control",
              placeholder: "name@example.com",
              autocomplete: "username"
            }, null, 512), [
              [vModelText, __props.data.email]
            ]),
            _hoisted_3$1
          ]),
          createBaseVNode("div", _hoisted_4$1, [
            withDirectives(createBaseVNode("input", {
              id: "loginPassword",
              "onUpdate:modelValue": _cache[1] || (_cache[1] = ($event) => __props.data.password = $event),
              type: "password",
              class: "form-control",
              placeholder: "Password",
              autocomplete: "current-password"
            }, null, 512), [
              [vModelText, __props.data.password]
            ]),
            _hoisted_5$1
          ]),
          createBaseVNode("div", _hoisted_6, [
            createBaseVNode("label", _hoisted_7, [
              withDirectives(createBaseVNode("input", {
                id: "remember",
                "onUpdate:modelValue": _cache[2] || (_cache[2] = ($event) => __props.data.remember_token = $event),
                type: "checkbox"
              }, null, 512), [
                [vModelCheckbox, __props.data.remember_token]
              ]),
              _hoisted_8
            ])
          ]),
          _hoisted_9
        ], 32)
      ]);
    };
  }
});
const Form_vue_vue_type_style_index_0_scoped_f7291f3f_lang = "";
const LoginForm = /* @__PURE__ */ _export_sfc(_sfc_main$1, [["__scopeId", "data-v-f7291f3f"]]);
const _withScopeId = (n) => (pushScopeId("data-v-b858de9c"), n = n(), popScopeId(), n);
const _hoisted_1 = { class: "d-sm-flex justify-content-center" };
const _hoisted_2 = { class: "d-flex-inline text-sm-end mb-3 mb-sm-0 col-sm-5 col-lg-3 bg-primary rounded-start bg-gradient rounded-sm p-3" };
const _hoisted_3 = /* @__PURE__ */ _withScopeId(() => /* @__PURE__ */ createBaseVNode("h1", { class: "text-light" }, "Login", -1));
const _hoisted_4 = /* @__PURE__ */ createTextVNode("No account yet?");
const _hoisted_5 = { class: "d-sm-inline-flex col-sm-7 col-lg-4 p-sm-4 pt-sm-4 bg-white rounded-end shadow-lg" };
const _sfc_main = /* @__PURE__ */ defineComponent({
  __name: "Login",
  setup(__props) {
    const form = ref({
      email: "",
      password: "",
      remember_token: true
    });
    const submit = (data) => login(data);
    return (_ctx, _cache) => {
      const _component_RouterLink = resolveComponent("RouterLink");
      return openBlock(), createElementBlock("div", _hoisted_1, [
        createBaseVNode("div", _hoisted_2, [
          _hoisted_3,
          createVNode(_component_RouterLink, {
            class: "link-light my-2",
            to: "/register"
          }, {
            default: withCtx(() => [
              _hoisted_4
            ]),
            _: 1
          })
        ]),
        createBaseVNode("div", _hoisted_5, [
          createVNode(LoginForm, {
            data: form.value,
            onLogin: submit
          }, null, 8, ["data"])
        ])
      ]);
    };
  }
});
const Login_vue_vue_type_style_index_0_scoped_b858de9c_lang = "";
const Login = /* @__PURE__ */ _export_sfc(_sfc_main, [["__scopeId", "data-v-b858de9c"]]);
export {
  Login as default
};
