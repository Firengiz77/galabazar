<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

        <link href="{{asset('/front/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('/front/css/revolution-slider.css')}}" rel="stylesheet">
<link href="{{asset('/front/css/style.css')}}" rel="stylesheet">
<link rel="shortcut icon" href="{{asset('/front/images/favicon.ico')}}" type="image/x-icon">
<link rel="icon" href="{{asset('/front/images/favicon.ico')}}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="{{asset('/front/css/responsive.css')}}" rel="stylesheet">


    </head>
    <body>



                       @yield('code')


 <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>
<script src="{{asset('/front/js/jquery.js')}}"></script> 
<script src="{{asset('/front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/front/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('/front/js/revolution.min.js')}}"></script>
<script src="{{asset('/front/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('/front/js/jquery.fancybox-media.js')}}"></script>
<script src="{{asset('/front/js/owl.js')}}"></script>
<script src="{{asset('/front/js/wow.js')}}"></script>
<script src="{{asset('/front/js/appear.js')}}"></script>
<script src="{{asset('/front/js/isotope.js')}}"></script>
<script src="{{asset('/front/js/mixitup.js')}}"></script>
<script src="{{asset('/front/js/script.js')}}"></script>
    </body>
</html>
