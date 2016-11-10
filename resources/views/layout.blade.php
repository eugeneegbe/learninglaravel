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

            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-targe\
                                t="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">L34rn1ng L4r4v3l</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav" style="float: right" >
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <li class="dropdown">
                                <a href="/about" class="dropdown-toggle" data-toggle="dropdown">About Us <b cl\
                                                                                                       ass="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Our Team</a></li>
                                    <li><a href="#">History </a></li>
                                    <li><a href="#">Our Experts</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                            {{-- we create a new content section where we will render the data --}}
                            {{-- of this page--}}


                @yield('content')


                <div class="bottom-menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 navbar-brand">
                                <a href="/">Learning Laravel</a>
                            </div>
                            <div class="col-md-10">
                                <ul class="bottom-links">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>


    </body>

</html>