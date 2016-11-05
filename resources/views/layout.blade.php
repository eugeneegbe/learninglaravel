<!doctype html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <title>Learning Laravel website</title>
        </head>
        <body>
            <ul>
                <li><a href="./">Home</a> </li>
                <li><a href="./about">About</a> </li>
                <li><a href="./contact">Contact</a> </li>
            </ul>
            {{-- we create a new content section where we will render the data --}}
            {{-- of this page--}}
        @yield('content')
        </body>
</html>