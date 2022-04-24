<a href="javascript:void(0)" class="position-relative cart product-asinfo-2">
    <svg style="width: 20px; margin-bottom: -12px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="40px" height="36px" viewBox="0 0 40 36" style="enable-background:new 0 0 40 36;" xml:space="preserve">
        <g id="Page-1_4_" sketch:type="MSPage">
            <g id="Desktop_4_" transform="translate(-84.000000, -410.000000)" sketch:type="MSArtboardGroup">
                <path style="{{ @$style ? 'fill:white' : 'fill:black' }}" sketch:type="MSShapeGroup" class="st0" d="M94.5,434.6h24.8l4.7-15.7H92.2l-1.3-8.9H84v4.8h3.1l3.7,27.8h0.1
                    c0,1.9,1.8,3.4,3.9,3.4c2.2,0,3.9-1.5,3.9-3.4h12.8c0,1.9,1.8,3.4,3.9,3.4c2.2,0,3.9-1.5,3.9-3.4h1.7v-3.9l-25.8-0.1L94.5,434.6"
                    />
            </g>
        </g>
    </svg>
    @if(@count($cart))
        <a href="javascript:void(0)" class="px-1 float-right bg-danger rounded color-white" style="top: -30px">{{ count($cart) }}</a>  
    @endif
    <div class="position-absolute rounded row bg-light box-cart">
        @if (@$cart)
            <div class="col-8 pt-3 text-left font-weight-bold">
                Products
            </div>
            <div class="col-4 pt-3 text-right font-weight-bold">
                Quantity
            </div>
            <div class="col-12 pb-2">
                <div class="border border-secondary"></div>
            </div>
            @php($price = 0)
            @foreach ($cart as $key => $product)
                @php($price += $product['price'])
                <div class="col-8 text-left fs-14">
                    {{ $product['title'] }}
                </div>
                <div class="col-2 text-right">
                    x{{ $product['quantity'] }}
                </div>
                <form class="col-2 align-self-center" action="{{ route('remove_to_cart') }}" method="post">
                    @csrf 
                    <input type="hidden" value="{{ $key }}" name="id">
                    <button class="btn-remove">-</button>
                </form>
            @endforeach
            <div class="col-12 mt-2">
                <div class="border border-secondary"></div>
            </div>
            @if(@$price)
            <div class="col-12 mb-2 text-right">
                <div>{{ number_format($price)}} đ</div>
            </div>
            @endif
            <div class="col-6 mb-3 offset-6">
                <div class="btn-checkout product-asinfo-2">Checkout</div>
            </div>
        @endif
    </div>
</a>


