<template>
    <div class="d-flex justify-content-center align-items-center w-100 p-3">
        <form class="form-signin" @submit.prevent="$emit('login', data)">
            <div class="form-floating">
                <input
                    id="emailInput"
                    v-model="data.email"
                    type="email"
                    class="form-control"
                    placeholder="name@example.com"
                    autocomplete="username"
                />
                <label for="emailInput">Email address</label>
            </div>
            <div class="form-floating">
                <input
                    id="loginPassword"
                    v-model="data.password"
                    type="password"
                    class="form-control"
                    placeholder="Password"
                    autocomplete="current-password"
                />
                <label for="loginPassword">Password</label>
            </div>
            <div class="checkbox my-3 ms-1">
                <label name="remember">
                    <input id="remember" v-model="data.remember_token" type="checkbox" />
                    Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
    </div>
</template>

<script setup lang="ts">
import {Login} from '../types';

defineProps<{data: Login}>();
defineEmits<{(event: 'login', value: Login): void}>();
</script>

<style scoped>
.form-signin input[type='email'] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
.form-signin input[type='password'] {
    margin-bottom: -1px;
    border-top-right-radius: 0;
    border-top-left-radius: 0;
}
</style>
