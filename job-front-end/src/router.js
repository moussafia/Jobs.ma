// import Vue from 'vue'
import { createWebHistory,createRouter } from 'vue-router'
import LandingPage from './views/landingPage.vue'
import dashboardAdmin from './views/Admin/dashboardAdmin.vue'
import home from './components/dashboardAdmin/pageAdmin/home.vue'
import profileAdmin from './components/dashboardAdmin/pageAdmin/profile.vue'
import SignalisationPosts from './components/dashboardAdmin/pageAdmin/signalisation.vue'
import jobsPage from './views/offreHome.vue'
const routes=[
    {
    path:'',
    name: 'LandingPage',
    component: LandingPage,
},
{
    path:'/dashboard',
    name: 'dashboardAdmin',
    component: dashboardAdmin,
    children:[{
        path:'',
        name: 'home',
        component: home
    },{
        path:'/profile',
        name: 'profileAdmin',
        component: profileAdmin,
    },
    {
        path:'/signalisation',
        name: 'SignalisationPosts',
        component: SignalisationPosts,
    }
    ]
},
{
    path:'/jobs',
    name: 'jobsPage',
    component: jobsPage,
}
]
const router=createRouter({
    history: createWebHistory(),
    routes
})
export default router;
