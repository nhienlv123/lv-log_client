export const mutations = {
    GET_TYPE(state, types) {
        state.types = types;
    },
    GET_PRODUCT(state, products) {
        state.products = products;
    },   
    SELECT_PRODUCT(state, productId) {
        state.productSelected = state.products.filter(products => products.id == productId)
    }
};