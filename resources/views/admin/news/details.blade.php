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
                        <h3 class="card-title">Chi tiết bài báo</h3>
                    </div>
                    <div class="card-body">
                        <table id="news" class="table table-bordered table-hover">
                            <tr>
                                <td>Ngày đăng</td>
                                <td><input name="txtDate" value="{{$p->news_date}}" readonly></td>
                            <tr>
                            <tr>
                                <td>Tiêu đề</td>
                                <td><input name="txtTopic" value="{{$p->news_topic}}" readonly></td>
                            </tr>
                            <tr>
                                <td>Nội dung</td>
                                <td><textarea name="txaContent" rows="3" value="{{$p->news_content}}" readonly></textarea></td>
                            </tr>
                            <tr>
                                <td><img width="100px" src="{{url('images/'.$p->news_image) }}" /></td>
                            </tr>
                            <tr>
                                <td><a class="btn btn-primary btn-sm" href="{{Route('admin.news.index')}}">Back</a></td>
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