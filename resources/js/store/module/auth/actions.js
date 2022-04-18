export default {
    signin(context, user) {
        // actions goi mutations de ghi data sign_in nhap tu form
        context.commit('SIGN_IN',user);

        // actions gui data sign_in ve back 
        let uri = `http://127.0.0.1:8000/api/signin`;
        this.axios.post(uri, user).then(
            (response) => {
                if (response.data.email == state.user.email) {
                    this.$router.push({name: 'client.dashboard'}) 
                    //context.commit('CHECK');
                }
                else alert('Sign in fail. Try again!!!');
            }
        )
    }
}