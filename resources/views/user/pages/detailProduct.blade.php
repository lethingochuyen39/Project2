@extends('user.layout-user')
@section('title','Chi tiết sản phẩm')

@section('content')
<!-- Main content -->
<section class="content">

<!-- Default box -->
<div class="card card-solid">
  <div class="card-body">
    <div class="row">
      <div class="col-12 col-sm-6">
        <div class="col-12" style="width: fit-content;height:fit-content;">
        <!-- -->
        <img style="width: 600px;height: 450px; padding-left:100px"  src="{{ url('images/'.$details->product_image) }}"  class="product-image" alt="Product Image" />
        </div>
        <div class="col-12 product-image-thumbs">
          <div class="product-image-thumb active"><img src="{{ url('images/'.$details->product_image) }}" />
</div>
          @foreach($slider as $s)
          <div class="product-image-thumb" ><img src="{{ url('images/'.$s->slider_image) }}" alt="Product Image"></div>
          @endforeach
        </div>
      </div>
      <div class="col-12 col-sm-6">
        <h3 class="my-3">{{ $details->product_name }}</h3>
        <h6> Ngày phát hành: {{ date('d/m/Y',strtotime($details->product_date)) }}</h6>
        <p>Loại sản phẩm: {{ $details->product_type->product_type_name }} | Thương hiệu: {{ $details->brand->brand_name }}</p>

        <hr>
        <form action="">
        <h4 class="mt-3">Size <small>Please select one</small></h4>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b1" autocomplete="off" value="39">
            <span class="text-xl">39</span>
            <br>
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b2" autocomplete="off"  value="40">
            <span class="text-xl">40</span>
            <br>
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b3" autocomplete="off"  value="41">
            <span class="text-xl">41</span>
            <br>
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b4" autocomplete="off"  value="42">
            <span class="text-xl">42</span>
            <br>
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b5" autocomplete="off"  value="43">
            <span class="text-xl">43</span>
            <br>
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b6" autocomplete="off"  value="44">
            <span class="text-xl">44</span>
            <br>
          </label>
          <label class="btn btn-default text-center">
            <input type="radio" name="color_option" id="color_option_b7" autocomplete="off"  value="45">
            <span class="text-xl">45</span>
            <br>
          </label>
          </form>
        <div class="bg-gray py-2 px-3 mt-4" id="no_promotion">
          <h2 class="mb-0">
          {{ number_format($details->product_price) }}Đ
          </h2>
        </div>
        <div class="mt-4">
                <div class="btn btn-primary btn-lg btn-flat">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i>
                  Add to Cart
                </div>
              </div>
      </div>
    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="product-desc-tab" data-bs-toggle="tab" data-bs-target="#product-desc" type="button" role="tab" aria-controls="roduct-desc-tab" aria-selected="true">Description</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="product-comments-tab" data-bs-toggle="tab" data-bs-target="#product-comments" type="button" role="tab" aria-controls="product-comments-tab" aria-selected="false">Comments</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">{{ $details->product_description }}</div>
<div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
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