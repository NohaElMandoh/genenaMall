<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlmystore.justthemevalley.com/Bio Derma/# by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Mar 2021 15:16:24 GMT -->

<head>
    <!-- Basic page needs -->
    <meta charset="utf-8">
    <!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Genena Mall</title>
    <meta name="description"
        content="best template, template free, responsive theme, fashion store, responsive theme, responsive html theme, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
    <meta name="keywords"
        content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive theme, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template" />

    <!-- Mobile specific metas  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('front.partials.style')
    @yield('style')

</head>

<body class="cms-index-index cms-home-page">


    <!-- mobile menu -->
    @include('front.partials.mobile_menu')
    <div id="page">
        <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

        <!-- Header -->
        @include('front.partials.header')
        <!-- end header -->

        <!-- Navigation -->

        @include('front.partials.nav')
        <!-- end nav -->

        @yield('content')



        @include('front.partials.footer')

    </div>



    <div class="modal fade modalquestions bd-example-modal-lg" id="exampleModalsearch" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-body modelSarch">
                    <div class="form-group">
                        <form method="POST" action ="{{route('search_items')}}">
                            @csrf
                        <input type="text" id='name' name='name' class="form-control" placeholder="search" autofocus autocomplete="">
                        <button type="submit" class="btn btn_search">
                            <span>
                                <svg width="42" height="42" viewBox="0 0 42 42" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" stroke="currentColor"
                                        d="M33.64 17.376c0 9.043-7.31 16.37-16.323 16.37C8.306 33.746 1 26.42 1 17.376 1 8.33 8.306 1 17.317 1 26.33 1 33.64 8.331 33.64 17.376zm-4.58 11.649L41 41 29.06 29.025z">
                                    </path>
                                </svg>
                            </span>
                        </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Footer -->

    @include('front.partials.script')
    @yield('script')
</body>

<!-- Mirrored from htmlmystore.justthemevalley.com/Bio Derma/# by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Mar 2021 15:20:05 GMT -->

</html>
