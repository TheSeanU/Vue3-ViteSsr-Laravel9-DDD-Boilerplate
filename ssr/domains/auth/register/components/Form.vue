<template>
    <div class="d-flex justify-content-center align-items-center w-100 p-3">
        <form class="form-register" @submit.prevent="$emit('register', data)">
            <div class="form-floating">
                <input
                    id="nameInput"
                    v-model="data.name"
                    type="text"
                    class="form-control"
                    placeholder="name"
                    autocomplete="off"
                />
                <label for="nameInput">Naam</label>
            </div>

            <div class="form-floating">
                <input
                    id="emailInput"
                    v-model="data.email"
                    type="email"
                    class="form-control"
                    placeholder="name@example.com"
                    autocomplete="off"
                />
                <label for="emailInput">Email address</label>
            </div>

            <div class="form-floating">
                <input
                    id="password"
                    v-model="data.password"
                    type="password"
                    class="form-control"
                    placeholder="Password"
                    autocomplete="off"
                />
                <label for="password">Password</label>
            </div>

            <div class="form-floating">
                <input
                    id="confirm_password"
                    v-model="data.confirm_password"
                    type="password"
                    class="form-control mb-3"
                    placeholder="Confirm password"
                    autocomplete="off"
                />
                <label for="repeatPassword">Confirm password</label>
            </div>
            <button class="w-100 btn btn-lg btn-success" type="submit">Register</button>
        </form>
    </div>
</template>

<script setup lang="ts">
import {Register} from '../types';

defineProps<{data: Register}>();
defineEmits<{(event: 'register', value: Register): void}>();
</script>

<style scoped>
.form-register input[type='text'] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
.form-register input[type='email'] {
    margin-bottom: -1px;
    border-radius: 0;
}
.form-register input[type='password'] {
    margin-bottom: -1px;
    border-radius: 0;
}

#confirm_password {
    margin-bottom: -1px;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
}
</style>
