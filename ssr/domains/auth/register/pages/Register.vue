<template>
    <div class="d-sm-flex justify-content-center">
        <div class="d-flex-inline text-sm-end col-sm-5 col-lg-3 rounded-start bg-gradient rounded-sm p-3">
            <h1 class="text-light">Register</h1>
            <RouterLink class="link-light my-2" to="/login">Already have an account?</RouterLink>
        </div>

        <div class="d-sm-inline-flex h-100 col-sm-7 col-lg-4 p-sm-4 pt-sm-4 bg-white rounded-end shadow-lg">
            <RegisterForm :data="form" @register="submit" />
        </div>
    </div>
</template>

<script setup lang="ts">
import {Register} from '../types';
import {ref} from 'vue';
import {register} from '../../auth';
import RegisterForm from '../components/Form.vue';

const form = ref({
    name: '',
    email: '',
    password: '',
    confirm_password: '',
});

const submit = (data: Register) => register(data);
</script>

<style scoped lang="scss">
.bg-gradient {
    box-shadow: inset -5px -5px 15px 0px #00000050;
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-success-rgb), var(--bs-bg-opacity)) !important;
}

@media (max-width: 575.98px) {
    .bg-gradient {
        border-top-left-radius: 0.375rem;
        border-top-right-radius: 0.375rem;
    }
}
</style>
