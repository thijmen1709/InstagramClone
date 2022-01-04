window._ = require('lodash');


window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

let authToken = document.head.querySelector('meta[name="api_token"]');

if (authToken) {
    window.axios.defaults.headers.common['X-AUTH-TOKEN'] = authToken.content;
} else {
    console.error('[Jens Bouma]: AUTH-TOKEN is not defined!');
}

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('[Jens Bouma]: CSRF-TOKEN is not defined! ERROR 404 -> https:/laravel.com/docs/csrf#csrf-x-csrf-token');
}
