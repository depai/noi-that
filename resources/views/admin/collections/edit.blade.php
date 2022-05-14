@extends('admin.layouts.app')

@section('content')
    @include('commons.admin.breadcrumb', [
      'breadcrumbs' => [
          ['name' => 'List Of Collections', 'url' => route('collections.index'), 'class' => ''],
          ['name' => 'Edit', 'url' => '', 'class' => 'active']
      ],
      'title' => 'Edit Collection'
    ])
   <div class="content">
       <div class="card box-primary">
           <div class="card-body">
               <div class="row">
                   {!! Form::model($data, ['route' => ['collections.update', $data->id], 'method' => 'patch', 'class' => 'col-12', 'enctype' => 'multipart/form-data']) !!}

                    @include('admin.collections.fields', ['back' => route('collections.index')])

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
