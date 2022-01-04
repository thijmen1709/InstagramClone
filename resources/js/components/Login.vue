<template>
<div class="login-container">
    <form method="post" action="/.api/login"  @submit.prevent="checkCredentials">
        <h1>Aanmelden</h1>
        <label for="email">
            <p>E-mail adres</p>
            <input type="email" id="email" v-model="email" placeholder="E-mail adres" required>
        </label>
        <label for="password">
            <p>Wachtwoord</p>
            <input type="password" id="password" v-model="password" placeholder="Wachtwoord" required>
        </label>
        <input type="submit" value="Inloggen" formmethod="post">
    </form>
</div>
</template>

<script>
    export default {
        data() {
            return {
                email: '',
                password: '',
            }
        },
        methods: {
            checkCredentials() {
                axios.post('./api/login', {
                    email: this.email,
                    password: this.password,
                })
                    .then(response => {
                        console.log(response);

                    })
                    .catch(error => {
                        console.log(error.response)
                    });
            }
        },
    }


</script>
<style scoped>

</style>
