<!-- lưu tại /resources/views/Promotion/create.blade.php -->
@extends('admin.layout-admin')
@section('title')
Thêm khuyến mãi
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thêm khuyến mãi</h3>
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
                    <form role="form" action="{{ Route('promotion.postCreate') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">

                            <!-- ID -->
                            <!-- <div class="form-group">
                                <label for="txt-id">ID khuyến mãi</label>
                                <input type="text" class="form- control" id="txt-id" name="promotion_id" placeholder="Enter ID here..." >
                            </div> -->

                            <!-- Name -->
                            <div class="form-group">
                                <label for="txt-name">Tên khuyến mãi</label>
                                <input type="text" class="form- control" id="txt-name" name="promotion_name" placeholder="Enter Name here...">
                            </div>

                            <!-- Type -->
                            <div class="form-group">
                                <label for="txt-price">Loại khuyến mãi</label>
                                <select class="form- control" id="txt-prices" name="promotion_type">
                                    <option value="0" name="percentage">Giảm theo phần trăm</option>
                                    <option value="1" name="number">Giảm theo số tiền</option>
                                </select>
                            </div>

                            <!-- Image -->
                            <div class="form-group">
                                <label for="txt-image">Ngày bắt đầu giảm giá</label>
                                <input type="datetime-local" class="form- control" id="txt-image" name="promotion_time_start" placeholder="Enter Name here...">
                            </div>

                            <!-- Hightlight -->
                            <div class="form-group">
                                <label for="txt-hightlight">Ngày kết thúc giảm giá</label>
                                <input type="datetime-local" class="form- control" id="txt-hightlight" name="promotion_time_end" placeholder="Enter Name here...">
                            </div>

                            <!-- Date -->
                            <div class="form-group">
                                <label for="txt-type">Giảm giá theo: </label>
                                <!-- <select class="form- control" id="txt-type" name="promotion_with"> -->
                                <!-- onclick -->
                                <input type="radio" value="0" name="option" id="product_id_option" onclick="option1()">Product ID
                                <input type="radio" value="1" name="option" id="product_type_id_option" onclick="option2()">Product Type ID
                                <!-- </select> -->
                            </div>

                            <!-- onclick -->
                            <!-- Product Type ID -->
                            <div class="form-group" id="promotion-type-id" style="display: none;">
                                <label for="txt-promotion-type-id">Loại sản phẩm</label>
                                <input type="text" class="form- control" id="txt-promotion-type-id" name="product_type_id" placeholder="Enter Name here...">
                            </div>

                            <!-- Product ID -->
                            <div class="form-group" id="promotion-id" style="display: none;">
                                <label for="txt-promotion-id">Sản phẩm</label>
                                <input type="text" class="form- control" id="txt-promotion-id" name="product_id" placeholder="Enter Name here...">
                            </div>

                            <!-- Brand ID -->
                            <div class="form-group">
                                <label for="txt-brand-id">Giá trị giảm giá</label>
                                <input type="text" class="form- control" id="txt-brand-id" name="promotion_value" placeholder="Đơn vị % hoặc VND...">
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
<script>
    function option1() {
        $("#txt-promotion-type-id").val("");
        $('#promotion-id').show();
        $('#promotion-type-id').hide();
    }

    function option2() {
        $("#txt-promotion-id").val("");
        $('#promotion-type-id').show();
        $('#promotion-id').hide();
    }
</script>
@endsection