<template>
    <div>
        <v-app dark id="inspire">

            <v-navigation-drawer
                class="custom-menu"
                fixed
                clipped
                v-model="drawer"
                app
            >
                <v-list dense>
                    <v-list-tile v-for="item in items" :key="item.text" @click="">
                        <v-list-tile-action>
                            <v-icon>{{ item.icon }}</v-icon>
                        </v-list-tile-action>
                        <v-list-tile-content>
                            <v-list-tile-title>
                                {{ item.text }}
                            </v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                    <v-subheader class="mt-3 grey--text text--darken-1">SUBSCRIPTIONS</v-subheader>
                    <v-list>
                        <v-list-tile v-for="item in items2" :key="item.text" avatar @click="">
                            <v-list-tile-avatar>
                                <img :src="`https://randomuser.me/api/portraits/men/${item.picture}.jpg`" alt="">
                            </v-list-tile-avatar>
                            <v-list-tile-title v-text="item.text"></v-list-tile-title>
                        </v-list-tile>
                    </v-list>
                    <v-list-tile class="mt-3" @click="">
                        <v-list-tile-action>
                            <v-icon color="grey darken-1">add_circle_outline</v-icon>
                        </v-list-tile-action>
                        <v-list-tile-title class="grey--text text--darken-1">Browse Channels</v-list-tile-title>
                    </v-list-tile>
                    <v-list-tile @click="">
                        <v-list-tile-action>
                            <v-icon color="grey darken-1">settings</v-icon>
                        </v-list-tile-action>
                        <v-list-tile-title class="grey--text text--darken-1">Manage Subscriptions</v-list-tile-title>
                    </v-list-tile>
                </v-list>
            </v-navigation-drawer>

            <v-toolbar
                color="red"
                dense
                fixed
                clipped-left
                app
            >
                <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
                <v-icon class="mx-3">fa-youtube</v-icon>
                <v-toolbar-title class="mr-5 align-center">
                    <span class="title">{{title}}</span>
                </v-toolbar-title>
                <v-spacer></v-spacer>
                <v-layout row align-center style="max-width: 650px">
                    some text
                </v-layout>
            </v-toolbar>

            <v-content>
                <v-container fill-height>
                    <v-layout justify-center align-center>
                        <v-flex shrink>
                            <router-link  :to="{ path: '/'}" >home</router-link>
                            <router-link  :to="{ path: 'login'}" >login</router-link>

                            <span>router view</span>
                            <router-view></router-view>
                        </v-flex>
                    </v-layout>
                </v-container>
            </v-content>

            <v-footer color="Blue Gray" app inset>
                <v-layout justify-center align-center>
                    <span class="white--text">&copy; 2017</span>
                </v-layout>
            </v-footer>
        </v-app>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                title: 'Admin Site',
                drawer: true,
                items: [
                    { icon: 'trending_up', text: 'Most Popular' },
                    { icon: 'subscriptions', text: 'Subscriptions' },
                    { icon: 'history', text: 'History' },
                    { icon: 'featured_play_list', text: 'Playlists' },
                    { icon: 'watch_later', text: 'Watch Later' }
                ],
                items2: [
                    { picture: 28, text: 'Joseph' },
                    { picture: 38, text: 'Apple' },
                    { picture: 48, text: 'Xbox Ahoy' },
                    { picture: 58, text: 'Nokia' },
                    { picture: 78, text: 'MKBHD' }
                ]
            }
        },
        props: {
            source: String
        }
    }
</script>
