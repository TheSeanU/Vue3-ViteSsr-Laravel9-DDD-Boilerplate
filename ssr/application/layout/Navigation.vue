<template>
    <header class="p-3 mb-3 border-bottom bg-white">
        <div class="container d-flex align-items-between justify-content-between">
            <RouterLink to="/" class="d-flex mt-2 mb-sm-0 text-dark text-decoration-none">
                <Icon />
            </RouterLink>

            <ul class="nav d-none d-sm-block col-sm-auto me-sm-auto mb-2 justify-content-center mb-sm-0">
                <li><RouterLink to="/" class="nav-link px-2 text-dark">Home</RouterLink></li>
            </ul>

            <form class="col-sm-auto mb-3 mb-sm-0 me-sm-3 d-none d-sm-block">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search" />
            </form>

            <div class="d-flex align-self-end d-sm-none">
                <div class="me-3">
                    <svg
                        data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight"
                        width="20"
                        height="20"
                        class="DocSearch-Search-Icon"
                        viewBox="0 0 20 20"
                        @click.prevent="toFocus"
                    >
                        <path
                            d="M14.386 14.386l4.0877 4.0877-4.0877-4.0877c-2.9418 2.9419-7.7115 2.9419-10.6533 0-2.9419-2.9418-2.9419-7.7115 0-10.6533 2.9418-2.9419 7.7115-2.9419 10.6533 0 2.9419 2.9418 2.9419 7.7115 0 10.6533z"
                            stroke="currentColor"
                            fill="none"
                            fill-rule="evenodd"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </div>

                <div>
                    <div
                        class="dropdown text-end"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight"
                        aria-controls="offcanvasRight"
                    >
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
                    </div>
                </div>
            </div>

            <div
                id="offcanvasRight"
                class="offcanvas offcanvas-end"
                tabindex="-1"
                aria-labelledby="offcanvasRightLabel"
            >
                <div class="offcanvas-header">
                    <div class="d-flex col-12 align-items-center justify-content-around">
                        <input
                            id="focusSearch"
                            ref="focusSearch"
                            type="search"
                            class="form-control"
                            placeholder="Search..."
                            aria-label="Search"
                        />
                        <button
                            ref="closeCanvas"
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="offcanvas"
                            aria-label="Close"
                        />
                    </div>
                </div>
                <div class="offcanvas-body">
                    <ul class="nav d-flex flex-column">
                        <li>
                            <RouterLink to="/" class="nav-link px-2 text-dark">Home</RouterLink>
                        </li>
                        <li>
                            <RouterLink to="/register" class="nav-link px-2 text-dark">Register</RouterLink>
                        </li>
                        <li>
                            <RouterLink to="/login" class="nav-link px-2 text-dark">Login</RouterLink>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dropdown d-none d-sm-block text-end">
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
                    <li><RouterLink to="/register" class="dropdown-item">Register</RouterLink></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><RouterLink to="/login" class="dropdown-item">Login</RouterLink></li>
                </ul>
            </div>
        </div>
    </header>
</template>

<script setup lang="ts">
import {RouterLink, useRouter} from 'vue-router';
import {loggedIn} from '../../application/services/auth';
import {ref} from 'vue';
import Icon from '../assets/icons/Icon.vue';

const focusSearch = ref<HTMLElement>();
const closeCanvas = ref();

const route = useRouter();

route.afterEach(() => closeCanvas.value.click());

const toFocus = () => {
    if (!focusSearch.value) return;
    focusSearch.value.focus();
};
</script>

<style>
.router-link-active {
    color: blue !important;
}
</style>
