<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>App Name • @yield('title')</title>

        <meta name="desciptopm" content="Laravel Blade Template"/>
        <meta name="author" content="Loyola"/>
        <meta name="keywords" content="Laravel,Blade,Template,PHP"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="content">
            @yield('content');
        </div>

        @stack('scripts')
    </body>
</html>