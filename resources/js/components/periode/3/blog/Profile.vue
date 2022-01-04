<template>
    <div class="blog">
        <sidebar-blog></sidebar-blog>
        <searchbar-blog></searchbar-blog>

        <div class="profile-content" id="profile-content">
            <div class="profile-info">
                <div class="edit-profile">
                    <router-link to="/periode/3/blog/profile-edit" id="editingProfile">Profiel bewerken</router-link>
                </div>
                <div class="user-name-photo">
                    <p><i class="material-icons">person</i></p>
                    <p2 id="usernameItem">{{username}}</p2>
                </div>
                <div class="user-follow">
                    <div class="follow-item">
                        <p>0</p>
                        <p2>Berichten</p2>
                    </div>
                    <div class="follow-item">
                        <p>0</p>
                        <p2>Volgers</p2>
                    </div>
                    <div class="follow-item">
                        <p>0</p>
                        <p2>Volgend</p2>
                    </div>
                </div>
                <div class="user-bio">
                    <p id="bio">{{ bio }}</p>
                    <a href="https://www.jouwebsitedomain.nl">https://www.jouwebsitedomain.nl</a>

                </div>
            </div>
        </div>
        <div class="posts-user" id="posts-user">

        </div>
    </div>
</template>

<script>
    import SidebarBlog from "../sidebar-blog";
    import SearchbarBlog from "../searchbar-blog";

    export default {
        name: 'sidebar',
        components: {SearchbarBlog, SidebarBlog},

        data() {
            return {
                username: '',
                bio: '',
                post: '',
            }
        },
        mounted() {
            axios.get('/api/periode/3/blog/profile').then(response => {
                console.log(response);
                this.username = response.data.username;
                this.bio = response.data.bio.bio;
                for (let posting of response.data.post) {
                    this.post = posting;
                    document.getElementById("posts-user").innerHTML += '<div class="post">' + '<h1>' + posting.title + '</h1>' + '<p>' + posting.description + '</p>' + "</div>";
                    document.getElementsByClassName("post").onclick = axios.get('/api/post/show');
                }
            });
        },
    }

</script>
