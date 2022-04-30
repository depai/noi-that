<div class="area-main-menu">
    <div class="area-inner">
        <div class="gva-offcanvas-mobile">
            <div class="d-md-none">
                <div>
                    <a href="/" title="Home" rel="home" class="site-branding-logo">
                        <img class="logo-default logo-one" src="/themes/gavias_facdori/logo.png" alt="Home" />
                        <img class="logo-default logo-two hidden" src="/themes/gavias_facdori/logo-white.png" alt="Home" />
                        <img class="logo-default logo-three hidden" src="/themes/gavias_facdori/logo-black.png" alt="Home" />
                    </a>
                </div>
            </div>
            <div class="close-offcanvas hidden"><i class="fa fa-times"></i></div>
            <div class="main-menu-inner">
                <div>
                    <nav aria-labelledby="block-gavias-facdori-mainnavigation-menu" id="block-gavias-facdori-mainnavigation" class="block block-menu navigation menu--main">
                      <p class="visually-hidden block-title block-title" id="block-gavias-facdori-mainnavigation-menu"><span>Main navigation</span></p>
                      <div class="block-content">
                        <div class="gva-navigation">
                          <ul class="clearfix gva_menu gva_menu_main">
                              <li class="menu-item menu-item--expanded ">
                                <a href="#"> Collections<span class="icaret nav-plus fas fa-chevron-down"></span> </a>
                                <ul class="menu sub-menu">
                                  <span class="back-menu-m"><i class="fal fa-chevron-left"></i></span>
                                    @foreach ($listCollection as $collection)
                                        <li class="menu-item"><a href="#"> {{ $collection->title }} </a></li>
                                    @endforeach
                                </ul>
                              </li>
                              @if ($listCategory->count() > 0)
                                @foreach ($listCategory as $categoryParent)
                                    <?php $check = $categoryParent->children->count(); ?>
                                    <li class="menu-item menu-item--expanded ">
                                        <a href="{{ route('view.category', $categoryParent->slug) }}"> {{ $categoryParent->title }}
                                            {!! $check > 0 ? '<span class="icaret nav-plus fas fa-chevron-down"></span>' : null !!}
                                        </a>
                                        @if ($check > 0)
                                            <ul class="menu sub-menu">
                                                <span class="back-menu-m"><i class="fal fa-chevron-left"></i></span>
                                                @foreach ($categoryParent->children as $category)
                                                <li class="menu-item menu-item--collapsed">
                                                    <a href="{{ route('view.category', $category->slug) }}"> {{ $category->title }} </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                              @endif
                            </ul>

                        </div>
                      </div>
                    </nav>

                  </div>
                  <div class="d-lg-none">
                    <div>
                        <nav aria-labelledby="block-topmenu-menu" id="block-topmenu" class="top-menu block block-menu navigation menu--top-menu">
                            <p class="visually-hidden block-title block-title" id="block-topmenu-menu">
                                <span>Top Menu anonymous</span></p>
                            <div class="block-content">
                                <img src="{{ asset('icons/cart.svg') }}" alt="">
                                <ul class="gva_menu">
                                    <li class="menu-item">
                                        <a href="/about-us" gva_layout="menu-list"
                                            gva_layout_columns="3"
                                            gva_block="gavias_facdori_about"
                                            gva_block_en="gavias_facdori_about"
                                            gva_block_it="gavias_facdori_about"
                                            gva_block_ru="gavias_facdori_about"
                                            gva_block_ar="gavias_facdori_about"
                                            gva_block_fr="gavias_facdori_about"
                                            data-drupal-link-system-path="node/123">About us
                                        </a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="/contacts"
                                            gva_layout="menu-list"
                                            gva_layout_columns="3"
                                            gva_block="gavias_facdori_about"
                                            gva_block_en="gavias_facdori_about"
                                            gva_block_it="gavias_facdori_about"
                                            gva_block_ru="gavias_facdori_about"
                                            gva_block_ar="gavias_facdori_about"
                                            gva_block_fr="gavias_facdori_about"
                                            data-drupal-link-system-path="node/153">Contacts</a>

                                    </li>

                                    <li class="menu-item">
                                        <a href="/news"
                                            gva_layout="menu-list"
                                            gva_layout_columns="3"
                                            gva_block="gavias_facdori_about"
                                            gva_block_en="gavias_facdori_about"
                                            gva_block_it="gavias_facdori_about"
                                            gva_block_ru="gavias_facdori_about"
                                            gva_block_ar="gavias_facdori_about"
                                            gva_block_fr="gavias_facdori_about"
                                            data-drupal-link-system-path="node/125">News</a>

                                    </li>

                                    <li class="menu-item">
                                        <a href="/press"
                                            gva_layout="menu-list"
                                            gva_layout_columns="3"
                                            gva_block="gavias_facdori_about"
                                            gva_block_en="gavias_facdori_about"
                                            gva_block_it="gavias_facdori_about"
                                            gva_block_ru="gavias_facdori_about"
                                            gva_block_ar="gavias_facdori_about"
                                            gva_block_fr="gavias_facdori_about"
                                            data-drupal-link-system-path="node/133">Press</a>

                                    </li>

                                    <li class="menu-item">
                                        <a href="/privatearea-3d-2d-hd"
                                            gva_layout="menu-list"
                                            gva_layout_columns="3"
                                            gva_block="gavias_facdori_about"
                                            gva_block_en="gavias_facdori_about"
                                            gva_block_it="gavias_facdori_about"
                                            gva_block_ru="gavias_facdori_about"
                                            gva_block_ar="gavias_facdori_about"
                                            gva_block_fr="gavias_facdori_about"
                                            data-drupal-link-system-path="node/3422">Login
                                            or Register</a>

                                    </li>
                                </ul>



                            </div>
                        </nav>
                        <div id="block-dropdownlanguage" class="language-top block block-dropdown-language block-dropdown-languagelanguage-interface no-title">
                            <div class="content block-content">
                                <div class="dropbutton-wrapper">
                                    <div class="dropbutton-widget">
                                        <ul
                                            class="dropdown-language-item dropbutton">
                                            <li class="en">
                                                <span class="language-link active-language" hreflang="en">EN</span>
                                            </li>

                                            <li class="fr">
                                                <a href="/fr/charisma-fixed-sofa-1" class="language-link"  hreflang="fr">FR</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div id="menu-bar"
            class="menu-bar menu-bar-mobile d-lg-none d-xl-none">
            <span class="one"></span>
            <span class="two"></span>
            <span class="three"></span>
        </div>

    </div>
</div>
