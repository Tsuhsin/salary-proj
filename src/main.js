import Vue from 'vue'
import App from './App.vue'
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import router from './router'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faUserSecret } from '@fortawesome/free-solid-svg-icons'
import { faChartLine } from '@fortawesome/free-solid-svg-icons'
import { faBars } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faUserSecret,faChartLine,faBars)

Vue.component('font-awesome-icon', FontAwesomeIcon)

Vue.config.productionTip = false
// Vue.config.debug = true;
// Vue.config.devtools = true;

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
