@php
 $classes = array('imgone', 'imgtwo', 'imgthree','imgfoure');   
@endphp
<div class="images">
    @foreach($icons as $key=>$icon)
    <div class=" {{$classes[$key]}}">
        <img src="{{Voyager::image($icon->image)}}">
    </div>
   @endforeach

</div>