@extends('admin.layout-admin')
@section('title', 'Chỉnh sửa tin tức')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Chỉnh sửa tin tức - {{ $p->news_topic }}</h3>
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

                    @if(Session::has('thongbao'))
                    <p style="color: green;">{{Session::get('thongbao')}}</p>
                    @endif
                    <!-- form start -->
                    <form role="form" action="{{ Route('admin.news.postUpdate',$p->news_id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">Mã tin tức</label>
                                <input type="text" class="form-control" id="txt-id" name="news_id" value="{{ $p->news_id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-date">Ngày đăng</label>
                                <input type="datetime-local" class="form-control" id="txt-date" name="news_date" value="{{ $p->news_date }}">
                            </div>
                            <div class="form-group">
                                <label for="txt-topic">Tiêu đề</label>
                                <input type="text" class="form-control" id="txt-topic" name="news_topic" value="{{ $p->news_topic }}">
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="form-control" cols="50" rows="3" name="news_content" value="">{{ $p->news_content }}</textarea>
                            </div>


                            <div class="form-group">
                                <label for="image">Ảnh</label>
                                <img class="img-fluid" src="{{ url('images/'.$p->news_image) }}" width="100" height="100" />
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="news_image">
                                        <label class="custom-file-label" for="image">Chọn ảnh</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
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