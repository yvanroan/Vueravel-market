import axios from 'axios';

const state = {
  covidCountry:[],
  cosh:[]
}



const mutations = {
  UPDATE_COVID_COUNTRY (state, payload) {
   
    state.cosh.push(payload);
    state.covidCountry=state.cosh;
  }
}

const actions = {
  getCovidCountry ({ commit }) {
    axios.get(`https://api.covid19api.com/summary`).then((response) => {
      commit('UPDATE_COVID_COUNTRY',response.data);
    })
  }
}

const getters = {
  covidCountry: state => state.covidCountry
}

const cartModule = {
  state,
  mutations,
  actions,
  getters
}

export default cartModule;
