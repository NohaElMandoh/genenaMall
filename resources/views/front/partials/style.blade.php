 <!-- Favicon  -->
 <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/images/slider/favicon.ico')}}">

 <!-- CSS Style -->


 <link rel="stylesheet" href="{{asset('front/style.css')}}">
 @if ( Config::get('app.locale') == 'en')
 <link rel="stylesheet" href="{{asset('front/style.css')}}">
@elseif ( Config::get('app.locale') == 'ar' )

<link rel="stylesheet" href="{{asset('front/css/bootstrap-rtl.css')}}">
<link href="https://fonts.googleapis.com/css?family=Cairo:300,400,700,900" rel="stylesheet">
<link rel="stylesheet" href="{{asset('front/css/style-RTL.css')}}">

@endif


 <!----- Start owl carosel --->
 <link rel="stylesheet" href="{{asset('front/css/owl.carousel.css')}}">
 <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}">
 <!-- End owl carosel --->

  