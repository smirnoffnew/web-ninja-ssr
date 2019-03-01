<template>
    <div id="app">
        <h1>{{ title }}</h1>
        <router-view></router-view>
        <router-link :to="{ name: 'home' }">Home</router-link>
        <router-link :to="{ name: 'login' }">Login</router-link>
        <router-link :to="{ name: 'registration' }">Registration</router-link>
        <router-link :to="{ name: 'account-recovery' }">Account recovery</router-link>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                title: 'Welcome To My Site'
            }
        }
    }
</script>
