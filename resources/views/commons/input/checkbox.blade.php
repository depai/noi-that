<div class="{{ @$half ? 'col-md-6' : 'col-md-12' }}">
    <div class="card">
        <div class="card-body">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="{{ $field }}" {{ @$entry == 1 ? "checked" : "" }}>
                <label class="form-check-label" for="inlineCheckbox1">{{ $title }}</label>
            </div>
        </div>
        @error($field)
            <span class="error">{{ $errors->get($field)[0] }}</span>
        @enderror
    </div>
</div>
