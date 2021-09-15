<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AUNG MIN OO</title>
    <link rel="stylesheet" href="{{asset('assets/vendor/feather-icons-web/feather.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/image_hover/css/imagehover.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/data_aos/aos.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
</head>
<body>
@include('components.navbar')
<main>
    @include('components.home')
    @include('components.about')
    @include('components.qualifications')
    @include('components.projects')
    @include('components.testimonials')
    @include('components.contact')
</main>
@include('components.footer')
<a href="" class="scroll__top" id="scroll__top"  data-aos="fade-up">
    <i class="fas fa-hand-point-up scroll__top-icon"></i>
</a>

<script type="text/javascript" src="{{asset('assets/vendor/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
<script type="text/javascript" src="{{asset('assets/vendor/slick/slick.min.js')}}"></script>
<script src="{{asset('assets/vendor/way_point/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/vendor/counter_up/counter_up.js')}}"></script>
<script src="{{asset('assets/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/vendor/data_aos/aos.js')}}"></script>
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
