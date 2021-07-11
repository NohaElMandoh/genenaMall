@extends('front.layouts.app')

@section('content')


<!--   entertainment -->
<div class="shoops">
    <div class="container">
        <div class="shopsContent">
            <div class="row">
                @if(!empty($units))
                @foreach ($units as $unit)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                   
                        
                 
                    <div class="ShopsItem">
                        <div class="shopback">
                             <div class="images">
                                <img src="{{Voyager::image($unit->image)}}">
                            </div>
                            <div class="details">
                                <h2 class="nameshose">{{$unit->title_en}}</h2>
                                <p class="discription">  @if(!empty($unit->categories))  
                                    @foreach($unit->categories  as $category )  
                                     {{$category->name_en}}@if (!$loop->last),@endif
                                        @endforeach
                                        @endif</p>
                            </div>
                        </div>
                        <div class="shopefront">
                            
                                <a href="{{route('items',$unit->id)}}" class="linkgo">{{__('home.Go to')}}</a>
                        
                        </div>
                       
                    </div>
               
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>



@endsection
