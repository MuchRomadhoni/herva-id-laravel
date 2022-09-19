<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>HERVA ID</title>
    <meta content="" name="description" />

    <!-- Favicons -->
    <link href="{{ asset('img/logo.png') }}" rel="icon" />
    <link href="{{ asset('img/logo.png') }}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('lib/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href=" {{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css?v=1.0.6') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>

    @yield('content')

    @include('components.footer')


    <a href="https://wa.me/+6282338202288/?text=Halo min, mau tanya-tanya seputar herva dong"
        class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('lib/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('lib/aos/aos.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('lib/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('lib/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('lib/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/soft-ui-dashboard.min.js?v=1.0.6') }}"></script>
</body>

</html>
