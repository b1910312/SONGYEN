<!doctype html>
<html lang="en">

<head>
    <title>Song Yến</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="{{ asset('AdminCSS/dist/img/logoSYMao.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('LoginCSS/css/style.css') }}">

</head>

<body class="img js-fullheight" style="background-image: url({{asset('background.jpg')}});">
   @yield('sesion')
    <script src="{{asset('LoginCSS/js/jquery.min.js')}}"></script>
    <script src="{{asset('LoginCSS/js/popper.js')}}"></script>
    <script src="{{asset('LoginCSS/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('LoginCSS/js/main.js')}}"></script>

</body>

</html>