export const actions = {
    getType({commit}, types) {
        commit('GET_TYPE', types);
    },
    getProduct({commit}, products) {
        commit('GET_PRODUCT', products)
    }
};
