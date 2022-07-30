@extends('users.layouts.app')

{{-- @section('title_for_layout', $detailCategory->title )
@section('site_name', $detailCategory->title)

@section('image_seo', asset('storage/categories/' . $detailCategory->image))
@section('meta_keywords', $detailCategory->meta_keywords)
@section('meta_description', $detailCategory->description) --}}

@section('css')
<style>
    .text-danger{
        color: red;
    }
</style>
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
                                                                            <img src="{{ asset('images/62c6839c53cbe.jpeg') }}" alt="Login" typeof="Image" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="cat-breadcrumbs"></div>

                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </header>
                                            <div id="content" class="content content-full">
                                                <div class="container-full container-bg">
                                                    <div class="content-main-inner">
                                                        <div id="page-main-content" class="main-content">
                                                            <div class="main-content-inner">
                                                                <div class="content-main">
                                                                    <div>
                                                                        <div id="block-gavias-facdori-content" class="block block-system block-system-main-block no-title">
                                                                            <div class="content block-content">
                                                                                <!-- Start Display article for detail page -->
                                                                                <div data-history-node-id="3422" role="article" typeof="schema:WebPage" class="node node--type-page node--view-mode-full">
                                                                                    <div class="node__content clearfix">
                                                                                        <div class="field field--name-field-content-builder field--type-gavias-content-builder field--label-hidden field__item">
                                                                                            <div class="gavias-blockbuilder-content">
                                                                                                <div class="gavias-builder--content">
                                                                                                    <div class="gbb-row-wrapper section row-first-level azienda-info login-row row-privatearea gbb-row  bg-size-cover"
                                                                                                        style="" data-onepage-title="Azienda Info">
                                                                                                        <div class="bb-inner remove_padding">
                                                                                                            <div class="bb-container container">
                                                                                                                <div class="row row-wrapper">
                                                                                                                    <div class="gsc-column col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
                                                                                                                        <div class="column-inner  bg-size-cover  ">
                                                                                                                            <div class="column-content-inner">
                                                                                                                                <div class="column-content heading ">
                                                                                                                                    <p> Chào mừng bạn đến với Inox Pro </p>
                                                                                                                                </div>
                                                                                                                                <div
                                                                                                                                    class="column-content description ">
                                                                                                                                    <p style="text-align: center;">...</p>
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
