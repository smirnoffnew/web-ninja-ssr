<template>
    <div class="container">
        <div>
            <h1>{{ name }}</h1>
        </div>
        <button @click="send()">send</button>
    </div>
</template>

<script>
    import http from '../http';
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
