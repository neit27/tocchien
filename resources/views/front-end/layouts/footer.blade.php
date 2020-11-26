<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row f-row">
            <div class="col-md-4">
                <div class="f-title"><h4>Về chúng tôi</h4></div>
                <div class="f-img">
                    <img src="{{asset('front-end/img/logo-png.png')}}" alt="">
                </div>
                <div class="f-info">
                    <p>Tin Tốc Chiến | Kênh tin tức game Tốc Chiến, cập nhật tin tức nhanh nhất, mới nhất, hot nhất liên tục 24/7</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="f-title"><h4>Chuyên mục</h4></div>
                <div class="f-category">
                    <ul>
                        @foreach ($categories as $cate)
                            <li><a href="">{{$cate->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="f-title"><h4>Mạng xã hội</h4></div>
                <div class="f-category">
                    <ul class="col-md-4 justify-content-end d-flex">
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
            </div>
        </div>
        <p class="copyright">© Copyright 2020 Tintocchien</p>
    </div>
</div> <!-- End Footer -->