<template>
    <div class="container">
        <div>
            <h1>{{ name }}</h1>
        </div>
        <button @click="send()">send</button>
    </div>
</template>

<script>
    export default {
        name: "LoginPage",
        data() {
            return {
                name: 'Hello from LoginPage'
            }
        },
        methods: {
            send: () => {
                http({
                    method: 'post',
                    url: '/sign-in',
                    data: {
                        name: 'asdf',
                        email: 'asdf@asdf.asdf',
                        password: 'asdfasdf'
                    }
                })
                    .then(res =>  http({
                        method: 'get',
                        url: '/current',
                        headers: {'Authorization': `Bearer ${res.data.access_token}`},
                    }))
                    .then(res=>console.log('res', res.data))
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
