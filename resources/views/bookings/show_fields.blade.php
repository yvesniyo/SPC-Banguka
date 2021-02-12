<!-- Bookable Id Field -->
<div class="form-group">
    {!! Form::label('bookable_id', 'Bookable Id:') !!}
    <p>{{ $booking->bookable_id }}</p>
</div>

<!-- Customer Id Field -->
<div class="form-group">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{{ $booking->customer_id }}</p>
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
    <p>{{ $booking->price }}</p>
</div>

<!-- Quantity Field -->
<div class="form-group">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $booking->quantity }}</p>
</div>

<!-- Total Paid Field -->
<div class="form-group">
    {!! Form::label('total_paid', 'Total Paid:') !!}
    <p>{{ $booking->total_paid }}</p>
</div>

<!-- Currency Field -->
<div class="form-group">
    {!! Form::label('currency', 'Currency:') !!}
    <p>{{ $booking->currency }}</p>
</div>

<!-- Notes Field -->
<div class="form-group">
    {!! Form::label('notes', 'Notes:') !!}
    <p>{{ $booking->notes }}</p>
</div>

