<template>
    <v-toolbar color="#1565C0">
        <v-toolbar-side-icon @click.stop="$emit('open-side-bar')"></v-toolbar-side-icon>
        <v-icon>home</v-icon>

        <v-toolbar-title class="white--text">
            <router-link :to="{ name: 'home' }">{{title}}</router-link>
        </v-toolbar-title>

        <v-spacer></v-spacer>

        <v-toolbar-items>
            <v-btn
                flat
                exact
                color="white"
                class="nav-link"
                :to="{name: 'login'}"
            >login
            </v-btn>

            <v-btn
                flat
                exact
                color="white"
                class="nav-link"
                :to="{name: 'registration'}"
            >registration
            </v-btn>

            <v-btn
                flat
                exact
                color="white"
                class="nav-link"
                :to="{name: 'account-recovery'}"
            >account-recovery
            </v-btn>

        </v-toolbar-items>
    </v-toolbar>
</template>

<script>
    export default {
        name: "NavbarComponent",
        props: {
            title: String,
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
