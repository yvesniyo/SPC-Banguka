@extends('layouts.app')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Bookings Calendar</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        @include('flash::message')

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div id="calendar">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css">

@endpush

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js"></script>

<script>
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today'
            , center: 'title'
            , right: 'month,agendaWeek,agendaDay'
        , }
        , events: [{
                title: 'Ervin Goyette'
                , start: '2021-02-08 00:30:09',
                // url   : 'https://appointo.froid.works/account/calendar/2',
                id: '2'
                , coupon: ''
                , status: 'pending'
                , textColor: 'white'
            , }
            , {
                title: 'Ervin Goyette'
                , start: '2021-02-03 00:30:09',
                // url   : 'https://appointo.froid.works/account/calendar/3',
                id: '3'
                , coupon: ''
                , status: 'in progress'
                , textColor: 'white'
            , }
            , {
                title: 'Dr. Cecelia Boehm'
                , start: '2021-02-08 00:30:09',
                // url   : 'https://appointo.froid.works/account/calendar/4',
                id: '4'
                , coupon: ''
                , status: 'completed'
                , textColor: 'white'
            , }
            , {
                title: 'Dr. Anibal Marvin'
                , start: '2021-02-01 00:30:09',
                // url   : 'https://appointo.froid.works/account/calendar/5',
                id: '5'
                , coupon: ''
                , status: 'pending'
                , textColor: 'white'
            , }
            , {
                title: 'Trycia Spinka'
                , start: '2021-02-22 00:30:09',
                // url   : 'https://appointo.froid.works/account/calendar/6',
                id: '6'
                , coupon: ''
                , status: 'completed'
                , textColor: 'white'
            , }
            , {
                title: 'Ms. Destini Mayer DDS'
                , start: '2021-02-21 00:30:09',
                // url   : 'https://appointo.froid.works/account/calendar/8',
                id: '8'
                , coupon: ''
                , status: 'in progress'
                , textColor: 'white'
            , }
            , {
                title: 'Dr. Marilie Ebert PhD'
                , start: '2021-02-08 00:30:09',
                // url   : 'https://appointo.froid.works/account/calendar/10',
                id: '10'
                , coupon: ''
                , status: 'pending'
                , textColor: 'white'
            , }
        , ]
        , eventOverlap: true
        , timeFormat: 'hh:mm a'
        , locale: 'en'
        , eventLimit: true
        , views: {
            month: {
                eventLimit: 5
            }
        }
        , eventRender: function(event, eventElement, view) {
            if (event.title) {
                eventElement.find('.fc-title').prepend('&nbsp&nbsp<i class="fa fa-user-circle eventIcon" aria-hidden="true"></i>&nbsp;');
            }
            eventElement.find('.fc-time').prepend('<i class=" fa fa-clock-o eventIcon" aria-hidden="true"></i>&nbsp');
        }
        , eventAfterRender: function(event, element, view) {

            if (event.status == 'completed') {
                element.css('background-color', '#28a745');
            } else if (event.status == 'pending') {
                element.css('color', '#000000');
                element.css('background-color', '#ffc107');
            } else if (event.status == 'approved') {
                element.css('background-color', '#17a2b8');
            } else if (event.status == 'in progress') {
                element.css('background-color', '#007bff');
            }
        }
        , eventClick: function(calEvent, jsEvent, view) {

            let id = (calEvent.id);
            let url = "https://appointo.froid.works/account/calendar/:id";
            url = url.replace(':id', id);

            $.ajax({
                type: "GET"
                , url: url
                , data: {
                    id: id
                    , '_token': 'gMKYAPjvsbZ5KqnWqBqaqCmR4odrcBnOP5kzDpI9'
                }
                , success: function(data) {

                    $('#showModal').modal('show');

                    $('#booking-detail').html(data.view);
                }
            });
        }
        , editable: true
        , eventDrop: function(event, dayDelta, minuteDelta, allDay, revertFunc) {

            let id = (event.id);
            let url = "https://appointo.froid.works/account/calendar/:id";
            url = url.replace(':id', id);

            let newDate = (event.start);
            startDate = moment(event.start).format('Y-MM-DD HH:mm:ss');

            let couponId = (event.coupon);

            $.easyAjax({
                url: url
                , type: "POST"
                , data: {
                    id: id
                    , startDate: startDate
                    , couponId: couponId
                    , '_method': 'PUT'
                    , '_token': 'gMKYAPjvsbZ5KqnWqBqaqCmR4odrcBnOP5kzDpI9'
                }
                , success: function(response) {
                    // $('#calendar').empty();
                    // loadCalendar();
                }
                , error: function(xhr, status, error) {
                    alert("fail");
                }
            });
        }
    , });

</script>


@endpush
