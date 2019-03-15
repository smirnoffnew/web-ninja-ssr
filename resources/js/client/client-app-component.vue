<template>
    <div id="app">
        <SideBarComponent :isOpen="isOpen" @open-side-bar="openClose"></SideBarComponent>
        <NavbarComponent  @open-side-bar="isOpen = !isOpen"></NavbarComponent>
        <MainContentComponent :data="{}"></MainContentComponent>
    </div>
</template>

<script>
    import SideBarComponent from "./components/commonComponents/SideBarComponent";
    import NavbarComponent from "./components/commonComponents/NavbarComponent";
    import MainContentComponent from "./components/commonComponents/MainContentComponent";

    export default {
        data: () => ({
            isOpen: false,
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
</style>

