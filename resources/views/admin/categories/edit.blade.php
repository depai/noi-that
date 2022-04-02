@extends('admin.layouts.app')

@section('content')
    @include('commons.admin.breadcrumb', [
      'breadcrumbs' => [
          ['name' => 'List Of Categories', 'url' => route('categories.index'), 'class' => ''],
          ['name' => 'Edit', 'url' => '', 'class' => 'active']
      ],
      'title' => 'Edit Category'
    ])
   <div class="content">
       <div class="card box-primary">
           <div class="card-body">
               <div class="row">
                   {!! Form::model($data, ['route' => ['categories.update', $data->id], 'method' => 'patch', 'class' => 'col-12', 'enctype' => 'multipart/form-data']) !!}

                    @include('admin.categories.fields', ['back' => route('categories.index')])

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
