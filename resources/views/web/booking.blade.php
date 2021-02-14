@extends('web.master')


@section('content')
<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-12">
            <div class="all-title">
                <h3 class="sec-title">
                    Only one step to book with us.
                </h3>
            </div>
        </div>
    </div>
    <div class="content mx-5">
        <div class="row">
            <div class='col-lg-8 border'>
                <div class="row mt-4">
                    <div class="col-lg-5 col-md-6 col-12 mb-30 services-list service-category-2">
                        <div class="listing-item">
                            <div class="img-holder" style="background-image:url({{ $service->getFirstMediaUrl("images") }})">

                                <div class="category-name">
                                    <i class="flaticon-fork mr-1"></i>{{ $service->serviceCategory->name }}
                                </div>
                                <div class="time-remaining">
                                    <i class="fa fa-clock-o mr-2"></i>
                                    <span>{{ $service->interval }}</span>
                                </div>
                            </div>
                            <div class="list-content">
                                <h5 class="mb-2">
                                    <a href="#">{{ $service->name }}</a>
                                </h5>

                                <ul class="ctg-info centering h-center v-center">
                                    <li class="mt-1">
                                        <div class="service-price">
                                            {{ format_money($service->real_price) }}

                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h6>Description</h6>
                        <label>{!! $service->description !!}</label>
                        <br />
                        <br />

                        <h6>Time slot</h6>
                        <label class='text-dark-all'> {{ $service->interval_date_string }}</label>


                    </div>
                </div>
            </div>

            <div class=' col-lg-4 col-md-12col-sm-12  mt-3'>

                <h5>Enter your details info.</h5>

                @include("flash::message")
                @include("coreui-templates::common.errors")

                {!! Form::open(["url"=> route("web.booking.save",[
                "service"=> $service
                ]), "method"=> "POST"]) !!}
                <!-- Name Field -->
                <div class="form-group col-sm-12">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name',old("phone"), ['class' => 'form-control','required']) !!}

                </div>

                <!-- Phone Field -->
                <div class="form-group col-sm-12">
                    <label for="tel" class="col-form-label">Phone Number:</label>
                    <input type="hidden" name="full_phone" />
                    <input type="text" required name="phone" value="{{ old("phone") }}" id="tel" class="form-control bfh-phone w-100" data-country="countries_phone1" aria-label="PhoneNumber" aria-describedby="countries_phone1">
                </div>


                <!-- Name Field -->
                <div class="form-group col-sm-12">
                    {!! Form::label('notes', 'Notes:') !!}
                    {!! Form::textarea('notes',old("notes"), ['class' => 'form-control h-25','required']) !!}

                </div>




                <!-- Submit Field -->
                <div class="form-group col-sm-12">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('web') }}" class="btn btn-secondary">Cancel</a>
                </div>


                {!! Form::close() !!}
            </div>
        </div>



    </div>
</div>


@endsection


@push('css')
<link rel="stylesheet" href="{{ asset("/assets/css/intlTelInput.min.css") }}">


<style>
    .iti__flag {
        background-image: url('{{ asset("assets/img/flags.png") }}');

    }

    @media (-webkit-min-device-pixel-ratio: 2),
    (min-resolution: 192dpi) {
        .iti__flag {
            background-image: url('{{ asset("assets/img/flags@2x.png") }}');

        }
    }

    .listing-item {
        color: #222;
        background-color: #fff;
        border-radius: 10px;
        -webkit-transition: opacity 0.3s ease;
        -o-transition: opacity 0.3s ease;
        transition: opacity 0.3s ease;
        /* -webkit-box-shadow: 0px 0px 30px 0px rgb(89 89 89 / 15%); */
        box-shadow: none;
    }


    .time-remaining {
        border-radius: 0;
    }

    .listing-item .img-holder {
        border-radius: 0;

    }

    .iti {
        position: relative;
        display: block;
    }

</style>
@endpush


@push('js')


<script src="{{ asset("/assets/js/intlTelInput.min.js") }}"></script>




<script>
    var input = document.querySelector("#tel");
    window.intlTelInput(input, {
        separateDialCode: true,

        hiddenInput: "full_phone",

        utilsScript: '{{ asset("assets/js/tel_utils.js") }}',

        preferredCountries: ["rw"],

        // any initialisation options go here
    });

</script>

@endpush
