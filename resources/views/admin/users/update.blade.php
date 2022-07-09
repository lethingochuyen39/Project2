@extends('admin.layout-admin')
@section('title', 'product - update')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Cập nhật Admin - {{ $p->name }}</h3>
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
                    <form role="form" action="{{ Route('admin.users.postUpdate',$p->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <small>@if($errors->has('name'))
                                <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                @endif</small>
                            <div class="form-group">
                                <label for="txt-name">Họ tên</label>
                                <input type="text" class="form-control" id="txt-name" name="name" value="{{ $p->name }}" >
                            </div>

                            <div class="form-group">
                                <small>@if($errors->has('email'))
                                    <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                    @endif</small>
                                <label for="txt-name">Email</label>
                                <input type="email" class="form-control" id="txt-email" name="email" value="{{ $p->email }}" >
                            </div>
                            <div class="form-group">
                                <small>@if($errors->has('password'))
                                    <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                    @endif</small>
                                <label for="txt-password">Mật khẩu</label>
                                <input type="password" class="form-control" id="txt-password" name="password" value="{{ $p->password }}">
                            </div>
                            <div class="form-group">
                                <small>@if($errors->has('password'))
                                    <strong class="text-danger">{{ $errors->first('role') }}</strong>
                                    @endif</small>
                                <?php
                                if ($p->role) {
                                    if ($p->role == 0) {
                                        echo '<label for="txt-name">Chức vụ</label></br>
                                         <input type="radio" id="QL" name="role" value="0" readonly checked>
                                         <label for="QLSP">Quản lý</label><br>';
                                    }else{
                                        echo ' <label for="txt-name">Chức vụ</label></br>
                                        <input type="radio" id="QLSP" name="role" value="1">
                                        <label for="QLSP">Quản lý sản phẩm</label><br>
                                        <input type="radio" id="QLKH" name="role" value="2">
                                        <label for="QLKH">Quản lý khách hàng</label><br>';
                                    }
                                }

                                ?>
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