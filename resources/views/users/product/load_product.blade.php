<div class="views-view-grid horizontal clearfix">
    <div class="rowspace10 views-row row clearfix row-1">
        @foreach ($productList as $product)
        <div class="colspace10 views-col col-lg-3 col-md-3 col-sm-12 col-xs-12" style="width: 25%;">
            <div class="views-field views-field-nothing">
                <span class="field-content">
                    <div class="event-item-home">
                        <div class="item-image">
                            <a href="{{ route('product.detail', $product->slug) }}">
                                <img src="{{ asset('storage/' . $product->productImages->first()->name) }}" alt="Oasi Preview"
                                title="Oasi Preview" typeof="Image" />
                            </a>
                        </div>

                        <p class="event-time-home"> </p>
                        {{-- <p class="event-category-home"> Bán chạy </p> --}}
                        <a href="{{ route('product.detail', $product->slug) }}" hreflang="en">{{ $product->title }}</a>
                    </div>
                </span>
            </div>
        </div>
        @endforeach
    </div>
</div>
@if ($productList->count() > 0)
    @include('users.layouts.paginate', ['object'=>$productList])
@endif
