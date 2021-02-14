<div class="col-12">
    <div class="row">
        <!-- Name Field -->
        <div class="form-group col-4">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
        </div>
        <!-- Slug Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('slug', 'Slug:') !!}
            {!! Form::text('slug', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
        </div>



        <!-- Service Category Id Field -->
        <div class="form-group col-4">
            {!! Form::label('service_category_id', 'Service Category:') !!}
            {!! Form::select('service_category_id', $categories,null, ['class' => 'form-control']) !!}
        </div>

    </div>
</div>

<div class="col-12">
    <div class="row">
        <!-- Price Field -->
        <div class="form-group col-sm-3">
            {!! Form::label('price', 'Price:') !!}
            {!! Form::number('price', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
        </div>
        <!-- Discount Field -->
        <div class="form-group col-sm-3">
            {!! Form::label('discount', 'Discount:') !!}
            {!! Form::number('discount', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
        </div>

        <!-- Discount Type Field -->
        <div class="form-group col-sm-3">
            {!! Form::label('discount_type', 'Discount Type:') !!}
            {!! Form::select('discount_type', discountType(),null, ['class' => 'form-control']) !!}

        </div>

        <!-- Total Type Field -->
        <div class="form-group col-sm-3">
            {!! Form::label('calculated_total', 'Calculated Total:') !!}
            <div>
                {!! Form::label('total', '. Rwf') !!}


            </div>

        </div>


    </div>
</div>
<!-- Employee Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('employee_id', 'Employee:') !!}
    {!! Form::select('employee_id', [""=>"None "]+$employees->toArray(),null, ['class' => 'form-control']) !!}
</div>





<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control summernote-simple']) !!}

</div>

<div class="col-12">
    <div class="row">

        <div class="form-group col-sm-6">
            <label>Date Range Of Service</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-calendar"></i>
                    </div>
                </div>
                @if(old("dateRange"))
                <input type="text" value="{{ old("dateRange") }}" name="dateRange" class="form-control daterange-cus">
                @else
                @php
                $dates = $service->start_date ?? false;

                @endphp
                @if($dates)
                <input type="text" value="{{ $service->start_date  }} - {{ $service->end_date  }} " name="dateRange" class="form-control daterange-cus">
                @else
                <input type="text" name="dateRange" class="form-control daterange-cus">
                @endif
                @endif
            </div>
        </div>
        <!-- Status Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('status', 'Status:') !!}
            {!! Form::select('status', boolStatus(), null, ['class' => 'form-control']) !!}

        </div>


    </div>
</div>

<div class="form-group col-sm-12">
    {!! Form::label('image', 'Image :') !!}
    {!! Form::file('image', null, ['class' => 'form-control']) !!}

</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancel</a>
</div>

@push('css')
<link rel="stylesheet" href="{{ asset("/assets/css/summernote-bs4.css") }}">
<link rel="stylesheet" href="{{ asset("/assets/css/daterangepicker.css") }}">



@endpush
@push('js')
<script src="{{ asset("/assets/js/summernote-bs4.js") }}"></script>
<script src="{{ asset("/assets/js/daterangepicker.js") }}"></script>

<script>
    $('.daterange-cus').daterangepicker({
        locale: {
            format: 'YYYY-MM-DD'
        }
        , drops: 'down'
        , opens: 'right'
    });


    function convertToSlug(Text) {
        return Text
            .toLowerCase()
            .replace(/[^\w ]+/g, '')
            .replace(/ +/g, '-');
    }

    $("#name").on("keyup", function(e) {
        text = convertToSlug($("#name").val());
        $("#slug").val(text);
        console.log(text);
    });

</script>

<script>

</script>
@endpush
