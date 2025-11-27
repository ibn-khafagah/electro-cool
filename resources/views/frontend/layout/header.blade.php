<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Masim - Air Conditioning Repair HTML Template"/>
<meta name="keywords" content="ac, air condition, air conditioning, business, cooling, handyman, heat, heating, home repair, hvac, installation, maintenance, refrigeration, repairing, ventilation"/>
<meta name="author" content="ThemeMascot"/>
<!-- Page Title -->
<title>@yield('title')</title>
<!-- Favicon and Touch Icons -->
<link href="{{asset('upload/setting/'.getSetting()->favicon)}}" rel="shortcut icon" type="image/png">
<link href="{{asset('frontend/images/apple-touch-icon.png')}}" rel="apple-touch-icon">
<link href="{{asset('frontend/images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
<link href="{{asset('frontend/images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
<link href="{{asset('frontend/images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">
<!-- Stylesheet -->
@if(App::getLocale() == 'ar')
    <link href="{{asset('frontend/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css">
@else
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
@endif
<link href="{{asset('frontend/css/animate.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/javascript-plugins-bundle.css')}}" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="{{asset('frontend/js/menuzord/css/menuzord.css')}}" rel="stylesheet"/>
<!-- CSS | timeline -->
<link href="{{asset('frontend/js/timeline-cp-responsive-vertical/timeline-cp-responsive-vertical.css')}}" rel="stylesheet"
      type="text/css">
<!-- CSS | Main style file -->
@if(App::getLocale() == 'ar')
    <link href="{{asset('frontend/css/style-main-rtl.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/css/style-main-rtl-extra.css')}}" rel="stylesheet" type="text/css">
@else
    <link href="{{asset('frontend/css/style-main.css')}}" rel="stylesheet" type="text/css">
@endif
<link id="menuzord-menu-skins" href="{{asset('frontend/css/menuzord-skins/menuzord-rounded-boxed.css')}}" rel="stylesheet"/>
<!-- CSS | Responsive media queries -->
<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Theme Color -->
<link href="{{asset('frontend/css/colors/theme-skin-color-set1.css')}}" rel="stylesheet" type="text/css">
<!-- external javascripts -->
<script src="{{asset('frontend/js/jquery.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/javascript-plugins-bundle.js')}}"></script>
<script src="{{asset('frontend/js/menuzord/js/menuzord.js')}}"></script>
<!-- REVOLUTION STYLE SHEETS -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/js/revolution-slider/css/rs6.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/js/revolution-slider/extra-rev-slider1.css')}}">
<!-- REVOLUTION LAYERS STYLES -->
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/revolution.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider/js/rs6.min.js')}}"></script>
<script src="{{asset('frontend/js/revolution-slider/extra-rev-slider1.js')}}"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
{!! ToastMagic::styles() !!}
@yield('css')
