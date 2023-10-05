    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <img class="img-fluid w-100" src="{{ asset('AdminCSS/dist/img/Logo.png') }}" alt="">
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="footer-info">
                            <h4>Thông tin liên hệ</h4>
                            <p>
                                Ấp Cao Một, xã Tân Hòa,<br>
                                huyện Tiểu Cân, tỉnh Trà Vinh. <br><br>
                                <strong>Phone:</strong> 0395 001 913<br>
                                <strong>Email:</strong> Songyen.psy@gmail.com<br>
                            </p>
                            <div class="social-links d-flex mt-3">
                                {{-- <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-twitter"></i></a> --}}
                                <a href="https://www.facebook.com/Songyenpsy" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-facebook"></i></a>
                                {{-- <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-linkedin"></i></a> --}}
                            </div>
                        </div>
                    </div><!-- End footer info column-->

                    <div class="col-lg-3 col-md-3 footer-links">
                        <h4>Liên kết</h4>
                        <ul>
                            @guest
                            <li><a href="{{ route('home1') }}">Trang chủ</a></li>
                            <li><a href="{{ route('about') }}">Về chúng tôi</a></li>
                            <li><a href="{{ route('event') }}">Sự kiện</a></li>
                            <li><a href="{{ route('blog') }}">Bài viết</a></li>
                            <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                            @else
                            <li><a href="{{ route('user.home') }}">Trang chủ</a></li>
                            <li><a href="{{ route('user.about') }}">Về chúng tôi</a></li>
                            <li><a href="{{ route('user.event') }}">Sự kiện</a></li>
                            <li><a href="{{ route('user.blog') }}">Bài viết</a></li>
                            <li><a href="{{ route('user.contact') }}">Liên hệ</a></li>
                            @endguest
                        </ul>
                    </div><!-- End footer links column-->

                    <div class="col-lg-3 col-md-3 footer-links">
                        <h4>Mạng xã hội</h4>
                        <ul>
                            <li><a href="https://www.facebook.com/Songyenpsy">Facebook</a></li>
                            <li><a href="#" >Instagram</a></li>
                            <li><a href="#" >TikTok</a></li>
                            <li><a href="#" >Spotify</a></li>
                            <li><a href="#" >Youtube</a></li>
                        </ul>
                    </div><!-- End footer links column-->

                </div>
            </div>
        </div>

        <div class="footer-legal text-center position-relative">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Song Yến PSY</span></strong>. All Rights Reserved
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->