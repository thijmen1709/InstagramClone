<template>
    <div class="sidebar">
        <div class="nav logo-sidebar">
            <img src="/imgs/logo-blog.png">
        </div>
        <div class="nav items">
            <router-link onclick="changeSearch()" class="href" to="/periode/3/blog/"><i class="material-icons">home</i></router-link>
            <router-link class="href" to="/periode/3/blog/profile"><i class="material-icons">person</i></router-link>
            <router-link class="href" to="/periode/3/blog/settings"><i class="material-icons">settings</i></router-link>
            <router-link class="href" to="/periode/3/blog/create"><i class="material-icons">add_box</i></router-link>
        </div>
        <div class="nav profile-switch">
            <p id="userSwitch" onclick="User()"><i class="material-icons">person</i></p>
        </div>
        <div id="userbox" style="display: none;">
            <router-link to="/periode/3/blog/profile">Profiel</router-link>
            <a href="/logout">Uitloggen</a>
        </div>
    </div>
</template>

<script>

    export default {
        name: 'sidebar-blog'
    }

</script>
