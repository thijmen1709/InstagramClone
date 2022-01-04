<template>
    <div class="create">
        <h1>Bericht plaatsen</h1>
        <form action="./api/post" method="post" @submit.prevent="createPost()">
            <div class="top-post-create">
                <input placeholder="Titel" v-model="title" name="title" required>
                <textarea placeholder="Inhoud" v-model="description" name="description" required></textarea>
                <input type="file" accept=".png, .jpeg, .jpg" v-on:v-model="image">
            </div>
            <button id="button" type="button" onclick="showTimer()"></button>
            <p id="text"> Plaats het bericht op: </p>
            <form class="subform" id="main">
                <datetime id="datetime" format="YYYY-MM-DD H:i" v-model="uploadTime"></datetime>
            </form>
            <input class="post" v-on:click="window.location.href = '/periode/3/blog'" type="submit"
                   value="Plaatsen">
        </form>
    </div>
</template>

<script>
    import datetime from 'vuejs-datetimepicker';

    export default {
        components: { datetime },
        data() {
            return {
                title: '',
                description: '',
                uploadTime: '',
                image: '',
            }
        },

        methods: {
            createPost() {
                axios.post('./api/post', {
                    title: this.title,
                    description: this.description,
                    uploadTime: this.uploadTime,
                    image: this.image,
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

<style>

</style>
