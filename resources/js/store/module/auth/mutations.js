export default {
    SIGN_IN(state, user) {
        state.userInfo = user;
    },
    CHECK(state) {
        state.isLoged = !isLoged;
    }
}