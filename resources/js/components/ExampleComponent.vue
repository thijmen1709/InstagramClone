<template xmlns="http://www.w3.org/1999/html">
    <div class="container">
        <div id="input">
            <form>
                <label>
                    <input type="text" name="bio" placeholder="Vul tekst in om te encrypten...">
                </label>
                <input type="submit" onClick="encryptText()" id="send" value="send" v-model="input">
            </form>
        </div>
    </div>
</template>

<script>
    const input = new Vue({
        el: '#input',
        data: {
            return: {
                text: 'hi',
            }
        },
        methods: {
            encryptText() {
                console.log("hi");

            }
        }
    });

    export default {
            name: "input",
    }
</script>
<style>
    #input {
        position: relative;
        left: 30vw;
        top: 20vw;
    }
    input {
        width: 25vw;
    }

    #send {
        width: 10vw;
        height: 2vw;
        color: #1b1e21;
    }
</style>
