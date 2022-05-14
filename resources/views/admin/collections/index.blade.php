@extends('admin.layouts.app')

@section('content')
    @include('commons.admin.breadcrumb', [
      'breadcrumbs' => [
          ['name' => 'List Of Collections', 'url' => '', 'class' => '']
      ],
      'title' => 'List Of Collections'
    ])
    <div class="content">
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="card box-primary">
            <div class="card-body">
                <div class="create-zone text-right mb-3">
                    <a class="btn btn-primary pull-right" href="{{ route('collections.create') }}">Create New Category</a>
                </div>
                    @include('admin.collections.table')
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
            { data: 'action', name: 'action', orderable: false, searchable:false}
        ];
        TABU.dataTable('{!! route('collections.datatable') !!}', column, $('#table'));
    </script>
@endpush
