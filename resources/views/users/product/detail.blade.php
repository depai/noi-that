@extends('users.layouts.app')

@section('title_for_layout', $product->title )
@section('site_name', $product->title)

@section('image_seo', !empty($product->productImages->first()) ? asset('storage/' . $product->productImages->first()->name) : '')
@section('meta_keywords', $product->meta_keywords)
@section('meta_description', nl2br($product->description))


@section('css')

@endsection
@section('content')

<div role="main" class="main main-page">
    <div class="clearfix"></div>
    <div class="help gav-help-region">
        <div class="container">
            <div class="content-inner">
                <div>
                    <div data-drupal-messages-fallback class="hidden"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="clearfix"></div>
    <div id="content" class="content content-full">
        <div class="container-full container-bg">
            <div class="content-main-inner">
                <div id="page-main-content" class="main-content">
                    <div class="main-content-inner">

                        <div class="content-main">
                            <div>
                                <div id="block-gavias-facdori-content"
                                    class="block block-system block-system-main-block no-title">
                                    <div class="content block-content">
                                        <!-- Start Display article for teaser page -->
                                        <article data-history-node-id="2680" role="article"
                                            about="/charisma-fixed-sofa-1">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-8 product-media">
                                                        <div class="post-thumbnail">
                                                            <div
                                                                class="field field--name-field-featured-image field--type-image field--label-hidden field__item">
                                                                <div class="item-image">
                                                                    @if($product->productImages->first())
                                                                        <img src="{{ asset('storage/' . $product->productImages->first()->name) }}"
                                                                            alt="{{ $product->image }}"
                                                                            typeof="foaf:Image" />
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-gallery">
                                                            <div
                                                                class="field field--name-field-gallery field--type-image field--label-hidden field__items">
                                                                @foreach($product->productImages as $key => $productImage)
                                                                    @if ($key)
                                                                    <div class="field__item">
                                                                        <div class="item-image">
                                                                            <img src="{{ asset('storage/' . $productImage->name) }}"
                                                                                alt="{{ $product->image }}"
                                                                                typeof="foaf:Image" />

                                                                        </div>
                                                                    </div>
                                                                    @endif
                                                                @endforeach
                                                            </div>

                                                        </div>

                                                    </div>



                                                    <div class="col-md-4 product-content">

                                                        <div class="title-collezione">

                                                            <p class="event-type">
                                                                <a href="{{ route('view.detail.collection', $product->collection->slug) }}">Tham khảo bộ sưu tập {{ $product->collection->title }}</a></p>
                                                            <p class="collezione-big">{{ $product->collection->title }}</p>

                                                            <div class="title-and-links">


                                                                <div class="product-pager">
                                                                    <div
                                                                        class="views-element-container">
                                                                        <div
                                                                            class="gva-view js-view-dom-id-285507a1e8ef4722d653ae3e02913ec818617b0108db463d287bf6f048f0b861">
                                                                            <div
                                                                                class="views-view-entity-pager entity-pager count-word-many">
                                                                                <ul
                                                                                    class="entity-pager-list">
                                                                                    <li
                                                                                        class="entity-pager-item entity-pager-item-prev">
                                                                                        <a href="/charisma-fixed-sofa-0"
                                                                                            hreflang="en"><i
                                                                                                class="fal fa-angle-left"></i></a>
                                                                                    </li>
                                                                                    <li
                                                                                        class="entity-pager-item entity-pager-item-next">
                                                                                        <a href="/charisma-fixed-sofa"
                                                                                            hreflang="en"><i
                                                                                                class="fal fa-angle-right"></i></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- <h1 class="post-title"><span>{{ $product->title }}</span>
                                                                </h1> --}}
                                                            </div>
                                                        </div>

                                                        <div class="product-info">
                                                            <p class="available-sizes">Price: {{ number_format($product->price) }} đ
                                                            </p>
                                                            <div
                                                                class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                                                {!! nl2br($product->description) !!}
                                                            </div>


                                                            <p class="available-materials">Available
                                                                materials</p>

                                                            <p class="available-sizes">Available sizes
                                                            </p>

                                                            <div
                                                                class="field field--name-field-technical-information field--type-text-long field--label-hidden field__item">
                                                                @foreach ($product->sizes as $size)
                                                                <p class="text-align-center">{{ $size->name }}<br />
                                                                    Size: cm {{ $size->width }}W x {{ $size->depth }}D x {{ $size->height }}<br />
                                                                    Extra price: +{{ number_format($size->price) }} đ</p>
                                                                @endforeach
                                                            </div>

                                                            <p class="available-sizes">Available rocks
                                                            </p>

                                                            <div
                                                                class="field field--name-field-technical-information field--type-text-long field--label-hidden field__item">
                                                                @foreach ($product->rocks as $rock)
                                                                    <p class="text-align-center">{{ $rock->name }}</p>
                                                                    @if($rock->image)
                                                                        <img src="{{ asset('storage/products/' . $rock->image) }}" style="height: 60px; width: auto" alt="">
                                                                        <br>
                                                                    @endif
                                                                    Extra price: +{{ number_format($rock->price) }} đ
                                                                @endforeach
                                                            </div>

                                                            <a href="#" class="product-asinfo">ADD TO CART</a>

                                                            <div class="field__item">
                                                                <span class="file file--mime-application-pdf file--application-pdf">
                                                                    <a href="/login-or-register" type="application/pdf; length=7945" title="pdf-test.pdf">Download Technical Documents</a>
                                                                </span>
                                                            </div>
                                                        </div>

                                                    </div>



                                                </div>



                                            </div>


                                        </article>

                                        <!-- End Display article for detail page -->

                                        <h3 class="related-products-title">Related Products</h3>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="area after-content">
        <div class="container">
            <div class="content-inner">
                <div>
                    <div class="views-element-container block block-views block-views-blockproducts-block-1 no-title"
                        id="block-views-block-products-block-1">
                        <div class="content block-content">
                            <div>
                                <div
                                    class="gva-view js-view-dom-id-36ab859bc264d09dabcc1fd427b42a2fdb3a1e51d421e5c09036612465f21f9d">
                                    <div class="view-content-wrap">
                                        @foreach ($relatedProducts as $relatedProduct)
                                        <div class="item">
                                            <div class="views-field views-field-nothing"><span
                                                    class="field-content">
                                                    <div class="related-products">
                                                        <div class="prod-related-img">
                                                            <div class="item-image">

                                                                <img src="{{ asset('storage/' . @$relatedProduct->productImages->first()->name) }}"
                                                                    alt="{{ $relatedProduct->title }}" typeof="Image" />


                                                            </div>
                                                        </div>
                                                        <a href="{{ route('product.detail', $relatedProduct->slug) }}"
                                                            class="related-prod-link">
                                                            <p class="related-prod-collezioni">{{ $relatedProduct->collection->title }}
                                                            </p>
                                                            <p class="related-prod-title">{{ $relatedProduct->title }}
                                                            </p>
                                                        </a>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="block-webform"
                        class="request-info-prod block block-webform block-webform-block no-title">
                        <div class="content block-content">
                            <form
                                class="webform-submission-form webform-submission-add-form webform-submission-request-information-form webform-submission-request-information-add-form webform-submission-request-information-node-2680-form webform-submission-request-information-node-2680-add-form js-webform-details-toggle webform-details-toggle"
                                data-drupal-selector="webform-submission-request-information-node-2680-add-form"
                                action="{{ route('add_to_cart') }}" method="post"
                                id="webform-submission-request-information-node-2680-add-form"
                                accept-charset="UTF-8">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="product_id">
                                <input type="hidden" value="{{ $product->title }}" name="product_title">
                                <h1 class="post-title"><span>{{ $product->title }}</span>
                                                                </h1>
                                <div
                                    class="js-form-item form-item js-form-type-textfield form-item-name js-form-item-name">
                                    <label for="edit-name"
                                        class="js-form-required form-required">Size</label>
                                    <select name="size_id" id="">
                                        <option value=""></option>
                                        @foreach ($product->sizes as $size)
                                            <option value="{{ $size->id }}">{{ $size->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div
                                    class="js-form-item form-item js-form-type-email form-item-email js-form-item-email">
                                    <label for="edit-email"
                                        class="js-form-required form-required">Rock</label>
                                        <select name="rock_id" id="">
                                            <option value=""></option>
                                            @foreach ($product->rocks as $rock)
                                                <option value="{{ $rock->id }}">{{ $rock->name }}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div
                                    class="js-form-item form-item js-form-type-email form-item-email js-form-item-email">
                                    <label for="edit-email"
                                        class="js-form-required form-required">Quantity</label>
                                        <select name="quantity" id="">
                                            @for ($i = 1; $i <= 10; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                </div>
                                <div data-drupal-selector="edit-actions"
                                    class="form-actions webform-actions js-form-wrapper form-wrapper"
                                    id="edit-actions"><input
                                        class="webform-button--submit button button--primary js-form-submit form-submit"
                                        data-drupal-selector="edit-actions-submit" type="submit"
                                        id="edit-actions-submit" name="op" value="Add" />

                                </div>
                                <input autocomplete="off"
                                    data-drupal-selector="form-t-co-ltpa-7lqyqacr1jswwmvshdcjdeevifcswz5m"
                                    type="hidden" name="form_build_id"
                                    value="form-t-CO__lTpA-7LqyQacR1jswwmvSHDCjDeeviFCsWZ5M" />
                                <input
                                    data-drupal-selector="edit-webform-submission-request-information-node-2680-add-form"
                                    type="hidden" name="form_id"
                                    value="webform_submission_request_information_node_2680_add_form" />
                                <div class="url-textfield js-form-wrapper form-wrapper"
                                    style="display: none !important;">
                                    <div
                                        class="js-form-item form-item js-form-type-textfield form-item-url js-form-item-url">
                                        <label for="edit-url">Leave this field blank</label>
                                        <input autocomplete="off" data-drupal-selector="edit-url"
                                            type="text" id="edit-url" name="url" value="" size="20"
                                            maxlength="128" class="form-text" />

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
