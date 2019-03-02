const mix = require('laravel-mix');

mix.options({
    extractVueStyles: 'css/web-vue.css'
});

mix
    .sourceMaps()
    .js('resources/js/web/web-entry-client.js', 'public/js')
    .js('resources/js/web/web-entry-server.js', 'public/js')
    .sass('resources/sass/web/web-global-app.scss', 'public/css');
