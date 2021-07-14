<div class="Photogallary">
    <div class="container">
        <div class="title">
            <h1>{{__('emoji.PHOTO GALLERY')}}</h1>
        </div>
        <div class="photoGallContent">
            <div class="demo-gallery">
                <ul id="lightgallery" class="list-unstyled row">
                    <li class="col-xs-12 col-sm-4 col-md-3" data-src="{{ Voyager::image($gallary[0]->main_image) }}" data-sub-html="
                               <h4>{{$gallary[0]->title_en}}</h4>
                               <p>{{$gallary[0]->desc_en}}</p>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                        <a href="">
                            <img class="img-responsive" src="{{ Voyager::image($gallary[0]->main_image) }}" alt="Thumb-1">
                        </a>

                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-3" data-src="{{ Voyager::image($gallary[1]->main_image) }}" 
                    data-sub-html=" <h4>{{$gallary[1]->title_en}}</h4>
                    <p>{{$gallary[1]->desc_en}}</p>"
                        data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                        <a href="">
                            <img class="img-responsive" src="{{ Voyager::image($gallary[1]->main_image) }}" alt="Thumb-2">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-3" data-src="{{ Voyager::image($gallary[2]->main_image) }}"
                     data-sub-html="<h4>{{$gallary[2]->title_en}}</h4> <p>{{$gallary[2]->desc_en}}</p>"
                        data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                        <a href="">
                            <img class="img-responsive" src="{{ Voyager::image($gallary[2]->main_image) }}" alt="Thumb-3">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-3" data-src="{{ Voyager::image($gallary[3]->main_image) }}" data-sub-html="       <h4>{{$gallary[3]->title_en}}</h4>             <p>{{$gallary[3]->desc_en}}</p>"
                        data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                        <a href="">
                            <img class="img-responsive" src="{{ Voyager::image($gallary[3]->main_image) }}" alt="Thumb-4">
                        </a>
                    </li>
                </ul>

                <div class="showallimg">
                    <a href="{{route('photos')}}" class="AllImg">{{__('emoji.Show all Imges')}}</a>
                </div>
            </div>

        </div>
    </div>
</div>
