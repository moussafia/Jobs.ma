// import Vue from 'vue'
import { createWebHistory,createRouter } from 'vue-router'
import LandingPage from './views/landingPage.vue'
const routes=[{
    path:'',
    name: 'LandingPage',
    component: LandingPage,
}]
const router=createRouter({
    history: createWebHistory(),
    routes
})
export default router;
