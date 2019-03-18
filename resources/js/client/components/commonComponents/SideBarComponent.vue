<template>
    <div>
        <h1 style="display: none">need for watch isOpen variable{{isOpen}}</h1>
        <v-navigation-drawer
            v-model="localIsOpen"
            @input="$emit('open-side-bar', localIsOpen)"
            fixed
            :mobile-break-point="1980"
        >
            <v-list>
                <v-subheader class="mt-3 grey--text text--darken-1">Links</v-subheader>
                <v-list-tile v-for="link in links" :key="link.path_name">
                    <v-list-tile-action>
                        <v-icon>{{ link.icon }}</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>
                            {{ link.path_name }}
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

<style scoped>

</style>
