@extends('admin.layouts.app')

@section('content')
    @include('commons.admin.breadcrumb', [
      'breadcrumbs' => [
          ['name' => 'List Of Products', 'url' => route('products.index'), 'class' => ''],
          ['name' => 'Edit', 'url' => '', 'class' => 'active']
      ],
      'title' => 'Edit Product'
    ])
   <div class="content">
       <div class="card box-primary">
           <div class="card-body">
               <div class="row">
                   {!! Form::model($data, ['route' => ['products.update', $data->id], 'method' => 'patch', 'class' => 'col-12', 'enctype' => 'multipart/form-data']) !!}

                    @include('admin.products.fields', ['back' => route('products.index')])

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
