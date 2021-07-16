<div class="alloffevent">
    <div class="container">
        <div class="alloffevent">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm- 6 col-xs-12 othercool">
                    <div class="alloffeventItemAlone">
                        <a href="{{route('offer')}}" class="Darktop">
                            <p class="IconTitle"><span> <i class="fa fa-calendar-o"
                                        aria-hidden="true"></i></span> {{__('home.All Offers And Events')}}</p>
                        </a>
                        <div class="wirhBottom">
                            <a class="IconTitle" href="#"><span> <i class="fa fa-map-marker"
                                        aria-hidden="true"></i></span> {{__('home.Show on Map')}} </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-6 col-xs-12 othercool">
                    <div class="Owlalloffeventslider" style="display: none">
                        <div class="owl-carousel wow fadeInUp">

                            <div class="col-xs-12 othercool">
                                <div class="off_content">
                                    <div class="image">
                                        <img src="images/slider/aviaparkitem.png" alt="photos">
                                    </div>
                                    <div class="content">
                                        <h2 class="New">New</h2>
                                        <h1 class="Name">Emoji Children’s Club</h1>
                                        <p class="lead">AVIAPARK launches Telegram channel with vendor job
                                            postings</p>
                                        <div class="more">
                                            <a><span>from 24 Jul 2020 </span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 othercool">
                                <div class="off_content">
                                    <div class="image">
                                        <img src="images/slider/aviaparkitem.png" alt="photos">
                                    </div>
                                    <div class="content">
                                        <h2 class="New">New</h2>
                                        <h1 class="Name">Emoji Children’s Club</h1>
                                        <p class="lead">AVIAPARK launches Telegram channel with vendor job
                                            postings</p>
                                        <div class="more">
                                            <a><span>from 24 Jul 2020 </span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 othercool">
                                <div class="off_content">
                                    <div class="image">
                                        <img src="images/slider/aviaparkitem.png" alt="photos">
                                    </div>
                                    <div class="content">
                                        <h2 class="New">New</h2>
                                        <h1 class="Name">Emoji Children’s Club</h1>
                                        <p class="lead">AVIAPARK launches Telegram channel with vendor job
                                            postings</p>
                                        <div class="more">
                                            <a><span>from 24 Jul 2020 </span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 othercool">
                                <div class="off_content">
                                    <div class="image">
                                        <img src="images/slider/aviaparkitem.png" alt="photos">
                                    </div>
                                    <div class="content">
                                        <h2 class="New">New</h2>
                                        <h1 class="Name">Emoji Children’s Club</h1>
                                        <p class="lead">AVIAPARK launches Telegram channel with vendor job
                                            postings</p>
                                        <div class="more">
                                            <a><span>from 24 Jul 2020 </span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 othercool">
                                <div class="off_content">
                                    <div class="image">
                                        <img src="images/slider/aviaparkitem.png" alt="photos">
                                    </div>
                                    <div class="content">
                                        <h2 class="New">New</h2>
                                        <h1 class="Name">Emoji Children’s Club</h1>
                                        <p class="lead">AVIAPARK launches Telegram channel with vendor job
                                            postings</p>
                                        <div class="more">
                                            <a><span>from 24 Jul 2020 </span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 othercool">
                                <div class="off_content">
                                    <div class="image">
                                        <img src="images/slider/tous_loveme.png" alt="photos">
                                    </div>
                                    <div class="content">
                                        <h2 class="New">New</h2>
                                        <h1 class="Name">Emoji Children’s Club</h1>
                                        <p class="lead">AVIAPARK launches Telegram channel with vendor job
                                            postings</p>
                                        <div class="more">
                                            <a><span>from 24 Jul 2020 </span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 othercool">
                                <div class="off_content">
                                    <div class="image">
                                        <img src="images/slider/aviaparkitem.png" alt="photos">
                                    </div>
                                    <div class="content">
                                        <h2 class="New">New</h2>
                                        <h1 class="Name">Emoji Children’s Club</h1>
                                        <p class="lead">AVIAPARK launches Telegram channel with vendor job
                                            postings</p>
                                        <div class="more">
                                            <a><span>from 24 Jul 2020 </span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>

                    <div class="special-products">
                        <div class="slider-items-products">
                            <div class="jtv-special-block">
                                <div id="special-slider" class="product-flexslider hidden-buttons">
                                    <div
                                        class="slider-items slider-width-col4 products-grid block-content Owlalloffeventslider">
                                        @if (!empty($items))
                                        @foreach ($items as $item)
                                        <div class="item">
                                            <div class="off_content">
                                                <div class="image">
                                                    <img src="{{ voyager::image($item->image) }}"
                                                        alt="photos">
                                                </div>
                                                <div class="content">
                                                    <h2 class="New">@if(count($item->offers) > 0)   {{__('home.offer')}} @else {{__('home.new')}} @endif</h2>
                                                    <h1 class="Name">{{ $item->title }}</h1>
                                                    <p class="lead">{{ $item->short_desc }}</p>
                                                    <div class="more">
                                                        <a><span>from 24 Jul 2020 </span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
 
                                        @endforeach
                                        @endif

                                    
                         
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
