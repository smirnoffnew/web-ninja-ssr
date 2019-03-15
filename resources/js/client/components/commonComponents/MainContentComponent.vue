<template>
    <v-content>
        <v-container fill-height>
            <v-layout justify-center align-center>
                <v-flex class="main-content-container">
                    <router-view></router-view>
                </v-flex>
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

<style scoped>

</style>
