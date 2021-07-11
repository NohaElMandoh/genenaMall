@extends('front.layouts.app')
@section('style')

    <link href="{{asset('front/plugins/lightgallary/dist/css/lightgallery.css')}}" rel="stylesheet">
@endsection
@section('content')

<div class="emojy">
    <div class="photopage">
        <div class="container">
            <div class="photopagecontent">
                 <div class="demo-gallery">
                    <ul id="lightgallery" class="list-unstyled row">
                        {{-- <li class="col-xs-12 col-sm-4 col-md-3 col-lg-3"  data-src="images/slider/u0a494_1-1.png"
                            data-sub-html="
                                           <h4>Fading Light</h4>
                                           <p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>"
                            data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                            <a href="">
                                <img class="img-responsive" src="images/slider/u0a494_1-1.png" alt="Thumb-1">
                                <span class="imageName">Img name</span>
                            </a>
                            
                            
                        </li> --}}
                        @if(!empty($photos))
                        @foreach($photos as $photo)
                        <li class="col-xs-6 col-sm-4 col-md-3"  data-src="{{ Voyager::image($photo->main_image) }}"
                         data-sub-html="<h4>{{$photo->title_en}}</h4><p>{{$photo->desc_en}}</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                            <a href="">
                                <img class="img-responsive" src="{{ Voyager::image($photo->main_image) }}" alt="Thumb-2">
                                <span class="imageName">{{$photo->title_en}}</span>
                            </a>
                        </li>
                       @endforeach
                      @endif
                    </ul>
                </div>

            </div>
        </div>
    </div>
    
                   
    
 
        
        </div>




@endsection

