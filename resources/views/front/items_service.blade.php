@extends('front.layouts.app')

@section('content')


    <!--   entertainment -->



    <div class="offerpages">
        <div class="container-fluid">
            <div class="offerpagescontent">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <div class="leftbarfixed">
                            <div class="serach">
                                <input type="text" class="form-control" placeholder="serch">
                                <span class="iconn"><svg width="17" height="18" viewBox="0 0 48 50"
                                        xmlns="http://www.w3.org/2000/svg" class="sc-fpPwup fnGzZo">
                                        <path
                                            d="M47.17 47.904l-14.858-16.21A18.612 18.612 0 0037.5 18.75c0-5.007-1.95-9.717-5.492-13.258A18.634 18.634 0 0018.75 0C13.743 0 9.033 1.95 5.492 5.492A18.634 18.634 0 000 18.75c0 5.007 1.95 9.717 5.492 13.258A18.634 18.634 0 0018.75 37.5c4.315 0 8.405-1.448 11.72-4.113l14.858 16.208c.247.27.582.405.922.405a1.25 1.25 0 00.923-2.093l-.003-.003zM2.497 18.75c0-8.96 7.29-16.25 16.25-16.25s16.25 7.29 16.25 16.25-7.29 16.25-16.25 16.25-16.25-7.29-16.25-16.25z"
                                            fill="currentColor"></path>
                                    </svg></span>
                            </div>
                            <div class="tapsconten">
                                <div class="row otherrow">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 othercool">
                                        <div class="tapitem">
                                            <a href="#" class="taplink">
                                                <div class="icontap">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="currentColor"
                                                            d="M21.749 2.08a.522.522 0 00-.511-.024l-6.08 3.041-6.081-3.041a.533.533 0 00-.47 0L2.29 5.214a.527.527 0 00-.291.47v15.79a.528.528 0 00.762.471l6.08-3.041 6.081 3.041a.533.533 0 00.47 0l6.316-3.158a.528.528 0 00.291-.47V2.527a.528.528 0 00-.251-.448zM8.31 17.992l-5.26 2.633V6.011l5.263-2.633v14.615zM9.367 3.378l5.263 2.634v14.614l-5.263-2.632V3.378zm11.577 14.615l-5.263 2.632V6.011l5.263-2.633v14.615z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <p class="titletap">{{ __('item.Map') }}</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 othercool">
                                        <div class="tapitem">
                                            <a href="#" class="taplink active">
                                                <div class="icontap">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="currentColor"
                                                            d="M2 6h12V2H2v4zm0 1H1V1h14v6H2zm0 7h12v-4H2v4zm0 1H1V9h14v6H2z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <p class="titletap">{{ __('item.list') }}</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 othercool">
                                        <div class="tapitem">
                                            <a href="services.html" class="taplink">
                                                <div class="icontap">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="currentColor"
                                                            d="M2 6h4V2H2v4zm0 1H1V1h6v6H2zm8-1h4V2h-4v4zm0 1H9V1h6v6h-5zm0 7h4v-4h-4v4zm0 1H9V9h6v6h-5zm-8-1h4v-4H2v4zm0 1H1V9h6v6H2z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <p class="titletap">{{ __('item.Services') }}</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="listlinkssear">
                                @php
                                    $count = 0;
                                @endphp
                                <ul>
                                    @if (!empty($services))
                                        @foreach ($services as $service)
                                            @php
                                                $count += $service->items->count();
                                            @endphp
                                        @endforeach
                                        <li>
                                            <a href="{{ route('items_service', 0) }}">{{ __('item.All') }}<span
                                                    class="numn">{{ $count }}</span></a>
                                        </li>
                                        @foreach ($services as $service)
                                            <li>
                                                <a href="{{ route('items_service', $service->id) }}">{{ $service->title_en }}
                                                    <span class="numn">{{ $service->items->count() }}</span></a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                        <div class="offerpagesoff ">
                            <div class="row">
                                @if (!empty($items_services))
                                    @foreach ($items_services as $item)
                                        <input type="hidden" id="item_image" name="item_image"
                                            value="{{ voyager::image($item->image) }}">
                                        <input type="hidden" id="item_long_image" name="item_long_image"
                                            value="{{ voyager::image($item->banar_image) }}">
                                        <input type="hidden" id="item_id" name="item_id" value="{{ $item->id }}">

                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                            <button class="off_content" id='model1' data-id="{{ $item->id }}">
                                                <div class="image">
                                                    <img src="{{ voyager::image($item->image) }}" alt="photos">
                                                </div>
                                                <div class="content">
                                                    {{-- <h2 class="New ">  offer </h2> --}}

                                                    <h1 class="Name">{{ $item->title_en }}</h1>
                                                    <p class="lead">{{ $item->short_desc_en }}</p>
                                                    {{-- <div class="more">
                                        <a><span>from 24 Jul 2020 </span></a>
                                    </div> --}}
                                                </div>
                                            </button>

                                        </div>
                                    @endforeach
                                @endif
                            </div>
                          
                        </div>

                    </div>


                </div>
            </div>
        </div>
        
    </div>



    <div class="modal fade modalquestions bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mod_title" id="exampleModalLabel"> <a href="#" class="share"><svg width="24"
                                height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor"
                                    d="M18 14a4 4 0 00-3.325 1.778l-4.902-2.45a3.981 3.981 0 000-2.656l4.902-2.45A4 4 0 0018 10c2.206 0 4-1.794 4-4s-1.794-4-4-4a4.005 4.005 0 00-3.773 5.327L9.325 9.778A4 4 0 006 8c-2.206 0-4 1.794-4 4s1.794 4 4 4a4 4 0 003.325-1.778l4.902 2.45A4.005 4.005 0 0018 22c2.206 0 4-1.794 4-4s-1.794-4-4-4zm0-11c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3zM6 15c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm12 6c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3z">
                                </path>
                            </svg></a> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" class="sc-cLpxrn gaNOCf">
                                <path fill="currentColor"
                                    d="M13.028 12l7.759 7.759a.727.727 0 01-1.028 1.028L12 13.028l-7.759 7.759a.725.725 0 01-1.028 0 .727.727 0 010-1.028L10.972 12 3.213 4.241a.727.727 0 111.028-1.028L12 10.972l7.759-7.759a.727.727 0 011.028 1.028L13.028 12z">
                                </path>
                            </svg></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="beforeshop">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                                <div class="images">
                                    <img id='main_image' src="" alt="photos">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                                <div class="offdetbef">
                                    <div class="content">
                                        <h2 class="New offer_box"> &nbsp;</h2>
                                        <h1 class="Name" id='model_title'></h1>
                                        <p class="lead" id='mid_desc'></p>

                                        <div class="more">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModalshop" data-dismiss="modal">
                                                {{ __('item.to shop') }}</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade modalquestions  bd-example-modal-lg" id="exampleModalshop" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalshop" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mod_title " id="exampleModalLabel"> <a href="#" class="share"><svg width="24"
                                height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor"
                                    d="M18 14a4 4 0 00-3.325 1.778l-4.902-2.45a3.981 3.981 0 000-2.656l4.902-2.45A4 4 0 0018 10c2.206 0 4-1.794 4-4s-1.794-4-4-4a4.005 4.005 0 00-3.773 5.327L9.325 9.778A4 4 0 006 8c-2.206 0-4 1.794-4 4s1.794 4 4 4a4 4 0 003.325-1.778l4.902 2.45A4.005 4.005 0 0018 22c2.206 0 4-1.794 4-4s-1.794-4-4-4zm0-11c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3zM6 15c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm12 6c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3z">
                                </path>
                            </svg></a>
                        Offer
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" class="sc-cLpxrn gaNOCf">
                                <path fill="currentColor"
                                    d="M13.028 12l7.759 7.759a.727.727 0 01-1.028 1.028L12 13.028l-7.759 7.759a.725.725 0 01-1.028 0 .727.727 0 010-1.028L10.972 12 3.213 4.241a.727.727 0 111.028-1.028L12 10.972l7.759-7.759a.727.727 0 011.028 1.028L13.028 12z">
                                </path>
                            </svg></span>
                    </button>
                </div>
                <div class="modal-body modelbodyshopcat">
                    <div class="offershop">
                        <div class="imsges">
                            <img id='bannar_image' src="{{ asset('front/images/slider/700x200_01.png') }}">
                        </div>
                        <div class="categoryimg">
                            <div class="imagcat">
                                <img id='model2_image' src="{{ asset('front/images/slider/5_karmanov.png') }}">
                            </div>
                            <p class="cattiltle">Category title</p>
                        </div>


                    </div>
                    <div class="pagrag">
                        <p id='long_desc'></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btnapplay"> {{ __('item.Applay') }}</button>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('script')
    <script>
        $(document).on('click', '#model1', function(e) {
            // var item_id = $('#item_id').val();
            var item_id = $(this).attr("data-id");

            var x = $('#item_image').val();
            var y = $('#item_long_image').val();
            $('.offer_box').hide();
            var offer;
            $.ajax({
                url: base_url + '/item_service_details/' + item_id,
                type: 'GET',

                success: function(data) {
                    if (data.success == true) {

                        $('#modal_title').text(data.result.title_en);

                        $('#mid_desc').html(data.result.desc_en);
                        $('#long_desc').html(data.result.long_desc_en);
                        $('.cattiltle').text(data.result.title_en);
                        // if (data.offer != 0) {

                        //     $('.mod_title').html('offer/' + data.result.title_en);
                        //     $('.offer_box').html('offer');
                        //     $('.offer_box').show();
                        // } else
                        $('.mod_title').html(data.result.title_en);
                        $("#main_image").attr('src', x);
                        $("#model2_image").attr('src', x);
                        $("#bannar_image").attr('src', y);


                        $('#exampleModal').modal('show');

                    }
                }
            });
        });
    </script>
@endsection
