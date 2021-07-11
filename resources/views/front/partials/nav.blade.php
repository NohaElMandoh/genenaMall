<nav>
    <div class="container-fluid">
        <div class="mm-toggle-wrap">
            <div class="mm-toggle"><i class="fa fa-align-justify"></i><span class="mm-label">{{__('Menu')}}</span> </div>
        </div>
        <div class="nav-inner">
            <!-- BEGIN NAV -->
            <ul id="nav" class="hidden-xs">
                <li class="mega-menu mappeeeeliiiii"> <a class="level-top mapeeee" href="#"><span><i
                                class="fa fa-map-o" aria-hidden="true"></i> </span></a></li>

                <li class="mega-menu buttonsearchli">

                    <button class="off_content level-top" data-toggle="modal"
                        data-target="#exampleModalsearch"><svg width="42" height="42" viewBox="0 0 42 42"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke="currentColor"
                                d="M33.64 17.376c0 9.043-7.31 16.37-16.323 16.37C8.306 33.746 1 26.42 1 17.376 1 8.33 8.306 1 17.317 1 26.33 1 33.64 8.331 33.64 17.376zm-4.58 11.649L41 41 29.06 29.025z">
                            </path>
                        </svg> </button>

                </li>
                <li class="mega-menu"> 
                    <a class="level-top active" href="{{route('home')}}"><span>{{__('home.Home')}} </span></a>
                </li>

                <li class="drop-menu">
                     <a href="{{route('entertainment')}}"> <span>{{__('home.Entertainment')}}</span> </a></li>

                <li class="mega-menu">
                    <a class="level-top" href="{{route('shop')}}"><span>{{__('home.shops')}}</span></a>
                </li>

                <li class="mega-menu">
                    <a class="level-top" href="{{route('restaurant')}}"><span>{{__('home.resturants')}}</span></a>
                </li>

                <li class="drop-menu">
                    <a href="{{route('kids')}}" class="level-top "><span>{{__('home.kids')}}</span></a>
                </li>
                <li class="mega-menu">
                    <a class="level-top" href="{{route('media')}}"><span>{{__('home.media')}}</span></a>
                </li>
                <li class="mega-menu">
                    <a class="level-top" href="offer.html"><span>{{__('home.offers')}}</span></a>
                </li>
                <li class="mega-menu">
                     <a class="level-top" href="{{route('services')}}"><span>{{__('home.services')}}</span></a>
                </li>
                <li class="mega-menu">
                    <a class="level-top" href="{{route('photos')}}"><span>{{__('home.photos')}}</span></a>
                </li>

                <li class="drop-menu"><a href="#" class="level-top "><span>{{__('home.Contact Us')}}</span></a>

                </li>

            </ul>
        </div>
    </div>
</nav>