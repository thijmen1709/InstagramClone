<template>
    <div class="content2" id="content2">
        <div class="info-content">
            <div class="edit-user-btn">
                <button onclick="editUser()">
                    Profiel bewerken
                </button>
            </div>
            <div class="username">
                <div class="profile-photo"><i class="material-icons">person</i></div>
                <p>Gebruikersnaam</p>
                <p>Stad, Land</p>
            </div>
            <div class="user-followers">
                <div class="item">
                    <p>0</p>
                    <p>Berichten</p>
                </div>
                <div class="item">
                    <p>0</p>
                    <p>Volgers</p>
                </div>
                <div class="item">
                    <p>0</p>
                    <p>Volgend</p>
                </div>
            </div>
        </div>
        <div class="post-content">
            <div class="searchbar">
                <i class="material-icons">search</i><input type="search" placeholder="Zoeken naar, users of tags">
            </div>
            <div class="posts">
                <h1>Berichten</h1>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }

</script>
