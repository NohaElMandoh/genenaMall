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


    

    <div class="npmImges">
        <div class="container">
            <div class="npmImgescontent">
                <div class="tiltle">
                    <h1>при поддержке</h1>
                </div>
                <div class="imagesmain">
                    <img src="{{asset('front/images/slider/zamania.svg')}}">
                </div>


                <div class="row">
                    @if(!empty($partners))
                    @foreach($partners as $partner) 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <div class="imgeiteim">

                            <img src="{{voyager::image($partner->image)}}">


                        </div>
                    </div>
                    @endforeach
                    @endif
                  
                 
               
                   

                </div>
            </div>
        </div>
    </div>

    <div class="howmuch">
        <div class="container">
            <div class="howmuchcontent">
                <div class="title">
                    <h1>How much does it cost to attend the camp?</h1>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="howmuchItem">
                            <p class="day">1 day</p>
                            <h2 class="rub">3 500 RUB.</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="howmuchItem">
                            <p class="day">1 day</p>
                            <h2 class="rub">3 500 RUB.</h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="howmuchcall">
                            <a class="clllink" href="#"><span>
                        <img src="{{asset('front/images/slider/phone_gray.svg')}}"> </span> {{$camp->phone}}</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>



@endsection
