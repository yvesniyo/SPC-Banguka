<html lang="en" style="--dark-primary-color:#1b1f2c;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config("app.name") }}</title>

    <!-- Below three is for SEO -->
    <meta name="description" content="SPC Banguka company investment trading technology, designed to help Rwandan young talented people in achieving their rightful success in community ">
    <meta name="keywords" content="spc,rwanda,banguka ,spc,smart ,people ,company,investement,trading,technology">

    <link type="text/css" rel="stylesheet" href="{{ asset("/assets/css/web_front-styles.css") }} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


    <style>
        .no-services {
            border: 1px solid #f7d8dd;
            background-color: #fbeeed;
            color: #d9534f;
            padding: 20px 0;
        }

        .owl-item:hover {
            margin-top: -10px;
            transition: 1s;
            box-shadow: 0px 0px 30px 0px #dadada;
        }

    </style>
    <link type="text/css" rel="stylesheet" href="{{ asset("/assets/css/web_style.css")}} ">
    <link type="text/css" rel="stylesheet" href="{{ asset("/assets/css/web_select2.min.css")}}">
    <link type=" text/css" rel="stylesheet" href="{{ asset("/assets/css/web_responsive.css")}} ">
    <link type="text/css" rel="stylesheet" href="{{ asset("/assets/css/web_helper.css")}} ">

    <style>
        :root {
            --primary-color: #414552;
            --dark-primary-color: #414552;
        }

        .topbar .logo::before,
        .topbar .logo::after {
            background: var(--dark-primary-color);

        }

    </style>

    @stack('css')
</head>
@php
$settings = settings();
@endphp

<body style="">

    <header class="header">
        <div class="head-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-12 my-lg-0 my-2">
                        <ul class="head-contact-left">
                            <li>
                                <i class="fa fa-phone"></i>
                                {{ $settings->company_phone }}
                            </li>

                            <li>
                                <i class="fa fa-envelope"></i>
                                {{ $settings->company_email }}

                            </li>





                        </ul>



                    </div>
                    <div class="col-lg-8 col-12 my-lg-0 my-2">
                        <ul class="head-contact-right">
                            <li class="language-drop mb-3">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle text-capitalize" data-toggle="dropdown">
                                        <i class="fa fa-globe"></i> Language </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item active" data-lang-code="en" href="javascript:;">English</a>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <a href="{{ route("guest.login") }}">
                                    <i class="fa fa-user mr-2"> </i>Sign In </a>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
        <nav class="topbar">
            <div class="container">
                <div class="row h-center">
                    <div class="col-lg-5 col-md-3 col-12">
                        <div class="logo">
                            <a href="{{ route("web") }}" class="text-white">
                                <img src="{{ asset("/assets/img/spc_logo.png") }}" style="height:100px;" class=" w-auto" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-9 col-12">
                        <ul class="d-flex h-center justify-content-md-end py-3 ml-md-5 ml-0">
                            <li class="search-form">
                                <form id="searchForm" action="{{ route("web.search") }}" method="GET">
                                    <span class="input-wrap">
                                        <i class="fa fa-search"></i>
                                        <input type="text" class="form-control" name="search_term" id="search_term" placeholder="Search Services Here" autocomplete="none">
                                    </span>
                                    <button type="submit" class="submit btn btn-custom br-0 btn-dark w-100">
                                        Search</button>
                                </form>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <section class="section">

        @yield('content')
    </section>


    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="company-details text-center">
                            <div class="row justify-content-center mb-5 pb-4 border-bottom">
                                <div class="col-md-4 col-sm-6 col-12 mb-30">
                                    <div class="f-content">
                                        <i class="fa fa-map-marker"></i>
                                        <p>
                                            <strong> {{ $settings->company_name }}</strong>

                                        </p>
                                        <p> {{ $settings->company_location }}</p>

                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-12 mb-30">
                                    <div class="f-content">
                                        <i class="fa fa-phone"></i>
                                        {{ $settings->company_phone }}
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-12 mb-30">
                                    <div class="f-content">
                                        <i class="fa fa-envelope"></i>
                                        <a href="mailto:{{ $settings->company_email }}">{{ $settings->company_email }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="quick-link d-flex flex-wrap align-items-center justify-content-between">
                    <a href="{{ route("web.aboutUs") }}">About Us</a>
                    <a href="{{ route("web.privacyPolicy") }}">Privacy Policy</a>
                    <a href="{{ route("web.contactUs") }}">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        © {{ $settings->company_name }} 2021
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="modal fade bs-modal-lg in" id="application-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" id="modal-data-application">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <span class="caption-subject font-red-sunglo bold uppercase" id="modelHeading"></span>
                </div>
                <div class="modal-body">
                    Loading...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="button" class="btn btn-success"><i class="fa fa-check"></i> Save</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <script src="{{ asset("/assets/js/core/jquery.min.js") }}"></script>
    <script src="{{ asset("/assets/js/core/bootstrap.min.js") }}"></script>





    <script>
        $(function() {
            /*toastr.options = {
                "progressBar": true
                , "positionClass": "toast-bottom-right"
                , "preventDuplicates": true
            };*/
        });

    </script>

    @stack('js')




</body>
</html>
