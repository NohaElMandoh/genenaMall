 <!-- Favicon  -->
 <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/images/slider/favicon.ico')}}">

 <!-- CSS Style -->


 @if ( Config::get('app.locale') == 'en')
 <link rel="stylesheet" href="{{asset('front/style.css')}}">
@elseif ( Config::get('app.locale') == 'ar' )
<link rel="stylesheet" href="{{asset('front/style.css')}}">
@endif



 <!----- Start owl carosel --->
 <link rel="stylesheet" href="{{asset('front/css/owl.carousel.css')}}">
 <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}">
 <!-- End owl carosel --->

  