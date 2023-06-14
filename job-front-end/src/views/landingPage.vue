<template>
  <div id="landingPage">
    <NavBar />
    <sectionOneLarge />
    <sectionTwoLarge />
    <sectionThree />
    <sectionFourLarge/>
    <Footer/>
  </div>
</template>
<script>
import navBar from "../components/landingPage/navBar.vue";
import sectionOneLarge from "../components/landingPage/sectionOneLarge.vue";
import sectionTwoLarge from "../components/landingPage/sectionTwoLarge.vue";
import sectionThree from "../components/landingPage/sectionThreeLarge.vue";
import sectionFourLarge from "../components/landingPage/sectionFourLarge.vue";
import Footer from "../components/landingPage/footer.vue"
export default {
  name: "LandingPage",
  components: {
    NavBar: navBar,
    sectionOneLarge: sectionOneLarge,
    sectionTwoLarge: sectionTwoLarge,
    sectionThree: sectionThree,
    sectionFourLarge: sectionFourLarge,
    Footer: Footer
  }
};
</script>
<style>
#landingPage{
    overflow: hidden !important;
}
</style>
