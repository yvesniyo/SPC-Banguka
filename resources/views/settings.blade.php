@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">All Settings</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        @include('flash::message')



        <div class="row">
            <div class="col-12 col-sm-12 col-md-4">
                <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#config" role="tab" aria-controls="home" aria-selected="true">Config</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#cms" role="tab" aria-controls="profile" aria-selected="false">CMS</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-8">
                <div class="tab-content no-padding" id="myTab2Content">
                    <div class="tab-pane fade show active" id="config" role="tabpanel" aria-labelledby="home-tab4">
                        <div class="row">
                            @foreach($settings as $key => $setting)
                            <div class="col-lg-12">
                                <div class="card shadow-sm border-info">
                                    <div class="card-header position-relative" data-toggle="collapse" data-target="#collapseExample{{ $key }}" aria-expanded="true" aria-controls="collapseExample{{ $key }}">
                                        <label class="font-weight-bolder text-dark mb-0">
                                            <p class="text-capitalize ">
                                                {{ $key }}
                                            </p>
                                        </label>
                                        @if($key == "notification")
                                        <label class="title"> Notify me on those events, when they happen</label>
                                        @endif

                                        {{-- <i class="fa fa-user float-right  d-block position-absolute right-0 "></i> --}}



                                    </div>
                                    <div class="card-body collapse" id="collapseExample{{ $key }}">


                                        {!! Form::open(['route' => ['settings.update', ["setting"=> $key]], "method"=> "PUT"]) !!}
                                        {!! Form::token() !!}
                                        @foreach($setting as $name => $value)
                                        @php
                                        $isString = is_string($value);
                                        @endphp
                                        <div class="form-group col-sm-12">
                                            {!! Form::label($name, str_replace("_", " ",$name),["class"=> "text-uppercase"]) !!}
                                            @if($isString)
                                            {!! Form::text($name, $value, ['class' => 'form-control']) !!}
                                            @else
                                            <label class="checkbox-inline float-right">
                                                {!! Form::hidden($name, "0") !!}
                                                {!! Form::checkbox($name, null, $value) !!}
                                            </label>
                                            @endif
                                        </div>
                                        @endforeach
                                        <div class="form-group col-sm-12">
                                            {!! Form::submit("Save",["class"=> "btn btn-primary btn-block"]) !!}
                                        </div>
                                        {!! Form::close() !!}
                                        <div class="pull-right mr-3">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach


                        </div>

                    </div>
                    <div class="tab-pane fade" id="cms" role="tabpanel" aria-labelledby="profile-tab4">
                    </div>

                </div>
            </div>
        </div>




    </div>
</div>
@endsection
