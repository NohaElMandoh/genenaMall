@extends('front.layouts.app')

@section('content')


    <div class="giftpage">
        @include('front.partials.media.bannar')
        <div class="discription">
            <div class="container">
                <div class="disccontent">
                    {!!$website->media_desc!!}
                </div>
            </div>
        </div>

        @include('front.partials.media.whatdo')
        @include('front.partials.media.havques')
        
      

        <div class="modal fade modalquestions " id="exampleModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
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
                    <div class="modal-body">
                        <div class="modalquescont">
                            <p class="leadques"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>





@endsection
@section('script')
<script>
      $('#newsLetterForm').on('submit', function(event) {
                    event.preventDefault();
      
                    let email = $('#news_email').val();
        
                    $.ajax({
                        url: "newsLetter",
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                           
                            email: email,
                         
                        },
                        success: function(response) {
        
                            $(".alert-success_sub").css("display", "block");
                            $(".alert-success_sub").html('<P style="text-align:center">Thank you.').hide()
                                .fadeIn(1500, function() {
                                    $('.alert-success_sub');
                                }).fadeOut(1500, function() {
                                    $('.alert-success_sub');
                                }).reset();
                              
                        },
                    });
                    document.getElementById("newsLetterForm").reset();
                });
        
function qs_details(id) {
 
    $.ajax({
        url: base_url + '/qs_details/' + id,
        type: 'GET',
      
        success: function (data) {
            if (data.success == true) {
               
                $('.modal-title').text(data.result.question);

                $('.modalquescont p').html(data.result.answer);

                $('#exampleModal').modal('show');
              
            }
        }
    });
}
</script>
@endsection