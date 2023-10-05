@extends('layouts.users.app')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('{{ asset('uploads/thumbnail/' . $Thumbnail->image) }}');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>{{ $Events->name }}</h2>
            <ol>
                <li><a href=" @guest {{ route('home1') }}
        @else
          {{ route('user.home') }} @endguest">Trang
                        chủ</a></li>
                <li><a href="{{ route('user.blog') }}">Bài viết</a></li>
                <li>{{ $Events->name }}</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-5">
                <div class="col-lg-8">

                    <article class="blog-details">

                        <div class="post-img">
                            <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                        </div>

                        <h2 class="title">{{ $Events->name }}</h2>

                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="blog-details.html"><time datetime="2020-01-01">
                                            {{ date('d-m-Y', strtotime($Events->created_at)) }}</time></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                        href="blog-details.html">{{ $countcomment }} {{ _('Bình luận') }}</a></li>
                            </ul>
                        </div><!-- End meta top -->

                        <div class="content" >

                            {!! $Events->content_details !!}

                        </div><!-- End post content -->

                        
                    </article><!-- End blog post -->

                </div>
                <div class="col-lg-4">

                    <div class="sidebar">

                        <div class="sidebar-item search-form">
                            <h3 class="sidebar-title">Tìm kiếm</h3>
                            <form class="mt-3">
                                <input type="text" class="input-search-ajax"  id="inputMobileSearch" placeholder="Tìm tên bài viết ...">
                                <button><i class="bi bi-search"></i></button>
                                <div class=" searchresult border border-black" style="margin-left: 0px; position: absolute; width: 100%; padding:10px 10px; background: #fff; z-index: 1;"> 
                                </div>
                            </form>
                        </div><!-- End sidebar search formn-->
                       <br>

                        <div class="sidebar-item recent-posts">
                            <h3 class="sidebar-title">Recent Posts</h3>

                            <div class="mt-3">

                                <div class="post-item mt-3">
                                    <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                                    <div>
                                        <h4><a href="blog-details.html">Nihil blanditiis at in nihil autem</a></h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                                    <div>
                                        <h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                                    <div>
                                        <h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati ut</a>
                                        </h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                                    <div>
                                        <h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                                    <div>
                                        <h4><a href="blog-details.html">Et dolores corrupti quae illo quod dolor</a></h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                </div><!-- End recent post item-->

                            </div>

                        </div><!-- End sidebar recent posts-->

                        <div class="sidebar-item tags">
                            <h3 class="sidebar-title">Tags</h3>
                            <ul class="mt-3">
                                <li><a href="#">App</a></li>
                                <li><a href="#">IT</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Mac</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Studio</a></li>
                                <li><a href="#">Smart</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div><!-- End sidebar tags-->

                    </div><!-- End Blog Sidebar -->

                </div>
            </div>
            <div class=" container card" style="padding: 10px 10px; margin:10px 10px;">
                <div class="card-head" style="padding: 0 10px">
                    <h4>Bình luận ({{ $countcmt }})</h4>
                </div>
                <div class="card-body ">
                    <div class="card-body">
                        <div id="comment" style="padding: 10px 10px">
                            {{-- bình luận cha --}}
                            @foreach ($comments as $cmt)
                                <div class="row">
                                    <div class="col-md-1">
                                        @foreach ($users as $us)
                                            @if ($us->id == $cmt->user)
                                                <img src="{{ asset('uploads/avatar/' . $us->image) }}" class="img-fluid"
                                                    alt="" height="50">
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-md-11">
                                        <h4><b>
                                                @foreach ($users as $us)
                                                    @if ($us->id == $cmt->user)
                                                        {{ $us->name }}
                                                    @endif
                                                @endforeach
                                            </b></h4>
                                        <p>{{ $cmt->content }}</p>
                                        <a class="btn btn-primary replybtn" data-id="{{ $cmt->id }}">Trả
                                            lời</a>

                                        {{-- reply bình luận --}}
                                        <div style="padding: 10px 10px">
                                            <form action="{{ route('comment.reply', ['id' => $cmt->id]) }}"
                                                method="get" class="form-reply-{{ $cmt->id }}"
                                                style="display: none">
                                                @csrf
                                                <input type="hidden" value="{{ $Events->id }}" name="blog_id">
                                                <input type="hidden" value="{{ Auth::user()->email }}" name="email">
                                                <textarea name="content" class="form-control" rows="3" required placeholder="Nhập nội dung bình luận"></textarea>

                                                <button data-id="{{ $cmt->id }}"
                                                    class="hidebtn btn btn-warning text-white"
                                                    style="float: right; margin: 5px 5px;">Hủy</button>
                                                <button type="submit" style="float: right; margin: 5px 5px;"
                                                    class="btn btn-primary">Trả lời</button>
                                            </form>
                                        </div>
                                        {{-- các reply comment --}}
                                        @foreach ($Recomments as $rcmt)
                                            @if ($cmt->id == $rcmt->reply_id)
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        @foreach ($users as $us)
                                                        @if ($us->id == $rcmt->user)
                                                            <img src="{{ asset('uploads/avatar/'. $us->image) }}" class="img-fluid"
                                                                alt="" height="50">
                                                        @endif
                                                    @endforeach

                                                    </div>
                                                    <div class="col-md-11">
                                                        <h4><b>
                                                                @foreach ($users as $us)
                                                                    @if ($us->id == $rcmt->user)
                                                                        {{ $us->name }}
                                                                    @endif
                                                                @endforeach
                                                            </b></h4>
                                                        <p>{{ $rcmt->content }}</p>
                                                        <a class="btn btn-primary replybtn" data-id="{{ $rcmt->id }}">Trả
                                                            lời</a>
                
                                                        {{-- reply bình luận --}}
                                                        <div style="padding: 10px 10px">
                                                            <form action="{{ route('comment.reply', ['id' => $cmt->id]) }}"
                                                                method="get" class="form-reply-{{ $rcmt->id }}"
                                                                style="display: none">
                                                                @csrf
                                                                <input type="hidden" value="{{ $Events->id }}" name="blog_id">
                                                                <input type="hidden" value="{{ Auth::user()->email }}" name="email">
                                                                <textarea name="content" class="form-control" rows="3" required placeholder="Nhập nội dung bình luận"></textarea>
                
                                                                <button data-id="{{ $cmt->id }}"
                                                                    class="hidebtn btn btn-warning text-white"
                                                                    style="float: right; margin: 5px 5px;">Hủy</button>
                                                                <button type="submit" style="float: right; margin: 5px 5px;"
                                                                    class="btn btn-primary">Trả lời</button>
                                                            </form>
                                                        </div>
                                                        
                                                    </div>

                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                </div>
                            @endforeach
                            <div style="margin-top: 10px" >
                                <form action="{{ route('comment.add') }}" method="POST" role="form">
                                    @csrf
                                    <input type="hidden" value="{{ $Events->id }}" name="book_id">
                                    <input type="hidden" value="{{ Auth::user()->email }}" name="email">
                                    <textarea name="comment_content" class="form-control" rows="3" placeholder="Nhập nội dung bình luận"></textarea>
                                    <input type="submit" style="float: right; margin: 5px 5px;" name="btn-comment"
                                        class="btn btn-primary" value="Bình luận">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Blog Details Section -->
@endsection
