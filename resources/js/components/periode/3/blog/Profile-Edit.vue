<template>
    <div class="blog">
        <sidebar-blog></sidebar-blog>
        <searchbar-blog></searchbar-blog>
        <div class="form-profiledit">
            <form action="./api/bio" method="post" @submit.prevent="editBio()">
                <input type="text" name="bio" v-model="bio" placeholder="Bio">
                <div class="input-submit">
                    <input type="submit" class="edit-btn" value="Wijzigen">
                </div>
            </form>
        </div>
    </div>
</template>
<script>
    import SidebarBlog from "../sidebar-blog";
    import SearchbarBlog from "../searchbar-blog";
    export default {
        data() {
            return {
                bio: '',
            }
        },
        name: 'profileedit',
        components: {SearchbarBlog, SidebarBlog},
        methods: {
            editBio(){
                axios.post('./api/bio', {
                    bio :this.bio
                })
                .then(response => {
                        console.log(response);

                    })
                        .catch(error => {
                            console.log(error.response)
                        });
            },
        }
    }
</script>
