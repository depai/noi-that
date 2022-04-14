@extends('admin.layouts.app')

@section('content')
    @include('commons.admin.breadcrumb', [
      'breadcrumbs' => [
          ['name' => 'List Of Categories', 'url' => '', 'class' => '']
      ],
      'title' => 'List Of Categories'
    ])
    <div class="content">
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="card box-primary">
            <div class="card-body">
                <div class="create-zone text-right mb-3">
                    <a class="btn btn-primary pull-right" href="{{ route('categories.create') }}">Create New Category</a>
                </div>
                    @include('admin.categories.table')
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
            { data: 'image', name: 'image', orderable: false, searchable:false },
            { data: 'title', name: 'title' },
            { data: 'parent', name: 'parent', orderable: false, searchable:false },
            { data: 'action', name: 'action', orderable: false, searchable:false}
        ];
        TABU.dataTable('{!! route('categories.datatable') !!}', column, $('#table'));
    </script>
@endpush
