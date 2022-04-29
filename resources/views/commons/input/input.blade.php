<div class="form-group  align-content-start {{ @$half ? 'col-6' : '' }}">
    <label class="" style="padding-left: 0">{{ $title }}
    @if(@$require)
        <span class="error">*</span>
    @endif
    </label>
    <input @if(@$require) required @endif type="{{ @$type ?? 'text'}}" class="form-control {{ @$class }}" name="{{ $field }}" value="{{ old($field) ?? @$entry }}" {{ @$extend }}>
    @error($field)
        <span class="error">{{ $errors->get($field)[0] }}</span>
    @enderror
</div>
