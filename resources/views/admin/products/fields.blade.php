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
<div class="row">
    @include('commons.input.input', ['type' => 'number', 'title' => 'Price (VND)', 'field' => 'price', 'entry' => @$data->price, 'require' => true, 'half' => true])
    @include('commons.input.textarea', ['title' => 'Description', 'field' => 'description', 'entry' => @$data->description, 'require' => true, 'half' => true])
</div>
<div class="row">
    <div class="form-group col-6">
        <label class="" style="padding-left: 0">Rocks</label>
        <div class="row mb-3">
            <div class="col-6">
                <select name="rocks[]name" class="form-control">
                    <option value=""></option>
                    @foreach ($rocks as $rock)
                        <option value="{{ $rock->id }}">{{ $rock->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-2 align-self-center">
                <label class="m-0" style="padding-left: 0">Price(VND): </label>
            </div>
            <div class="col-3">
                <input type="number" class="form-control" name="rocks[]price" value="0">
            </div>
            <div class="col-1">
                <button class="btn btn-primary w-100" type="button" id="js-add-rock">+</button>
            </div>
        </div>
        <div id="rock">
        </div>
    </div>

    <div class="form-group col-6">
        <label class="" style="padding-left: 0">Size</label>
        <div class="row mb-3">
            <div class="col-3">
                <label class="m-0" style="padding-left: 0">Name</label>
            </div>
            <div class="col-2">
                <label class="m-0" style="padding-left: 0">Width(cm)</label>
            </div>
            <div class="col-2">
                <label class="m-0" style="padding-left: 0">Depth(cm)</label>
            </div>
            <div class="col-2">
                <label class="m-0" style="padding-left: 0">Height(cm)</label>
            </div>
            <div class="col-2">
                <label class="m-0" style="padding-left: 0">Price</label>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                <input type="text" class="form-control" name="size[]name" value="">
            </div>
            <div class="col-2">
                <input type="number" class="form-control" name="size[]width" value="">
            </div>
            <div class="col-2 align-self-center">
                <input type="number" class="form-control" name="size[]depth" value="">  
            </div>
            <div class="col-2">
                <input type="number" class="form-control" name="size[]height" value="">
            </div>
            <div class="col-2">
                <input type="number" class="form-control" name="size[]price" value="0">
            </div>
            <div class="col-1">
                <button class="btn btn-primary w-100" type="button" id="js-add-size">+</button>
            </div>
        </div>
        <div id="size">
        </div>
    </div>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12 offset-5">
    <a href="{{ $back }}" class="btn btn-secondary">Cancel</a>
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
