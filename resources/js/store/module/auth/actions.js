export const actions = {
    signin({commit}, user) {
        commit('SIGN_IN',user);
    },
    signout({commit}) {
        commit('SIGN_OUT');
    },

};

        // actions gui data sign_in ve back 
        // let uri = `http://127.0.0.1:8000/api/signin`;
        // this.axios.post(uri, this.user).then(
        //     (response) => {
        //         if (response.data.email == state.userInfo.email) {
        //             this.$router.push({name: 'client.dashboard'}) 
        //             //context.commit('CHECK');
        //         }
        //         else alert('Sign in fail. Try again!!!');
        //     }
        // )        