<div class="form-group align-content-start {{ @$half ? 'col-6' : 'col-12' }}">
    <label class="" style="padding-left: 0">{{ $title }}
    @if(@$require)
        <span class="error">*</span>
    @endif
    </label>
    <select class="form-control  {{ @$class }}" name="{{ $field }}" {{ @$extend }}>
        <option value={{ $default }}></option>
        @foreach ($selects as $select)
            @if ($select->parent)
                <option @if(old($field, @$entry) == $select->id) selected @endif value="{{ $select->id }}">{{ $select->parent->title . ' - ' . $select->title }}</option>
            @else
                <option @if(old($field, @$entry) == $select->id) selected @endif value="{{ $select->id }}">{{ $select->title }}</option>
            @endif
        @endforeach
    </select>
    @error($field)
        <span class="error">{{ $errors->get($field)[0] }}</span>
    @enderror
</div>
