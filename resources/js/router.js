import Vue from "vue";
import VueRouter from "vue-router";
import authIndex from "./components/auth/index.vue"
import SignInComponent from "./components/auth/SignInComponent.vue"
import SignUpComponent from "./components/auth/SignUpComponent.vue"

import clientIndex  from "./components/client/index.vue"
import clientDashboard  from "./components/client/Dashboard.vue"

import adminIndex  from "./components/admin/index.vue"
import adminDashboard  from "./components/admin/Dashboard.vue"

Vue.use(VueRouter);

const routes = [
    {   
        name: 'home',
        path: '/',
        component: authIndex,
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
        name: 'client',
        path: '/client',
        component: clientIndex,
        children: [
            {
                name: 'client.dashboard',
                path: 'dashboard',
                component: clientDashboard
            },            
        ]        
    }, 
    {
        name: 'admin',
        path: '/admin',
        component: adminIndex,
        children: [
            {
                name: 'admin.dashboard',
                path: 'dashboard',
                component: adminDashboard
            },            
        ]        
    },   
]

const router = new VueRouter({
    module: 'history',
    routes
});

export default router