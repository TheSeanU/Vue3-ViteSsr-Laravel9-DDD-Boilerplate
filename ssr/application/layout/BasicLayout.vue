<template>
    <Navigation />
    <router-view v-slot="{Component}">
        <Suspense>
            <div>
                <component :is="Component" />
            </div>
        </Suspense>
    </router-view>
</template>

<script setup lang="ts">
import Navigation from 'ssr/application/layout/Navigation.vue';
</script>
