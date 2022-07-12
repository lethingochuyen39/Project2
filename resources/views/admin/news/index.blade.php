@extends('admin.layout-admin')
@section('title', 'news index')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tin tức</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Trang chủ</li>
                    <li class="breadcrumb-item active">Tin tức</li>
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
                    <h3 class="card-title">Bảng tin tức </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="news" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width: 1%" class="text-center">Mã tin tức</th>
                                <th style="width: 10%" class="text-center">Ngày đăng</th>
                                <th style="width: 15%" class="text-center">Tiêu đề</th>
                                <th style="width: 40%" class="text-center">Nội dung</th>
                                <th style="width: 10%" class="text-center">Hình ảnh</th>
                                <th style="width: 25%" class="text-center">Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($news as $p)
                            <tr>
                                <td>{{ $p->news_id }}</td>
                                <td>{{ $p->news_date }}</td>
                                <td>{{ $p->news_topic }}</td>
                                <td>{{ $p->news_content }}</td>
                                <td><img width="100px" src="{{url('images/'.$p->news_image) }}" /></td>
                                <td class="text-right">
                                    <a class="btn btn-primary btn-sm" href="{{Route('admin.news.details',$p->news_id)}}">
                                        <i class="fas fa-folder"></i> Xem</a>
                                    <a class="btn btn-info btn-sm" href="{{ Route('admin.news.update',$p->news_id) }}">
                                        <i class="fas fa-pencil-alt"></i> Sửa</a>
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?');" href="{{ Route('admin.news.delete',$p->news_id) }}">
                                        <i class="fas fa-trash"></i> Xóa</a>
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
        $('#news').DataTable({
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