<div class="form-group row align-content-start {{ @$half ? 'col-6' : '' }}">
    <label class="offset-1 col-11" style="padding-left: 0">{{ $title }}
    @if(@$require)
        <span class="error">*</span>
    @endif
    </label>
    <select class="form-control offset-1 col-10 {{ @$class }}" name="{{ $field }}" {{ @$extend }}>
        <option value={{ $default }}></option>
        @foreach ($selects as $select)
            <option @if(old($field, @$entry) == $select->id) selected @endif value="{{ $select->id }}">{{ $select->title }}</option>
        @endforeach
    </select>
    @error($field)
        <span class="error offset-1">{{ $errors->get($field)[0] }}</span>
    @enderror
</div>