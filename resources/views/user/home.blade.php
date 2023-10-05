@extends('layouts.users.app')
@include('layouts.users.banner')
@section('content')
    <!-- ======= Alt Services Section ======= -->
    <section id="get-started" class="alt-services">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-around gy-4">
                <div class="col-lg-6 img-bg" style="background-image: url({{ asset('AdminCSS/dist/img/GioiThieu.png') }});"
                    data-aos-delay="100"></div>

                <div class="col-lg-5 d-flex flex-column justify-content-center">
                    <h3 class="text-uppercase">Đôi nét về Song Yến</h3>
                    <p>Dự án Song Yến chính thức được khởi động với mục đích đưa tâm lý học tiếp cận đúng và sâu sắc nhất
                        đến với mọi người xung quanh đặc biệt là học sinh sinh viên đang ở độ tuổi nhạy cảm và gặp nhiều vấn
                        đề tâm lý.</p>
                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                        <i class="fa fa-eye flex-shrink-0"></i>
                        <div>
                            <h4><a class="stretched-link">Tầm Nhìn</a></h4>
                            <p>Song Yến tin rằng đời sống tinh thần của mọi người sẽ trở nên hạnh phúc hơn khi nhà trường,
                                phụ huynh và học sinh xem tâm lý là một yếu tố quan trọng trong việc giáo dục và phát triển
                                thế hệ tương lai.</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                        <i class="fa fa-feather flex-shrink-0"></i>
                        <div>
                            <h4><a class="stretched-link">Sứ mệnh</a></h4>
                            <p>Song Yến muốn lan tỏa những kiến thức tâm lý đến với các bạn học sinh, phụ huynh và nhà
                                trường, giúp cho quá trình phát triển của học sinh được diễn ra tốt nhất và hiệu quả nhất,
                                góp phần giảm bớt những định kiến, hủ tục lỗi thời, tăng giá trị phát triển bền vững.</p>
                        </div>
                    </div><!-- End Icon Box -->

                </div>
            </div>

        </div>
    </section><!-- End Alt Services Section -->
    <!-- ======= Constructions Section ======= -->
    <section class="constructions">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Các chủ đề của Song Yến</h2>
                <p>Đội ngũ nhân sự của Song Yến luôn luôn có gắng mang lại những thông tin, kiến hình hữu ích cho các bạn ở
                    các chủ đề tiêu biểu của Tâm lý học</p>
            </div>

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"
                                    style="background-image: url({{ asset('uploads/image/SucKhoeTinhThan.jpg') }});">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Tâm lý học sức khỏe tinh thần.</h4>
                                    <p>Sức khỏe tinh thần là một phần thiết yếu của cuộc sống con người và tầm quan
                                        trọng của nó cũng không hề kém cạnh sức khỏe sinh lý. Chính vì vậy chăm sóc
                                        sức khỏe tinh thần thế nào cho đúng và chăm sóc như thế nào sẽ được Song Yến mang
                                        đến
                                        trong các bài viết về chủ đề này</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"
                                    style="background-image: url({{ asset('uploads/image/TinhYeu.png') }});">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Tâm lý học Tình Yêu</h4>
                                    <p>Tình yêu là vị ngọt của tạo hóa, khi ở trong tình yêu
                                        chúng ta sẽ như thế nào? Và phải làm sao để có được
                                        một tình yêu trọn vẹn? Đó sẽ là những gì Song Yến
                                        chia sẽ cho bạn ở chủ đề này</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"
                                    style="background-image: url({{ asset('uploads/image/TamLyHocTreEm.png') }});">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Tâm lý học trẻ em</h4>
                                    <p>Trẻ em là những trang giấy trắng và những gì bạn chúng ta dạy trẻ sẽ quyết định
                                        trang giấy đó sẽ ra sao ở tương lai. Việc chăm sóc sức khỏe về mặt tâm lý cho
                                        trẻ nhỏ từ sớm là việc làm cần thiết cho sự phát triển theo chiều hướng tích cức.
                                        Song Yến sẽ cùng bạn tìm hiểu làm thể nào để giúp trẻ phát triển tâm lý tốt ở chủ đề
                                        này</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"
                                    style="background-image: url({{ asset('uploads/image/NghienCuuKhoaHoc.jpg') }});">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Nghiên cứu khoa học</h4>
                                    <p>Tâm lý học là một trong các nhóm đề tài được quan tâm và tập trung nghiên cứu nhiều
                                        trên
                                        toàn thế giới nói chung và ở Việt Nam nói riêng, từ các Bài báo khoa học đến các đề
                                        tài nghiên
                                        cứu bảo vệ luận văn Thạc sĩ, Tiến sĩ. Và Song Yến sẽ là cầu nối giúp các bạn tiếp
                                        cận đến các
                                        đề tài nghiên cứu khoa học trong chủ đề này
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

            </div>

        </div>
    </section><!-- End Constructions Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2 class="text-uppercase">Các lĩnh vực hoạt động </h2>
            </div>

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="d-flex">
                            <h1><i class="bi bi-facebook" style="color: blue"></i></h1>
                        </div>
                        <h3>FaceBook Fanpage</h3>
                        <p>Song Yến thành lập Fanpage từ ngày 04-10-2021
                            trên nền tảng Facebook nhằm tận dụng tính phổ
                            biến và tiện lợi của nền tảng mạng xã hội từ
                            đó tiếp cận được nhiều hơn với các cá nhân
                            cần được hỗ trợ về tâm lý</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="d-flex">
                            <h1><i class="bi bi-calendar-check-fill" style="color: rgb(247, 0, 255)"></i></h1>
                        </div>
                        <h3>Tổ chức sự kiện</h3>
                        <p>Song Yến luôn chủ động hợp tác với các đối tác tiềm năng trong lĩnh vực
                            Tâm lý để tổ chức các chương trình, sự kiện xoay quanh các chủ để liên
                            quan đến Tâm lý và Sức khỏe tinh thần </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="d-flex">
                            <h1><i class="bi bi-link" style="color: rgb(0, 255, 234)"></i></h1>
                        </div>
                        <h3>Cầu nối tư vấn tâm lý</h3>
                        <p>Song Yến luôn chủ động hợp tác với các đối tác tiềm năng trong lĩnh vực
                            Tâm lý để tổ chức các chương trình, sự kiện xoay quanh các chủ để liên
                            quan đến Tâm lý và Sức khỏe tinh thần </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="d-flex">
                            <h1><i class="bi bi-youtube" style="color: rgb(255, 0, 0)"></i></h1>
                        </div>
                        <h3>Youtube Channel</h3>
                        <p>Comming Soon</p>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="d-flex">
                            <h1><i class="bi bi-spotify" style="color: rgb(46, 228, 0)"></i></h1>
                        </div>
                        <h3>Spotify Channel</h3>
                        <p>Comming Soon</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="d-flex">
                            <h1><i class="bi bi-tiktok" style="color: rgb(0, 0, 0)"></i></h1>
                        </div>
                        <h3>Tiktok Channel</h3>
                        <p>Comming Soon</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->


    {{-- <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Những chương trình của chúng tôi</h2>
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order">

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    
                  >

            </div>

        </div>
    </section><!-- End Our Projects Section -->


    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">



            <div class=" section-header">
                <h2>Recent Blog Posts</h2>
                <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
            </div>

            <div class="row gy-5">

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-item position-relative h-100">

                        <div class="post-img position-relative overflow-hidden">
                            <img src="UserCSS/assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
                            <span class="post-date">December 12</span>
                        </div>

                        <div class="post-content d-flex flex-column">

                            <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>

                            <div class="meta d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                                </div>
                                <span class="px-3 text-black-50">/</span>
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                                </div>
                            </div>

                            <hr>

                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>

                        </div>

                    </div>
                </div><!-- End post item -->

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="post-item position-relative h-100">

                        <div class="post-img position-relative overflow-hidden">
                            <img src="UserCSS/assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
                            <span class="post-date">July 17</span>
                        </div>

                        <div class="post-content d-flex flex-column">

                            <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

                            <div class="meta d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                                </div>
                                <span class="px-3 text-black-50">/</span>
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                                </div>
                            </div>

                            <hr>

                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>

                        </div>

                    </div>
                </div><!-- End post item -->

                <div class="col-xl-4 col-md-6">
                    <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

                        <div class="post-img position-relative overflow-hidden">
                            <img src="UserCSS/assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                            <span class="post-date">September 05</span>
                        </div>

                        <div class="post-content d-flex flex-column">

                            <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

                            <div class="meta d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                                </div>
                                <span class="px-3 text-black-50">/</span>
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                                </div>
                            </div>

                            <hr>

                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>

                        </div>

                    </div>
                </div><!-- End post item -->

            </div>

        </div>
    </section>
    <!-- End Recent Blog Posts Section --> --}}
@endsection
