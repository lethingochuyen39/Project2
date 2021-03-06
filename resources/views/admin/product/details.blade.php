@extends('admin.layout-admin')
@section('title')
Chi tiết sản phẩm
@endsection

@section('content')
<!-- Main content -->
<section class="content">

<!-- Default box -->
<div class="card card-solid">
  <div class="card-body">
    <div class="row">
      <div class="col-12 col-sm-6">
        <div class="col-12">
        <img src="{{ url('images/'.$details->product_image) }}"  class="product-image" alt="Product Image"/>
        </div>
        <div class="col-12 product-image-thumbs">
          <div class="product-image-thumb active"><img width="500px" src="{{ url('images/'.$details->product_image) }}" />
</div>
          <div class="product-image-thumb" ><img src="{{ url('images/'.$slider1->slider_image) }}" alt="Product Image"></div>
          <div class="product-image-thumb" ><img src="{{ url('images/'.$slider2->slider_image) }}" alt="Product Image"></div>
          <div class="product-image-thumb" ><img src="{{ url('images/'.$slider3->slider_image) }}" alt="Product Image"></div>
          <div class="product-image-thumb" ><img src="{{ url('images/'.$slider4->slider_image) }}" alt="Product Image"></div>
        </div>
      </div>
      <div class="col-12 col-sm-6">
        <h3 class="my-3">{{ $details->product_name }}</h3>
        <h6> Ngày phát hành: {{ date('d/m/Y',strtotime($details->product_date)) }}</h6>
        <p>Loại sản phẩm: {{ $details->product_type->product_type_name }} | Thương hiệu: {{ $details->brand->brand_name }}</p>

        <hr>

        <h4 class="mt-3">Size <small>Please select one</small></h4>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
            <span class="text-xl">39</span>
            <br>
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b2" autocomplete="off">
            <span class="text-xl">40</span>
            <br>
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b3" autocomplete="off">
            <span class="text-xl">41</span>
            <br>
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b4" autocomplete="off">
            <span class="text-xl">42</span>
            <br>
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b5" autocomplete="off">
            <span class="text-xl">43</span>
            <br>
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b6" autocomplete="off">
            <span class="text-xl">44</span>
            <br>
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b7" autocomplete="off">
            <span class="text-xl">45</span>
            <br>
          </label>
        </div>
        <div class="bg-gray py-2 px-3 mt-4" id="no_promotion">
          <h2 class="mb-0">
          {{ number_format($details->product_price) }}Đ
          </h2>
          <!-- <h4 class="mt-0">
            <small>Ex Tax: $80.00 </small>
          </h4> -->
        </div>
        <!-- <div class="mt-4">
          <div class="btn btn-primary btn-lg btn-flat">
            <i class="fas fa-cart-plus fa-lg mr-2"></i>
            Add to Cart
          </div>

          <div class="btn btn-default btn-lg btn-flat">
            <i class="fas fa-heart fa-lg mr-2"></i>
            Add to Wishlist
          </div>
        </div> -->

        <!-- <div class="mt-4 product-share">
          <a href="#" class="text-gray">
            <i class="fab fa-facebook-square fa-2x"></i>
          </a>
          <a href="#" class="text-gray">
            <i class="fab fa-twitter-square fa-2x"></i>
          </a>
          <a href="#" class="text-gray">
            <i class="fas fa-envelope-square fa-2x"></i>
          </a>
          <a href="#" class="text-gray">
            <i class="fas fa-rss-square fa-2x"></i>
          </a>
        </div> -->

      </div>
    </div>
    <div class="row mt-4">
      <nav class="w-100">
        <div class="nav nav-tabs" id="product-tab" role="tablist">
          <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
          <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
          <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
        </div>
      </nav>
      <div class="tab-content p-3" id="nav-tabContent">
        <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">{{ $details->product_description }}</div>
        <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
        <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
      </div>
    </div>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

</section>

@endsection
@section('script-section')
<script>
  $(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })
  // var highlight = '{{ $details->product_highlight }}';

</script>
@endsection