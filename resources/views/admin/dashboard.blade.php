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

<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                <!-- Info Box -->
                <!-- ============================================================== -->
                <div class="card-body border-top">
                    <div class="row m-b-0">
                        <!-- col -->
                        <div class="col-lg-3 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="m-r-10"><span class="text-orange display-5"><i class="mdi mdi-wallet"></i></span></div>
                                <div><span>Tổng số sản phẩm</span>
                                    <h3 class="font-medium m-b-0">{{ $countProduct }}</h3>
                                </div>
                            </div>
                        </div>
                        <!-- col -->
                        <!-- col -->
                        <div class="col-lg-3 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="m-r-10"><span class="text-cyan display-5"><i class="mdi mdi-star-circle"></i></span></div>
                                <div><span>Số người đăng ký</span>
                                    <h3 class="font-medium m-b-0">0</h3>
                                </div>
                            </div>
                        </div>
                        <!-- col -->
                        <!-- col -->
                        <div class="col-lg-3 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="m-r-10"><span class="text-info display-5"><i class="mdi mdi-shopping"></i></span></div>
                                <div><span>Tổng số đơn hàng</span>
                                    <h3 class="font-medium m-b-0">{{ $countOrder }}</h3></div>
                            </div>
                        </div>
                        <!-- col -->
                        <!-- col -->
                        <div class="col-lg-3 col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="m-r-10"><span class="text-primary display-5"><i class="mdi mdi-currency-usd"></i></span></div>
                                <div><span>Tổng số bộ sưu tập</span>
                                    <h3 class="font-medium m-b-0">{{ $countCollection }}</h3>
                                </div>
                            </div>
                        </div>
                        <!-- col -->
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>

@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
    <script src="{{ asset('xtreme-admin/assets/libs/bootstrap-switch/dist/js/bootstrap-switch.min.js') }}"></script>

@endpush
