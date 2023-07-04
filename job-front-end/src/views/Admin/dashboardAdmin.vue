<template>
  <div id="dashboardAdmin">
    <sidBar :isOpen="isSideBarOpen"/>
    <section id="interface">
      <navBar @toggleSideBar="toggleSideBar"/>
      <router-view></router-view>
    </section>

    <btnAddjobs />
  </div>
</template>
<script>
import sidBar from "../../components/dashboardAdmin/sideBar.vue";
import navBar from "../../components/dashboardAdmin/navBar.vue";
import btnAddjobs from "../../components/dashboardAdmin/BtnAddJobs.vue";
export default {
  name: "dashboardAdmin",
  components: {
    sidBar: sidBar,
    navBar: navBar,
    btnAddjobs: btnAddjobs,
  },
  data(){
    return {
      isSideBarOpen: false
    }
  },
  methods: {
    toggleSideBar(){
      this.isSideBarOpen=!this.isSideBarOpen
    }
  }
};
</script>
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  font-family: "Poppins", sans-serif;
}
#dashboardAdmin {
  width: 100%;
  background: #e5e7eb;
  position: relative;
  display: flex;
}

#interface {
  width: calc(100% - 242px);
  margin-left: 242px;
  position: relative;
}
@media (max-width: 769px) {
  #interface {
    width: 100%;
    margin-left: 0px;
    display: inline-block;
    transition: 0.3s ease;
  }
  #interface nav {
    width: 100%;
  }
}

</style>
