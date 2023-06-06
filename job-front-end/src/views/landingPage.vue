<template>
    <NavBar/>
    <sectionOneLarge/>
</template>
<script>
import navBar from '../components/landingPage/navBar.vue'
import sectionOneLarge from '../components/landingPage/sectionOneLarge.vue'
export default {
    name: 'LandingPage',
    components: {
        NavBar: navBar,
        sectionOneLarge: sectionOneLarge
    }
}
</script>
<style scoped>

</style>