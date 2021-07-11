@extends('front.layouts.app')

@section('content')

<div class="servicepage">
    <div class="container">
        <div class="servicepagecontent">
            <div class="row">
                @if(!empty($services))
                @foreach($services as $service)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="servicepageItem">
                       <a href="offer.html" class="linkserv">
                            <span class="sricon">
                              {!!$service->image!!}
                            </span>
                            <h2 class="sername"> {{$service->title_en}}</h2>
                        </a>
                    </div>
                </div>
                @endforeach
                @endif
             
            </div>
        </div>
    </div>
</div>
@endsection
