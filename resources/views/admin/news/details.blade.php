@extends('admin.layout-admin')
<!-- thay bang tieu de -->
@section('title', 'Chi tiết tin tức')
@section('content')
<section class="content" >
    <div class="container-fluid" >
        <div class="row" >
            <div class="offset-md-3 col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tin tức - {{ $p->news_topic }}</h3>
                    </div>
                    <form role="form" action="{{ route('admin.news.index') }}">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">Mã Tin tức</label>
                                <input type="text" class="form-control" id="txt-id" name="news_id" value="{{ $p->news_id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Ngày</label>
                                <input type="text" class="form-control" id="txt-name" name="news_date" value="{{ $p->news_date }}">
                            </div>
                           
                            <div class="form-group">
                                <label for="txt-price">Tiêu đề</label>
                                <input type="text" class="form-control" id="txt-price" name="news_topic" value="{{ $p->news_title }}">
                            </div>
                            <div class="form-group">
                                <label for="txt-price">Địa chỉ</label><br>
                                <textarea name="news_content" id="customer_address" cols="50" rows="1" class="form-control">{{ $p->news_content }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Ảnh</label> <br>
                                <img class="img-fluid" src="{{ url('images/'.$p->news_image) }}" width="100" height="100" />
                            </div>

                           
                        </div>
                        <div class="col-3 mx-auto" style="margin-bottom: 30px;">
                            <button type="submit" class="btn btn-primary btn-block"> Quay lại</button>
                        </div>
                    </form>
                </div>
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