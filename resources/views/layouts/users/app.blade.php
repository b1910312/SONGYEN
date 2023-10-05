<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Song Yến</title>
    <link rel="shortcut icon" href="{{ asset('AdminCSS/dist/img/logoSYMao.png') }}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('UserCSS/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('UserCSS/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('UserCSS/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('UserCSS/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('UserCSS/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('UserCSS/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('UserCSS/assets/css/main.css') }}" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
        @include('layouts.users.navbar')
    </header><!-- End Header -->

    <main id="main">
        @yield('content')
    </main><!-- End #main -->
    <footer>
        @include('layouts.users.footer')
    </footer>
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('UserCSS/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('UserCSS/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('UserCSS/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('UserCSS/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('UserCSS/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('UserCSS/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    {{-- <script src="{{ asset('UserCSS/assets/vendor/php-email-form/validate.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.0/jquery-migrate.min.js"></script> --}}
    <!-- Template Main JS File -->
    <script src="{{ asset('UserCSS/assets/js/main.js') }}"></script>
    {{-- <script src="{{ asset('UserCSS/assets/js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('UserCSS/assets/js/jquery-migrate-1.2.1.min.js') }}"></script> --}}

    <script>
        $('.searchresult').hide();

        $('.input-search-ajax').keyup(function() {
            // var _html = '';
            var _text = $(this).val();
            var _url = '{{ url('uploads/thumbnail') }}';
            var _link = '{{ url('users/blog-details') }}'
            $.ajax({
                url: '{{ route('ajax-search-blog') }}?key=' + _text,
                type: 'GET',
                success: function(res) {
                    console.log(res);
                    var _html = '';
                    for (var pro of res) {
                        _html += '<div class="media row" style="margin: 10px 10px;">';
                        _html += '<div class="col-md-4"><a class="d-flex" href="' + _link +'?id='+ pro.id +
                            '">';
                        _html += '<img class="img-fluid" width="100px" src="' + _url + '/' + pro.id +
                            '.jpg" alt="">';
                        _html += '</a></div>';
                        _html += '<div class="media-body col-md-8">';
                        _html += '<h5><a href="' + _link +'?id='+ pro.id + '">' + pro.name + '</a></h5>';
                        _html += '' + pro.content + '';
                        _html += '</div>';
                        _html += '</div>';
                    }
                    $('.searchresult').show(300);
                    $('.searchresult').html(_html);


                }
            })
        });
    </script>
    <script>
        $('.reply').hide();
        $('.replybtn').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var id_form = ".form-reply-" + id;
            $('.replybtn').hide();
            $(id_form).slideDown();
        });
        $('.hidebtn').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var id_form = ".form-reply-" + id;
            $(id_form).slideUp();
        });
    </script>
</body>


</html>
