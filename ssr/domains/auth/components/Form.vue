<template>
    <form class="form-signin">
        <div class="form-floating">
            <input
                id="floatingInput"
                v-model="data.email"
                type="email"
                class="form-control"
                placeholder="name@example.com"
                autocomplete="username"
            />
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input
                id="floatingPassword"
                v-model="data.password"
                type="password"
                class="form-control"
                placeholder="Password"
                autocomplete="current-password"
            />
            <label for="floatingPassword">Password</label>
        </div>
        <div class="checkbox mb-3">
            <input id="remember" v-model="data.remenber" type="checkbox" />
            <label name="remember">Remember me</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" @click.prevent="$emit('submit', data)">
            Sign in
        </button>
    </form>
</template>

<script setup lang="ts">
import {Login} from '../types';

defineProps<{data: Login}>();
defineEmits<{(event: 'submit', value: Login): void}>();
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

.form-signin input[type='email'] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.form-signin input[type='password'] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
</style>
