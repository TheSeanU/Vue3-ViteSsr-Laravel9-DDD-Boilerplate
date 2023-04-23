import { r as ref, k as postToApi, d as defineComponent, o as openBlock, c as createElementBlock, a as createBaseVNode, w as withDirectives, v as vModelText, e as withModifiers, p as pushScopeId, g as popScopeId, _ as _export_sfc, h as createVNode, i as withCtx, f as createTextVNode, j as resolveComponent } from "./index.03d96985.js";
ref({ bool: false, data: Array });
const register = async (form) => {
  try {
    await postToApi("auth/register", form);
  } catch (e) {
    console.error(e);
  }
};
const _withScopeId$1 = (n) => (pushScopeId("data-v-ccbe34c0"), n = n(), popScopeId(), n);
const _hoisted_1$1 = { class: "d-flex justify-content-center align-items-center w-100 p-3" };
const _hoisted_2$1 = { class: "form-floating" };
const _hoisted_3$1 = /* @__PURE__ */ _withScopeId$1(() => /* @__PURE__ */ createBaseVNode("label", { for: "nameInput" }, "Naam", -1));
const _hoisted_4$1 = { class: "form-floating" };
const _hoisted_5$1 = /* @__PURE__ */ _withScopeId$1(() => /* @__PURE__ */ createBaseVNode("label", { for: "emailInput" }, "Email address", -1));
const _hoisted_6 = { class: "form-floating" };
const _hoisted_7 = /* @__PURE__ */ _withScopeId$1(() => /* @__PURE__ */ createBaseVNode("label", { for: "password" }, "Password", -1));
const _hoisted_8 = { class: "form-floating" };
const _hoisted_9 = /* @__PURE__ */ _withScopeId$1(() => /* @__PURE__ */ createBaseVNode("label", { for: "repeatPassword" }, "Confirm password", -1));
const _hoisted_10 = /* @__PURE__ */ _withScopeId$1(() => /* @__PURE__ */ createBaseVNode("button", {
  class: "w-100 btn btn-lg btn-success",
  type: "submit"
}, "Register", -1));
const _sfc_main$1 = /* @__PURE__ */ defineComponent({
  __name: "Form",
  props: {
    data: null
  },
  emits: ["register"],
  setup(__props) {
    return (_ctx, _cache) => {
      return openBlock(), createElementBlock("div", _hoisted_1$1, [
        createBaseVNode("form", {
          class: "form-register",
          onSubmit: _cache[4] || (_cache[4] = withModifiers(($event) => _ctx.$emit("register", __props.data), ["prevent"]))
        }, [
          createBaseVNode("div", _hoisted_2$1, [
            withDirectives(createBaseVNode("input", {
              id: "nameInput",
              "onUpdate:modelValue": _cache[0] || (_cache[0] = ($event) => __props.data.name = $event),
              type: "text",
              class: "form-control",
              placeholder: "name",
              autocomplete: "off"
            }, null, 512), [
              [vModelText, __props.data.name]
            ]),
            _hoisted_3$1
          ]),
          createBaseVNode("div", _hoisted_4$1, [
            withDirectives(createBaseVNode("input", {
              id: "emailInput",
              "onUpdate:modelValue": _cache[1] || (_cache[1] = ($event) => __props.data.email = $event),
              type: "email",
              class: "form-control",
              placeholder: "name@example.com",
              autocomplete: "off"
            }, null, 512), [
              [vModelText, __props.data.email]
            ]),
            _hoisted_5$1
          ]),
          createBaseVNode("div", _hoisted_6, [
            withDirectives(createBaseVNode("input", {
              id: "password",
              "onUpdate:modelValue": _cache[2] || (_cache[2] = ($event) => __props.data.password = $event),
              type: "password",
              class: "form-control",
              placeholder: "Password",
              autocomplete: "off"
            }, null, 512), [
              [vModelText, __props.data.password]
            ]),
            _hoisted_7
          ]),
          createBaseVNode("div", _hoisted_8, [
            withDirectives(createBaseVNode("input", {
              id: "confirm_password",
              "onUpdate:modelValue": _cache[3] || (_cache[3] = ($event) => __props.data.confirm_password = $event),
              type: "password",
              class: "form-control mb-3",
              placeholder: "Confirm password",
              autocomplete: "off"
            }, null, 512), [
              [vModelText, __props.data.confirm_password]
            ]),
            _hoisted_9
          ]),
          _hoisted_10
        ], 32)
      ]);
    };
  }
});
const Form_vue_vue_type_style_index_0_scoped_ccbe34c0_lang = "";
const RegisterForm = /* @__PURE__ */ _export_sfc(_sfc_main$1, [["__scopeId", "data-v-ccbe34c0"]]);
const _withScopeId = (n) => (pushScopeId("data-v-0c393ca1"), n = n(), popScopeId(), n);
const _hoisted_1 = { class: "d-sm-flex justify-content-center" };
const _hoisted_2 = { class: "d-flex-inline text-sm-end col-sm-5 col-lg-3 rounded-start bg-gradient rounded-sm p-3" };
const _hoisted_3 = /* @__PURE__ */ _withScopeId(() => /* @__PURE__ */ createBaseVNode("h1", { class: "text-light" }, "Register", -1));
const _hoisted_4 = /* @__PURE__ */ createTextVNode("Already have an account?");
const _hoisted_5 = { class: "d-sm-inline-flex h-100 col-sm-7 col-lg-4 p-sm-4 pt-sm-4 bg-white rounded-end shadow-lg" };
const _sfc_main = /* @__PURE__ */ defineComponent({
  __name: "Register",
  setup(__props) {
    const form = ref({
      name: "",
      email: "",
      password: "",
      confirm_password: ""
    });
    const submit = (data) => register(data);
    return (_ctx, _cache) => {
      const _component_RouterLink = resolveComponent("RouterLink");
      return openBlock(), createElementBlock("div", _hoisted_1, [
        createBaseVNode("div", _hoisted_2, [
          _hoisted_3,
          createVNode(_component_RouterLink, {
            class: "link-light my-2",
            to: "/login"
          }, {
            default: withCtx(() => [
              _hoisted_4
            ]),
            _: 1
          })
        ]),
        createBaseVNode("div", _hoisted_5, [
          createVNode(RegisterForm, {
            data: form.value,
            onRegister: submit
          }, null, 8, ["data"])
        ])
      ]);
    };
  }
});
const Register_vue_vue_type_style_index_0_scoped_0c393ca1_lang = "";
const Register = /* @__PURE__ */ _export_sfc(_sfc_main, [["__scopeId", "data-v-0c393ca1"]]);
export {
  Register as default
};
