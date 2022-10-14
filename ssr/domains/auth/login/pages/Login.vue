<template>
    <div class="d-sm-flex justify-content-center">
        <div
            class="d-flex-inline text-sm-end mb-3 mb-sm-0 col-sm-5 col-lg-3 bg-primary rounded-start bg-gradient rounded-sm p-3"
        >
            <h1 class="text-light">Login</h1>
            <RouterLink class="link-light my-2" to="/register">No account yet?</RouterLink>
        </div>

        <div class="d-sm-inline-flex col-sm-7 col-lg-4 p-sm-4 pt-sm-4 bg-white rounded-end shadow-lg">
            <LoginForm :data="form" @login="submit" />
        </div>
    </div>
</template>

<script setup lang="ts">
import {Login} from '../types';
import {login} from 'ssr/application/services/auth';
import {ref} from 'vue';
import LoginForm from '../components/Form.vue';

const form = ref({
    email: '',
    password: '',
    remember_token: true,
});

const submit = (data: Login) => login(data);
</script>

<style scoped>
.bg-gradient {
    box-shadow: inset -5px -5px 15px 0px #00000050;
}

@media (max-width: 575.98px) {
    .bg-gradient {
        border-radius: 0.375rem;
    }
}
</style>
