@extends('admin.layouts.app')
@section('title_for_layout', 'Dashboard')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('xtreme-admin/assets/libs/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css') }}">
@endsection
@section('bread')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Dashboard</h4>

        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">

</div>
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
    <script src="{{ asset('xtreme-admin/assets/libs/bootstrap-switch/dist/js/bootstrap-switch.min.js') }}"></script>

@endpush
