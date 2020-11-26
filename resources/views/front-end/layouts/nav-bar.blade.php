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
                        <a href="https://www.facebook.com/tintocchien.net"><i class="fab fa-facebook-square"></i></a>
                    </li>
                    <li class="row social">
                        <a href="https://www.facebook.com/groups/TocChien.Riot"><i class="fas fa-users"></i></a>
                    </li>
                    <li class="row social">
                        <a href=""><i class="fab fa-youtube-square"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div><!-- End Nav Bar -->