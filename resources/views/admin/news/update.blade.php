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
                        <h3 class="card-title">Update {{ $p->name }}</h3>
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
                    <form role="form" action="{{ Route('admin.news.postUpdate',$p->news_id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">Mã tin tức</label>
                                <input type="text" class="form-control" id="txt-id" name="news_id" placeholder="1" value="{{ $p->id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-date">Ngày đăng</label>
                                <input type="datetime-local" class="form-control" id="txt-date" name="news_date" value="{{ $p->news_date }}">
                            </div>
                            <div class="form-group">
                                <label for="txt-topic">Tiêu đề</label>
                                <input type="text" class="form-control" id="txt-topic" name=news_topic" value="{{ $p->news_topic }}">
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="form-control" rows="3" name="news_content" placeholder="Enter ..." value="{{ $p->description }}"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Ảnh</label>
                                <img class="img-fluid" src="{{ url('images/'.$p->news_image) }}" />
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