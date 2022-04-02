<div class="form-group row  align-content-start {{ @$half ? 'col-6' : '' }}">
    <label class="offset-1 col-11" style="padding-left: 0">{{ $title }}
        @if(@$require)
            <span class="error">*</span>
        @endif
    </label>
    <div class="custom-file form-control offset-1 col-10 {{ @$class }}">
        <input name="image" accept="image/*" type="file" class="custom-file-input">
        <label class="custom-file-label" for="image">Choose file</label>
    </div>
    <input type="hidden" name="delete_image" value="">
    @error($field)
        <span class="invalid-feedback d-block offset-1 col-10" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <div class="{{ $errors->get($field) ? 'd-none' : 'd-flex' }} justify-content-center overflow-hidden mt-2 js-preview-image mx-auto my-2">
        @if($entry)
            <div class="position-relative">
                <img src="{{ asset($entry) }}" style="height: 200px; width: auto">
                <a href="javascript:void(0)" class="position-absolute bg-light d-flex justify-content-center text-decoration-none js-remote-image" style="top: 0; right: 0; width: 16px; height: 16px">
                    <span class="align-self-center text-danger" style="line-height: 1">x</span>
                </a>
            </div>
        @endif
    </div>
</div>