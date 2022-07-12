<!-- lưu tại /resources/views/product/create.blade.php -->
<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout-admin')
@section('title', 'Cập nhật sản phẩm')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Cập nhật sản phẩm - {{ $p->product_name }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    @if($errors->any())
                    <div>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach

                        </ul>
                    </div>
                    @endif
                    @if(Session::has('success'))
                    <p>{{Session::get('success')}}</p>
                    @endif
                    <form role="form" action="{{ Route('product.postUpdate',$p->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">ID sản phẩm</label>
                                <input type="text" class="form- control" id="txt-id" name="product_id"  value="{{ $p->id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="txt-name" name="product_name" placeholder="Input Product Name" value="{{ $p->product_name }}">
                            </div>
                            <div class="form-group">
                                <label for="txtprice">Giá sản phẩm</label>
                                <input type="text" class="form- control" id="txt-price" name="product_price" placeholder="1" value="{{ $p->product_price }}">
                            </div>
                            <div class="form-group">
                                <label>Miêu tả về sản phẩm</label>
                                <textarea class="form-control" rows="3" name="product_description" placeholder="Enter ...">{{ $p->product_description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Hình ảnh</label>
                                <img class="img-fluid" src="{{ url('images/'.$p->product_image) }}" />
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="product_image">
                                        <label class="custom-file-label" for="image">Choose Image</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txt-highlight">Ngày phát hành</label>
                                <input type="date" class="form- control" id="txt-highlight" name="product_date" value="{{ $p->product_date }}">
                            </div>
                            @if ( $p->product_highlight == 1 )
                            <div class="form-group">
                                <label for="txt-highlight">Sản phẩm nổi bật</label>
                                <input type="checkbox" checked class="form- control" id="txt-hightlight" name="product_highlight" value="1" >
                            @elseif ( $p->product_highlight == 0 )
                            <div class="form-group">
                                <label for="txt-hightlight">Sản phẩm nổi bật</label>
                                <input type="checkbox" class="form- control" id="txt-hightlight" name="product_hightlight" value="0" >
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="txt-type">Loại sản phẩm</label>
                                <input type="text" class="form- control" id="txt-type" name="product_type_id" placeholder="Nhập ID loại sản phẩm..." value="{{ $p->product_type_id }}">
                            </div>
                            <div class="form-group">
                                <label for="txt-brand">Loại thương hiệu</label>
                                <input type="text" class="form- control" id="txt-brand" name="brand_id" placeholder="Nhập ID thương hiệu sản phẩm..." value="{{ $p->brand_id }}">
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Xác nhận</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection
@section('script-section')
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
<!-- <script>
    var highlight = "{{ $p->product_highlight }}";
    function check(){
    if(highlight == "1"){
        document.getElementById("txt-hightlight").checked = true;
    }
}
</script> -->

@endsection