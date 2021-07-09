<div class="emojyfeature">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="emojyfeaturecontent">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                            <div class="emijicontitle">
                                <div class="images">
                                    <img src="{{ asset('front/images/slider/icon-child.svg') }}">
                                </div>
                                <div class="title">
                                    <h2 class="childname">{{ __('emoji.What is EMOJI?') }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">
                            <div class="emojdtals">
                                <p class="disck">{{ $emoje->what_desc_en }}</p>
                            </div>
                            <div class="liuldet">
                                <ul>
                                    @if (!empty($what_qas))
                                        @foreach ($what_qas as $qa)
                                            <li>
                                                <h2 class="lih">{{ $qa->question_en }} <span><a href="@if ($qa->link) {{ $qa->link }} @endif"
                                                            class="link">{{ $qa->text_link_en }}</a></span>?</h2>
                                                <p class="lip">{!! $qa->answer_en !!}</p>
                                            </li>
                                        @endforeach
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="emojyfeaturecontent">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                            <div class="emijicontitle">
                                <div class="images">
                                    <img src="{{asset('front/images/slider/icon-parent.svg')}}">
                                </div>
                                <div class="title">
                                    <h2 class="childname">{{__('emoji.Why parents')}} <br>{{__('emoji.can be calm?')}}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">
                            <div class="emojdtals">
                                <p class="disck">{{ $emoje->why_desc_en }}</p>
                            </div>
                            <div class="liuldet">
                                <ul>
                                    @if (!empty($why_qas))
                                    @foreach ($why_qas as $qa)
                                        <li>
                                            <h2 class="lih">{{ $qa->question_en }} <span><a href="@if ($qa->link) {{ $qa->link }} @endif"
                                                        class="link">{{ $qa->text_link_en }}</a></span>?</h2>
                                            <p class="lip">{!! $qa->answer_en !!}</p>
                                        </li>
                                    @endforeach
                                @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
