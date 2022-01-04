<template>
    <div>
        <router-link :to="{ userName }">{{ userName }}</router-link>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                userName: this.$route.params.userName,
            }
        },
        created() {
            this.$http.get('/periode/blog/3/user/' + this.userName);
        }
    }
</script>
