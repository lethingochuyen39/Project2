@extends('user.layout-user')
@section('title', 'home')
@section('content')
        <section class="content" style="width:200px;padding-top:100px;display:inline-block;">
                    <div class="card-body">
                        <div class="card card-info card-outline">

                            <div class="card-body">
                                <p>Thương hiệu: </p>
                                @foreach($brands as $b)
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox1"  value="{{ $b->brand_name }}">
                                    <label for="customCheckbox1" class="custom-control-label">{{ $b->brand_name }}</label>
                                </div>
                                @endforeach

                        </div>
                    </div>
                </div>
        </section>
@foreach($products as $p)
<div class="container" style="padding-top: 100px;">
    <div class="row" id="products">
        <div class="col-sm-6 col-md-4 hvr-grow" style="border-style: solid; border-width:1px;text-align: center; " data-id="abc">
            <img src="{{ url('images/'.$p->product_image) }}" alt="">
            <p>{{ $p->product_name }}</p>
        </div>
    </div>
</div>
@endforeach
@endsection