@extends('user.layout-user')
@section('title', 'home')
@section('content')


<style>
    * {
        margin: 0;
        padding: 0;
        font-size: 17px;
        line-height: 2rem;
        font-family: 'Montserrat', sans-serif;
    }
    .info-1 {
        background-image: url("{{ asset('frontend/img/banner_giay.jpg') }}");
        background-size: cover;
        height: 100vh;
        background-position: center;
        display: block;
    }

    #giay-info-1 {
        background-color: rgba(0, 0, 0, 0.5);
        color: whitesmoke;
    }

    .info-2 {
        background-image: url("{{asset('frontend/img/banner_phukien.jpg')}}");
        background-size: cover;
        height: 100vh;
        background-position: center;
        display: block;
    }
    /*(----------Info-End--------)*/
</style>

<!--Introduction-->
<div class="container-fluid" id="topic">
    <div class="text-center mt-5 mb-1 py-3">
        <h1 class="fw-bold">Chào mừng đến với Soccer Star</h1>
        <p class="lead">
            Nơi sẽ đem đến cho bạn những lựa chọn tốt nhất về giày đá bóng và những phụ kiện liên quan
        </p>
    </div>

    <div class="container-fluid">
        <section class="py-md-5" id="features">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h2 class="fw-bolder mb-0 text-center">Về chúng tôi</h2>
                    <div id="demo" class="carousel slide" data-bs-ride="carousel">

                        <!-- Indicators/dots -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                        </div>
                        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('frontend/img/carousel_1.jpg') }}" alt="1" class="d-block w-100" width="300" height="400">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('frontend/img/carousel_2.jpg') }}" alt="1" class="d-block w-100" width="300" height="400">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('frontend/img/carousel_3.jpg') }}" alt="1" class="d-block w-100" width="300" height="400">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('frontend/img/carousel_4.jpg') }}" alt="1" class="d-block w-100" width="300" height="400">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('frontend/img/carousel_5.jpg') }}" alt="1" class="d-block w-100" width="300" height="400">
                            </div>
                        </div>

                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="container-fluid pb-5 pb-md-0">
                        <div class="row gx-5 row-cols-1 row-cols-md-2">
                            <div class="col mb-5 h-100">
                                <div class="feature  bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                <h2 class="h4 fw-bolder">Giới thiệu</h2>
                                <p class="mb-0">SoccerStar là trang chuyên bán về các loại giày đá banh và phụ kiện bóng đá. Phục vụ giao hàng toàn quốc, đáp ứng mọi nhu cầu của khách hàng!</p>
                            </div>
                            <div class="col mb-5 h-100">
                                <div class="feature  bg-gradient text-white rounded-3 mb-3">
                                    <i class="bi bi-info"></i>
                                </div>
                                <h2 class="h4 fw-bolder">Phân loại sản phẩm</h2>
                                <p class="mb-0">Ở đây chúng tôi có phục vụ tất cả mọi loại giày bóng đá từ các thương hiệu nổi tiếng, chất lượng và tất cả các phụ kiện khác liên quan.</p>
                            </div>
                            <div class="col mb-5 mb-md-0 h-100">
                                <div class="feature  bg-gradient text-white rounded-3 mb-3">
                                    <i class="bi bi-bullseye"></i>
                                </div>
                                <h2 class="h4 fw-bolder">Giày</h2>
                                <p class="mb-0">SoccerStar hân hạnh phục vụ 3 loại giày chính gồm giày sân cỏ tự nhiên, giày sân cỏ nhân tạo và giày futsal.</p>
                            </div>
                            <div class="col h-100">
                                <div class="feature  bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                <h2 class="h4 fw-bolder">Phụ kiện</h2>
                                <p class="mb-0">Phụ kiện bá bóng là 1 trong những vật dụng không thể thiếu khi tham gia đánh bóng.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!--Introduction-->

<section id="giay" class="info-1 d-flex justify-content-center align-items-end">
    <div class="container mb-3 py-2 mb-md-1 mb-lg-0 py-lg-4 d-flex justify-content-center align-items-center">
        <div class="row text-center">
            <div class="col rounded pb-1 px-lg-4 py-2 mb-5 mb-md-0" id="giay-info-1">
                <h1 class="fw-bold">Giày đá banh</h1>
                <h4 class="pb-2">Có đủ mọi loại giày phù hợp vs đôi chân của bạn</h4>
                <a href="#" target="_self" rel="follow" aria-label="Learn more about Indoor Activity" style="text-decoration: none; color: #ff474c;">
                    Đi tới trang
                    <i class="bi bi-chevron-compact-right"></i>
                </a>

            </div>
        </div>
    </div>
</section>

<section id="phukien" class="info-2 d-flex justify-content-center">
    <div class="container my-5">
        <div class="row text-center">
            <div class="col rounded-3 p-3 " id="phukien-info-2">
                <h1 class="fw-bold">Phụ kiện</h1>
                <h4 class="pb-2">Đa dạng, phù hợp và dễ sử dụng</h4>
                <a href="#" target="_self" rel="follow" aria-label="Learn more about Indoor Activity" style="text-decoration: none; color: #3f43fd;">
                    Đi tới trang
                    <i class="bi bi-chevron-compact-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!--Scroll to top button-->

    

</section>



@endsection