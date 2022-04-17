@if(@$data)
    <input type="hidden" name="id" value="{{ $data->id }}">
@endif 
<div class="row">
    @include('commons.input.input', ['title' => 'Title', 'field' => 'title', 'entry' => @$data->title, 'require' => true, 'half' => true, 'class' => 'name'])
    @include('commons.input.input', ['title' => 'Slug', 'field' => 'slug', 'entry' => @$data->slug, 'half' => true, 'require' => true, 'class' => 'slug'])
</div>
<div class="row">
    @include('commons.input.image', ['title' => 'Image', 'field' => 'image', 'entry' => @$data->image ? asset('storage/categories/' . $data->image) : '', 'half' => true])
    @include('commons.input.select', ['title' => 'Parent Category', 'field' => 'parent_id', 'entry' => @$data->parent_id, 'selects' => @$selects, 'require' => false, 'half' => true, 'default' => 0])
</div>
<div class="row">
    @include('commons.input.textarea', ['title' => 'Description', 'field' => 'description', 'entry' => @$data->description, 'require' => false, 'half' => false])
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12 offset-5">
    <a href="{{ $back }}" class="btn btn-secondary">Cancel</a>
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
