<!-- lưu tại /resources/views/product/update.blade.php -->
@extends('admin.layout-admin')
@section('title', 'orderdetails - update')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Update {{ $p->orderDetail_id }}</h3>
                    </div>
                    <!-- /.card-header -->
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <!-- form start -->
                    <form role="form" action="{{ Route('product.postUpdate',$p->orderDetail_id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">OrderDetail ID</label>
                                <input type="text" class="form-control" id="txt-id" name="orderDetail_id" placeholder="1" value="{{ $p->orderDetail_id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-name">OrderDetail Quanity</label>
                                <input type="text" class="form-control" id="txt-quanity" name="orderDetail_quantity	" placeholder="Input Quanity" value="{{ $p->orderDetail_quantity }}">
                            </div>
                            <div class="form-group">
                                <label for="txt-price">OrderDetail Price</label>
                                <input type="text" class="form-control" id="txt-price" name="orderDetail_price" placeholder="1" value="{{ $p->	orderDetail_price }}">
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Product Size</label>
                                <input type="text" class="form-control" id="txt-size" name="product_size" placeholder="40" value="{{ $p->product_size }}">
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Order ID</label>
                                <input type="text" class="form-control" id="txt-orderID" name="order_id " placeholder="40" value="{{ $p->order_id  }}">
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Product ID</label>
                                <input type="text" class="form-control" id="txt-productID" name="	product_id" placeholder="40" value="{{ $p->	product_id }}">
                            </div>
                            
                            
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
@endsection