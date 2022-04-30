@if(@$data)
    <input type="hidden" name="id" value="{{ $data->id }}">
@endif
<div class="row">
    @include('commons.input.input', ['title' => 'Full Name', 'field' => 'full_name', 'entry' => @$data->full_name, 'require' => true, 'half' => true, 'extend' => @$extend])
    @include('commons.input.input', ['title' => 'Phone', 'field' => 'phone', 'entry' => @$data->phone, 'require' => true, 'half' => true, 'extend' => @$extend])
</div>
<div class="row">
    @include('commons.input.input', ['title' => 'Email', 'field' => 'email', 'entry' => @$data->email, 'require' => false, 'half' => true, 'extend' => @$extend])
    @include('commons.input.input', ['title' => 'Address', 'field' => 'address', 'entry' => @$data->address, 'half' => true, 'require' => false, 'extend' => @$extend])
</div>
<div class="row">
    @include('commons.input.textarea', ['title' => 'Note', 'field' => 'note', 'entry' => @$data->note, 'require' => false, 'half' => false])
</div>
<div class="row">
    <div class="col-12 form-group align-content-start">
        <label for="">Order Items</label>
        @if (!@$update)
            <button class="btn btn-primary ml-2" data-toggle="modal" data-target="#selectProduct" type="button">+</button>
        @endif
    </div>
    <div class="col-12" id="order-item">
        @include('admin.orders.cart')
    </div>
</div>
@if (@$update)
    <div class="row">
        <div class="form-group  align-content-start col-6">
            <label class="" style="padding-left: 0">Status</label>
            <select class="form-control" name="status" id="status">
                @foreach ($statuses as $key => $select)
                    <option @if(old('status', @$data->status) == $key) selected @endif value="{{ $key }}">{{ $select }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row @if($data->status != 3) d-none @endif" id="reason">
        @include('commons.input.textarea', ['title' => 'Reason', 'field' => 'reason', 'entry' => @$data->reason, 'require' => false, 'half' => false])
    </div>
@endif
<!-- Submit Field -->
<div class="form-group col-sm-12 offset-5">
    <a href="{{ $back }}" class="btn btn-secondary">Cancel</a>
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
