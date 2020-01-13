import Vuex from 'vuex'
import Vue from 'vue'

import registration from './registration'

Vue.use(Vuex)

const store = new Vuex.Store({
  modules: {
    registration
  }
})

export default store