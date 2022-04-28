// import trang auth
import authIndex from "../components/auth/auth.vue"
import SignInComponent from "../components/auth/pages/SignInComponent.vue"
import SignUpComponent from "../components/auth/pages/SignUpComponent.vue"

// import trang Client
import ClientIndex from "../client/client.vue"
import HomeIndex from '../client/pages/home'
import ShopIndex from '../client/pages/shop'
import SingleIndex from '../client/pages/single'
import CheckoutIndex from '../client/pages/checkout'
import CartIndex from '../client/pages/cart'

// import trang Admin
import adminIndex  from "../components/admin/index.vue"
import adminDashboard  from "../components/admin/pages/Dashboard.vue"

// router trang Auth
let authPage = {   
    name: 'home',
    path: '/',
    component: authIndex,
    children: [            
        {
            name: 'login',
            path: 'login',
            component: SignInComponent
        },
        {
            name: 'signup',
            path: 'signup',
            component: SignUpComponent
        },        
    ]
};

// router trang Client
let clientPage = {   
    name: 'client',
    path: '/client',
    component: ClientIndex,
    children: [         
        {
            name: 'client.home',
            path: 'home',
            component: HomeIndex,
        },  
        {
            name: 'client.shop',
            path: 'shop',
            component: ShopIndex
        },  
        {
            name: 'client.single',
            path: 'single',
            component: SingleIndex
        },  
        {
            name: 'client.checkout',
            path: 'checkout',
            component: CheckoutIndex
        },
        {
            name: 'client.cart',
            path: 'cart',
            component: CartIndex
        }      
    ]
}; 

// router trang Admin
let adminPage = {
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
};

// 
const routes = [
    authPage,
    adminPage,
    clientPage,
]

export default routes;