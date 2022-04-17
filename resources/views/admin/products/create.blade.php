@extends('admin.layouts.app')

@section('content')
    @include('commons.admin.breadcrumb', [
        'breadcrumbs' => [
            ['name' => 'List Of Products', 'url' => route('products.index'), 'class' => ''],
            ['name' => 'Create', 'url' => '', 'class' => 'active']
        ],
        'title' => 'Create Product'
    ])
    <div class="content">
        <div class="card box-primary">
            <div class="card-body">
                <div class="row">
                    {!! Form::open(['route' => 'products.store', 'class' => 'col-12', 'enctype' => 'multipart/form-data']) !!}

                        @include('admin.products.fields', ['back' => route('products.index')])

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
<link rel="stylesheet" href="https://cdn.rawgit.com/enyo/dropzone/master/dist/dropzone.css">
@endsection
@php($images = getFileFromPath(@$data->productImages, 'storage/'))
@push('after-scripts')
    @include('admin.products.js')
@endpush
