<!DOCTYPE html>
<html lang="en" dir="ltr"
    prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# ">
<head>
    <meta charset="utf-8" />
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="twitter:description" content="@yield('meta_description')">
    <meta property="og:description" content="@yield('meta_description')">
    <meta name="description" content="@yield('meta_description')">
    <title>@yield('site_name')</title>
    <meta property="og:site_name" content="@yield('site_name')">

    <meta property="og:image" content="@yield('image_seo')">
    <meta property="og:image:height" content="300">
    <meta property="og:image:width" content="300">

    <meta property="og:site_name" content="@yield('site_name')">
    <meta name="keywords" content="@yield('meta_keywords')">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:type" content="website">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">


    <link rel="shortcut icon" href="/sites/default/files/favicon.png" type="image/png" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" media="all"  href="/core/themes/stable/css/system/components/ajax-progress.module.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/system/components/align.module.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/system/components/autocomplete-loading.module.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/system/components/fieldgroup.module.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/system/components/container-inline.module.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/system/components/clearfix.module.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/system/components/details.module.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/system/components/hidden.module.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/system/components/item-list.module.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/system/components/js.module.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/system/components/nowrap.module.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/system/components/position-container.module.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/system/components/progress.module.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/system/components/reset-appearance.module.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/system/components/resize.module.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/system/components/sticky-header.module.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/system/components/system-status-counter.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/system/components/system-status-report-counters.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/system/components/system-status-report-general-info.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/system/components/tabledrag.module.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/system/components/tablesort.module.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/system/components/tree-child.module.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/views/views.module.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/modules/entity_pager/css/entity-pager.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/modules/webform/css/webform.form.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/modules/webform/css/webform.element.details.toggle.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/modules/webform/css/webform.element.message.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/core/themes/stable/css/core/dropbutton/dropbutton.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/modules/gavias_sliderlayer/vendor/revolution/css/settings.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/modules/gavias_content_builder/dist/css/frontend.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="//fonts.googleapis.com/css2?family=Ibarra+Real+Nova:wght@400;700" />
    <link rel="stylesheet" media="all" href="/themes/gavias_facdori/compiledcss/sliderlayer.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/themes/gavias_facdori/css/all.min.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/themes/gavias_facdori/compiledcss/icon.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/themes/gavias_facdori/compiledcss/animate.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/themes/gavias_facdori/vendor/owl-carousel/assets/owl.carousel.min.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/themes/gavias_facdori/vendor/owl-carousel/assets/owl.theme.default.min.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/themes/gavias_facdori/vendor/prettyphoto/css/prettyPhoto.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/themes/gavias_facdori/vendor/ytplayer/css/jquery.mb.YTPlayer.min.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/themes/gavias_facdori/vendor/magnific/magnific-popup.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/themes/gavias_facdori/vendor/slick/slick.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/themes/gavias_facdori/compiledcss/bootstrap.css?r8qfr8" />
    <link rel="stylesheet" media="all" href="/themes/gavias_facdori/compiledcss/template.css?r8qfr8" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

    <script src="/core/assets/vendor/jquery/jquery.min.js?v=3.5.1"></script>
    <script src="/core/misc/drupalSettingsLoader.js?v=8.9.13"></script>
    <script src="/core/misc/drupal.js?v=8.9.13"></script>
    <script src="/core/misc/drupal.init.js?v=8.9.13"></script>
    <script src="/themes/gavias_facdori/vendor/jquery-migrate.min.js?v=8.9.13"></script>
    <script src="/themes/gavias_facdori/js/bootstrap.js?v=8.9.13"></script>
    <script src="/themes/gavias_facdori/js/imagesloader.min.js?v=8.9.13"></script>
    <script src="/themes/gavias_facdori/vendor/jquery.easing.js?v=8.9.13"></script>
    <script src="/themes/gavias_facdori/vendor/jquery.appear.js?v=8.9.13"></script>
    <script src="/themes/gavias_facdori/vendor/jquery.easypiechart.min.js?v=8.9.13"></script>
    <script src="/themes/gavias_facdori/vendor/owl-carousel/owl.carousel.js?v=8.9.13"></script>
    <script src="/themes/gavias_facdori/vendor/waypoint.js?v=8.9.13"></script>
    <script src="/themes/gavias_facdori/vendor/count-to.js?v=8.9.13"></script>
    <script src="/themes/gavias_facdori/vendor/masonry.pkgd.min.js?v=8.9.13"></script>
    <script src="/themes/gavias_facdori/vendor/isotope.pkgd.min.js?v=8.9.13"></script>
    <script src="/themes/gavias_facdori/vendor/aos.js?v=8.9.13"></script>
    <script src="/themes/gavias_facdori/vendor/prettyphoto/js/jquery.prettyPhoto.js?v=8.9.13"></script>
    <script src="/themes/gavias_facdori/vendor/ytplayer/js/jquery.mb.YTPlayer.min.js?v=8.9.13"></script>
    <script src="/themes/gavias_facdori/vendor/jquery.typer/src/jquery.typer.js?v=8.9.13"></script>
    <script src="/themes/gavias_facdori/vendor/magnific/jquery.magnific-popup.min.js?v=8.9.13"></script>
    <script src="/themes/gavias_facdori/vendor/quotes_rotator/js/modernizr.custom.js?v=8.9.13"></script>
    <script src="/themes/gavias_facdori/vendor/quotes_rotator/js/jquery.cbpQTRotator.min.js?v=8.9.13"></script>
    <script src="/themes/gavias_facdori/vendor/jquery.nicescroll.min.js?v=8.9.13"></script>
    <script src="/themes/gavias_facdori/vendor/slick/slick.min.js?v=8.9.13"></script>
    <script src="/themes/gavias_facdori/js/main.js?v=8.9.13"></script>
    <script src="/themes/gavias_facdori/js/custom.js?v=8.9.13"></script>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyDUknyOTN5RnNNbz46hgfoEQ4F89B7OFZs"></script>
    <script src="/themes/gavias_facdori/js/store_locator.js?v=8.9.13"></script>
    <script src="/modules/gavias_sliderlayer/vendor/revolution/js/jquery.themepunch.tools.min.js?v=1.x"></script>
    <script src="/modules/gavias_sliderlayer/vendor/revolution/js/jquery.themepunch.revolution.min.js?v=1.x"></script>
    <script src="/modules/gavias_sliderlayer/vendor/revolution/js/extensions/revolution.extension.actions.min.js?v=1.x"></script>
    <script src="/modules/gavias_sliderlayer/vendor/revolution/js/extensions/revolution.extension.carousel.min.js?v=1.x"></script>
    <script src="/modules/gavias_sliderlayer/vendor/revolution/js/extensions/revolution.extension.kenburn.min.js?v=1.x"></script>
    <script src="/modules/gavias_sliderlayer/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js?v=1.x"></script>
    <script src="/modules/gavias_sliderlayer/vendor/revolution/js/extensions/revolution.extension.migration.min.js?v=1.x"></script>
    <script src="/modules/gavias_sliderlayer/vendor/revolution/js/extensions/revolution.extension.navigation.min.js?v=1.x"></script>
    <script src="/modules/gavias_sliderlayer/vendor/revolution/js/extensions/revolution.extension.parallax.min.js?v=1.x"></script>
    <script src="/modules/gavias_sliderlayer/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js?v=1.x"></script>
    <script src="/modules/gavias_sliderlayer/vendor/revolution/js/extensions/revolution.extension.video.min.js?v=1.x"></script>


    <style type="text/css">
        @media only screen and (max-device-width: 480px) and (min-device-width:320px) {
            div.product-gallery {
                width: 100% !important;
            }
        }
    </style>
    @yield('css')
</head>


<body class="gavias-content-builder layout-no-sidebars wide path-node node--type-product">
    {{-- <a href="#main-content" class="visually-hidden focusable">
        Skip to main content
    </a> --}}
    <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>
        <div class="gva-body-wrapper">
            <div class="body-page gva-body-page">
                <header id="header" class="header-{{ empty($viewDetailProduct) ? '1' : 'default' }}" style="
                    background: rgb(242 236 236 / 8%);
                    position: {{ empty($viewDetailProduct) ? 'absolute' : 'relative' }};
                    width: 100%;">
                    @include('users.layouts.topbar')
                    <div class="header-main ">
                        <div class="container header-content-layout">
                            <div class="header-main-inner p-relative">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 content-inner">
                                        <div class="branding">
                                            <div>
                                                <a href="/" title="Home" rel="home" class="site-branding-logo">
                                                    <img class="logo-default logo-one" src="/themes/gavias_facdori/logo.png" alt="Home" />
                                                    <img class="logo-default logo-two hidden" src="/themes/gavias_facdori/logo-white.png" alt="Home" />
                                                    <img class="logo-default logo-three hidden" src="/themes/gavias_facdori/logo-black.png" alt="Home" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="header-inner clearfix ">
                                            <div class="main-menu">
                                                @include('users.layouts.sidebar')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                @yield('content')
            </div>
            @include('users.layouts.footer')
        </div>
    </div>
    @include('commons.modals.checkout')
    @if (session('thanks'))
        @include('commons.modals.thanks')
    @endif
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @stack('scripts')
    <script>
        @if( Session::has("success") )
            toastr.success("{{ Session::get('success') }}");
        @endif
        @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;

                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;

                case 'success':
                    // toastr.options.positionClass = 'toast-bottom-right';
                    toastr.success("{{ Session::get('message') }}");
                    break;

                case 'error':
                    // toastr.options.positionClass = 'toast-bottom-right';
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>
    @push('after-scripts')
    @endpush

    <div id="gva-overlay"></div>
</body>

</html>
