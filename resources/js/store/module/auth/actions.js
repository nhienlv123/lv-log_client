export const actions = {
    login({commit}, user) {
        commit('LOG_IN',user);
    },
    logout({commit}) {
        commit('LOG_OUT');
    },

};

          