import Vue from 'vue'
import router from './router.js'
import store from './store.js'
import App from './App.vue'

import BootstrapVue from 'bootstrap-vue'
import VueSweetalert2 from 'vue-sweetalert2'
import Permissions from './mixins/Permission.js'
Vue.mixin(Permissions)

import { mapActions, mapState, mapGetters } from 'vuex'

Vue.use(VueSweetalert2)
Vue.use(BootstrapVue)

import 'bootstrap-vue/dist/bootstrap-vue.css'

new Vue({
    el: '#laundry',
    router,
    store,
    components: {
        App
    },
    computed: {
        ...mapState('user', {
            authenticated: state => state.authenticated //MENGAMBIL STATE AUTHENTICATED
        }),
        ...mapGetters(['isAuth'])
    },
    methods: {
        ...mapActions('user', ['getUserLogin'])
    },
    created() {
        if (this.isAuth) {
            this.getUserLogin().then(() => {
                if (!this.authenticated.permission.includes(this.$route.meta.permissions)){
                    this.$router.push('/');
                }
            }) //REQUEST DATA YANG SEDANG LOGIN
        }
    }
})