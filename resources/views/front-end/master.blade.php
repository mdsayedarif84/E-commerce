    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>@yield('title')</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="robots" content="all,follow">
            <!-- Bootstrap CSS-->
            <link rel="stylesheet" href="{{ asset('/') }}/front-end/vendor/bootstrap/css/bootstrap.min.css">
            <!-- Custom stylesheet - for your changes-->
            <link rel="stylesheet" href="{{ asset('/') }}/front-end/css/custom.css">
            <!-- Font Awesome CSS-->
            <link rel="stylesheet" href="{{ asset('/') }}/front-end/vendor/font-awesome/css/font-awesome.min.css">
            <!-- Google fonts - Roboto -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
            <!-- owl carousel-->
            <link rel="stylesheet" href="{{ asset('/') }}/front-end/vendor/owl.carousel/assets/owl.carousel.css">
            <link rel="stylesheet" href="{{ asset('/') }}/front-end/vendor/owl.carousel/assets/owl.theme.default.css">
            <!-- theme stylesheet-->
            <link rel="stylesheet" href="{{ asset('/') }}/front-end/css/style.default.css" id="theme-stylesheet">
                        <!-- Favicon-->
            <link rel="shortcut icon" href="favicon.png">
            <script src="{{ asset('/') }}/front-end/vendor/jquery/jquery.min.js"></script>
            <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        </head>
        <body>
            <!-- navbar-->
            {{--header start--}}
                @include('front-end.includes.header')

            {{--header end--}}
            {{--    menu end--}}
                @yield('body')
            <!--
            *** FOOTER ***
            _________________________________________________________
            -->
                @include('front-end.includes.footer')
            <!-- *** COPYRIGHT END ***-->
            <!-- JavaScript files-->
            <script src="{{ asset('/') }}/front-end/vendor/jquery/jquery.min.js"></script>
            <script src="{{ asset('/') }}/front-end/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="{{ asset('/') }}/front-end/vendor/jquery.cookie/jquery.cookie.js"> </script>
            <script src="{{ asset('/') }}/front-end/vendor/owl.carousel/owl.carousel.min.js"></script>
            <script src="{{ asset('/') }}/front-end/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
            <script src="{{ asset('/') }}/front-end/js/front.js"></script>
        </body>
    </html>
