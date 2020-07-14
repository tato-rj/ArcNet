<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        @stack('header')
    </head>
    <body>
        @include('layouts.menu')
        @yield('content')

        <footer class="container">
            <div class="row border-top py-4">
                <div class="col-12 text-muted text-center">
                    © {{config('app.name')}} 2020
                </div>
            </div>
        </footer>

        <script src="{{ mix('js/app.js') }}"></script>
        @stack('scripts')
    </body>
</html>
