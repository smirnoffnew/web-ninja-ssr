<template>
    <div id="app">
        <NavbarComponent :title="title"></NavbarComponent>
        <v-content class="main-content-container">
            <v-container fluid fill-height>
                <v-layout align-center justify-center>
                    <router-view></router-view>
                </v-layout>
            </v-container>
        </v-content>
    </div>
</template>

<script>
    import NavbarComponent from "./components/commonComponents/NavbarComponent";

    export default {
        data() {
            return {
                title: 'WEB NINJA'
            }
        },
        components: {
            NavbarComponent,
        }
    }
</script>

<style lang="scss" scoped>
    /*extract web vue styles*/
    .main-content-container {
        height: calc(100vh - 64px);
    }
</style>

