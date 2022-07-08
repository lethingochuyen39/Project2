@extends('admin.layout-admin')
<!-- thay bang tieu de -->
@section('title', 'trả lời bình luận')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6" style="margin-top: 15px;">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">

                        <h3 class="card-title">Tên Tài khoản: {{ $p->comment_username }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('admin.postReplyComment', $p->comment_id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">Mã Bình luận</label>
                                <input type="text" class="form" id="txt-id" name="comment_id" value="{{ $p->comment_id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Tài khoản bình luận</label>
                                <input type="text" class="form" id="txt-name" name="comment_username" value="{{ $p->comment_username }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Sản phẩm bình luận</label>
                                <input type="text" class="form" id="txt-price" name="product_id" value="{{ $p->product_id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Điểm đánh giá</label>
                                <input type="text" class="form" id="txt-price" name="comment_point" value="{{ $p->comment_point }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Ngày bình luận</label>
                                <input type="text" class="form" id="txt-price" name="comment_date" value="{{ $p->comment_date }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Nội dung bình luận</label> <br>
                                <textarea name="comment_reply" id="" cols="50" rows="1" readonly>{{ $p->comment_content }}</textarea>
                                <div class="form-group">
                                    <label for="txt-price">Nội dung trả lời</label> <br>
                                    <textarea name="comment_reply" id="" cols="50" rows="5">{{ $p->comment_reply }}</textarea>
                                </div>
                                <section class="content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-outline card-info">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        Summernote
                                                    </h3>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <textarea id="summernote">Place <em>some</em> <u>text</u> <strong>here</strong></textarea>
                                                </div>
                                                <div class="card-footer">
                                                    Visit <a href="https://github.com/summernote/summernote/">Summernote</a> documentation for more examples and information about the plugin.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.col-->
                                    </div>
                                </section>

                            </div>

                            <!-- /.card-body -->
                            <div class="col-3 mx-auto " style="margin-bottom: 30px;">
                                <button type="submit" class="btn btn-primary btn-block">Trả lời</button>
                                <button type="reset" class="btn btn-danger btn-block ">Hủy</button>
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