@extends('front.layouts.app')

@section('content')


<div class="emojy">

 @include('front.partials.emoje.bannar')
 @include('front.partials.emoje.about')
 @include('front.partials.emoje.children')

 @include('front.partials.emoje.feature')


    <div class="Photogallary">
        <div class="container">
            <div class="title">
                <h1>PHOTO GALLERY</h1>
            </div>
            <div class="photoGallContent">
                <div class="demo-gallery">
                    <ul id="lightgallery" class="list-unstyled row">
                        <li class="col-xs-12 col-sm-4 col-md-3" data-src="images/slider/u0a494_1-1.png" data-sub-html="
                                   <h4>Fading Light</h4>
                                   <p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                            <a href="">
                                <img class="img-responsive" src="images/slider/u0a494_1-1.png" alt="Thumb-1">
                            </a>

                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-3" data-src="images/slider/u2a5412-1.png" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>"
                            data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                            <a href="">
                                <img class="img-responsive" src="images/slider/u2a5412-1.png" alt="Thumb-2">
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-3" data-src="images/slider/u3a5667.png" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>"
                            data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                            <a href="">
                                <img class="img-responsive" src="images/slider/u3a5667.png" alt="Thumb-3">
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-3" data-src="images/slider/u4.png" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>"
                            data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                            <a href="">
                                <img class="img-responsive" src="images/slider/u4.png" alt="Thumb-4">
                            </a>
                        </li>
                    </ul>

                    <div class="showallimg">
                        <a href="photos.html" class="AllImg">Show all Imges</a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="npmImges">
        <div class="container">
            <div class="npmImgescontent">
                <div class="tiltle">
                    <h1>при поддержке</h1>
                </div>
                <div class="imagesmain">
                    <img src="images/slider/zamania.svg">
                </div>


                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <div class="imgeiteim">

                            <img src="images/slider/karo_red.png">


                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <div class="imgeiteim">
                            <img src="images/slider/panda-park.svg">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <div class="imgeiteim">
                            <img src="images/slider/mirror.png">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <div class="imgeiteim">
                            <img src="images/slider/goal.svg">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <div class="imgeiteim">
                            <img src="images/slider/megaice.svg">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <div class="imgeiteim">
                            <img src="images/slider/claustro.svg">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <div class="imgeiteim">
                            <img src="images/slider/rec-park.png">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <div class="imgeiteim">
                            <img src="images/slider/icanfly.png">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <div class="imgeiteim">
                            <img src="images/slider/motor.png">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <div class="imgeiteim">
                            <img src="images/slider/play-vr.png">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <div class="imgeiteim">
                            <img src="images/slider/kidzania-new.png">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <div class="imgeiteim">
                            <img src="images/slider/slime-lab.png">
                        </div>
                    </div>



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
                        <img src="images/slider/phone_gray.svg"> </span> {{$camp->phone}}</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>




@endsection
