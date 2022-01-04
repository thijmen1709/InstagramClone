<template>
    <div class="main-content">
        <div class="periodes">
            <div class="title">
                <h1 id="titleChange">Alle periodes</h1>
            </div>
            <router-view></router-view>
            <router-link class="link-periode" to="periode/3">
                <h1>Periode 3</h1>
                <p>Deze periode bevat het volgende:</p>
                <li>Blog</li>
                <li>JSON en open data</li>
                <li>Open source</li>
                <li>Rail Fence Cipher</li>
                <li>Portfolio 3.0</li>
            </router-link>
            <router-link class="link-periode" to="periode/4">
                <h1>Periode 4</h1>
                <p>Deze periode bevat het volgende:</p>
                <li>Nog geen inhoud beschikbaar</li>
            </router-link>
            <router-link class="link-periode" to="periode/5">
                <h1>Periode 5</h1>
                <p>Deze periode bevat het volgende:</p>
                <li>Nog geen inhoud beschikbaar</li>
            </router-link>
            <router-link class="link-periode" to="periode/6">
                <h1>Periode 6</h1>
                <p>Deze periode bevat het volgende:</p>
                <li>Nog geen inhoud beschikbaar</li>
            </router-link>
            <router-link class="link-periode" to="periode/7">
                <h1>Periode 7</h1>
                <p>Deze periode bevat het volgende:</p>
                <li>Nog geen inhoud beschikbaar</li>
            </router-link>
            <router-link class="link-periode" to="periode/8">
                <h1>Periode 8</h1>
                <p>Deze periode bevat het volgende:</p>
                <li>Nog geen inhoud beschikbaar</li>
            </router-link>
            <router-link class="link-periode" to="periode/9">
                <h1>Periode 9</h1>
                <p>Deze periode bevat het volgende:</p>
                <li>Nog geen inhoud beschikbaar</li>
            </router-link>
            <router-link class="link-periode" to="periode/10">
                <h1>Periode 10</h1>
                <p>Deze periode bevat het volgende:</p>
                <li>Nog geen inhoud beschikbaar</li>
            </router-link>
            <router-link class="link-periode" to="periode/11">
                <h1>Periode 11</h1>
                <p>Deze periode bevat het volgende:</p>
                <li>Nog geen inhoud beschikbaar</li>
            </router-link>
            <router-link class="link-periode" to="periode/12">
                <h1>Periode 12</h1>
                <p>Deze periode bevat het volgende:</p>
                <li>Nog geen inhoud beschikbaar</li>
            </router-link>
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
