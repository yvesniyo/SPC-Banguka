@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Dashboard</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        @include('flash::message')

        <div class="row">

            <div class="col-8">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-info">
                                <i class="fas fa-list"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Bookings</h4>
                                </div>
                                <div class="card-body">
                                    {{ $totalBookings }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-info">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Customers</h4>
                                </div>
                                <div class="card-body">
                                    {{ $totalCustomers }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-info">
                                <i class="fas fa-industry"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Services</h4>
                                </div>
                                <div class="card-body">
                                    {{ $totalServices }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-user-friends"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Employees</h4>
                                </div>
                                <div class="card-body">
                                    {{ $totalEmployees }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-tasks"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Completed Bookings</h4>
                                </div>
                                <div class="card-body">
                                    {{ $completeBookings }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-spinner"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Inprogress Bookings</h4>
                                </div>
                                <div class="card-body">
                                    {{ $inProgressBookings }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-clock-o"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Pending Bookings</h4>
                                </div>
                                <div class="card-body">
                                    {{ $pendingBookings }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fas fa-ban"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Canceled Bookings</h4>
                                </div>
                                <div class="card-body">
                                    {{ $cancelledBookings }}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row">

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-info">
                                <i class="far fa-check-circle"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Approved Bookings</h4>
                                </div>
                                <div class="card-body">
                                    {{ $totalBookings }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-money"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Earnings</h4>
                                </div>
                                <div class="card-body">
                                    {{ format_money($totalEarnings) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-5">
                        <div class="card">
                            <div class="card-header">
                                <h4>Recent Bookings</h4>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table">
                                    <tbody>
                                        @foreach($bookings as $booking)
                                        <tr class="pt-4">
                                            <td>
                                                <a href="{{ route("customers.show", $booking->customer) }}" data-toggle="tooltip" data-original-title="{{ $booking->customer->name }}">

                                                    <img src="{{ asset("assets/img/avatar/avatar-1.png") }}" class="border img-bordered-sm img-circle" height="50em" width="50em">
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-small" href="{{ route("customers.show", 1) }}">{{ $booking->customer->name }}</a><br>
                                                <i class="fa fa-envelope"></i> {{ $booking->customer->email }}<br>
                                                <i class="fa fa-phone"></i> {{ $booking->customer->phone }}<br>
                                            </td>
                                            <td>
                                                <a href="{{ route("services.show", $booking->bookable->id) }}" data-toggle="tooltip" data-original-title="{{ $booking->bookable->name }}">
                                                    {{ $booking->bookable->name }}
                                                </a>


                                            </td>
                                            <td class="text-muted">
                                                <i class="fas fa-calendar"></i> {{ $booking->bookable->interval_start_date->format("D,MY") }} -
                                                {{ $booking->bookable->interval_end_date->format("D,MY") }}<br>


                                            </td>
                                            <td class="text-center">
                                                <p>
                                                    {!! status($booking->status) !!} |
                                                    <a href="{{ route("bookings.show", $booking) }}"><i class="far fa-eye" data-toggle="tooltip" data-original-title="View"></i></a>
                                                </p>
                                                @if($booking->status == 'pending')
                                                <br><a href="#" data-booking-id="4" class="btn btn-rounded btn-outline-dark btn-sm send-reminder"><i class="fa fa-send"></i> Send Reminder</a>
                                                @endif



                                            </td>
                                        </tr>

                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>


            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ $earningsByMonth->options['chart_title'] }}</h4>

                            </div>
                            <div class="card-body">
                                {!! $earningsByMonth->renderHtml() !!}

                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ $servicesByMonth->options['chart_title'] }}</h4>
                            </div>
                            <div class="card-body">
                                {!! $servicesByMonth->renderHtml() !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ $employeesByMonth->options['chart_title'] }}</h4>

                            </div>
                            <div class="card-body">
                                {!! $employeesByMonth->renderHtml() !!}

                            </div>
                        </div>
                    </div>

                </div>


                <div class="row  ">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ $couponsByMonth->options['chart_title'] }}</h4>
                            </div>
                            <div class="card-body">
                                {!! $couponsByMonth->renderHtml() !!}
                            </div>
                        </div>



                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ $refererUrl->options['chart_title'] }}</h4>
                            </div>
                            <div class="card-body">
                                {!! $refererUrl->renderHtml() !!}
                            </div>
                        </div>

                    </div>
                </div>


            </div>

        </div>














        <div class="row">

        </div>

    </div>
</div>
@endsection

@push('js')
{!! $servicesByMonth->renderChartJsLibrary() !!}

{!! $servicesByMonth->renderJs() !!}
{!! $employeesByMonth->renderJs() !!}
{!! $couponsByMonth->renderJs() !!}
{!! $refererUrl->renderJs() !!}
{!! $earningsByMonth->renderJs() !!}






@endpush
