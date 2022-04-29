@extends('admin.layouts.app')

@section('content')
    @include('commons.admin.breadcrumb', [
      'breadcrumbs' => [
          ['name' => 'List Of Orders', 'url' => '', 'class' => '']
      ],
      'title' => 'List Of Orders'
    ])
    <div class="content">
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="card box-primary">
            <div class="card-body">
                <div class="create-zone text-right mb-3">
                    <a class="btn btn-primary pull-right" href="{{ route('orders.create') }}">Create New Order</a>
                </div>
                    @include('admin.orders.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection
@push('scripts')
    <script>
        var column = [
            { data: 'id', name: 'id' },
            { data: 'full_name', name: 'full_name' },
            { data: 'phone', name: 'phone', orderable: false },
            { data: 'email', name: 'email', orderable: false },
            { data: 'address', name: 'address', orderable: false },
            { data: 'price', name: 'price' },
            { data: 'status', name: 'status', searchable:false },
            { data: 'action', name: 'action', orderable: false, searchable:false}
        ];
        TABU.dataTable('{!! route('orders.datatable') !!}', column, $('#table'));
    </script>
@endpush
