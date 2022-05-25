<template>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <IconEcosystem />
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <router-link type="button" class="btn btn-sm btn-outline-primary me-2" to="/login">Login</router-link>
        <router-link type="button" class="btn btn-sm btn-primary" to="/register">Sign-up</router-link>
      </div>
    </header>
</template>

<script setup>
import { RouterLink } from 'vue-router'
import IconEcosystem from '../assets/icons/IconEcosystem.vue'
</script>

<style scoped></style>