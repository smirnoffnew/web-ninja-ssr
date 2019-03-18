<template>
    <v-flex xs12 sm8 md6 lg4 xl4>
        <v-card>
            <v-layout align-center justify-center column>

                <v-toolbar dark color="#1565C0">
                    <v-toolbar-title>Account recovery</v-toolbar-title>
                </v-toolbar>

                <v-card-text :class="$vuetify.breakpoint.smAndUp ? 'large-padding' : 'small-padding '">
                    <form>
                        <v-text-field prepend-icon="email" name="email" label="Email" type="text"></v-text-field>
                    </form>
                </v-card-text>

                <v-card-actions :class="$vuetify.breakpoint.smAndUp ? 'lg-btn-mb' : 'sm-btn-mb'">
                    <v-spacer></v-spacer>
                    <v-btn large color="#1565C0">Login</v-btn>
                </v-card-actions>

            </v-layout>
        </v-card>
    </v-flex>
</template>

<script>
    export default {
        name: "ResetPasswordComponent"
    }
</script>

<style lang="scss" scoped>
    .v-toolbar__content {
        display: flex;
        align-items: center;
        justify-content: center;

        & .v-toolbar__title {
            margin: auto;
        }
    }

    .large-padding {
        padding-left: 30px;
        padding-right: 40px;
    }

    .small-padding {
        padding-left: 10px;
        padding-right: 15px;
    }

    .lg-btn-mb {
        margin-bottom: 20px;
    }

    .sm-btn-mb {
        margin-bottom: 5px;
    }
</style>
