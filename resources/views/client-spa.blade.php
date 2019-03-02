<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
        <link href="{{ asset('/css/client-vue.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/client-global-app.css') }}" rel="stylesheet" type="text/css">
        <title>CLIENT SPA</title>
    </head>

    <body>
        {!! $ssr !!}
        <script src="{{ asset('js/client-entry-client.js') }}" type="text/javascript"></script>
    </body>
</html>
