@extends('admin.layout-admin')
@section('title')
Thêm tin tức
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thêm tin tức</h3>
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
                    <form role="form" action="{{ Route('admin.news.postCreate') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-date">Ngày đăng</label>
                                <input type="datetime-local" class="form-control" id="date" name="news_date">
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Tiêu đề</label>
                                <input type="text" class="form-control" id="topic" name="news_topic" placeholder="Nhập tiêu đề bài báo">
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="form-control" rows="3" name="news_content" placeholder="Nhập nội dung"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Ảnh</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" id="image" name="news_image">
                                    </div>
                                    <label class="custom-file-label" for="image">Chọn ảnh</label>
                                </div>
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
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom- file-input.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
@endsection