<div class="footer">
    <div class="transparentfooter">
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="container-fluid">
        <div class="footercontent">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footerItem">
                        <div class="imgelogo">
                            <img src="{{ Voyager::image($website->logo_footer) }}">
                        </div>
                        <div class="Details">
                            <p>{{$website->footer_description}}</p>
                            <a href="#">Terms and rules</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                    <div class="openintime">
                        <span class="iconss"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        <div class="times">
                            <span>Mon - Thu + Sun</span><br>
                            <span>10:00 - 22:00</span><br><br>
                            <span>Fri - Sat</span><br>
                            <span>10:00 - 23:00</span><br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                    <div class="newsleter">
                        <h2 class="newstitle">
                           {{__('home.RECEIVE NEWSLETTER')}} 
                        </h2>
                        <div class="form-group">
                            <form action="" class="footer-form" id="newsLetterForm">
                                {{ csrf_field() }}
                                <div class="alert alert-success alert-success_sub" style="display:none">
                                    {{ Session::get('success') }}
                                </div>
                            <input class="form-control" type="email" required name="news_email" id='news_email' placeholder="EMAIL">
                            <button type="submit" class="btn btn_sum">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                    <div class="Links">
                        <ul>
                            <li>
                                <a href="#" class="linkItem"> {{__('home.For tenants')}}</a>
                            </li>
                            <li>
                                <a href="#" class="linkItem"> {{__('home.Procurement')}}</a>
                            </li>
                            <li>
                                <a href="#" class="linkItem"> {{__('home.Career in Aviapark')}}</a>
                            </li>
                            <li>
                                <a href="#" class="linkItem"> {{__('home.Advertising')}}</a>
                            </li>
                            <li>
                                <a href="#" class="linkItem"> {{__('home.Contacts')}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                    <div class="feedback">
                        <p class="genrall">{{__('home.GENERAL QUESTIONS')}}</p>
                        <a href="#" class="Calltel">{{$website->phone}}</a>
                        <button class="btn btn_feeeed" type="button">{{__('home.Feedback')}}</button>
                        <p class="Madein">{{__('home.Made In')}} <a href="#">{{__('home.The Lean')}}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@section('script')
<script type="text/javascript">

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
        
            </script>
@endsection