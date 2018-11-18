<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @stack('meta')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css', 'vendor/canvas') }}">
</head>
<body>
    <div id="app">
        @yield('body')
    </div>
    <script type="text/javascript" src="{{ mix('js/app.js', 'vendor/canvas') }}"></script>

    {{--TODO: Refactor errors on modals--}}
    @if (count($errors) > 0)
        <script>
            $( document ).ready(function() {
                $('#modal-details').modal('show');
            });
        </script>
    @endif

</body>
</html>