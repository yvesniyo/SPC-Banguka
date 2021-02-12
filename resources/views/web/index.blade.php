@extends('web.index')

@section('content')

<section class="sp-80 bg-w" id="deals_section" style="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="all-title">
                    <p> We are planning </p>
                    <h3 class="sec-title"> Our mission </h3>
                </div>
            </div>
        </div>

        <div class="row" id="owl-carousel">
            <div class="owl-carousel owl-theme owl-loaded owl-drag owl-hidden">
                <div class="owl-stage-outer">
                    <div class="owl-stage"></div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                <div class="owl-dots disabled"></div>
            </div>
        </div>

    </div>
</section>


<section class="sp-80 bg-w d-none" id="deals_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="all-title">
                    <p> Best Deals For You </p>
                    <h3 class="sec-title">
                        Deal </h3>
                </div>
            </div>
        </div>

        <div class="row" id="owl-carousel">
            <div class="owl-carousel owl-theme owl-loaded owl-drag owl-hidden">
                <div class="owl-stage-outer">
                    <div class="owl-stage"></div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                <div class="owl-dots disabled"></div>
            </div>
        </div>

    </div>
</section>

<section class="categories sp-80-50 bg-dull">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="all-title">
                    <p>we provide best services</p>
                    <h3 class="sec-title">
                        Categories </h3>
                </div>
            </div>
        </div>
        <div id="categories" class="row justify-content-center">
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-30 categories-list">
                <div class="ctg-item" style="background: var(--primary-color)">
                    <a href="javascript:;">
                        <div class="icon-box">
                            <i class="flaticon-fork"></i>
                        </div>
                        <div class="content-box">
                            <h5 class="mb-0">
                                All </h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-30 categories-list" data-category-id="2">
                <div class="ctg-item" style="background-image:url('https://appointo.froid.works/user-uploads/category/manicure.jpg')">
                    <a href="javascript:;">
                        <div class="icon-box">
                            <i class="flaticon-fork"></i>
                        </div>
                        <div class="content-box">
                            <h5 class="mb-0">
                                Courses
                            </h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-30 categories-list" data-category-id="2">
                <div class="ctg-item" style="background-image:url('https://appointo.froid.works/user-uploads/category/manicure.jpg')">
                    <a href="javascript:;">
                        <div class="icon-box">
                            <i class="flaticon-fork"></i>
                        </div>
                        <div class="content-box">
                            <h5 class="mb-0">
                                Consolutance
                            </h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-30 categories-list" data-category-id="2">
                <div class="ctg-item" style="background-image:url('https://appointo.froid.works/user-uploads/category/manicure.jpg')">
                    <a href="javascript:;">
                        <div class="icon-box">
                            <i class="flaticon-fork"></i>
                        </div>
                        <div class="content-box">
                            <h5 class="mb-0">
                                Talent
                            </h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-30 categories-list" data-category-id="2">
                <div class="ctg-item" style="background-image:url('https://appointo.froid.works/user-uploads/category/manicure.jpg')">
                    <a href="javascript:;">
                        <div class="icon-box">
                            <i class="flaticon-fork"></i>
                        </div>
                        <div class="content-box">
                            <h5 class="mb-0">
                                TNPMS
                            </h5>
                        </div>
                    </a>
                </div>
            </div>



        </div>
    </div>
</section>

<section class="listings sp-80 bg-w">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="all-title">
                    <p> types of services </p>
                    <h3 class="sec-title">
                        Services </h3>
                </div>
            </div>
        </div>
        <div id="services" class="row">
            <div class="col-lg-3 col-md-6 col-12 mb-30 services-list service-category-2">
                <div class="listing-item">
                    <div class="img-holder" style="background-image: url('https://appointo.froid.works/user-uploads/service/4/manicure.jpg')">
                        <div class="category-name">
                            <i class="flaticon-fork mr-1"></i>Nails
                        </div>
                        <div class="time-remaining">
                            <i class="fa fa-clock-o mr-2"></i>
                            <span>20 minutes</span>
                        </div>
                    </div>
                    <div class="list-content">
                        <h5 class="mb-2">
                            <a href="https://appointo.froid.works/nails/manicure">Manicure</a>
                        </h5>

                        <ul class="ctg-info centering h-center v-center">
                            <li class="mt-1">
                                <div class="service-price">
                                    <span class="unit">$</span>50
                                </div>
                            </li>
                            <li class="mt-1">
                                <div class="dropdown add-items">
                                    <a href="javascript:;" class="btn-custom btn-blue dropdown-toggle add-to-cart" data-service-price="50" data-service-id="4" data-service-name="Manicure" aria-expanded="false">
                                        Book <span class="fa fa-forward"></span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-30 services-list service-category-2">
                <div class="listing-item">
                    <div class="img-holder" style="background-image: url('https://appointo.froid.works/user-uploads/service/5/pedicure.jpg')">
                        <div class="category-name">
                            <i class="flaticon-fork mr-1"></i>Nails
                        </div>
                        <div class="time-remaining">
                            <i class="fa fa-clock-o mr-2"></i>
                            <span>20 minutes</span>
                        </div>
                    </div>
                    <div class="list-content">
                        <h5 class="mb-2">
                            <a href="https://appointo.froid.works/nails/pedicure">Pedicure</a>
                        </h5>

                        <ul class="ctg-info centering h-center v-center">
                            <li class="mt-1">
                                <div class="service-price">
                                    <span class="unit">$</span>5
                                </div>
                            </li>
                            <li class="mt-1">
                                <div class="dropdown add-items">
                                    <a href="javascript:;" class="btn-custom btn-blue dropdown-toggle add-to-cart" data-service-price="5" data-service-id="5" data-service-name="Pedicure" aria-expanded="false">
                                        Book <span class="fa fa-forward"></span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection