const mix = require('laravel-mix');

mix.options({
    extractVueStyles: 'css/test-vue.css'
});

mix
    .sourceMaps()
    .js('resources/js/test/test-entry-client.js', 'public/js')
    .js('resources/js/test/test-entry-server.js', 'public/js')
    .sass('resources/sass/test/test-global-app.scss', 'public/css');
