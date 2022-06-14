<template>
    <div class="col">
        <h4>login</h4>
        <main class="form-signin">
            <form @click.prevent>
                <div class="form-floating">
                    <!-- v-model="form.email" -->
                    <input
                        type="email"
                        class="form-control"
                        id="floatingInput"
                        placeholder="name@example.com"
                    />
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <!-- v-model="form.password" -->
                    <input
                        type="password"
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
                    @click.prevent="login"
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
import { postToApi } from "../../../Infrastructure/Service/api";
import { routes } from "../../../infrastructure/service/routes/routes";

const form = reactive({
    user_id: "1",
    types: "hallo",
});

const login = () => postToApi("admin", form);
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
