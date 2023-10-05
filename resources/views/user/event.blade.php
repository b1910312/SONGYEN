@extends('layouts.users.app')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('{{ asset('UserCSS/assets/img/breadcrumbs-bg.jpg') }}');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Sự kiện</h2>
            <ol>
                <li><a href="
    @guest
{{ route('home1') }}
    @else
      {{ route('user.home') }} @endguest">Trang
                        chủ</a></li>
                <li>Sự kiện
                <li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
        <div class="container" data-aos="fade-up">

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order">

                {{-- <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-remodeling">Remodeling</li>
          <li data-filter=".filter-construction">Construction</li>
          <li data-filter=".filter-repairs">Repairs</li>
          <li data-filter=".filter-design">Design</li>
        </ul><!-- End Projects Filters --> --}}
                @foreach ($Events as $EVS)
                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                @foreach ($Thumbnails as $Th)
                                    @if ($Th->typepost == 2)
                                        @if ($Th->post == $EVS->id)
                                            <img src="{{ asset('uploads/thumbnail/' . $Th->image) }}" class="img-fluid"
                                                alt="">
                                        @endif
                                    @endif
                                @endforeach
                                <div class="portfolio-info">
                                    <h4>{{ date('d/m/Y', strtotime($EVS->created_at)) }}</h4>
                                    <p>{{ $EVS->name }}</p>
                                    <a href="
                                      @foreach ($Thumbnails as $Th)
                                        @if ($Th->typepost == 2)
                                          @if ($Th->post == $EVS->id)
                                            {{ asset('uploads/thumbnail/' . $Th->image) }}
                                          @endif
                                        @endif @endforeach
                                          "
                                        title="{{ $EVS->name }}" data-gallery="portfolio-gallery-remodeling"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="{{ route('user.eventdetails', ['id' => $EVS->id]) }}" title="More Details"
                                        class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->
                @endforeach

            </div><!-- End Projects Container -->

        </div>

        </div>
    </section><!-- End Our Projects Section -->
@endsection
