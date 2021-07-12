<div class="npmImges">
    <div class="container">
        <div class="npmImgescontent">
            <div class="tiltle">
                <h1>при поддержке</h1>
            </div>
            <div class="imagesmain">
                <img src="{{asset('front/images/slider/zamania.svg')}}">
            </div>


            <div class="row">
                @if(!empty($partners))
                @foreach($partners as $partner) 
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <div class="imgeiteim">

                        <img src="{{voyager::image($partner->image)}}">


                    </div>
                </div>
                @endforeach
                @endif
              
             
           
               

            </div>
        </div>
    </div>
</div>
