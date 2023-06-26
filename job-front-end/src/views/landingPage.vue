<template>
  <div id="landingPage">
    <NavBar />
    <sectionOneLarge />
    <sectionTwoLarge />
    <sectionThree />
    <sectionFourLarge/>
    <footerLandingPage/>
  </div>
</template>
<script>
import navBar from "../components/landingPage/navBar.vue";
import sectionOneLarge from "../components/landingPage/sectionOneLarge.vue";
import sectionTwoLarge from "../components/landingPage/sectionTwoLarge.vue";
import sectionThree from "../components/landingPage/sectionThreeLarge.vue";
import sectionFourLarge from "../components/landingPage/sectionFourLarge.vue";
import footerLandingPage from "../components/landingPage/footerLandingPage.vue";
export default {
  name: "LandingPage",
  components: {
    NavBar: navBar,
    sectionOneLarge: sectionOneLarge,
    sectionTwoLarge: sectionTwoLarge,
    sectionThree: sectionThree,
    sectionFourLarge: sectionFourLarge,
    footerLandingPage: footerLandingPage
  }
};
</script>
<style>
#landingPage{
    overflow: hidden !important;
}
</style>
