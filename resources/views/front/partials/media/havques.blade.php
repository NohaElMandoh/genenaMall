<div class="havques">
    <div class="container">
        <div class="havecontent">
            <div class="title">
                <h2>{{__('media.Have a question ?')}}</h2>
            </div>
            <div class="questioncontent">
                <div class="row">
                    @if(!empty($what_qas))
                    @foreach($what_qas as $ques)
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="quseionitem">
                            <div class="images">
                                <img src="{{asset('front/images/slider/bg-question.svg')}}">
                            </div>
                            <div class="buttons">
                                <button type="button" class="btn btn-primary"  onclick="qs_details({{$ques->id}})">{{$ques->question_en}}</button>
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