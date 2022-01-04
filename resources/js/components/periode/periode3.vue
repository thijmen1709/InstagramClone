<template>
    <div class="main-content">
        <div class="periodes">
            <div class="title">
                <h1>Alle periodes <i class="material-icons">keyboard_arrow_right</i> Opdrachten</h1>
            </div>
            <router-link to="/periode/3/blog" class="link-periode">
                <h1>Blog</h1>
                <p>Deze opdracht bevat het volgende:</p>
                <li>Een moderne blog</li>
            </router-link>
            <router-link onclick="window.location.href='/json'" to="" class="link-periode">
                <h1>JSON & Open data</h1>
                <p>Deze opdracht bevat het volgende:</p>
                <li>Een grafiek met daarin gegevens van Co2</li>
                <li>Deze zijn uit de JSON programmeertaal gehaald.</li>
            </router-link>
            <router-link to="/periode/3/open-source" class="link-periode">
                <h1>Open Source</h1>
                <p>Deze opdracht bevat het volgende:</p>
                <li>Nog geen inhoud beschikbaar</li>
            </router-link>
            <router-link to="/periode/3/rail-fence-cipher" class="link-periode">
                <h1>Rail Fence Cipher</h1>
                <p>Deze opdracht bevat het volgende:</p>
                <li>Nog geen inhoud beschikbaar</li>
            </router-link>
            <router-link to="/periode/3portfolio-3-0" class="link-periode">
                <h1>Portfolio 3.0</h1>
                <p>Deze opdracht bevat het volgende:</p>
                <li>Maak een up-to-date portfolio website</li>
                <li>Deze moet jou zelf uitstralen</li>
                <li>Zet hier ook de blog in en andere projecten</li>
            </router-link>
        </div>
    </div>
</template>

<script>
    export default {
        name: '3'
    }

</script>
