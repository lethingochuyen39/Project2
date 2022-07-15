@extends('user.layout-product')
@section('title', 'home')
@section('content')
<style>
    h6{
        width: 320px;
        text-align: center;
    }
</style>
<div class="container" id="products">
        @foreach($products as $p)
        <!-- <div class="col-sm-6 col-md-8 hvr-grow" style="border-style: solid; border-width:1px;text-align: center; " data-id="abc">  
        </div> -->
        <div>
            <div class="card">
                <a href="{{ Route('user.detailProduct',$p->id) }}">
                    <center>
                        <div class="imgBx">
                            <img src="{{ url('images/'.$p->product_image) }}" alt="">
                        </div>
                    </center>
                </a>
                <div class="contentBx">
                    <a id="Buy" href="#">Buy Now</a>
                </div>
            </div>
            <h6><b>{{ $p->product_name }}</b></h6>
        </div>
        @endforeach
    </div>
@endsection