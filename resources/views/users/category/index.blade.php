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
                                                @foreach ($detailCategory->children as $category)
                                                @if ($category->products->count() > 0)
                                                <div class="item">
                                                    <div class="views-field views-field-nothing">
                                                        <span class="field-content">
                                                            <div class="cat-list-link">
                                                                <h2>{{ $category->title }}</h2>
                                                                <a href="https://giorgiocollection.com/decor?collezione=15" class="cat-viewmore-link">View more</a>
                                                            </div>
                                                            <div class="collection-prodlist collection-category-prodlist">
                                                                <div class="views-element-container">
                                                                    <div class="gva-view js-view-dom-id-b92bf216bdae24e6ea67d17395966dcb738d9ef26243b6b406f4f2d1a22f53e7">
                                                                        <div class="view-content-wrap">
                                                                            @foreach ($category->products as $product)
                                                                                <div class="item">
                                                                                <div class="views-field views-field-nothing">
                                                                                    <span class="field-content">
                                                                                        <div class="related-products">
                                                                                            <div class="prod-related-img">
                                                                                                <div class="item-image">
                                                                                                    <img src="/sites/default/files/styles/square/public/2021-01/Charisma%20wall%20light.jpg?itok=JlyIvu9N" alt="" typeof="Image" />
                                                                                                </div>
                                                                                            </div>
                                                                                            <a href="https://giorgiocollection.com/charisma-charisma-wall-light" class="related-prod-link">
                                                                                                <p class="related-prod-collezioni"> CHARISMA </p>
                                                                                                <p class="related-prod-title"> Charisma wall light </p>
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

                                                            {{-- <div class="cat-page-prodlist collection-category-prodlist-mobile">
                                                                <div class="views-element-container">
                                                                    <div class="gva-view js-view-dom-id-7fcbf7bfe57b29b7ffef3edca4a70b70aa39f22b96f3301b2089d6f5f25441ed">
                                                                        <div class="view-content-wrap">
                                                                            <div class="item">
                                                                                <div class="views-field views-field-nothing">
                                                                                    <span class="field-content">
                                                                                        <div class="related-products">
                                                                                            <div class="prod-related-img">
                                                                                                <div class="item-image">
                                                                                                    <img src="/sites/default/files/styles/square/public/2020-12/Progetto%20senza%20titolo%20-%202020-12-16T174454.621.png?itok=8yQLm7cd" alt="" typeof="Image" />
                                                                                                </div>
                                                                                            </div>
                                                                                            <a href="https://giorgiocollection.com/charisma-charisma-sunburst-panel" class="related-prod-link">
                                                                                                <p class="related-prod-collezioni"> CHARISMA </p>
                                                                                                <p class="related-prod-title"> Charisma sunburst panel </p>
                                                                                            </a>
                                                                                        </div>
                                                                                    </span>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}

                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="views-field views-field-nothing"><span class="field-content"></span></div>
                                                </div>
                                                @endif
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

</div>
@endsection