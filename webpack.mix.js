const mix = require('laravel-mix');

mix
    .js('resources/js/admin/admin-entry-client.js', 'public/js')
    .js('resources/js/admin/admin-entry-server.js', 'public/js')

    .js('resources/js/client/client-entry-client.js', 'public/js')
    .js('resources/js/client/client-entry-server.js', 'public/js')

    .js('resources/js/test/test-entry-client.js', 'public/js')
    .js('resources/js/test/test-entry-server.js', 'public/js')

    .js('resources/js/web/web-entry-client.js', 'public/js')
    .js('resources/js/web/web-entry-server.js', 'public/js')

    .sass('resources/sass/admin/admin-app.scss', 'public/css')
    .sass('resources/sass/client/client-app.scss', 'public/css')
    .sass('resources/sass/test/test-app.scss', 'public/css')
    .sass('resources/sass/web/web-app.scss', 'public/css');
