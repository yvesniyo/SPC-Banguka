@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Dashboard</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        @include('flash::message')

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Customers</h4>
                        </div>
                        <div class="card-body">
                            {{ $totalCustomers }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i>
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
                    <div class="card-icon bg-warning">
                        <i class="far fa-file"></i>
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
                    <div class="card-icon bg-success">
                        <i class="fas fa-circle"></i>
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
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Completed Bookings</h4>
                        </div>
                        <div class="card-body">
                            {{ $totalCustomers }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Completed Bookings</h4>
                        </div>
                        <div class="card-body">
                            {{ $totalServices }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Online Bookings</h4>
                        </div>
                        <div class="card-body">
                            {{ $totalBookings }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Pending Bookings</h4>
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
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Canceled Bookings</h4>
                        </div>
                        <div class="card-body">
                            {{ $totalCustomers }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-file"></i>
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
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Earnings</h4>
                        </div>
                        <div class="card-body">
                            40,600 Rwf
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $servicesByMonth->options['chart_title'] }}</h4>
                    </div>
                    <div class="card-body">
                        {!! $servicesByMonth->renderHtml() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
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
            <div class="col-md-6 ">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $couponsByMonth->options['chart_title'] }}</h4>
                    </div>
                    <div class="card-body">
                        {!! $couponsByMonth->renderHtml() !!}
                    </div>
                </div>



            </div>
            <div class="col-md-6">
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

        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Recent Bookings</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="https://appointo.froid.works/account/customers/9" data-toggle="tooltip" data-original-title="Dr. Jaunita Schroeder Jr."><img src="https://appointo.froid.works/img/default-avatar-user.png" class="border img-bordered-sm img-circle" height="50em" width="50em"></a>
                                    </td>
                                    <td>
                                        <a class="text-uppercase" href="https://appointo.froid.works/account/customers/9">Dr. Jaunita Schroeder Jr.</a><br>
                                        <i class="icon-email"></i> udamore@robel.com<br>
                                        <i class="icon-mobile"></i> --<br>
                                    </td>
                                    <td>
                                        <ol>
                                            <li>Hair Coloring x1</li>
                                            <li>Deep Tissue Massage x1</li>
                                        </ol>
                                    </td>
                                    <td class="text-muted">
                                        <i class="icon-calendar"></i> 2021-02-20<br>
                                        <i class="icon-alarm-clock"></i> 10:30 PM
                                    </td>
                                    <td>
                                        <span class="text-uppercase small border
                                                                                                 border-warning text-warning                                                                                                                                                                                                         badge-pill">Pending</span>

                                        <br><br><a href="javascript:;" data-booking-id="4" class="btn btn-rounded btn-outline-dark btn-sm send-reminder"><i class="fa fa-send"></i> Send Reminder</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://appointo.froid.works/account/customers/5" data-toggle="tooltip" data-original-title="Mr. Devonte Robel"><img src="https://appointo.froid.works/img/default-avatar-user.png" class="border img-bordered-sm img-circle" height="50em" width="50em"></a>
                                    </td>
                                    <td>
                                        <a class="text-uppercase" href="https://appointo.froid.works/account/customers/5">Mr. Devonte Robel</a><br>
                                        <i class="icon-email"></i> apurdy@bailey.com<br>
                                        <i class="icon-mobile"></i> --<br>
                                    </td>
                                    <td>
                                        <ol>
                                            <li>Manicure x1</li>
                                            <li>Pedicure x1</li>
                                        </ol>
                                    </td>
                                    <td class="text-muted">
                                        <i class="icon-calendar"></i> 2021-02-20<br>
                                        <i class="icon-alarm-clock"></i> 10:30 PM
                                    </td>
                                    <td>
                                        <span class="text-uppercase small border
                                                 border-success text-success                                                                                                                                                                                                                                                         badge-pill">Completed</span>


                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://appointo.froid.works/account/customers/4" data-toggle="tooltip" data-original-title="Lelah Beahan PhD"><img src="https://appointo.froid.works/img/default-avatar-user.png" class="border img-bordered-sm img-circle" height="50em" width="50em"></a>
                                    </td>
                                    <td>
                                        <a class="text-uppercase" href="https://appointo.froid.works/account/customers/4">Lelah Beahan PhD</a><br>
                                        <i class="icon-email"></i> emarquardt@cremin.biz<br>
                                        <i class="icon-mobile"></i> --<br>
                                    </td>
                                    <td>
                                        <ol>
                                            <li>Hair Coloring x1</li>
                                            <li>Pedicure x1</li>
                                        </ol>
                                    </td>
                                    <td class="text-muted">
                                        <i class="icon-calendar"></i> 2021-02-20<br>
                                        <i class="icon-alarm-clock"></i> 10:30 PM
                                    </td>
                                    <td>
                                        <span class="text-uppercase small border
                                                 border-success text-success                                                                                                                                                                                                                                                         badge-pill">Completed</span>


                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://appointo.froid.works/account/customers/4" data-toggle="tooltip" data-original-title="Lelah Beahan PhD"><img src="https://appointo.froid.works/img/default-avatar-user.png" class="border img-bordered-sm img-circle" height="50em" width="50em"></a>
                                    </td>
                                    <td>
                                        <a class="text-uppercase" href="https://appointo.froid.works/account/customers/4">Lelah Beahan PhD</a><br>
                                        <i class="icon-email"></i> emarquardt@cremin.biz<br>
                                        <i class="icon-mobile"></i> --<br>
                                    </td>
                                    <td>
                                        <ol>
                                            <li>Hair Spa x1</li>
                                            <li>Manicure x1</li>
                                        </ol>
                                    </td>
                                    <td class="text-muted">
                                        <i class="icon-calendar"></i> 2021-02-17<br>
                                        <i class="icon-alarm-clock"></i> 10:30 PM
                                    </td>
                                    <td>
                                        <span class="text-uppercase small border
                                                 border-success text-success                                                                                                                                                                                                                                                         badge-pill">Completed</span>


                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://appointo.froid.works/account/customers/6" data-toggle="tooltip" data-original-title="Kristian Mohr I"><img src="https://appointo.froid.works/img/default-avatar-user.png" class="border img-bordered-sm img-circle" height="50em" width="50em"></a>
                                    </td>
                                    <td>
                                        <a class="text-uppercase" href="https://appointo.froid.works/account/customers/6">Kristian Mohr I</a><br>
                                        <i class="icon-email"></i> drew28@hartmann.com<br>
                                        <i class="icon-mobile"></i> --<br>
                                    </td>
                                    <td>
                                        <ol>
                                            <li>Pedicure x1</li>
                                            <li>Deep Tissue Massage x1</li>
                                        </ol>
                                    </td>
                                    <td class="text-muted">
                                        <i class="icon-calendar"></i> 2021-02-13<br>
                                        <i class="icon-alarm-clock"></i> 10:30 PM
                                    </td>
                                    <td>
                                        <span class="text-uppercase small border
                                                 border-success text-success                                                                                                                                                                                                                                                         badge-pill">Completed</span>


                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://appointo.froid.works/account/customers/6" data-toggle="tooltip" data-original-title="Kristian Mohr I"><img src="https://appointo.froid.works/img/default-avatar-user.png" class="border img-bordered-sm img-circle" height="50em" width="50em"></a>
                                    </td>
                                    <td>
                                        <a class="text-uppercase" href="https://appointo.froid.works/account/customers/6">Kristian Mohr I</a><br>
                                        <i class="icon-email"></i> drew28@hartmann.com<br>
                                        <i class="icon-mobile"></i> --<br>
                                    </td>
                                    <td>
                                        <ol>
                                            <li>Waxing x1</li>
                                            <li>Deep Tissue Massage x1</li>
                                        </ol>
                                    </td>
                                    <td class="text-muted">
                                        <i class="icon-calendar"></i> 2021-02-12<br>
                                        <i class="icon-alarm-clock"></i> 10:30 PM
                                    </td>
                                    <td>
                                        <span class="text-uppercase small border
                                                 border-success text-success                                                                                                                                                                                                                                                         badge-pill">Completed</span>


                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://appointo.froid.works/account/customers/8" data-toggle="tooltip" data-original-title="Hollie O'Hara"><img src="https://appointo.froid.works/img/default-avatar-user.png" class="border img-bordered-sm img-circle" height="50em" width="50em"></a>
                                    </td>
                                    <td>
                                        <a class="text-uppercase" href="https://appointo.froid.works/account/customers/8">Hollie O'Hara</a><br>
                                        <i class="icon-email"></i> bailey.teresa@reynolds.com<br>
                                        <i class="icon-mobile"></i> --<br>
                                    </td>
                                    <td>
                                        <ol>
                                            <li>Hair Spa x1</li>
                                            <li>Waxing x1</li>
                                        </ol>
                                    </td>
                                    <td class="text-muted">
                                        <i class="icon-calendar"></i> 2021-02-12<br>
                                        <i class="icon-alarm-clock"></i> 10:30 PM
                                    </td>
                                    <td>
                                        <span class="text-uppercase small border
                                                                                                 border-warning text-warning                                                                                                                                                                                                         badge-pill">Pending</span>

                                        <br><br><a href="javascript:;" data-booking-id="3" class="btn btn-rounded btn-outline-dark btn-sm send-reminder"><i class="fa fa-send"></i> Send Reminder</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://appointo.froid.works/account/customers/13" data-toggle="tooltip" data-original-title="Arash Asdasd"><img src="https://appointo.froid.works/img/default-avatar-user.png" class="border img-bordered-sm img-circle" height="50em" width="50em"></a>
                                    </td>
                                    <td>
                                        <a class="text-uppercase" href="https://appointo.froid.works/account/customers/13">Arash Asdasd</a><br>
                                        <i class="icon-email"></i> asdasd@sada.sdfas<br>
                                        <i class="icon-mobile"></i> +93-765432345<br>
                                    </td>
                                    <td>
                                        <ol>
                                            <li>Hair Spa x1</li>
                                        </ol>
                                    </td>
                                    <td class="text-muted">
                                        <i class="icon-calendar"></i> 2021-02-12<br>
                                        <i class="icon-alarm-clock"></i> 07:30 PM
                                    </td>
                                    <td>
                                        <span class="text-uppercase small border
                                                                                                 border-warning text-warning                                                                                                                                                                                                         badge-pill">Pending</span>

                                        <br><br><a href="javascript:;" data-booking-id="11" class="btn btn-rounded btn-outline-dark btn-sm send-reminder"><i class="fa fa-send"></i> Send Reminder</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://appointo.froid.works/account/customers/10" data-toggle="tooltip" data-original-title="Mara Boyer"><img src="https://appointo.froid.works/img/default-avatar-user.png" class="border img-bordered-sm img-circle" height="50em" width="50em"></a>
                                    </td>
                                    <td>
                                        <a class="text-uppercase" href="https://appointo.froid.works/account/customers/10">Mara Boyer</a><br>
                                        <i class="icon-email"></i> ycummerata@nikolaus.biz<br>
                                        <i class="icon-mobile"></i> --<br>
                                    </td>
                                    <td>
                                        <ol>
                                            <li>Pedicure x1</li>
                                            <li>Deep Tissue Massage x1</li>
                                        </ol>
                                    </td>
                                    <td class="text-muted">
                                        <i class="icon-calendar"></i> 2021-02-07<br>
                                        <i class="icon-alarm-clock"></i> 10:30 PM
                                    </td>
                                    <td>
                                        <span class="text-uppercase small border
                                                 border-success text-success                                                                                                                                                                                                                                                         badge-pill">Completed</span>


                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://appointo.froid.works/account/customers/2" data-toggle="tooltip" data-original-title="Sage Pfannerstill"><img src="https://appointo.froid.works/img/default-avatar-user.png" class="border img-bordered-sm img-circle" height="50em" width="50em"></a>
                                    </td>
                                    <td>
                                        <a class="text-uppercase" href="https://appointo.froid.works/account/customers/2">Sage Pfannerstill</a><br>
                                        <i class="icon-email"></i> mlehner@cassin.biz<br>
                                        <i class="icon-mobile"></i> --<br>
                                    </td>
                                    <td>
                                        <ol>
                                            <li>Manicure x1</li>
                                            <li>Deep Tissue Massage x1</li>
                                        </ol>
                                    </td>
                                    <td class="text-muted">
                                        <i class="icon-calendar"></i> 2021-02-03<br>
                                        <i class="icon-alarm-clock"></i> 10:30 PM
                                    </td>
                                    <td>
                                        <span class="text-uppercase small border
                                                 border-success text-success                                                                                                                                                                                                                                                         badge-pill">Completed</span>


                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="https://appointo.froid.works/account/customers/1" data-toggle="tooltip" data-original-title="M.S.Dhoni"><img src="https://appointo.froid.works/img/default-avatar-user.png" class="border img-bordered-sm img-circle" height="50em" width="50em"></a>
                                    </td>
                                    <td>
                                        <a class="text-uppercase" href="https://appointo.froid.works/account/customers/1">M.S.Dhoni</a><br>
                                        <i class="icon-email"></i> admin@example.com<br>
                                        <i class="icon-mobile"></i> 1919191919<br>
                                    </td>
                                    <td>
                                        <ol>
                                            <li>Hair Cut x1</li>
                                            <li>Manicure x1</li>
                                        </ol>
                                    </td>
                                    <td class="text-muted">
                                        <i class="icon-calendar"></i> 2021-02-01<br>
                                        <i class="icon-alarm-clock"></i> 10:30 PM
                                    </td>
                                    <td>
                                        <span class="text-uppercase small border
                                                                                                                                                                                                                                                 border-danger text-danger                                                         badge-pill">Cancelled</span>


                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
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
