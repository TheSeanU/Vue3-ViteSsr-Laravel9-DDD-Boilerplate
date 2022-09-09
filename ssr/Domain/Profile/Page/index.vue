<template>
    <div>
        <h1>Profile</h1>
        {{ loggedIn }}
    </div>
</template>

<script setup lang="ts">
import { loggedIn } from "../../../Infrastructure/Service/auth";

loggedIn;
</script>
