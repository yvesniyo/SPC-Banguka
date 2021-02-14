@extends('web.master')


@section('content')
<section class="cart-area sp-80">
    <div class="container">
        @include('flash::message')
        <div class="row">
            <div class="col-12">
                <div class="all-title">
                    <h3 class="sec-title">
                        Booking Summary </h3>
                </div>
            </div>
        </div>
        <div class="billing-info">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-5 col-12 mb-30">
                    <div class="booking-summary mb-30">
                        <h5>Booking Summary</h5>
                        <ul>
                            <li>
                                <span>
                                    Booking Start Date:
                                </span>
                                <span>
                                    {{ $booking->starts_at->format("l M-Y") }}
                                </span>
                            </li>

                            <li>
                                <span>
                                    Booking End Date:
                                </span>
                                <span>
                                    {{ $booking->ends_at->format("l M-Y") }}
                                </span>
                            </li>

                            <li>
                                <span>
                                    Booking Time:
                                </span>
                                <span style="text-transform: none">
                                    02:30 PM
                                </span>
                            </li>
                            <li>
                                <span>
                                    Amount to pay:
                                </span>
                                <span>
                                    {{ format_money($booking->bookable->real_price) }}
                                </span>
                            </li>
                            <li>
                                <span>
                                    Employee:
                                </span>
                                <span>
                                    {{ $booking->bookable->employee->name ?? "None" }}
                                </span>
                            </li>
                            <li>
                                <span>
                                    Your Name:
                                </span>
                                <span>
                                    {{ $booking->customer->name ?? "None" }}
                                </span>
                            </li>

                            <li>
                                <span>
                                    Your contact phone:
                                </span>
                                <span>
                                    {{ $booking->customer->phone ?? "None" }}
                                </span>
                            </li>

                        </ul>

                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-right">
                <div class="navigation">
                    <a href="{{ route("web") }}" class="btn btn-custom btn-dark">
                        Continue Booking <i class="fa fa-angle-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
