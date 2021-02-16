@extends('web.master')


@section('content')
<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-12">
            <div class="all-title">
                <h3 class="sec-title">
                    Contacting Us
                </h3>
            </div>
        </div>


    </div>
    @include('flash::message')

    <div class="row">
        <div class="col-12 text-right">
            <div class="navigation">
                <a href="{{ route("web") }}" class="btn btn-custom btn-dark"><i class="fa fa-angle-left mr-2"></i>Go Back</a>
            </div>
        </div>

    </div>

</div>


@endsection
