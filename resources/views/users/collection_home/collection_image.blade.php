<div class="gsc-column col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12  ">
    <div class="column-inner  bg-size-cover  ">
      <div class="column-content-inner">
        <div class="widget gsc-image text-left ">
          <div class="widget-content">
            <img src="{{ !empty($collection->image) ? asset('storage/collections/' . $collection->image) : '' }}" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
