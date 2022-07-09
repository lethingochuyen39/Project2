@extends('admin.layout-admin')
@section('title')
product - details
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Chi tiết admin</h3>
                    </div>
                    <div class="card-body">
                        <table id="" class="table table-bordered table-hover">
                            <tr>
                                <td>Họ tên</td>
                                <td><input name="txtUN" value="{{$p->name}}" readonly></td>
                            <tr>
                            <tr>
                                <td>Email</td>
                                <td><input name="txtemail" value="{{$p->email}}" readonly></td>
                            </tr>
                            <tr>
                                <td>Mật khẩu</td>
                                <td><input name="txtPwd" value="{{$p->password}}" readonly></td>
                            </tr>
                            <tr>
                                <td>Chức vụ</td>
                                <td><input type="radio" id="QLSP" name="role" value="1" readonly>
                                    <label for="QLSP">Quản lý sản phẩm</label><br>
                                </td>
                                <td><input type="radio" id="QLKH" name="role" value="2" readonly>
                                    <label for="QLKH">Quản lý khách hàng</label><br>
                                </td>
                            </tr>
                            <tr>
                                <td><a class="btn btn-primary btn-sm" href="{{Route('admin.users.index')}}">Back</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection
@section('script-section')
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom- file-input.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
@endsection