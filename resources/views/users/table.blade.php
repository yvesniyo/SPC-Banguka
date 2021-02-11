@section('css')
@include('layouts.datatables_css')
@endsection

{!! $dataTable->table(['width' => '100%', 'class' => 'table display dataTable yvesTables']) !!}

@push('scripts')
@include('layouts.datatables_js')
{!! $dataTable->scripts() !!}
@endpush
