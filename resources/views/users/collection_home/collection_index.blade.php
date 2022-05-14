@extends('users.layouts.app')
@section('title_for_layout', 'collection detail')
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
                                <div id="block-gavias-facdori-content" class="block block-system block-system-main-block no-title">
                                    <div class="content block-content">
                                        <div class="category-page gva-view view-page js-view-dom-id-8c396b1aebdf4e305408023d4a7ffa73a4aab2b7f3ce1e955e5e92551fa5675b">

                                            <header>
                                                <div class="gva-view js-view-dom-id-277b1825716a8e1d1e1c3e004d57b6defc4f7704af7817ba77944d052b20d189">
                                                    <div class="view-content-wrap">
                                                        <div class="item">
                                                            <div class="views-field views-field-nothing">
                                                                <span class="field-content">
                                                                    <div class="category-image">

                                                                        <div class="item-image">
                                                                            <img src="{{ !empty($detailCollection->image) ? asset($detailCollection->image) : null }}" alt="CHARISMA" typeof="Image" />
                                                                        </div>

                                                                    </div>
                                                                    <div class="cat-breadcrumbs"></div>
                                                                    <div class="container">
                                                                        <div class="row category-entity">
                                                                            <div class="col-lg-5 col-sm-12 offset-lg-1">
                                                                                <div class="title-wrapper">
                                                                                    <i class="fas fa-chevron-left"></i></a>
                                                                                    <h1 class="category-title"> {{ $detailCollection->title }} </h1>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-sm-12 description-row">
                                                                                <div class="category-desc">
                                                                                    <span class="full-descrition">
                                                                                        <p>{{ !empty($detailCollection->content) ? $detailCollection->content : null }}</p>
                                                                                    </span>
                                                                                </div>
                                                                                <a class="read-more">Read More</a>
                                                                                <a class="read-less">Read Less</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </header>

                                            @foreach ($listProduct as $category)
                                            <div class="view-content-wrap">
                                                <div class="item">
                                                    <div class="views-field views-field-nothing"><span class="field-content"> </span></div>
                                                </div>
                                                <div class="item">
                                                    <div class="views-field views-field-nothing">
                                                        <span class="field-content">
                                                            <div class="cat-list-link">
                                                                <h2>{{ $category->title }}</h2> <a href="{{ route('view.category', $category->slug) }}" class="cat-viewmore-link">View more</a>
                                                            </div>
                                                            <div class="collection-prodlist collection-category-prodlist">
                                                                <div class="views-element-container">
                                                                    <div class="gva-view js-view-dom-id-693b7c5b30f8b4fcd099edfaf8374d3c396180f929cb82e8389d6732cb72f1f1">
                                                                        <div class="view-content-wrap">
                                                                            @foreach ($category->products as $product)
                                                                            <div class="item">
                                                                                <div class="views-field views-field-nothing">
                                                                                    <span class="field-content">
                                                                                        <div class="related-products">
                                                                                            <div class="prod-related-img">
                                                                                                <div class="item-image">
                                                                                                    <img src="{{ !empty($product->productImages->first()) ? asset('storage/' . $product->productImages->first()->name) : '#' }}" alt="" typeof="Image" />
                                                                                                </div>
                                                                                            </div>
                                                                                            <a href="{{ route('product.detail', $product->slug) }}" class="related-prod-link">
                                                                                                <p class="related-prod-collezioni"> {{ $product->collection->title }} </p>
                                                                                                <p class="related-prod-title"> {{ $product->title }} </p>
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

                                                            <div class="cat-page-prodlist collection-category-prodlist-mobile">
                                                                <div class="views-element-container">
                                                                    <div class="gva-view js-view-dom-id-53fde612bb05e799ed9a92ee48fb66fa4807e0db8d053c6a77b98cf49d67f8b5">
                                                                        <div class="view-content-wrap">

                                                                            @foreach ($category->products as $product)
                                                                            <div class="item">
                                                                                <div class="views-field views-field-nothing">
                                                                                    <span class="field-content">
                                                                                        <div class="related-products">
                                                                                            <div class="prod-related-img">
                                                                                                <div class="item-image">
                                                                                                    <img src="{{ !empty($product->productImages->first()) ? asset('storage/' . $product->productImages->first()->name) : '#' }}" alt="" typeof="Image" />
                                                                                                </div>
                                                                                            </div>
                                                                                            <a href="{{ route('product.detail', $product->slug) }}" class="related-prod-link">
                                                                                                <p class="related-prod-collezioni"> {{ $product->collection->title }} </p>
                                                                                                <p class="related-prod-title"> {{ $product->title }} </p>
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

                                                        </span>

                                                    </div>
                                                </div>
                                                @foreach ($category->products as $product)
                                                {{-- số lượng item sẽ bằng số item nothing ở đây --}}
                                                <div class="item">
                                                    <div class="views-field views-field-nothing">
                                                        <span class="field-content"></span>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
