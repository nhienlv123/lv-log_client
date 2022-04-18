import Vue from "vue";
import VueRouter from "vue-router";
import indexAuth from "./components/auth/index.vue"
import HeaderComponent from "./components/auth/HeaderComponent.vue"
import SignInComponent from "./components/auth/SignInComponent.vue"
import SignUpComponent from "./components/auth/SignUpComponent.vue"
import clientDashboard  from "./components/client/Dashboard.vue"
import adminDashboard  from "./components/admin/Dashboard.vue"

Vue.use(VueRouter);

const routes = [
    {   
        name: 'home',
        path: '/',
        component: indexAuth,
        children: [            
            {
                name: 'signin',
                path: 'signin',
                component: SignInComponent
            },
            {
                name: 'signup',
                path: 'signup',
                component: SignUpComponent
            },
            
        ]
    },  
    {
        name: 'client.dashboard',
        path: '/client/dashboard',
        component: clientDashboard
    },
    {
        name: 'admin.dashboard',
        path: '/admin/dashboard',
        component: adminDashboard
    },    
]

const router = new VueRouter({
    module: 'history',
    routes
});

export default router