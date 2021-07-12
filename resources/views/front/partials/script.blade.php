<script src="{{asset('front/js/jquery-3.3.1.min.js')}}"></script>


    <!-- jquery js -->
    <!--<script type="text/javascript" src="{{asset('front/js/jquery.min.js')}}"></script> -->

    <!-- bootstrap js -->
    <script type="text/javascript" src="{{asset('front/js/bootstrap.min.js')}}"></script>

    <!-- owl.carousel.min js -->
    <script type="text/javascript" src="{{asset('front/js/owl.carousel.min.js')}}"></script>

    <!-- jtv-jtv-mobile-menu js -->
    <script type="text/javascript" src="{{asset('front/js/jtv-mobile-menu.js')}}"></script>

    <!-- countdown js -->
    <script type="text/javascript" src="{{asset('front/js/countdown.js')}}"></script>

    <!-- main js -->
    <script type="text/javascript" src="{{asset('front/js/main.js')}}"></script>



    <!-- rev-slider js -->
    <script type="text/javascript" src="{{asset('front/js/rev-slider.js')}}"></script>
    <script type='text/javascript'>
        jQuery(document).ready(function() {
            jQuery('#jtv-rev_slider').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 1140,
                startheight: 500,
                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,
                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',
                touchenabled: 'on',
                onHoverStop: 'on',
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                spinner: 'spinner0',
                keyboardNavigation: 'off',
                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,
                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,
                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,
                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',
                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: 'off',
                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
    </script>


    <!-- Hot Deals Timer 1-->


    <script type="text/javascript">
        var dthen1 = new Date("12/25/17 11:59:00 PM");
        start = "08/04/15 03:02:11 AM";
        start_date = Date.parse(start);
        var dnow1 = new Date(start_date);
        if (CountStepper > 0)
            ddiff = new Date((dnow1) - (dthen1));
        else
            ddiff = new Date((dthen1) - (dnow1));
        gsecs1 = Math.floor(ddiff.valueOf() / 1000);

        var iid1 = "countbox_1";
        CountBack_slider(gsecs1, "countbox_1", 1);
    </script>
    <!--Newsletter Popup Start-->


    <!----- Start owl carosel --->
    <!--        <script src="js/jquery.min.js"></script>-->
    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    <!----- Ebd owl carosel --->

    <script>
        jQuery(document).ready(function() {
            // owl carousel

            $(".owl-carousel").owlCarousel({
                items: 3,
                nav: true,
                loop: true,
                autoplay: true,
                navText: ['<span class="glyphicon ClassLeft"><</span>', '<span class="glyphicon ClassRight"> ></span>'],
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    768: {
                        items: 1,
                        nav: true
                    },
                    991: {
                        items: 2,
                        nav: true,
                        loop: true
                    },
                    1024: {
                        items: 3,
                        nav: true,
                        loop: true
                    }
                }
            });
        })
    </script>
   <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
   <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
   <script src="https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js"></script>
   <script src="https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js"></script>
   <script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script>
   <script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
   <script src="https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js"></script>
   <script src="https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js"></script>
   <!--        <script src="../demo/js/lg-rotate.js"></script>-->
   <script src="{{asset('front/plugins/lightgallary/demo/js/lg-rotate.js')}}"></script>
   <script>
       lightGallery(document.getElementById('lightgallery'));
   </script>
   	<script type="text/javascript">
	
        //start dashboard links
		var base_url = '{{url("/")}}';
        </script>