// import Vue from 'vue'
import { createWebHistory,createRouter } from 'vue-router'
import LandingPage from './views/landingPage.vue'
import dashboardAdmin from './views/dashboardAdmin.vue'
const routes=[
//     {
//     path:'',
//     name: 'LandingPage',
//     component: LandingPage,
// },
{
    path:'',
    name: 'dashboardAdmin',
    component: dashboardAdmin,
},
]
const router=createRouter({
    history: createWebHistory(),
    routes
})
export default router;
