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
import AdminIndex  from "../components/admin/admin.vue"
import AdminHome  from "../components/admin/pages/home"
import AdminProduct from "../components/admin/pages/product"
import AddProduct from "../components/admin/pages/product/components/AddProduct.vue"
import ListProduct from '../components/admin/pages/product/components/ListProduct.vue'
import EditProduct from '../components/admin/pages/product/components/EditProduct.vue'

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
    component: AdminIndex,
    children: [
        {
            name: 'admin.home',
            path: 'home',
            component: AdminHome
        },  
        {
            path: 'product',
            component: AdminProduct,
            children: [
                {
                    name: 'admin.product.add',
                    path: 'add',
                    component: AddProduct,
                },
                {
                    name: 'admin.product.list',
                    path: 'list',
                    component: ListProduct,
                },
                {
                    name: 'admin.product.edit',
                    path: 'edit',
                    component: EditProduct,
                }
            ]
        }          
    ]        
};

// 
const routes = [
    authPage,
    adminPage,
    clientPage,
]

export default routes;