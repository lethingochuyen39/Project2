@extends('admin.layout-admin')
@section('title', 'orders index')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>DataTables</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb- item"><a href="#">Home</a></li>
                    <li class="breadcrumb- item active">DataTables</li>
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
                    <h3 class="card-title">Bảng Đơn Hàng</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="brands" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Order Date</th>
                                <th>Order Status</th>
                                <th>Order Note</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $p)
                            <tr>
                                <td>{{ $p->order_id }}</td>
                                <td>{{ $p->order_date }}</td>
                                <td class="project-state text-center">
                                    <?php
                                    if ($p->order_status == 0) {
                                        echo '<span class="badge badge-success">Chưa duyệt</span>';
                                    } else {
                                        echo '<span class="badge badge-success">Đã duyệt</span>';
                                    }
                                    ?>
                                </td>
                                <td>{{ $p->order_note }}</td>
                                <td class="text-right">
                                    <a class="btn btn-primary btn-sm" href="{{Route('orders.details',$p->order_id)}}">
                                        <i class="fas fa-folder"></i> View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{ Route('orders.update',$p->order_id) }}">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="{{ Route('orders.delete',$p->order_id) }}">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                            <th>Order ID</th>
                            <th>Order Date</th>
                            <th>Order Status</th>
                            <th>Order Note</th>
                            <th></th>
                            </tr>
                        </tfoot>
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
        $('#brands').DataTable({
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