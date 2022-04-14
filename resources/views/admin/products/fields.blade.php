@if(@$data)
    <input type="hidden" name="id" value="{{ $data->id }}">
@endif 
<div class="row">
    @include('commons.input.input', ['title' => 'Title', 'field' => 'title', 'entry' => @$data->title, 'require' => true, 'half' => true, 'class' => 'name'])
    @include('commons.input.input', ['title' => 'Slug', 'field' => 'slug', 'entry' => @$data->slug, 'half' => true, 'require' => true, 'class' => 'slug'])
</div>
<div class="row">
    @include('commons.input.select', ['title' => 'Collection', 'field' => 'collection_id', 'entry' => @$data->collection_id, 'selects' => @$collections, 'require' => true, 'half' => true, 'default' => ''])
    @include('commons.input.select', ['title' => 'Category', 'field' => 'category_id', 'entry' => @$data->category_id, 'selects' => @$selects, 'require' => true, 'half' => true, 'default' => ''])
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12 offset-5">
    <a href="{{ $back }}" class="btn btn-secondary">Cancel</a>
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
