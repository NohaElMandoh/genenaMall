<header>
    <div class="header-container">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <!-- Header Language -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-xs">
                        <div class="jtv-top-links">
                            <div class="links links_left">
                                <ul>
                                    <li>

                                        <a title="My Account" class="socialss  " rel="alternate"
                                            hreflang="{{ 'en' }}"
                                            href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"><span
                                                class="hidden-xs">

                                                {{ __('home.EN') }}
                                            </span></a>
                                    </li>

                                    <li> <a title="Wishlist" class="hidden-xs socialss" rel="alternate"
                                            hreflang="{{ 'ar' }}"
                                            href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                                            {{ __('home.AR') }}</a>
                                    </li>

                                    <li>
                                        <a href="#" class="oennn">
                                            <span class="hidden-xs">
                                                <svg width="16" height="16" viewBox="0 0 16 16"
                                                    xmlns="http://www.w3.org/2000/svg" class="sc-gIvpjk dVRMhB">
                                                    <path fill="currentColor"
                                                        d="M8 0C3.589 0 0 3.589 0 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8zm0 15.059A7.066 7.066 0 01.941 8 7.066 7.066 0 018 .941 7.066 7.066 0 0115.059 8 7.066 7.066 0 018 15.059zM7 4v5h5V8H8V4H7z">
                                                    </path>
                                                    @php
                                                        $t = \Carbon\Carbon::now();
                                                        $s = strtoupper(substr($t->format('l'), 0, 3));
                                                        
                                                    @endphp
                                                </svg> {{ __('OPEN TILL') }} @if ($workdays)
                                                    @foreach ($workdays as $day)
                                                        @if ($day->day == $s)
                                                            {{ $day->to }}
                                                        @endif
                                                    @endforeach
                                                @endif

                                            </span>


                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
                        <a href="{{ route('home') }}" class="image_logo">
                            @if (!empty($website->logo_header))
                                <img src="{{ Voyager::image($website->logo_header) }}">
                            @else
                                <img src="{{ asset('front/images/slider/Logo.png') }}">
                            @endif
                        </a>
                    </div>
                    <div class="col-xs-12 hidden-xs col-lg-4 col-md-4 col-sm-4">
                        <!-- Header Top Links -->
                        <div class="jtv-top-links">
                            <div class="links">
                                <ul>
                                    <li class="linkGetting"><a class="Getting"
                                            href="#">{{ __('home.Getting here') }}</a></li>
                                    <li> <a title="My Account" href="{{ $website->facebook }}"
                                            class="socialss  "><span class="hidden-xs"><i class="fa fa-facebook"
                                                    aria-hidden="true"></i></span></a> </li>
                                    <li> <a title="My Account" href="{{ $website->instagram }}"
                                            class="socialss  "><span class="hidden-xs"><i class="fa fa-instagram"
                                                    aria-hidden="true"></i></span></a> </li>
                                    <li> <a title="My Account" href="{{ $website->twitter }}"
                                            class="socialss  "><span class="hidden-xs"><i class="fa fa-twitter"
                                                    aria-hidden="true"></i></span></a> </li>
                                    <li> <a title="My Account" href="{{ $website->youtube }}"
                                            class="socialss  "><span class="hidden-xs"><i class="fa fa-youtube"
                                                    aria-hidden="true"></i></span></a> </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Header Top Links -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="display: none">
            <div class="row">

                <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 jtv-logo-box">
                    <!-- Header Logo -->
                    <div class="logo"> <a title="eCommerce" href="#"><img alt="eCommerce" src=""> </a> </div>
                    <!-- End Header Logo -->
                </div>

            </div>
        </div>
    </div>
</header>
