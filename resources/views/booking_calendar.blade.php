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
            , right: 'year,month,agendaWeek,agendaDay'
        , }
        , events: @json($services)

        , eventOverlap: true
        , timeFormat: 'DD/MM'
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

            if (event.status == 'inactive') {
                element.css('background-color', 'red');
            } else if (event.status == 'pending') {
                element.css('color', '#000000');
                element.css('background-color', '#ffc107');
            } else if (event.status == 'active') {
                element.css('background-color', '#17a2b8');
            } else if (event.status == 'in progress') {
                element.css('background-color', '#007bff');
            }
        }
        , eventClick: function(calEvent, jsEvent, view) {


        }
        , editable: false
        , eventDrop: function(event, dayDelta, minuteDelta, allDay, revertFunc) {


        }
    , });

</script>


@endpush
