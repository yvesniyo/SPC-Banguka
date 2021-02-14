<!-- Bookable Id Field -->
<div class="form-group">
    {!! Form::label('bookable_id', 'Service:') !!}
    <p>{{ $booking->bookable->name }}</p>
</div>

<!-- Customer Id Field -->
<div class="form-group">
    {!! Form::label('customer_id', 'Customer:') !!}
    <p>{{ $booking->customer->name }}</p>
</div>

<!-- Starts At Field -->
<div class="form-group">
    {!! Form::label('starts_at', 'Starts At:') !!}
    <p>{{ $booking->starts_at }}</p>
</div>

<!-- Ends At Field -->
<div class="form-group">
    {!! Form::label('ends_at', 'Ends At:') !!}
    <p>{{ $booking->ends_at }}</p>
</div>

<!-- Canceled At Field -->
<div class="form-group">
    {!! Form::label('canceled_at', 'Canceled At:') !!}
    <p>{{ $booking->canceled_at }}</p>
</div>

<!-- Timezone Field -->
<div class="form-group">
    {!! Form::label('timezone', 'Timezone:') !!}
    <p>{{ $booking->timezone }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $booking->price }} {{ $booking->currency }}</p>

</div>

<!-- Quantity Field -->
<div class="form-group">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $booking->quantity }}</p>
</div>

<!-- Total Paid Field -->
<div class="form-group">
    {!! Form::label('total_paid', 'Total Paid:') !!}
    <p>{{ $booking->total_paid }} {{ $booking->currency }}</p>

</div>


<!-- Notes Field -->
<div class="form-group">
    {!! Form::label('notes', 'Notes:') !!}
    <p>{{ $booking->notes }}</p>
</div>
