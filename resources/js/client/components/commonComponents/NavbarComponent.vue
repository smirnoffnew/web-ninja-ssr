<template>
    <v-toolbar color="#1565C0">
        <v-toolbar-side-icon  class="hidden-md-and-up" @click.stop="$emit('open-side-bar')"></v-toolbar-side-icon>
        <v-icon class="hidden-sm-and-down">home</v-icon>

        <v-toolbar-title class="white--text">
            <router-link :to="{ name: 'home' }">{{title}}</router-link>
        </v-toolbar-title>

        <v-spacer></v-spacer>

        <v-toolbar-items class="hidden-sm-and-down">
            <v-btn v-for="link in links"
                   :key="link.path_name"
                   flat
                   exact
                   color="white"
                   class="nav-link"
                   :to="{name: link.path_name}">
                   {{link.path_name}}
            </v-btn>
        </v-toolbar-items>
    </v-toolbar>
</template>

<script>
    export default {
        name: "NavbarComponent",
        props: {
            title: String,
            links: Array
        }
    }
</script>

<style scoped lang="scss">
    nav {
        .nav-link {
            font-weight: bold;
        }
    }
</style>
