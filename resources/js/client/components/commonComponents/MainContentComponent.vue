<template>
    <v-content class="main-content-container">
        <v-container fluid fill-height>
            <v-layout justify-center align-center>
                <router-view></router-view>
            </v-layout>
        </v-container>
    </v-content>
</template>

<script>
    export default {
        name: "MainContentComponent",
        props: {
            data: Object,
        }
    }
</script>

<style lang="scss" scoped>
    .main-content-container {
        height: 100%;
        width: 100%;
    }
</style>
