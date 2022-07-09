<div class="gsc-column col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12  align-self-center">
    <div class="column-inner  bg-size-cover  ">
      <div class="column-content-inner">
        <div class="column-content charisma-heading ">
          <h2>{{ $collection->title }}&nbsp;</h2>
        </div>
        <div class="column-content charisma-subheading ">
            <p style="text-align: center;">
                <span style="font-family: 'Ibarra Real Nova', serif; font-size: 16px; background-color: #ffffff;">
                    {{ !empty($collection->content) ? $collection->content : null }}
                </span>
            </p>
        </div>
        @if ($collection->products->count() > 0)
        <div class="gbb-row-wrapper section charisma-prodotti gbb-row  bg-size-cover" style="">
            <div class="bb-inner default">
              <div class="bb-container container">
                <div class="row row-wrapper">
                  @foreach ($collection->products as $item)
                  <div class="gsc-column col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12  ">
                    <div class="column-inner  bg-size-cover  ">
                      <div class="column-content-inner">
                        <div class="widget gsc-image text-none ">
                          <div class="widget-content">
                            <a href="{{ route('product.detail', $item->id) }}">
                              <img src="{{ !empty($item->productImages->first()) ? asset($item->productImages->first()->name) : '' }}" alt="" />
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        @endif
        <a href="{{ route('view.detail.collection', $collection->slug) }}" class="gsc-button button-transparent-black  mini " id="button-64qw7tkpqkdl">Chi tiết</a>
      </div>
    </div>

  </div>
