<template>
        <v-card>
            <v-container>

                <v-card-title primary-title>
                    <h4>Login</h4>
                </v-card-title>

                <v-form>
                    <v-text-field
                        v-model="email"
                        prepend-icon="person"
                        name="Username"
                        label="Username"
                    ></v-text-field>

                    <v-text-field
                        v-model="password"
                        prepend-icon="lock"
                        name="Password"
                        label="Password"
                        type="password">
                    </v-text-field>

                    <v-card-actions>
                        <v-btn primary large block @click="submit">Login</v-btn>
                    </v-card-actions>
                </v-form>

            </v-container>
        </v-card>
</template>

<script>
    import axios from '../../../axios.config';

    export default {
        name: "LoginClientComponent",

        data() {
            return {
                name: 'Hello from LoginClientComponent',
                email: '',
                password: ''
            }
        },

        methods: {
            submit: () => {
                console.log('submit');
                axios({
                    method: 'post',
                    url: '/sign-in',
                    data: {
                        name: 'asdf',
                        email: 'asdf@asdf.asdf',
                        password: 'asdfasdf'
                    }
                })
                .then(res =>  {
                    console.log('res',res.data);
                })
            }
        }
    }
</script>

<style scoped>

</style>
