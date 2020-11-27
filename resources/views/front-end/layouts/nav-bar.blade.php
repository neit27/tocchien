<!-- Nav Bar -->
<div class="nav-bar">
    <div class="container">
        <nav class="">
            <div class="row" id="">
                <ul class="col-md-9 d-flex">
                    <li class=" menu"><a href="#" class="">Trang chủ</a></li>
                    @foreach ($categories as $cate)
                    <li class=" menu"><a href="#" class="">{{$cate->name}}</a></li>
                    @endforeach
                </ul>
                <ul class="col-md-3 justify-content-end d-flex">
                    <li class="social">
                        <a href="{{$socials['facebook']['link']}}"><i class="fab fa-facebook-square"></i></a>
                    </li>
                    <li class="row social">
                        <a href="{{$socials['group']['link']}}"><i class="fas fa-users"></i></a>
                    </li>
                    <li class="row social">
                        <a href="{{$socials['youtube']['link']}}"><i class="fab fa-youtube-square"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div><!-- End Nav Bar -->