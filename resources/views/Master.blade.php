<html>
    <head>
        @vite(['resources/css/app.css','resources/js/app.js'])
        @yield('meta')
    </head>
    <body>
        @include('sidebar')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>