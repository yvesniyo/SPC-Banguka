@extends('web.master')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="all-title">
                <h3 class="sec-title">
                    Payment </h3>
            </div>
        </div>
    </div>
    <div id="invoice_container" class="billing-info payment-box">
        <div class="booking-summary mb-60">
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
        <div class="payment-type">
            <h5>Payment Method</h5>
            <div class="payments">
                <a href="javascript:;" id="stripePaymentButton" class="btn btn-custom btn-blue"><i class="fa fa-cc-stripe mr-2"></i>Stripe</a>
                <a href="https://appointo.froid.works/paypal" class="btn btn-custom btn-blue"><i class="fa fa-paypal mr-2"></i>Paypal</a>
                <a href="https://appointo.froid.works/offline-payment" class="btn btn-custom btn-blue"><i class="fa fa-money mr-2"></i>Will Pay At the Shop</a>
            </div>
        </div>
    </div>
    <div class="row mt-30">
        <div class="col-12 text-center">
            <a href="https://appointo.froid.works/account/dashboard" class="btn btn-custom">
                <i class="fa fa-home mr-2"></i>
                Go To Account</a>
        </div>
    </div>
</div>



@endsection
