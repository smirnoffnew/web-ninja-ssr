<template>
    <div>
        <h1>{{ title }}</h1>
        <router-link  :to="{ path: '/'}" >home</router-link>
        <router-link  :to="{ path: 'login'}" >login</router-link>
        <router-link  :to="{ path: 'registration'}" >registration</router-link>
        <router-view></router-view>
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
