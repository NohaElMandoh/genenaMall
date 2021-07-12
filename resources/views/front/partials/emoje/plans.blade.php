<div class="howmuch">
    <div class="container">
        <div class="howmuchcontent">
            <div class="title">
                <h1>{{__('emoji.How much does it cost to attend the camp?')}}</h1>
            </div>
            <div class="row">
                @if(!empty($camp->plans))
                @foreach($camp->plans as $plan)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="howmuchItem">
                        <p class="day">{{$plan->days}} @if($plan->days >1) {{__('emoji.days')}} @else  {{__('emoji.day')}} @endif</p>
                        <h2 class="rub">{{$plan->cost}} {{$plan->currency}}.</h2>
                    </div>
                </div>
                @endforeach
               @endif
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
