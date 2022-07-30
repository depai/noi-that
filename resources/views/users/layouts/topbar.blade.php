<div class="topbar">
    <div class="topbar-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 topbar-right">
                    <div class="topbar-content-inner clearfix">
                        <div class="topbar-content">
                            <div>
                                <nav aria-labelledby="block-topmenu-menu" id="block-topmenu" class="top-menu block block-menu navigation menu--top-menu">
                                    {{-- <p class="visually-hidden block-title block-title" id="block-topmenu-menu"><span>Top Menu anonymous</span></p> --}}
                                    <div class="block-content">
                                        <ul class="gva_menu">
                                            <li class="menu-item">
                                                @include('commons.icons.cart', ['style' => @$style])
                                            </li>
                                            <li class="menu-item">
                                                <a href="/contacts" gva_layout="menu-list" gva_layout_columns="3" gva_block="gavias_facdori_about" gva_block_en="gavias_facdori_about" gva_block_it="gavias_facdori_about" gva_block_ru="gavias_facdori_about" gva_block_ar="gavias_facdori_about" gva_block_fr="gavias_facdori_about" data-drupal-link-system-path="node/153">Liên lạc</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="/about-us" gva_layout="menu-list" gva_layout_columns="3" gva_block="gavias_facdori_about" gva_block_en="gavias_facdori_about" gva_block_it="gavias_facdori_about" gva_block_ru="gavias_facdori_about" gva_block_ar="gavias_facdori_about" gva_block_fr="gavias_facdori_about" data-drupal-link-system-path="node/123">Về chúng tôi</a>
                                            </li>

                                            <li class="menu-item">
                                                <a href="{{ route('all.product') }}" gva_layout="menu-list" gva_layout_columns="3" gva_block="gavias_facdori_about" gva_block_en="gavias_facdori_about" gva_block_it="gavias_facdori_about" gva_block_ru="gavias_facdori_about" gva_block_ar="gavias_facdori_about" gva_block_fr="gavias_facdori_about" data-drupal-link-system-path="node/125">Sản phẩm</a>
                                            </li>

                                            {{-- <li class="menu-item">
                                                <a href="/press" gva_layout="menu-list" gva_layout_columns="3" gva_block="gavias_facdori_about" gva_block_en="gavias_facdori_about" gva_block_it="gavias_facdori_about" gva_block_ru="gavias_facdori_about" gva_block_ar="gavias_facdori_about" gva_block_fr="gavias_facdori_about" data-drupal-link-system-path="node/133">Press</a>
                                            </li> --}}
                                            <li class="menu-item">
                                                <a href="/privatearea-3d-2d-hd" gva_layout="menu-list" gva_layout_columns="3" gva_block="gavias_facdori_about" gva_block_en="gavias_facdori_about" gva_block_it="gavias_facdori_about" gva_block_ru="gavias_facdori_about" gva_block_ar="gavias_facdori_about" gva_block_fr="gavias_facdori_about" data-drupal-link-system-path="node/3422">Đăng nhập</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                                {{-- <div id="block-dropdownlanguage" class="language-top block block-dropdown-language block-dropdown-languagelanguage-interface no-title">
                                    <div class="content block-content">
                                        <div class="dropbutton-wrapper">
                                            <div class="dropbutton-widget">
                                                <ul class="dropdown-language-item dropbutton">
                                                    <li class="en"><span class="language-link active-language" hreflang="en">EN</span></li>
                                                    <li class="it"><a href="/it" class="language-link" hreflang="it">IT</a></li>
                                                    <li class="ar"><a href="/ar" class="language-link" hreflang="ar">AR</a></li>
                                                    <li class="fr"><a href="/fr" class="language-link" hreflang="fr">FR</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
