<!-- Lưu tại resources/views/product/index.blade.php -->
@extends('admin.layout-admin')
@section('title', 'Danh sách Thương hiệu')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Thương hiệu</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">trang chủ</a></li>
                    <li class="breadcrumb-item active">Thương hiệu</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Bảng thương hiệu</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="product_type" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($brands as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->brand_name }}</td>
                                <td class="text-right">
                                    <a class="btn btn-info btn-sm" href="{{ Route('brand.update',$p->id) }}">
                                        <i class="fas fa-pencil-alt"></i> Sửa
                                    </a>
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?');"  href="{{ Route('brand.delete',$p->id) }}">
                                        <i class="fas fa-trash"></i> Xóa
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection
@section('script-section')
<script>
    $(function() {
        $('#product_type').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>
@endsection