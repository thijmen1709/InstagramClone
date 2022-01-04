<template xmlns="http://www.w3.org/1999/html">
    <div class="blog">
        <sidebar-blog></sidebar-blog>
        <searchbar-blog></searchbar-blog>
        <datetimepicker></datetimepicker>
    </div>
</template>
<script>
    import SearchbarBlog from "../searchbar-blog";
    import SidebarBlog from "../sidebar-blog";
    import datetime from 'vuejs-datetimepicker';
    export default {
        data() {
            return {
                title: '',
                description: '',
                uploadTime: '',
            }
        },
        name: "Post",
        components: {SidebarBlog, SearchbarBlog, datetime },
        methods: {
            createPost() {
                axios.post('./api/post', {
                    title: this.title,
                    description: this.description,
                    uploadTime: this.uploadTime,
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

    #main {
        display: none;
    }
    .subform {
        margin-right: 0;
        left: -40vw;
        bottom: -18vw;
        margin-bottom: 0;
        height: 5vw;
    }
    #button {
        position: relative;
        top: 20vw;
        left: -23.5vw;
        width: 1vw;
        height: 1.3vw;
        border-radius: 1vw;
        margin-bottom: 0;
    }
    #text {
        position: relative;
        left: -22.5vw;
        top: 18.9vw;
        height: 3vw;
    }
    p {
        position: relative;
        left: 0.3vw;
        top: 0.25vw;
    }
    .create {
        position: relative;
        left: 10%;
        top: -5%;
    }
    .post {
        position: fixed;
        margin-top: 0;
        left: -35.5vw;
        bottom: -25vw;
        width: 100vw;
    }
    .post, input, button {
        margin-left: .3vw;
        border: 1px solid gray;
    }
    form {
        margin-left: 6.5vw;
        display: flex;
        align-content: normal;
    }
    label {
        margin: 0 0.2vw;
        width: 6vw;
    }
    textarea {
        margin: 1vw;
        background-color: rgba(167, 167, 167, 0.38);
        border: 1vw;
        border-radius: 1vw;
    }
</style>
