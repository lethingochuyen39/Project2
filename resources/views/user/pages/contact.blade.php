@extends('user.layout-user')
@section('title', 'liên hệ')
@section('content')
<style>
    /* ----------contact us - style------------- */

    /*(----------map-css-begin-------------------)*/
    .map {
        height: 500px;
        position: relative;
    }

    .map iframe {
        width: 100%;
    }

    .map Img {
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-14px, -21px);
        -ms-transform: translate(-14px, -21px);
        transform: translate(-14px, -21px);
    }

    .map {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    /*(----------map-css-end------------------)*/

    /*(----------Contact Section-begin--------)*/
    .contact-info h4 {
        font-weight: 600;
        color: #111111;
        text-transform: uppercase;
        margin-bottom: 47px;
    }

    .contact-info .contact-address .ca-widget {
        overflow: hidden;
        margin-bottom: 16px;
    }

    .contact-info .contact-address .ca-widget .cw-icon {
        height: 74px;
        width: 74px;
        border: 1px solid #ebebeb;
        border-radius: 50%;
        text-align: center;
        line-height: 74px;
        float: left;
        margin-right: 28px;
    }

    .contact-info .contact-address .ca-widget .cw-text {
        padding-top: 12px;
    }

    .contact-info .contact-address .ca-widget .cw-text h5 {
        color: #bdbdbd;
        margin-bottom: 5px;
    }

    .contact-info .contact-address .ca-widget .cw-text p {
        margin-bottom: 0;
        color: #111111;
        font-size: 18px;
    }

    .contact-info .contact-address .ca-widget .cw-text p a {
        color: #111111;
    }

    .contact-info .contact-address .ca-widget .cw-text p a:hover {
        color: orangered;
    }

    .contact-form h4 {
        font-weight: 600;
        color: #111111;
        text-transform: uppercase;
        margin-bottom: 47px;
    }

    .contact-form form input {
        width: 100%;
        height: 51px;
        border: 1px solid #e1e1e1;
        padding-left: 20px;
        font-size: 16px;
        margin-bottom: 30px;
    }

    .contact-form form input::-webkit-input-placeholder {
        color: #9a9a9a;
    }

    .contact-form form input::-moz-placeholder {
        color: #9a9a9a;
    }

    .contact-form form input:-ms-input-placeholder {
        color: #9a9a9a;
    }

    .contact-form form input::-ms-input-placeholder {
        color: #9a9a9a;
    }

    .contact-form form input::placeholder {
        color: #9a9a9a;
    }

    .contact-form form input:focus {
        color: #111111;
    }

    .contact-form form textarea {
        width: 100%;
        height: 150px;
        border: 1px solid #e1e1e1;
        padding-left: 20px;
        font-size: 16px;
        padding-top: 10px;
        margin-bottom: 42px;
        resize: none;
    }

    .contact-form form textarea::-webkit-input-placeholder {
        color: #9a9a9a;
    }

    .contact-form form textarea::-moz-placeholder {
        color: #9a9a9a;
    }

    .contact-form form textarea:-ms-input-placeholder {
        color: #9a9a9a;
    }

    .contact-form form textarea::-ms-input-placeholder {
        color: #9a9a9a;
    }

    .contact-form form textarea::placeholder {
        color: #9a9a9a;
    }

    .contact-form form textarea:focus {
        color: #111111;
    }

    .contact-form form button {
        font-size: 14px;
        color: #ffffff;
        padding: 10px 33px;
        display: inline-block;
        background: -webkit-gradient(linear,
                left top,
                right top,
                from(#eb3c5a),
                to(#f67831));
        background: -o-linear-gradient(left, #eb3c5a, #f67831);
        background: linear-gradient(to right, #eb3c5a, #f67831);
        border: none;
        text-transform: uppercase;
    }

    .header {
        background-image: url("{{ asset('frontend/img/Contact_Us.jpg') }}");
        background-size: cover;
        background-repeat: no-repeat;
        width: 100%;
        height: 450px;
        /* height: 100vh; */
        background-position: center;
        display: block;
        background-color: rgba(255, 255, 255, 0.3);
        background-blend-mode: lighten;
        position: relative;
    }

    /*(----------Contact Section-end--------)*/
</style>

<section class="header d-flex flex-column justify-content-center align-content-center" >

    <!-- Section Intro -->
    <section class="header d-flex justify-content-start align-items-center ">
        <div class="container-fluid mb-lg-5">
            <div class="row">
                <div class="col-lg-7 text-lg-start text-center">
                    <h1>
                        <div class="h2 fw-bold" style="color:#FFEA00;"> Hãy gọi, nhắn tin, gửi mail...
                        </div>
                        <div class="h4 fw-bold" style="color: whitesmoke; font-style: italic;">Chúng tôi rất vui khi được hỗ trợ bạn với bất kì hình thức nào</div>
                    </h1>
                    <a href="#intro" class="btn btn-lg mb-2 rounded-right" style="background-color:#ff474c; color: whitesmoke;">Liên hệ ngay</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Intro End -->
</section>
<!--NavBar End-->

<!-- Contact Section Begin -->
<section class="contact-section spad mt-5 mb-5" id="intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-info">
                    <h4 style=" color:#006600; font-weight: bolder; text-shadow: 1px 0px 1px rgb(10, 2, 32);">Liên Hệ SoccerStar</h4>
                    <div class="contact-address">
                        <div class="ca-widget">
                            <div class="cw-icon">
                                <Img src="{{ asset('frontend/img/icon-1.png') }}" alt="address">
                            </div>
                            <div class="cw-text">
                                <h5>Địa điểm</h5>
                                <p>590 Cách mạng tháng 8, Phường 11,<br> Quận 3, TP. Hồ Chí Minh</p>
                            </div>
                        </div>
                        <div class="ca-widget">
                            <div class="cw-icon">
                                <Img src="{{ asset('frontend/img/icon-2.png') }}" alt="phone">
                            </div>
                            <div class="cw-text">
                                <h5>Điện thoại</h5>
                                <p>024 7300 8855</p>
                            </div>
                        </div>
                        <div class="ca-widget">
                            <div class="cw-icon">
                                <Img src="{{ asset('frontend/img/icon-3.png') }}" alt="mail">
                            </div>
                            <div class="cw-text">
                                <h5>E-Mail</h5>
                                <p><a href="mailto:info@gmail.com?Subject=Hello!">info@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$" -->
            <div class="col-lg-7">
                <div class="contact-form">
                    <h4 style=" color:#006600; font-weight: bolder; text-shadow: 1px 0px 1px rgb(10, 2, 32);">Phản hồi với chúng tôi</h4>
                    @if(Session::has('thongbao'))
                    <p style="color: green; font-weight: bold; font-size: large;">{{Session::get('thongbao')}}</p>
                    @endif
                 
                    <form action="{{ Route('customer.postContact') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-6">
                                <label>
                                    <small>
                                        @if($errors->has('feedback_name'))
                                        <strong class="text-danger">{{ $errors->first('feedback_name') }}</strong>
                                        @endif
                                    </small>
                                </label>

                                <input type="text" name="feedback_name" class="form-control" placeholder="Họ tên của bạn">
                            </div>
                            <div class="col-lg-6">
                                <label>
                                    <small>
                                        @if($errors->has('feedback_email'))
                                        <strong class="text-danger">{{ $errors->first('feedback_email') }}</strong>
                                        @endif
                                    </small>
                                </label>
                                <input type="email" name="feedback_email" class="form-control" placeholder="E-mail của bạn">

                            </div>
                        </div>
                        <div class="col-lg-12">

                            <label>
                                <small>
                                    @if($errors->has('feedback_content'))
                                    <strong class="text-danger">{{ $errors->first('feedback_content') }}</strong>
                                    @endif
                                </small>
                            </label>

                            <textarea name="feedback_content" id="" cols="30" rows="10" placeholder="Nội dung phản hồi với chúng tôi..." class="form-control"></textarea>
                            <button class="btn btn-primary" type="submit"><span></span> Gửi phản hồi</button>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Map Section Begin -->
<div class="container">

    <div class="col-md-12" style="text-align: center;">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3193500366883!2d106.66408561394566!3d10.786834792314448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ed2392c44df%3A0xd2ecb62e0d050fe9!2sFPT-Aptech%20Computer%20Education%20HCM!5e0!3m2!1sen!2s!4v1605550165904!5m2!1sen!2s" width="100%" height="300px" frameborder="1" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
<!-- Map Section End -->
@endsection