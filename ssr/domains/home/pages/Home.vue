<template>
    <div class="row pb-3">
        <div class="d-grid gap-3" style="grid-template-columns: 1fr 2fr">
            <div class="bg-light border rounded-3">
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
            </div>
            <div class="bg-light border rounded-3">
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
            </div>
        </div>
    </div>
    <div class="row m-1 p-4 mb-3 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-4 fw-bold lh-1">Border hero with cropped image and shadows</h1>
            <p class="lead">
                Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular
                front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive
                prebuilt components, and powerful JavaScript plugins.
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <ModalVue id="homepage">
                    <template #button>Modal</template>
                </ModalVue>
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold" @click="hallo">
                    Primary
                </button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
            </div>
        </div>
    </div>
</template>

<script setup>
import ModalVue from 'ssr/application/components/Modal.vue';
</script>

<style scoped></style>
