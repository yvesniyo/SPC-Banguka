@extends('web.master')


@section('content')
<section class="cart-area sp-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="all-title">
                    <h3 class="sec-title">
                        Checkout </h3>
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
                                    Booking Date:
                                </span>
                                <span>
                                    Wednesday, February 17th
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
                                    $88.5
                                </span>
                            </li>
                            <li>
                                <span>
                                    Employee:
                                </span>
                                <span>
                                    None
                                </span>
                            </li>
                        </ul>

                    </div>
                    <div class="instruction">
                        <h5>Any special instructions?</h5>
                        <form id="booking" class="ajax-form" method="POST">
                            <input type="hidden" name="_token" value="lk37akNkoZ6kc7f1IYR9PygfOw6mADDbMmWraumb">
                            <div class="form-group">
                                <textarea class="form-control" rows="4" name="additional_notes" placeholder="Write your message here..."></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-right">
                <div class="navigation">
                    <a href="https://appointo.froid.works/cart" class="btn btn-custom btn-dark"><i class="fa fa-angle-left mr-2"></i>Go Back</a>
                    <a href="javascript:;" onclick="saveBooking();" class="btn btn-custom btn-dark">
                        Proceed To Payment <i class="fa fa-angle-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
