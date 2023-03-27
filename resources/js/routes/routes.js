import Vue from "vue";
import Router from "vue-router"
Vue.use(Router)

import index from '../components/index.vue'

const routes = [
    {
        path : '/',
        component: index
    }
]

export default new Router({
    mode: 'history',
    routes
})