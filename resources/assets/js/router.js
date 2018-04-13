import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios'


Vue.use(VueRouter)



const router = new VueRouter({

routes: [


{path: '/chat/:roomname', component:require('./chat/chatlists.vue')}


]



})

export default router
