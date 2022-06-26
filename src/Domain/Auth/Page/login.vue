<template>
    <div class="col">
        <h4>login</h4>
        <main class="form-signin">
            <form @click.prevent>
                <div class="form-floating">
                    <input
                        type="email"
                        v-model="form.email"
                        class="form-control"
                        id="floatingInput"
                        placeholder="name@example.com"
                    />
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input
                        type="password"
                        v-model="form.password"
                        class="form-control"
                        id="floatingPassword"
                        placeholder="Password"
                    />
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me" /> Remember
                        me
                    </label>
                </div>
                <button
                    @click.prevent="submit"
                    class="w-100 btn btn-lg btn-primary"
                    type="submit"
                >
                    Sign in
                </button>
            </form>
        </main>
    </div>
</template>

<script setup lang="ts">
import { reactive } from "vue";
import { login, me } from "../../../Infrastructure/Service/auth";
import { createRoutes } from "../../../infrastructure/service/Router/routes";

const form = reactive({
    email: "",
    password: "",
});

const submit = () => {
    login(form), me();
};

createRoutes("/login", () => import("../Page/login.vue"));
</script>

<style scoped>
.form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
}

.form-signin .checkbox {
    font-weight: 400;
}

.form-signin .form-floating:focus-within {
    z-index: 2;
}

.form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
</style>
