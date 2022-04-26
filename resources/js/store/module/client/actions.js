export const actions = {
    getType({commit}, types) {
        commit('GET_TYPE', types);
    },
    getProduct({commit}, products) {
        commit('GET_PRODUCT', products)
    },
    getSize({commit}, sizes) {
        commit('GET_SIZE', sizes);
    },
    getType_map({commit}, type_maps) {
        commit('GET_TYPE_MAP', type_maps)
    },
    selectProduct({commit}, productId) {
        commit('SELECT_PRODUCT', productId)
    }
};
