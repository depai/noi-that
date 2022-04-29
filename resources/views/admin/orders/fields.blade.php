@if(@$data)
    <input type="hidden" name="id" value="{{ $data->id }}">
@endif
<div class="row">
    @include('commons.input.input', ['title' => 'Full Name', 'field' => 'full_name', 'entry' => @$data->full_name, 'require' => true, 'half' => true])
    @include('commons.input.input', ['title' => 'Phone', 'field' => 'phone', 'entry' => @$data->phone, 'require' => true, 'half' => true])
</div>
<div class="row">
    @include('commons.input.input', ['title' => 'Email', 'field' => 'full_name', 'entry' => @$data->email, 'require' => false, 'half' => true])
    @include('commons.input.input', ['title' => 'Address', 'field' => 'phone', 'entry' => @$data->address, 'half' => true, 'require' => false])
</div>
<div class="row">
    @include('commons.input.textarea', ['title' => 'Note', 'field' => 'note', 'entry' => @$data->note, 'require' => false, 'half' => false])
</div>
<div class="row">
    @include('commons.input.select', ['class' => 'select2', 'title' => 'Product', 'field' => 'product_id', 'entry' => '', 'selects' => @$products, 'require' => false, 'half' => true, 'default' => ''])
    <div class="col-1 form-group align-self-end">
        <button class="btn btn-primary js-add-product" type="button">+</button>
    </div>
</div>
<div class="row px-2" id="order-item">
    <div class="col-12 form-group align-content-start">
        <label for="">Order Items</label>
    </div>
    <div class="col-12">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="font-weight-bold">Item</th>
                <th class="font-weight-bold">Size</th>
                <th class="font-weight-bold">Rock</th>
                <th class="font-weight-bold">Quantity</th>
                <th class="font-weight-bold" style="width: 150px">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td></td>
                <td class="w-15"></td>
                <td class="w-15"></td>
                <td class="w-15"><input class="form-control" type="number" name="quantity[]" min="1" value="1"></td>
                <td><button class="btn btn-secondary js-remove-product">-</button></td>
            </tr>
            </tbody>
            <tfooter>
                <td colspan="5" class="font-weight-bold">Total Price <span class="float-right">100000</span></td>
            </tfooter>
        </table>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 offset-5">
    <a href="{{ $back }}" class="btn btn-secondary">Cancel</a>
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
