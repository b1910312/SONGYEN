@extends('layouts.users.app')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Bài viết</h2>
            <ol>
                <li><a
                        href="
          @guest
{{ route('home1') }}
          @else
            {{ route('user.home') }} @endguest">Trang
                        chủ</a></li>
                <li>Bài viết</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 posts-list">
                @foreach ($Blogs as $blg)
                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100">
                            <div class="post-img position-relative overflow-hidden">
                                @foreach ($Thumbnails as $Th)
                                    @if ($Th->typepost == 1)
                                        @if ($Th->post == $blg->id)
                                            <img src="{{ asset('uploads/thumbnail/' . $Th->image) }}"
                                                class="img-fluid" alt="">
                                        @endif
                                    @endif
                                @endforeach

                                <span class="post-date">{{ date('d/m/Y', strtotime($blg->created_at)) }}</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title">{{ $blg->name }}</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">
                                            @foreach ($Cates as $cts)
                                                @if ($cts->id == $blg->categories)
                                                    {{ $cts->name }}
                                                @endif
                                            @endforeach
                                        </span>
                                    </div>
                                </div>

                                <p>
                                    {{ $blg->content }}
                                </p>

                                <hr>

                                <a href="{{ route('user.blogdetails', ['id' => $blg->id]) }}"
                                    class="readmore stretched-link"><span>Xem thêm</span><i
                                        class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post list item -->
                @endforeach

            </div><!-- End blog posts list -->

            {{-- <div class="blog-pagination">
          <ul class="justify-content-center">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div><!-- End blog pagination --> --}}

        </div>
    </section><!-- End Blog Section -->
@endsection
