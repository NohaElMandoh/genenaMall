<div class="BannerSlider">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 othercool">
                <div class="row otherowww">
                    <div class="col-lg-12 othercool">

                        <div class="jtv-slideshow">

                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div id='jtv-rev_slider_wrapper'
                                        class='rev_slider_wrapper fullwidthbanner-container'>
                                        <div id='jtv-rev_slider' class='rev_slider fullwidthabanner'>

                                            <ul>
                                                @if(!empty($sliders))
                                                @foreach ($sliders as $slider)
                                                <li data-transition='random' data-slotamount='7'
                                                data-masterspeed='1000' data-thumb='{{asset('front/images/slider/av1.png')}}'>
                                                <img src="{{ Voyager::image($slider->image) }}" alt="slide-img"
                                                    data-bgposition='left top' data-bgfit='cover'
                                                    data-bgrepeat='no-repeat' />

                                            </li>
                                                @endforeach
                                               
                                                @endif



                                                {{--<li data-transition='random' data-slotamount='7'
                                                    data-masterspeed='1000' data-thumb='{{asset('front/images/slider/av2.png')}}'>
                                                    <img src="{{asset('front/images/slider/av2.png')}}" alt="slide-img"
                                                        data-bgposition='left top' data-bgfit='cover'
                                                        data-bgrepeat='no-repeat' />

                                                </li>--}}

                                                <!--
          <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slider/av2.png'><img src="images/slider/av2.png" alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
          <div class="info">
            <div class='tp-caption jtv-sub-title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>  </span> </div>
            <div class='tp-caption jtv-large-title sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span> </span> </div>
            <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>  Working alongside healthcare professionals for the past 40 years </div>
            <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="jtv-shop-now-btn">Shop Now</a> </div>
          </div>
        </li>
-->

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- end JTV Home Slider -->


                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12 othercool ">
                        <div class="imgesbootmom">
                            <img src="{{asset('front/images/slider/av3.png')}}">
                        </div>
                    </div>
                </div>


            </div>

            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 othercool">
                <div class="Boxessser">
                    <div class="row otherowww">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 othercool">
                            <a href="shops.html" class="boxItem boxone">
                                <div class="details">
                                    <h2 class="Numb">416</h2>
                                    <p class="name"> {{__('home.shops')}} </p>
                                </div>
                              @include('front.partials.icons')
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 othercool">
                            <a href="shops.html" class="boxItem boxtwo">
                                <div class="details">
                                    <h2 class="Numb">78</h2>
                                    <p class="name"> {{__('home.resturants')}} </p>
                                </div>
                                @include('front.partials.icons')
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 othercool">
                            <a href="entertainment.html" class="boxItem boxthree">
                                <div class="details">
                                    <h2 class="Numb">27</h2>
                                    <p class="name"> {{__('home.Entertainment spots')}} </p>
                                </div>
                                @include('front.partials.icons')
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 othercool">
                            <a href="services.html" class="boxItem boxfoure">
                                <div class="details">
                                    <h2 class="Numb">77</h2>
                                    <p class="name"> {{__('home.services')}} </p>
                                </div>
                                @include('front.partials.icons')
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 othercool">
                            <a href="offer.html" class="boxItem boxfife">
                                <div class="details">
                                    <h2 class="Numb">15</h2>
                                    <p class="name"> {{__('home.offers')}} </p>
                                </div>
                                @include('front.partials.offer-icons')
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 othercool">
                            <a href="emojy.html" class="boxItem boxsix">
                                <div class="details">
                                    <h2 class="Numb">35</h2>
                                    <p class="name"> {{__('home.kids')}} </p>
                                </div>
                                @include('front.partials.icons')
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>