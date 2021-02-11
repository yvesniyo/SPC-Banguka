<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $service->name }}</p>
</div>

<!-- Service Category Id Field -->
<div class="form-group">
    {!! Form::label('service_category_id', 'Service Category Id:') !!}
    <p>{{ $service->service_category_id }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $service->price }}</p>
</div>

<!-- Employee Id Field -->
<div class="form-group">
    {!! Form::label('employee_id', 'Employee Id:') !!}
    <p>{{ $service->employee_id }}</p>
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
    <p>{{ $service->discount }}</p>
</div>

<!-- Discount Type Field -->
<div class="form-group">
    {!! Form::label('discount_type', 'Discount Type:') !!}
    <p>{{ $service->discount_type }}</p>
</div>

<!-- Time Required Field -->
<div class="form-group">
    {!! Form::label('time_required', 'Time Required:') !!}
    <p>{{ $service->time_required }}</p>
</div>

<!-- Time Required Type Field -->
<div class="form-group">
    {!! Form::label('time_required_type', 'Time Required Type:') !!}
    <p>{{ $service->time_required_type }}</p>
</div>

