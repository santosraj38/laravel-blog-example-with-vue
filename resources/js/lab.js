
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

Vue.component('navbar',require('./components/Navbar.vue'));

let routes = [
    {path: '/roles', component : require('./components/roles/RoleIndex.vue').default},
		{path: '/roles/:id', component : require('./components/roles/RoleShow.vue').default},{path: '/roles/create', component : require('./components/roles/RoleCreate.vue').default},
		{path: '/roles/:id/edit',component : require('./components/roles/RoleUpdate.vue').default},
		{path: '/categories', component : require('./components/categories/CategoryIndex.vue').default},
		{path: '/categories/:id', component : require('./components/categories/CategoryShow.vue').default},{path: '/categories/create', component : require('./components/categories/CategoryCreate.vue').default},
		{path: '/categories/:id/edit',component : require('./components/categories/CategoryUpdate.vue').default},
		{path: '/posts', component : require('./components/posts/PostIndex.vue').default},
		{path: '/posts/:slug', component : require('./components/posts/PostShow.vue').default},{path: '/posts/create', component : require('./components/posts/PostCreate.vue').default},
		{path: '/posts/:slug/edit',component : require('./components/posts/PostUpdate.vue').default},
		{path: '/comments', component : require('./components/comments/CommentIndex.vue').default},
		{path: '/comments/:id', component : require('./components/comments/CommentShow.vue').default},{path: '/comments/create', component : require('./components/comments/CommentCreate.vue').default},
		{path: '/comments/:id/edit',component : require('./components/comments/CommentUpdate.vue').default},
		{path: '/likes', component : require('./components/likes/LikeIndex.vue').default},
		{path: '/likes/:id', component : require('./components/likes/LikeShow.vue').default},{path: '/likes/create', component : require('./components/likes/LikeCreate.vue').default},
		{path: '/likes/:id/edit',component : require('./components/likes/LikeUpdate.vue').default},
		{path: '/ratings', component : require('./components/ratings/RatingIndex.vue').default},
		{path: '/ratings/:id', component : require('./components/ratings/RatingShow.vue').default},{path: '/ratings/create', component : require('./components/ratings/RatingCreate.vue').default},
		{path: '/ratings/:id/edit',component : require('./components/ratings/RatingUpdate.vue').default},
		{path: '/tags', component : require('./components/tags/TagIndex.vue').default},
		{path: '/tags/:id', component : require('./components/tags/TagShow.vue').default},{path: '/tags/create', component : require('./components/tags/TagCreate.vue').default},
		{path: '/tags/:id/edit',component : require('./components/tags/TagUpdate.vue').default},
]

const router = new VueRouter({
  routes
})
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
