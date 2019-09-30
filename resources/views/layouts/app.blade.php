<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
    </head>
    <body>
        <div class="container">
          @yield('content')
        </div>
        @yield('footer')
    </body>
</html>
