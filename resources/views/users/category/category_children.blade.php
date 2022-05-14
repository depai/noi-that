@extends('users.layouts.app')
@section('title_for_layout', 'categogy')
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
                                                                            <img src="/sites/default/files/2020-12/Charisma1.png" alt="CHARISMA" typeof="Image" />
                                                                        </div>

                                                                    </div>
                                                                    <div class="cat-breadcrumbs"></div>
                                                                    <div class="container">
                                                                        <div class="row category-entity">
                                                                            <div class="col-lg-5 col-sm-12 offset-lg-1">
                                                                                <div class="title-wrapper">
                                                                                    <i class="fas fa-chevron-left"></i></a>
                                                                                    <h1 class="category-title"> {{ $detailCategory->title }} </h1>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-sm-12 description-row">
                                                                                <div class="category-desc">
                                                                                    <span class="full-descrition">
                                                                                        <p>{{ $detailCategory->description }}</p>
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


                                            <div class="view-content-wrap">
                                                <div class="item">
                                                    <div class="views-field views-field-nothing">
                                                        <span class="field-content"> </span>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="views-field views-field-nothing">
                                                        <span class="field-content">
                                                            <div class="collection-prodlist collection-category-prodlist">
                                                                <div class="views-element-container">
                                                                    <div class="gva-view js-view-dom-id-b92bf216bdae24e6ea67d17395966dcb738d9ef26243b6b406f4f2d1a22f53e7">
                                                                        <div class="view-content-wrap">
                                                                            @foreach ($listProduct as $product)
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
                                                <div class="item">
                                                    <div class="views-field views-field-nothing"><span class="field-content"></span></div>
                                                </div>
                                            </div>

                                            <nav class="pager">
                                                <ul class="pager__items js-pager__items">
                                                    <li class="pager__item is-active">
                                                        <a href="?page=0%2C0" title="Current page">
                                                            <span class="visually-hidden">Current page</span>1
                                                        </a>
                                                    </li>
                                                    <li class="pager__item">
                                                        <a href="?page=0%2C1" title="Go to page 2">
                                                            <span class="visually-hidden"> Page </span>2</a>
                                                    </li>
                                                    <li class="pager__item pager__item--next">
                                                        <a href="?page=0%2C1" title="Go to next page" rel="next">
                                                            <span class="visually-hidden">Next page</span>
                                                            <span aria-hidden="true">Next ›</span>
                                                        </a>
                                                    </li>
                                                    <li class="pager__item pager__item--last">
                                                        <a href="?page=0%2C1" title="Go to last page">
                                                            <span class="visually-hidden">Last page</span>
                                                            <span aria-hidden="true">Last »</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>

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
