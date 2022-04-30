@extends('admin.layouts.app')

@section('content')
    @include('commons.admin.breadcrumb', [
      'breadcrumbs' => [
          ['name' => 'List Of Orders', 'url' => route('orders.index'), 'class' => ''],
          ['name' => 'Edit', 'url' => '', 'class' => 'active']
      ],
      'title' => 'Update Order'
    ])
   <div class="content">
       <div class="card box-primary">
           <div class="card-body">
               <div class="row">
                   {!! Form::model($data, ['route' => ['orders.update', $data->id], 'method' => 'patch', 'class' => 'col-12', 'enctype' => 'multipart/form-data']) !!}

                    @include('admin.orders.fields', ['back' => route('orders.index'), 'extend' => 'readonly', 'update' => true])

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@push('after-scripts')
    @include('admin.orders.js')
@endpush
