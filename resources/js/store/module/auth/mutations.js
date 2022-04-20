export const mutations = {
    SIGN_IN(state, user) {
        state.userInfo = user;
        state.isLoged = true;
    },
    SIGN_OUT(state) {
        state.userInfo = {};
        state.isLoged = false;
    }
};