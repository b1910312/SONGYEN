@extends('layouts.users.app')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('{{ asset('UserCSS/assets/img/breadcrumbs-bg.jpg') }}');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Về chúng tôi</h2>
            <ol>
                <li><a
                        href="
          @guest
{{ route('home1') }}
          @else
            {{ route('user.home') }} @endguest">Trang
                        chủ</a></li>
                <li>Về chúng tôi</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row position-relative">



                <div class="col-lg-6">

                    <h3 class="text-center">DOANH NGHIỆP TƯ VẤN VÀ ĐÀO TẠO SONG YẾN</h2>
                        <h3 class="text-center">Câu chuyện của chúng tôi</h3><br>
                        <p class="text-">&ensp;&ensp;Bắt đầu là một điều ấp ủ và ngày qua ngày điều ấp ủ ấy thôi thúc mỗi
                            sinh viên chúng tôi hiện thực hóa
                            những gì gọi là giấc mơ, vào ngày 04-10-2021 Song Yến chính thức được thành lập với danh nghĩa
                            là một dự án.
                            <br><br>
                            &ensp;&ensp;Trong năm 2021-2022 chúng tôi là một dự án non trẻ với những chàng trai cô gái mang
                            trong mình khát vọng
                            "Đi tìm hạnh phúc" không chỉ cho bản thôi chúng tôi mà là cho mọi người xung quanh chúng tôi.
                            <br><br>
                            &ensp;&ensp;Đến những tháng cuối năm 2022 đầu năm 2023, vẫn là Song Yến vẫn là những cô cậu sinh
                            viên ấy nhưng giờ đây
                            chúng tôi là một doanh nghiệp tư vấn và đào tạo. Và giờ đây chúng tôi không còn "Đi tìm hạnh
                            phúc" mà giờ đây hành trình
                            của chúng tôi là "Đi để hạnh phúc". Vậy còn chừng chờ gì nữa hãy cùng đi với Song Yến để cùng
                            nhau hạnh phúc nhé!!!
                        </p>
                        <p> &ensp;&ensp;Song Yến luôn cam kết mang lại cho mọi người xung quanh 3 điều sau:</p>

                        <ul class="row text-center">
                            <li class="col">
                                <h3><i class="bi bi-check-circle"></i> <span>Đồng hành</span></h3>
                            </li>
                            <li class="col">
                                <h3><i class="bi bi-check-circle"></i> <span>Tận Tâm</span></h3>
                            </li>
                            <li class="col">
                                <h3><i class="bi bi-check-circle"></i> <span>Uy Tín</span></h3>
                            </li>
                        </ul>

                        {{-- <div class="watch-video d-flex align-items-center position-relative">
                            <i class="bi bi-play-circle"></i>
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch
                                Video</a>
                        </div> --}}
                </div>
                <div class="col-lg-6 ">
                    <img src="{{ asset('AdminCSS/dist/img/Logo.png') }}" class="img-fluid" alt="">
                </div>

            </div>

        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter section-bg">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <h6>Số lượng truy cập</h6>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <h6>Chương trình đã thực hiện</h6>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-headset color-green flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <h6>Số lượng bài viết</h6>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-people color-pink flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <h6>Lượt tương tác</h6>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-around gy-4">
                <div class="col-lg-6 img-bg"
                    style="background-image: url({{ asset('UserCSS/assets/img/alt-services.jpg') }});" data-aos="zoom-in"
                    data-aos-delay="100"></div>

                <div class="col-lg-5 d-flex flex-column justify-content-center">
                    <h3>Các chương trình nổi bật</h3>
                    <p>Song Yến luôn hiện diện ở các lĩnh vực gần gũi và cần thiết của giới trẻ thông qua các chương trình
                        thiết thực và
                        mang lại nhiêu cũng bậc cảm xúc cho người tham gia và chính những chương trình này sẽ là giá trị mà
                        Song Yến muốn
                        mang lại cho mọi người xung quanh
                    </p>
                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-easel flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Hiểu rồi thương</a></h4>
                            <p>Là một chương trình thường niên của Song Yến, Hiểu rồi thương mang trong đó là những cảm xúc
                                của người con,
                                những giọt nước hạnh phúc của các bậc phụ huynh. chính chương trình này lột tả chân thành
                                nhất những "gốc khuất"
                                của các bậc cha mẹ mà ở vai trò người con chẳng mấy ai trong chúng ta có thể thấu hiểu được,
                                chính vì vậy hãy "Hiểu"
                                rồi "Thương" ba mẹ mình nhiều hơn
                            </p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-patch-check flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Nâng cao sức khỏe tinh thần</a></h4>
                            <p>Sức khỏe tinh thần một phần quan trọng của cuộc sống và làm sao để có một sức khỏe tinh thần
                                lành mạnh thì
                                lại là câu hỏi khó có lời giải. Và để giải đáp cho câu hỏi Song Yên luôn đồng hành các
                                chuyên gia, bác sĩ,
                                chuyên viên tâm lý để có thể cùng các bạn tìm ra lời giải cho câu hỏi: "Làm sao để có một
                                sức khỏe tinh thần
                                lành mạnh?"
                            </p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Chuyện trường chọn nghề</a></h4>
                            <p>Nghề nghiệp luôn là vấn đề quan trọng và quyết định chọn học nghề gì lại càng quan trọng hơn.
                                Nắm bắt được
                                sự quan tâm sôi nổi của giới trẻ trong thời đại "Tuổi trẻ hôm nay ngại gì khởi nghiệp", Song
                                Yến mang đến một
                                chương trình tư vấn hướng nghiệp "Chuyện trường chọn nghề" để giúp các bạn có được cách nhìn
                                hoàn thiện hơn
                                về các nghề nghiệp.
                            </p>
                        </div>
                    </div><!-- End Icon Box -->

                    {{-- <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-brightness-high flex-shrink-0"></i>
            <div>
              <h4><a href="" class="stretched-link">Tride clov</a></h4>
              <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet. Et eligendi</p>
            </div>
          </div><!-- End Icon Box --> --}}

                </div>
            </div>

        </div>
    </section><!-- End Alt Services Section -->

    <!-- ======= Alt Services Section 2 ======= -->
    <section id="alt-services-2" class="alt-services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-around gy-4">
                <div class="col-lg-5 d-flex flex-column justify-content-center">
                    <h3>Các chủ đề nổi bật</h3>
                    <p>Đội ngũ nhân sự của Song Yến luôn luôn có gắng mang lại những thông tin, kiến hình hữu ích cho các
                        bạn ở các chủ đề tiêu biểu của Tâm lý học</p>

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-easel flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Tâm lý học sức khỏe tinh thần</a></h4>
                            <p>Sức khỏe tinh thần là một phần thiết yếu của cuộc sống con người và tầm quan
                                trọng của nó cũng không hề kém cạnh sức khỏe sinh lý. Chính vì vậy chăm sóc
                                sức khỏe tinh thần thế nào cho đúng và chăm sóc như thế nào sẽ được Song Yến mang đến
                                trong các bài viết về chủ đề này</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-patch-check flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Tâm lý học tình yêu</a></h4>
                            <p>Tình yêu là vị ngọt của tạo hóa, khi ở trong tình yêu
                                chúng ta sẽ như thế nào? Và phải làm sao để có được
                                một tình yêu trọn vẹn? Đó sẽ là những gì Song Yến
                                chia sẽ cho bạn ở chủ đề này</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Tâm lý học trẻ em</a></h4>
                            <p>Trẻ em là những trang giấy trắng và những gì bạn chúng ta dạy trẻ sẽ quyết định
                                trang giấy đó sẽ ra sao ở tương lai. Việc chăm sóc sức khỏe về mặt tâm lý cho
                                trẻ nhỏ từ sớm là việc làm cần thiết cho sự phát triển theo chiều hướng tích cức.
                                Song Yến sẽ cùng bạn tìm hiểu làm thể nào để giúp trẻ phát triển tâm lý tốt ở chủ đề này</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Nghiên cứu khoa học</a></h4>
                            <p>Tâm lý học là một trong các nhóm đề tài được quan tâm và tập trung nghiên cứu nhiều trên
                                toàn thế giới nói chung và ở Việt Nam nói riêng, từ các Bài báo khoa học đến các đề tài
                                nghiên
                                cứu bảo vệ luận văn Thạc sĩ, Tiến sĩ. Và Song Yến sẽ là cầu nối giúp các bạn tiếp cận đến
                                các
                                đề tài nghiên cứu khoa học trong chủ đề này
                            </p>
                        </div>
                    </div><!-- End Icon Box -->

                </div>

                <div class="col-lg-6 img-bg"
                    style="background-image: url({{ asset('UserCSS/assets/img/alt-services-2.jpg') }});"
                    data-aos="zoom-in" data-aos-delay="100"></div>
            </div>

        </div>
    </section><!-- End Alt Services Section 2 -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Các nhân sự chính</h2>
            </div>

            <div class="row gy-5">
                @foreach ($Master as $master)
                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ asset('uploads/avatar/' . $master->image) }}" class="img-fluid" alt="">
                            {{-- <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div> --}}
                        </div>
                        <div class="member-info text-center">
                            <h4>{{ $master->name }}</h4>
                            <span>
                                @foreach ($Rooms as $room)
                                    @if ($master->room === $room->id)
                                        @if ($master->master === 1)
                                            Trưởng phòng {{ $room->name }}
                                        @elseif($master->master === 2)
                                            Phó phòng {{ $room->name }}
                                        @endif
                                    @endif
                                @endforeach
                            </span>
                            <p>{{ $master->proverbs }}</p>
                        </div>
                    </div><!-- End Team Member -->
                @endforeach

            </div>

        </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Testimonials Section ======= -->
    {{-- <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Đánh giá và nhận xét</h2>
            </div>

            <div class="slides-2 swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                    duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                    minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                    labore illum veniam.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section --> --}}
@endsection
