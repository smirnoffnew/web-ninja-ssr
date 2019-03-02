<template>
    <v-toolbar  color="#1565C0">
        <v-icon>home</v-icon>

        <v-toolbar-title class="white--text">
            <router-link :to="{ name: 'home' }">{{title}}</router-link>
        </v-toolbar-title>

        <v-spacer></v-spacer>

        <v-toolbar-items>
            <v-btn flat class="font-weight-light">
                <router-link :to="{ name: 'login' }">Login</router-link>
            </v-btn>

            <v-btn flat class="font-weight-light">
                <router-link :to="{ name: 'token' }">Token</router-link>
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
