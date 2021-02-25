import Vue from 'vue';
import VueRouter from "vue-router";
import Login from "../components/auth/Login";
import Register from "../components/auth/Register";
import Category from "../components/categories/Index";
import Users from "../components/users/Index";

Vue.use(VueRouter);
function guard(to, from, next) {
    if (User.loggedIn()) {
        next();
    } else {
        next('/login');
    }
}
const routes = [
    {path:'/login',component: Login},
    {path:'/signup',component: Register},
    {path:'/users',component: Users, beforeEnter: guard},
    {path:'/categories',component:Category, beforeEnter: guard}
];

export default new VueRouter({
    routes,
    mode: 'history'
});
