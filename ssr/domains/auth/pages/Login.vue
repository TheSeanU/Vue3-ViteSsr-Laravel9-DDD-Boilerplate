<template>
    <LoginForm :data="form" @submit="submit" />
</template>

<script setup lang="ts">
import {Login} from '../types';
import {login} from 'ssr/application/services/auth';
import {ref} from 'vue';
import LoginForm from '../components/Form.vue';

const form = ref({
    email: '',
    password: '',
    remenber: true,
});

const submit = (data: Login) => login(data);
</script>
