﻿<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from creativelayers.net/themes/boxcar-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 May 2024 05:08:06 GMT -->

<head>
    <meta charset="utf-8">
    <title>@yield('title') Roda Rent - Penyewaan Mobil Murah & Terpecaya</title>
    <!-- Stylesheets -->
    <link href="{{ asset('landing/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/slick.css') }}">
    <link href="{{ asset('landing/css/mmenu.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/css/style.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('landing/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('landing/images/favicon.png') }}" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="boxcar-wrapper">

        <!-- Main Header-->
        @include('landing.partials.header')
        <!-- End header-section -->

        @yield('content')

        <!-- main footer -->
        @include('landing.partials.footer')
        <!-- End boxcar-footer -->


    </div><!-- End Page Wrapper -->

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

    <script src="{{ asset('landing/js/jquery.js') }}"></script>
    <script src="{{ asset('landing/js/popper.min.js') }}"></script>
    <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/js/slick.min.js') }}"></script>
    <script src="{{ asset('landing/js/slick-animation.min.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('landing/js/wow.js') }}"></script>
    <script src="{{ asset('landing/js/appear.js') }}"></script>
    <script src="{{ asset('landing/js/mixitup.js') }}"></script>
    <script src="{{ asset('landing/js/knob.js') }}"></script>
    <script src="{{ asset('landing/js/mmenu.js') }}"></script>
    <script src="{{ asset('landing/js/main.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @yield('script')

    @if (Session::get('login'))
    <script>
        Swal.fire({
            icon: "success"
            , title: "Success"
            , text: "Login Berhasil"
        });

    </script>
    @endif

    @if (Session::get('register'))
    <script>
        Swal.fire({
            icon: "success"
            , title: "Success"
            , text: "Register Berhasil"
        });

    </script>
    @endif

    @if (Session::get('updateprofil'))
    <script>
        Swal.fire({
            icon: "success"
            , title: "Success"
            , text: "Update Profil Berhasil"
        });

    </script>
    @endif

    @if (Session::get('logout'))
    <script>
        Swal.fire({
            icon: "success"
            , title: "Success"
            , text: "Logout Berhasil"
        });

    </script>
    @endif

    @if (Session::get('gagallogin'))
    <script>
        Swal.fire({
            icon: "error"
            , title: "Gagal"
            , text: "Login Gagal"
        });

    </script>
    @endif

    @if (Session::get('berhasilbooking'))
    <script>
        Swal.fire({
            icon: "success"
            , title: "Success"
            , text: "Booking Berhasil"
        });

    </script>
    @endif

    @if (Session::get('linkkadaluarsa'))
    <script>
        Swal.fire({
            icon: "error"
            , title: "Gagal"
            , text: "Link Kadaluarsa"
        });

    </script>
    @endif

    @if (Session::get('resetpasswordberhasil'))
    <script>
        Swal.fire({
            icon: "success"
            , title: "Success"
            , text: "Reset Password Berhasil"
        });

    </script>
    @endif

    @if (Session::get('emailtidakditemukan'))
    <script>
        Swal.fire({
            icon: "error"
            , title: "Gagal"
            , text: "Email Tidak Ditemukan"
        });

    </script>
    @endif

    @if (Session::get('linkresetdikirim'))
    <script>
        Swal.fire({
            icon: "success"
            , title: "Success"
            , text: "Link Reset Password Berhasil Dikirim"
        });

    </script>
    @endif

    @if (Session::get('tanggaltidakvalid'))
    <script>
        Swal.fire({
            icon: "error"
            , title: "Gagal"
            , text: "Tanggal Tidak Valid"
        });

    </script>
    @endif

    @if (Session::get('emailgoogle'))
    <script>
        Swal.fire({
            icon: "error"
            , title: "Gagal"
            , text: "Email ini terdaftar dengan google"
        });

    </script>
    @endif

</body>

<!-- Mirrored from creativelayers.net/themes/boxcar-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 May 2024 05:09:24 GMT -->

</html>
