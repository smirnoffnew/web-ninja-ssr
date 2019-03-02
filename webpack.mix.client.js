const mix = require('laravel-mix');

mix.options({
    extractVueStyles: 'css/client-vue.css'
});

mix
    .sourceMaps()
    .js('resources/js/client/client-entry-client.js', 'public/js')
    .js('resources/js/client/client-entry-server.js', 'public/js')
    .sass('resources/sass/client/client-global-app.scss', 'public/css');
