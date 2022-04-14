<div class="form-group align-content-start {{ @$half ? 'col-6' : 'col-12' }}">
    <label class="" style="padding-left: 0">{{ $title }}
        @if(@$require)
            <span class="error">*</span>
        @endif
    </label>
    <textarea class="form-control {{ @$class }}" name="{{ $field }}" rows=5>{{ old($field) ?? @$entry }}</textarea>
    @error($field)
        <span class="error">{{ $errors->get($field)[0] }}</span>
    @enderror
</div>
