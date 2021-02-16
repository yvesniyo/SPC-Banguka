@extends("web.master")

@section('content')

{{-- @include($helper->bladePath('includes.header')) --}}

{{-- @yield('content') --}}

@endsection

@push('css')
<link rel="stylesheet" href="{{ $helper->assetUrl('css/main.css') }}">

@if ( $helper->s('template.full_screen') == '1')
<style>
    .container {
        max-width: 100%;
    }

</style>
@endif
{{-- for any code that must be put in the <head> --}}
@if ( $helper->s('page_head') )
{!! $helper->s('page_head') !!}
@endif

@endpush
