<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ config('app.name').' - Bucks' }}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="/assets/img/icon.ico" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="{{ asset('assets/js/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['/assets/css/fonts.min.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <script src="{{ asset('assets/js/app.js') }}" defer></script>
    <link href="{{ asset('assets/css/atlantis.css') }}" rel="stylesheet" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/atlantis.css')}}">
    @routes
</head>
<body>
<body>
<noscript><strong>We're sorry but vue-argon-dashboard doesn't work properly without JavaScript enabled. Please enable it
        to continue.</strong></noscript>
@inertia
<!--   Core JS Files   -->
<script src="{{ asset('assets/js/jquery.3.2.1.min.js')}}"></script>
<script src="{{ asset('assets/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

<!-- jQuery UI -->
<script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.ui.touch-punch.min.js')}}"></script>

<!-- jQuery Scrollbar -->
<script src="{{ asset('assets/js/jquery.scrollbar.min.js')}}"></script>

<!-- Atlantis JS -->
<script src="{{ asset('assets/js/atlantis.js')}}"></script>
</body>
</html>
