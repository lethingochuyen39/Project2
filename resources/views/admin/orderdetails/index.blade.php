@extends('admin.layout-admin')
@section('title', 'orderdetails index')
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
                    <h3 class="card-title">Bảng chi tiết đơn hàng</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="brands" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>OrderDetails ID</th>
                                <th>OrderDetails Quanity</th>
                                <th>OrderDetails Price </th>
                                <th>Product Size</th>
                                <th>Order ID</th>
                                <th>Product ID</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orderdetails as $p)
                            <tr>
                                <td>{{ $p->orderDetail_id }}</td>
                                <td>{{ $p->orderDetail_quantity }}</td>
                                <td>{{ $p->orderDetail_price }}</td>
                                <td>{{ $p->product_size }}</td>
                                <td>{{ $p->order_id  }}</td>
                                <td>{{ $p->product_id   }}</td>
                                <td class="text-right">
                                    <a class="btn btn-info btn-sm" href="{{ Route('orderdetails.update',$p->orderDetail_id) }}">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="{{ Route('orderdetails.delete',$p->orderDetail_id) }}">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>OrderDetails ID</th>
                                <th>Order ID</th>
                                <th>Product ID</th>
                                <th>OrderDetails Quanity</th>
                                <th>OrderDetails Price </th>
                                <th>Product Size</th>

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