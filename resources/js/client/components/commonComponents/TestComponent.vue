<template>
    <div>
        <h1>TestComponent</h1>
        <h1>{{isOpen}}</h1>
    </div>
</template>

<script>
    export default {
        name: "TestComponent",
        props: {
            isOpen: Boolean,
        },
        data(){
            return {
                isOpen1:this.isOpen
            }
        }
    }
</script>

<style scoped>

</style>
