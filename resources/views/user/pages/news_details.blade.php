@extends('user.layout-user')
@section('title', 'news_details')
@section('content')
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<style>
    * {
        margin: 0;
        padding: 0;
        font-size: 20px;
        line-height: 2rem;
        font-family: 'Montserrat', sans-serif;
    }

    /*(----------Scroll To Top button-------)*/
    #scrolltotop {
        position: fixed;
        right: 10px;
        bottom: 10px;
        height: 50px;
        width: 50px;
        border-radius: 50%;
        background: #e62739;
        box-shadow: 0 0 10px rgb(0, 0, 0, 0.25);
        color: whitesmoke;
        border: none;
        outline: none;
        cursor: pointer;
        display: none;
    }

    #scrolltotop:active {
        background: #cc2333;
    }

    /*(----------Scroll To Top button end-------)*/
</style>

<div>
    <h2 class="title text-center">{{$news_title}}</h2>

    @foreach($news as $p)
    <div class="col-sm-4">
        <div class="product-image-wrapper" style="border: none;">
            <div class="single-products" style="margin:10px 0; padding:2px;">
                {!!$p->content!!}
                <!-- <div class="info text-center">
                    @csrf
                    <a href="{{URL::to('/news/'.$p->news_slug)}}">
                        <img style="float:left; width:30%; padding: 5px;" src="{{asset('images/'.$p->news_image)}}" alt="$p->news_slug">
                    </a>
                    <h4 style="color: #000; padding: 5px;">{{$p->news_title}}</h4>
                    <p>{!!$p->news_desc!!}</p>
                </div>
                <div class="text-right">
                    <a href="{{url('user/pages/news-details/'.$p->news_slug)}}" class="btn btn-default btn-sm">Xem bài viết</a>
                </div> -->
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    @endforeach

</div>

<!--Scroll to top button-->
<button id="scrolltotop" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Go to the top">
    <i class="bi bi-arrow-up"></i>
</button>

</section>


<script>
    /*Button scroll to top */
    let btnscrolltotop = document.querySelector("#scrolltotop");
    btnscrolltotop.addEventListener("click", function() {
        window.scrollTo({
            top: 0,
            left: 0,
            behavior: "smooth"
        });
    });
    let mybutton = document.getElementById("scrolltotop");
    // Khi người dùng cuộn xuống 20px từ đầu tài liệu sẽ hiển thị nút
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // Khi người dùng nhấp vào nút, cuộn lên đầu tài liệu
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    /*Button scroll to top end*/
</script>

@endsection