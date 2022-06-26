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
    @include('commons.input.checkbox', ['title' => 'Sản phẩm bán chạy', 'field' => 'best_seller', 'entry' => @$data->best_seller, 'half' => true])
</div>

<div class="row">
    @include('commons.input.dropzone', ['title' => 'Image', 'field' => 'image[]', 'entry' => @$images, 'half' => true])
    <div class="form-group col-6">
        <div class="row mb-3">
            <div class="col-11">
                <label class="" style="padding-left: 0">Size</label>
            </div>
            <div class="col-1">
                <button class="btn btn-primary w-100" type="button" id="js-add-size">+</button>
            </div>
        </div>
        @error('size.*.name')
        <div class="row mb-3">
            <div class="col-12">
                <span class="error">{{ array_values($errors->get('size.*.name'))[0][0] }}</span>
            </div>
        </div>
        @enderror
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
                <label class="m-0" style="padding-left: 0">Extra Price</label>
            </div>
        </div>

        @php($countSize = 0)
        @forelse ($sizes as $size)
            <input type="hidden" name="rocks[{{ $countSize }}][id]" value="{{ $size->id }}">
            <div class="row mb-3 child">
                <div class="col-3">
                    <input type="text" class="form-control" name="size[{{ $countSize }}][name]" value="{{ $size->name }}">
                </div>
                <div class="col-2">
                    <input type="number" class="form-control" name="size[{{ $countSize }}][width]" value="{{ $size->width }}">
                </div>
                <div class="col-2 align-self-center">
                    <input type="number" class="form-control" name="size[{{ $countSize }}][depth]" value="{{ $size->depth }}">
                </div>
                <div class="col-2">
                    <input type="number" class="form-control" name="size[{{ $countSize }}][height]" value="{{ $size->height }}">
                </div>
                <div class="col-2">
                    <input type="number" class="form-control" name="size[{{ $countSize }}][price]" value="{{ $size->price }}">
                </div>
                <div class="col-1">
                    <button class="btn btn-primary w-100 js-remove" type="button">-</button>
                </div>
            </div>
            @php($countSize++)
        @empty
            <div class="row mb-3 child">
                <div class="col-3">
                    <input type="text" class="form-control" name="size[0][name]" value="">
                </div>
                <div class="col-2">
                    <input type="number" class="form-control" name="size[0][width]" value="">
                </div>
                <div class="col-2 align-self-center">
                    <input type="number" class="form-control" name="size[0][depth]" value="">
                </div>
                <div class="col-2">
                    <input type="number" class="form-control" name="size[0][height]" value="">
                </div>
                <div class="col-2">
                    <input type="number" class="form-control" name="size[0][price]" value="0">
                </div>
                <div class="col-1">
                    <button class="btn btn-primary w-100 js-remove" type="button">-</button>
                </div>
            </div>
        @endforelse
        <div id="size">
        </div>
    </div>
</div>

<div class="row">
    <div class="form-group col-6">
        <div class="row mb-3">
            <div class="col-11">
                <label class="" style="padding-left: 0">Rocks</label>
            </div>
            <div class="col-1">
                <button class="btn btn-primary w-100" type="button" id="js-add-rock">+</button>
            </div>
        </div>
        @error('rocks.*.name')
        <div class="row mb-3">
            <div class="col-12">
                <span class="error">{{ array_values($errors->get('rocks.*.name'))[0][0] }}</span>
            </div>
        </div>
        @enderror

        <div class="row mb-3">
            <div class="col-4">
                <label class="m-0" style="padding-left: 0">Name</label>
            </div>
            <div class="col-4">
                <label class="m-0" style="padding-left: 0">Image</label>
            </div>
            <div class="col-3">
                <label class="m-0" style="padding-left: 0">Extra Price</label>
            </div>
        </div>
        @php($count = 0)
        @forelse ($rocks as $rock)
            <div class="row mb-3 child">
                <input type="hidden" name="rocks[{{ $count }}][id]" value="{{ $rock->id }}">
                <div class="col-4">
                    <input type="text" class="form-control" name="rocks[{{ $count }}][name]" value="{{ $rock->name }}">
                </div>
                <div class="col-3">
                    <input type="file" accept="image/png, image/jpeg" class="form-control js-input-image" name="rocks[{{ $count }}][image]" value="0">
                </div>
                <div class="col-1 js-preview-image">
                    @if ($rock->image)
                        <img src="{{ asset('storage/products/' . $rock->image) }}" style="height: 35px; width: auto">
                    @endif
                </div>
                <div class="col-3">
                    <input type="number" class="form-control" name="rocks[{{ $count }}][price]" value="{{ $rock->price }}">
                </div>
                <div class="col-1">
                    <button class="btn btn-primary js-remove w-100" type="button" id="">-</button>
                </div>
            </div>
            @php($count++)
        @empty
            <div class="row mb-3 child">
                <div class="col-4">
                    <input type="text" class="form-control" name="rocks[0][name]" value="">
                </div>
                <div class="col-3">
                    <input type="file" accept="image/png, image/jpeg" class="form-control js-input-image" name="rocks[0][image]" value="0">
                </div>
                <div class="col-1 js-preview-image">
                </div>
                <div class="col-3">
                    <input type="number" class="form-control" name="rocks[0][price]" value="0">
                </div>
                <div class="col-1">
                    <button class="btn btn-primary js-remove w-100" type="button" id="">-</button>
                </div>
            </div>
        @endforelse

        <div id="rock">
        </div>
    </div>


</div>
<!-- Submit Field -->
<div class="form-group col-sm-12 offset-5">
    <a href="{{ $back }}" class="btn btn-secondary">Cancel</a>
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
