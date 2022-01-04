<template>
    <div id="encrypt">
        <input v-model="message">
        <input @click="encrypt()" type="submit">
        {{encrypted}}
        <div class="button">
            <div @click="clear()" class="btn">Clear</div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "railfencecipher",
        data() {
            return {
                message: '',
                encrypted: '',
                splittedmsg: '',
                even: [],
                odd: [],
            }
        },
        methods: {
            encrypt() {
                var str = this.message;
                var splittedmsg = this.splittedmsg = str.split('');
                splittedmsg.forEach((letter, pos) => {
                    if (pos % 2 == 0) {
                        this.even.push(letter)
                    } else {
                        this.odd.push(letter)
                    }
                });
                this.encrypted = (this.even.concat(this.odd));
            },
            clear() {
                this.message = '',
                    this.encrypted = '',
                    this.splittedmsg = '',
                    this.even = [],
                    this.odd = []
            }
        }
    }
</script>

<style scoped>
    .btn {
        border: 1px solid #999999;
        width: max-content;
        border-radius: 3px;
        background-color: #5dbdff;
        color: white;
        padding: 3px;
    }

    .button {
        display: flex;
        justify-content: center;
        padding: 10px;
    }
</style>
