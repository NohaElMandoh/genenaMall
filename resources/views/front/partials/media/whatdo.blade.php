@php
 $classes = array('stepone', 'steptwo', 'stepthree','stepstepfour'); 
 $icons = array('card-getting.svg', 'card-terminal.svg', 'card-filling.svg','card-giving.svg');   

@endphp
<div class="whattodo">
    <div class="container">
        <div class="whatcontent">
            <div class="title">
                <h2>What to do ?</h2>
            </div>
            <div class="stepsss">
                <div class="row">
                    @if(!empty($steps))
                    @foreach($steps as $key=>$step)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="stepitem  {{$classes[$key]}}">
                            <div class="images">
                                <img src="{{asset('front/images/slider/'.$icons[$key].'')}}">
                            </div>
                            <div class="details">
                                <h1 class="numste">0{{$step->step}}.</h1>
                                <p class="dislead">{{$step->title_en}}</p>
                                <a class="link" href="#">{{__('media.more details')}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    {{-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="stepitem steptwo">
                            <div class="images">
                                <img src="images/slider/card-terminal.svg">
                            </div>
                            <div class="details">
                                <h1 class="numste">02.</h1>
                                <p class="dislead">Top it up in the ATM or online</p>
                                <a class="link" href="#">more details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="stepitem stepthree">
                            <div class="images">
                                <img src="images/slider/card-filling.svg">
                            </div>
                            <div class="details">
                                <h1 class="numste">03.</h1>
                                <p class="dislead">Write down the available balance in the blank field on the card
                                    cover.</p>
                                <!--                                            <a class="link" href="#">more details</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="stepitem stepstepfour">
                            <div class="images">
                                <img src="images/slider/card-giving.svg">
                            </div>
                            <div class="details">
                                <h1 class="numste">04.</h1>
                                <p class="dislead">Gift the gift card!</p>
                                <!--                                            <a class="link" href="#">more details</a>-->
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="check">
                            <p>{{__('media.You can check the balance')}} <a href="#" class="hehre">{{__('media.here')}}</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>