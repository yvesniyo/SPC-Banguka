<!-- Bookable Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bookable_id', 'Bookable Id:') !!}
    {!! Form::number('bookable_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    {!! Form::number('customer_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Starts At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('starts_at', 'Starts At:') !!}
    {!! Form::text('starts_at', null, ['class' => 'form-control','id'=>'starts_at']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#starts_at').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Ends At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ends_at', 'Ends At:') !!}
    {!! Form::text('ends_at', null, ['class' => 'form-control','id'=>'ends_at']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#ends_at').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Canceled At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('canceled_at', 'Canceled At:') !!}
    {!! Form::text('canceled_at', null, ['class' => 'form-control','id'=>'canceled_at']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#canceled_at').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Timezone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('timezone', 'Timezone:') !!}
    {!! Form::text('timezone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Paid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_paid', 'Total Paid:') !!}
    {!! Form::number('total_paid', null, ['class' => 'form-control']) !!}
</div>

<!-- Currency Field -->
<div class="form-group col-sm-6">
    {!! Form::label('currency', 'Currency:') !!}
    {!! Form::text('currency', null, ['class' => 'form-control','maxlength' => 3,'maxlength' => 3]) !!}
</div>

<!-- Notes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('notes', 'Notes:') !!}
    {!! Form::textarea('notes', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Cancel</a>
</div>
