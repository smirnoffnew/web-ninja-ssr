const mix = require('laravel-mix');

mix
    .js('resources/js/entry-client.js', 'public/js')
    .js('resources/js/entry-server.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
