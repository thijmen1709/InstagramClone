<template>
    <div class="sidebar">
        <h1>\-.'.-/</h1>
        <div class="nav">
            <router-link class="link" to="/"><i class="material-icons">home</i>Home</router-link>
            <router-link class="link" to="/periode"><i class="material-icons">dynamic_feed</i>Periodes</router-link>
            <router-link class="link" to="/login"><i class="material-icons">person</i>Account</router-link>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'sidebar'
    }

</script>
