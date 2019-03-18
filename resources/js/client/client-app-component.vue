<template>
    <div id="app" class="app-content-container">
        <SideBarComponent
            :isOpen="isOpen"
            :links="links"
            @open-side-bar="openClose"
        ></SideBarComponent>

        <NavbarComponent
            :links="links"
            :title="title"
            @open-side-bar="isOpen = !isOpen"
        ></NavbarComponent>

        <MainContentComponent
            :data="{}"
        ></MainContentComponent>
    </div>
</template>

<script>
    import SideBarComponent from "./components/commonComponents/SideBarComponent";
    import NavbarComponent from "./components/commonComponents/NavbarComponent";
    import MainContentComponent from "./components/commonComponents/MainContentComponent";

    export default {
        data: () => ({
            isOpen: false,
            title:'Client App',
            links: [
                { icon: 'add',       path_name: 'registration' },
                { icon: 'vpn_key',   path_name: 'login' },
                { icon: 'replay',    path_name: 'account-recovery' },
            ],
        }),

        methods: {
            openClose: function (value) {
                this.isOpen = value;
            }
        },

        components: {
            SideBarComponent,
            NavbarComponent,
            MainContentComponent
        }

    }
</script>

<style lang="scss" scoped>
    /*extract client vue styles*/
    .app-content-container {
        height: 100vh;
        width: 100vw;
    }
</style>

