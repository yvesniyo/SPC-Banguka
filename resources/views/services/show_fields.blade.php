<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p><img src="{{ $service->getFirstMediaUrl("images") }}" style="height: 100px;" class="image-preview w-auto"></p>


</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $service->name }}</p>
</div>

<!-- Service Category Id Field -->
<div class="form-group">
    {!! Form::label('service_category_id', 'Service Category:') !!}
    <p>{{ $service->serviceCategory->name }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $service->price }}</p>
</div>

<!-- Employee Id Field -->
<div class="form-group">
    {!! Form::label('employee_id', 'Employee:') !!}
    <p>{{ $service->employee->name ?? ""}}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $service->status }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $service->description }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $service->slug }}</p>
</div>

<!-- Discount Field -->
<div class="form-group">
    {!! Form::label('discount', 'Discount:') !!}
    <p>{{ $service->discount }} {{ $service->discount_type }}</p>

</div>


<!-- Time Required Field -->
<div class="form-group">
    {!! Form::label('time_required', 'Time Required:') !!}
    <p>{{ $service->time_required }} {{ $service->time_required_type }}</p>

</div>
