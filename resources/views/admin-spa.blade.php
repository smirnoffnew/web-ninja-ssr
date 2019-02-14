<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <script>window.Laravel= <?= json_encode(['csrfToken' => csrf_token()]); ?></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
        <link href="{{ URL::asset('/css/admin-app.css') }}" rel="stylesheet" type="text/css">
        <title>ADMIN SPA</title>
    </head>

    <body>
        <div id="app">
            {!! $ssr !!}
        </div>
        <script src="{{ URL::asset('js/admin-entry-client.js') }}" type="text/javascript"></script>
    </body>
</html>



