<div class="emojychildern">
    <div class="container">
        <div class="emojychilderncontent">
            <div class="title">
                <h2>{{__('home.EMOJI')}} <span>{{$camp->title}}</span> </h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="emojychildernitem">
                        <div class="imags">
                            <img src="{{asset('front/images/slider/smile-1.svg')}}">
                        </div>
                        <div class="details">
                            <h2 class="det">{{$camp->age_start}} - {{$camp->age_end}}</h2>
                            <p>{{__('emoji.required age')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="emojychildernitem">
                        <div class="imags">
                            <img src="{{asset('front/images/slider/smile-2.svg')}}">
                        </div>
                        <div class="details">
                            <h2 class="det">{{$camp->days}} {{__('emoji.DAYS')}}</h2>
                            <p>{{__('emoji.the length of the camp stay')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="emojychildernitem">
                        <div class="imags">
                            <img src="{{asset('front/images/slider/smile-3.svg')}}">
                        </div>
                        <div class="details">
                            <h2 class="det"> {{$camp->hours}}{{__('emoji.HOURS')}}</h2>
                            <p>{{__('emoji.of entertainment')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
