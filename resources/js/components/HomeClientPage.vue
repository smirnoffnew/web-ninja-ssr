<template>
    <div>
        <h1>{{ name }}</h1>
        <p>
            <router-link :to="{ name: 'home' }">home</router-link> |
            <router-link :to="{ name: 'login' }">login</router-link>
            <router-link :to="{ name: 'registration' }">registration</router-link>
        </p>

    </div>
</template>

<script>
    export default {
        name: "HomeClientPage"
    }
</script>

<style scoped>

</style>
