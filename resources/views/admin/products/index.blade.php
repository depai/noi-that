@extends('admin.layouts.app')

@section('content')
    @include('commons.admin.breadcrumb', [
      'breadcrumbs' => [
          ['name' => 'List Of Products', 'url' => '', 'class' => '']
      ],
      'title' => 'List Of Products'
    ])
    <div class="content">
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="card box-primary">
            <div class="card-body">
                <div class="create-zone text-right mb-3">
                    <a class="btn btn-primary pull-right" href="{{ route('products.create') }}">Create New Product</a>
                </div>
                    @include('admin.products.table')
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
            { data: 'image', name: 'image' },
            { data: 'title', name: 'title' },
            { data: 'category', name: 'category' },
            { data: 'rock', name: 'rock' },
            { data: 'size', name: 'size' },
            { data: 'action', name: 'action', orderable: false, searchable:false}
        ];
        TABU.dataTable('{!! route('products.datatable') !!}', column, $('#table'));
    </script>
@endpush
