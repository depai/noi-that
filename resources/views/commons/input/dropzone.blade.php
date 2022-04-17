<div class="form-group  align-content-start {{ @$half ? 'col-6' : 'col-12' }}">
    <label class="" style="padding-left: 0">{{ $title }}
        @if(@$require)
            <span class="error">*</span>
        @endif
    </label>
    <div class="dropzone dz-clickable" id="upload-image">
        <div class="dz-message d-flex flex-column">
            <i class="mdi mdi-cloud-upload text-muted"></i>
            Drag &amp; Drop here or click <br/> 1240 x 820
        </div>
    </div>
</div>

