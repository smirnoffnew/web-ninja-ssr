<template>
    <div>
        <v-container>
            <v-layout row class="text-xs-center">
                <v-flex xs3 style="background-image: url('http://cdn.wallpapersafari.com/7/86/gqiGH7.jpg')">
                    <v-card height="500px"></v-card>
                </v-flex>
                <v-flex xs4 class="grey lighten-4">
                    <v-container style="position: relative;top: 13%;" class="text-xs-center">
                        <v-card flat>
                            <v-card-title primary-title>
                                <h4>Login</h4>
                            </v-card-title>
                            <v-form>
                                <v-text-field prepend-icon="person" name="Username" label="Username"></v-text-field>
                                <v-text-field prepend-icon="lock" name="Password" label="Password" type="password"></v-text-field>
                                <v-card-actions>
                                    <v-btn primary large block>Login</v-btn>
                                </v-card-actions>
                            </v-form>
                        </v-card>
                    </v-container>
                </v-flex>
            </v-layout>
        </v-container>
    </div>
    <!--<div class="container">-->
        <!--<div>-->
            <!--<h1>{{ name }}</h1>-->
        <!--</div>-->
        <!--<button @click="send()">send</button>-->
    <!--</div>-->
</template>

<script>
    import http from './http';
    import axios from 'axios';

    export default {
        name: "LoginPage",
        data() {
            return {
                name: 'Hello from LoginPage'
            }
        },
        methods: {
            send: () => {
                axios({
                    method: 'post',
                    url: 'http://localhost:8000/api/sign-in',
                    data: {
                        name: 'asdf',
                        email: 'asdf@asdf.asdf',
                        password: 'asdfasdf'
                    }
                })

                .then(res =>  {
                    console.log('res',res.data);
                    return axios({
                        method: 'get',
                        url: 'http://localhost:8000/api/current',
                        headers: {'Authorization': `Bearer ${res.data.access_token}`},
                    })
                })

                .then(res=>console.log('res', res.data))
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
