<table class="table table-bordered">
    <thead>
    <tr>
        <th class="font-weight-bold">Item</th>
        <th class="font-weight-bold">Size</th>
        <th class="font-weight-bold">Rock</th>
        <th class="font-weight-bold">Quantity</th>
        @if(!@$update)
            <th class="font-weight-bold" style="width: 150px">Action</th>
        @endif
    </tr>
    </thead>
    <tbody>
    @php($price = @$data->price ?: 0)
    @forelse($cart as $key => $item)
        <tr>
            <td>{{ $item['title'] }}</td>
            <td class="w-15">{{ $item['size_title'] }}</td>
            <td class="w-15">{{ $item['rock_title'] }}</td>
            <td class="w-15">{{ $item['quantity'] }}</td>
            @if(!@$update)
                <td>
                    <button type="button" class="btn btn-secondary js-remove-product" data-id="{{ $key }}">-</button>
                </td>
            @endif
        </tr>
        @php($price += $item['price'])
    @empty
        <tr>
            <td colspan="@if(!@$update) 5 @else 4 @endif" class="text-center">Empty</td>
        </tr>
    @endforelse
    </tbody>
    <tfooter>
        <tr>
            <td colspan="@if(!@$update) 5 @else 4 @endif" class="font-weight-bold">Total Price <span class="float-right">{{ number_format($price) }}</span></td>
        </tr>
    </tfooter>
</table>
