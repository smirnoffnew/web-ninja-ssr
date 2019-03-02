<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
        <link href="{{ asset('/css/web-vue.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/web-global-app.css') }}" rel="stylesheet" type="text/css">
        <title>WEB SPA</title>
    </head>

    <body>
        {!! $ssr !!}
        <script src="{{ asset('js/web-entry-client.js') }}" type="text/javascript"></script>
    </body>
</html>
