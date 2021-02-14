@extends('web.master')


@section('content')


<section class="listings sp-80 bg-w">
    @if($services->count() == 0)
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h3 class="no-services">
                    <i class="fa fa-exclamation-triangle"></i> No Services Found.</h3>
            </div>

            <div class="col-12 text-right">
                <div class="navigation">
                    <a href="{{ route("web") }}" class="btn btn-custom btn-dark"><i class="fa fa-angle-left mr-2"></i>Go Back</a>
                </div>
            </div>

        </div>
    </div>
    @else
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
            <div class="row">
                @foreach($services as $service)
                <div class="col-lg-4 col-md-6 col-12 mb-30 services-list service-category-2">
                    <div class="listing-item">
                        <div class="img-holder">
                            <img src=" {{ $service->getFirstMediaUrl("images") }} " alt="list">

                            <div class="category-name">
                                <i class="flaticon-fork mr-1"></i>{{ $service->serviceCategory->name }}
                            </div>
                            <div class="time-remaining">
                                <i class="fa fa-clock-o mr-2"></i>
                                <span data-service="">{{ $service->interval }}</span>
                            </div>
                        </div>
                        <div class="list-content">
                            <h5 class="mb-2">
                                <a href="#">{{ $service->name }}</a>
                            </h5>
                            <ul class="ctg-info centering h-center v-center">
                                <li class="mt-1">
                                    <div class="service-price">
                                        {{ $service->price }} <span class="unit">$</span>
                                    </div>
                                </li>
                                <li class="mt-1">
                                    <div class="dropdown add-items">
                                        ic<a href="{{ route("web.booking", $service) }}" class="btn-custom btn-blue dropdown-toggle add-to-cart" data-service-price="30" data-service-id="7" data-service-name="Deep Tissue Massage" aria-expanded="false">
                                            Book <span class="fa fa-forward"></span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                @endforeach


                <div class="col-12 text-right">
                    <div class="navigation">
                        <a href="{{ route("web") }}" class="btn btn-custom btn-dark"><i class="fa fa-angle-left mr-2"></i>Go Back</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @endif

</section>

@endsection
