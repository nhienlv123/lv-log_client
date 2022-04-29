export const mutations = {
    LOG_IN(state, user) {
        state.userInfo = user;
        state.isLoged = true;
    },
    LOG_OUT(state) {
        state.userInfo = {};
        state.isLoged = false;
    }
};