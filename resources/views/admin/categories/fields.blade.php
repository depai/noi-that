@if(@$data)
    <input type="hidden" name="id" value="{{ $data->id }}">
@endif
<div class="row">
    @include('commons.input.input', ['title' => 'Tên loại sản phẩm', 'field' => 'title', 'entry' => @$data->title, 'require' => true, 'half' => true, 'class' => 'name'])
    @include('commons.input.input', ['title' => 'Slug (nên viết lại tên sản phẩm bằng tiếng việt không dấu và mỗi chữ phân cách nhau bằng ký tự "-")', 'field' => 'slug', 'entry' => @$data->slug, 'half' => true, 'require' => true, 'class' => 'slug'])
</div>
<div class="row">
    @include('commons.input.image', ['title' => 'Hình ảnh', 'field' => 'image', 'entry' => @$data->image ? asset('storage/categories/' . $data->image) : '', 'half' => true])
    @include('commons.input.select', ['title' => 'Loại sản phẩm cha', 'field' => 'parent_id', 'entry' => @$data->parent_id, 'selects' => @$selects, 'require' => false, 'half' => true, 'default' => 0])
</div>
<div class="row">
    @include('commons.input.textarea', ['title' => 'Mô tả', 'field' => 'description', 'entry' => @$data->description, 'require' => false, 'half' => false])
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12 offset-5">
    <a href="{{ $back }}" class="btn btn-secondary">Hủy</a>
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
