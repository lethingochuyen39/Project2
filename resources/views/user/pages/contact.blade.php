@extends('user.layout-user')
@section('title', 'liên hệ')
@section('content')
<style>
    /* .ct1{
        background-image: url("{{ asset('frontend/img/contact.jpg') }}");
        background-size: cover;
        height: 100vh;
        background-position: center;
        display: block;
    } */
</style>

<!-- lien he -->
<div class="container" style="margin-top: 2rem;">
    <div class="ct1 panel-body">

        <div class="row">

            <div class="col-md-6">
                <form method="post" action="{{ Route('customer.postContact') }}">

                    <legend>PHẢN HỒI</legend>
                    @if(Session::has('thongbao'))
                    <p style="color: green;">{{Session::get('thongbao')}}</p>
                    @endif

                    <div class="form-group">
                        <label for="">Họ tên</label>
                        <input type="text" class="form-control" name="feedback_name" id="feedback_name" placeholder="Nhập họ tên của bạn" >
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="feedback_email" id="feedback_email" placeholder="Nhập email của bạn" >
                    </div>

                    <div class="form-group">
                        <label for="comments">Nội dung</label>
                        <textarea rows="4" id="feedback_content" name="feedback_content" class="form-control" placeholder="Nhập nội dung phản hồi của bạn"></textarea>
                    </div>


                    <div class="form-group">
                        <label class="checkbox-inline" style="margin-top: 2rem;">
                            <input type="checkbox" name="checkbox" value="yes" required>Đồng ý với các điều khoản và chính sách của chúng tôi
                        </label>

                    </div>
                    <div>
                        <button type="submit" class="btn btn-success" style=" margin-bottom: 3rem; margin-top: 2rem;">Gửi phản hồi</button>
                    </div>

                </form>

            </div>
            <div class="col-md-6" style="font-family:Arial, Helvetica, sans-serif;">
                <form action="" method="get">

                    <legend>CỬA HÀNG SOCCERSTAR</legend>
                    <div id="MlBIw" class="hc-cmp-subtitle title     ">

                    </div>
                    <ul id="d7gqh" class="hc-cmp-text-list text-list text-list-line    ">
                        <table>
                            <tr>
                                <th>
                                    <div class="fs-2 mb-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                        </svg>
                                    </div>
                                </th>
                                <td>590 Cách mạng tháng 8, Phường 11, Quận 3, TP. Hồ Chí Minh</td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="fs-2 mb-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                        </svg>
                                    </div>
                                </th>
                                <td>035 548 5703</td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="fs-2 mb-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                        </svg>
                                    </div>
                                </th>
                                <td>info@gmail.com </td>
                            </tr>
                            <tr>
                                <th>

                                    <div class="fs-2 mb-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bookmarks-fill" viewBox="0 0 16 16">
                                            <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4z" />
                                            <path d="M4.268 1A2 2 0 0 1 6 0h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L13 13.768V2a1 1 0 0 0-1-1H4.268z" />
                                        </svg>
                                    </div>
                                </th>
                                <td><a href="#">https://soccerstar.com</a></td>
                            </tr>

                        </table>
                    </ul>

            </div>
        </div>
    </div>
</div>

<!-- map -->
<div class="container-fuil">

    <!-- ket thuc khoi menu -->
    <div class="col-md-12" style="text-align: center;">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3193500366883!2d106.66408561394566!3d10.786834792314448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ed2392c44df%3A0xd2ecb62e0d050fe9!2sFPT-Aptech%20Computer%20Education%20HCM!5e0!3m2!1sen!2s!4v1605550165904!5m2!1sen!2s" width="100%" height="300px" frameborder="1" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
@endsection