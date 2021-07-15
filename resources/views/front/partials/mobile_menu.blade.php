<div id="jtv-mobile-menu">
    <ul>
        <li>
            <div class="jtv-search-mob">
                <form method="POST" action ="{{route('search_items')}}">
                    @csrf
                    <div class="input-group">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
                        </div>
                        <input type="text" id='name' name='name' class="form-control simple" placeholder="Search ..." name="srch-term"
                            id="srch-term">
                    </div>
                </form>
            </div>
        </li>
        <li><a class='{{ (Route::currentRouteName()== 'home' ) ? 'active' : '' }}' href="{{route('home')}}">{{__('home.Home')}}</a>

        </li>
        <li><a class='{{ (Route::currentRouteName()== 'entertainment' ) ? 'active' : '' }}' href="{{route('entertainment')}}">{{__('home.Entertainment')}}</a>
       
        </li>
        <li><a class='{{ (Route::currentRouteName()== 'shop' ) ? 'active' : '' }}' href="{{route('shop')}}">{{__('home.shops')}}</a>
           
        </li>
        <li><a class='{{ (Route::currentRouteName()== 'restaurant' ) ? 'active' : '' }}' href="{{route('restaurant')}}">{{__('home.resturants')}}</a>
          
        </li>
        <li><a class='{{ (Route::currentRouteName()== 'kids' ) ? 'active' : '' }}' href="{{route('kids')}}">{{__('home.kids')}}</a> </li>
        <li><a class='{{ (Route::currentRouteName()== 'media' ) ? 'active' : '' }}' href="{{route('media')}}">{{__('home.media')}}</a> </li>
        <li><a class='{{ (Route::currentRouteName()== 'services' ) ? 'active' : '' }}' href="{{route('services')}}">{{__('home.services')}}</a> </li>
        <li><a  class='{{ (Route::currentRouteName()== 'offer' ) ? 'active' : '' }}' href="{{route('offer')}}">{{__('home.offers')}}</a>
        <li><a class='{{ (Route::currentRouteName()== 'photos' ) ? 'active' : '' }}'  href="{{route('photos')}}">{{__('home.photos')}}</a>

        </li>
        <li><a href="#">{{__('home.Contact Us')}}</a> </li>
    </ul>
    <div class="jtv-top-link-mob" style="display: none">
        <ul class="links">
            <li><a title="My Account" href="#">My Account</a> </li>
            <li><a title="Wishlist" href="#">Wishlist</a> </li>
            <li><a title="Checkout" href="#">Checkout</a> </li>
            <li><a title="Blog" href="#"><span>Blog</span></a> </li>
            <li class="last"><a title="Login" href="#"><span>Login</span></a> </li>
        </ul>
    </div>
</div>