<!doctype html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <title>Learning Laravel website</title>
            <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
            <script src="https://code.jquery.com/jquery.js"></script>
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="{{asset('css/style.css')}}">
        </head>
        <body>
                <div class="container col-md-8 col-md-offset-2">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="./">Home</a></li>
                                <li><a href="./about">About</a></li>
                                <li><a href="./contact">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                        {{-- we create a new content section where we will render the data --}}
                        {{-- of this page--}}
                    @yield('content')
                </div>
        </body>
</html>