@extends('admin.layouts.app')

@section('content')
    @include('commons.admin.breadcrumb', [
      'breadcrumbs' => [
          ['name' => 'Settings', 'url' => '', 'class' => '']
      ],
      'title' => 'Settings'
    ])
    <div class="content">
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="card box-primary">
            <div class="card-body">
                {!! Form::open(['route' => 'settings.store', 'class' => 'col-12', 'enctype' => 'multipart/form-data']) !!}
                <div class="row">
                    <div class="form-group align-content-start col-6">
                        <label for="">Banner (*.mp4) <span class="error">*</span></label>
                        <div class="custom-file form-control">
                            <input id="banner" name="banner" accept="video/mp4" type="file" class="custom-file-input">
                            <label class="custom-file-label" for="banner">Choose file</label>
                        </div>
                        <div class="d-flex justify-content-center overflow-hidden mt-3">
                            <video width="320" height="200" controls>
                                <source src="{{ asset('themes/gavias_facdori/videos/videoplayback.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>

                    <div class="form-group align-content-start col-6">
                        <label for="">Logo (*.png) <span class="error">*</span></label>
                        <div class="custom-file form-control">
                            <input id="image" name="logo" accept="image/png" type="file" class="custom-file-input">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                        <div class="d-flex justify-content-center overflow-hidden py-3 bg-dark mt-3">
                            <img src="{{ asset('themes/gavias_facdori/logo.png') }}" style="height: 200px; width: auto">
                        </div>
                    </div>

                    <div class="form-group align-content-start col-6">
                        <label for="">Black Logo (*.png) <span class="error">*</span></label>
                        <div class="custom-file form-control">
                            <input id="image-black" name="logo_black" accept="image/png" type="file" class="custom-file-input">
                            <label class="custom-file-label" for="image-black">Choose file</label>
                        </div>
                        <div class="d-flex justify-content-center overflow-hidden py-3 mt-3">
                            <img src="{{ asset('themes/gavias_facdori/logo-black.png') }}" style="height: 200px; width: auto">
                        </div>
                    </div>

                    <div class="form-group align-content-start col-6">
                        <label for="">White Logo (*.png) <span class="error">*</span></label>
                        <div class="custom-file form-control">
                            <input id="image-white" name="logo_white" accept="image/png" type="file" class="custom-file-input">
                            <label class="custom-file-label" for="image-white">Choose file</label>
                        </div>
                        <div class="d-flex justify-content-center overflow-hidden py-3 bg-dark mt-3">
                            <img src="{{ asset('themes/gavias_facdori/logo-white.png') }}" style="height: 200px; width: auto">
                        </div>
                    </div>

                    <div class="form-group col-12 text-center">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection

