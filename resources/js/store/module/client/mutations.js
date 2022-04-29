export const mutations = {
    GET_TYPE(state, types) {
        const a = types.map(({id, type_name}) => ({id: id, type_name: type_name}));
        state.types = a;
    },
    GET_PRODUCT(state, products) {
        state.products = products;
    },   
    SELECT_PRODUCT(state, productId) {
        state.productSelected = productId
    }
};