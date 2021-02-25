import Vue from 'vue';
import Vuex from 'vuex';
import {Categories} from "./modules/categories";
import {Users} from "./modules/users";


Vue.use(Vuex);

export default new Vuex.Store({
    modules:{
      Categories,
      Users
    },
    state:{
        path_to:'/'
    },
    mutations:{
     pathTo(state, to) {
     state.path_to = to;
     }
    },
    actions:{
    pathTo({commit},to){
     commit('pathTo',to);
    }
   }
})
