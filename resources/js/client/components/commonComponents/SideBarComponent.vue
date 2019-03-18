<template>
    <div>
        <h1 style="display: none">need for watch isOpen variable{{isOpen}}</h1>
        <v-navigation-drawer
            v-model="localIsOpen"
            @input="$emit('open-side-bar', localIsOpen)"
            fixed
            dense
            :mobile-break-point="1980"
        >

            <v-list dense>
                <v-subheader class="mt-3 grey--text text--darken-1">Links</v-subheader>
                <v-list-tile  class="tile" v-for="item in links" :key="item.path_name" @click="$router.push({name:item.path_name})">

                    <v-list-tile-action>
                        <v-icon>{{ item.icon }}</v-icon>
                    </v-list-tile-action>

                    <v-list-tile-content>
                        <v-list-tile-title>
                            {{ item.path_name }}
                        </v-list-tile-title>
                    </v-list-tile-content>

                </v-list-tile>
            </v-list>



        </v-navigation-drawer>
    </div>
</template>

<script>
    export default {
        name: "SideBarComponent",

        props: {
            isOpen: Boolean,
            links: Array
        },

        data(){
            return {
                localIsOpen: this.isOpen,
            }
        },

        updated(){
            this.localIsOpen = this.isOpen;
        }
    }
</script>

<style lang="scss" scoped>
    .tile {
        margin: 5px;
        border-radius: 4px;
    }

    .tile:hover {
        background: #0066C0;
    }

    .tile:active {
        background: yellow;
    }
</style>
