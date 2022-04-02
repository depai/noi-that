@extends('admin.layouts.app')

@section('content')
    @include('commons.admin.breadcrumb', [
        'breadcrumbs' => [
            ['name' => 'List Of Categories', 'url' => route('categories.index'), 'class' => ''],
            ['name' => 'Create', 'url' => '', 'class' => 'active']
        ],
        'title' => 'Create Merchant'
    ])
    <div class="content">
        <div class="card box-primary">
            <div class="card-body">
                <div class="row">
                    {!! Form::open(['route' => 'categories.store', 'class' => 'col-12', 'enctype' => 'multipart/form-data']) !!}

                        @include('admin.categories.fields', ['back' => route('categories.index')])

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
