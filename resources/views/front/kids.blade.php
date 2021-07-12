@extends('front.layouts.app')
@section('style')



    <link href="{{asset('front/plugins/lightgallary/dist/css/lightgallery.css')}}" rel="stylesheet">
@endsection
@section('content')


<div class="emojy">

 @include('front.partials.emoje.bannar')
 @include('front.partials.emoje.about')
 @include('front.partials.emoje.children')

 @include('front.partials.emoje.feature')
 @include('front.partials.emoje.photogallary')

 @include('front.partials.emoje.partners')
 @include('front.partials.emoje.plans')
    

</div>



@endsection
