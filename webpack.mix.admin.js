const mix = require('laravel-mix');

mix.options({
    extractVueStyles: 'css/admin-vue.css'
});

mix
    .sourceMaps()
    .js('resources/js/admin/admin-entry-client.js', 'public/js')
    .js('resources/js/admin/admin-entry-server.js', 'public/js')
    .sass('resources/sass/admin/admin-global-app.scss', 'public/css');
