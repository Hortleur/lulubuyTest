import { createRouter, createWebHistory} from 'vue-router'
import Home from '../components/views/Home.vue'




const routes = [
    {
        path:"/",
        name: 'Home',
        component: Home
    },

    {
        path:"/login",
        name: 'Login',
        component:  () => import("../components/views/Login.vue")
    },

    {
        path:'/products',
        name: 'ProductPage',
        component: () => import("../components/views/Product.vue")
    },

    {
        path: '/:pathMatch(.*)*',
        name: 'NotFound',
        component: () => import("../components/views/NotFound.vue")
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router