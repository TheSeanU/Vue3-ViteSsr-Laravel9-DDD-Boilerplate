<template>
    <header class="p-3 mb-3 border-bottom">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-sm-start">
            <RouterLink to="/" class="d-flex align-items-center mt-2 mb-sm-0 text-dark text-decoration-none">
                <Icon />
            </RouterLink>
            <ul class="nav col-12 col-sm-auto me-sm-auto mb-2 justify-content-center mb-sm-0">
                <li><RouterLink to="/" class="nav-link px-2 link-dark">Home</RouterLink></li>
                <li><RouterLink to="/login" class="nav-link px-2 link-dark">Login</RouterLink></li>
                <li><RouterLink to="/" class="nav-link px-2 link-dark">Home</RouterLink></li>
                <li><RouterLink to="/" class="nav-link px-2 link-dark">Home</RouterLink></li>
            </ul>
            <form class="col-12 col-sm-auto mb-3 mb-sm-0 me-sm-3">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search" />
            </form>
            <div class="dropdown text-end">
                <a
                    id="dropdownUser1"
                    href="#"
                    class="d-block link-dark text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                >
                    <img
                        src="https://via.placeholder.com/150"
                        alt="smo"
                        width="32"
                        height="32"
                        class="rounded-circle"
                    />
                </a>
                <ul v-if="loggedIn" class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                    <li><RouterLink to="/" class="dropdown-item">Home</RouterLink></li>
                    <li><RouterLink to="/" class="dropdown-item">Home</RouterLink></li>
                    <li><RouterLink to="/" class="dropdown-item">Home</RouterLink></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><RouterLink to="/login" class="dropdown-item">Login</RouterLink></li>
                </ul>
            </div>
        </div>
    </header>
</template>

<script setup lang="ts">
import {RouterLink} from 'vue-router';
import {loggedIn} from '../../application/services/auth';
import Icon from '../assets/icons/Icon.vue';
</script>

<style>
.form-control-dark {
    border-color: var(--bs-gray);
}
.form-control-dark:focus {
    border-color: #fff;
    box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.25);
}
.text-small {
    font-size: 85%;
}
.dropdown-toggle {
    outline: 0;
}

.active-link {
    color: blue;
}
</style>
