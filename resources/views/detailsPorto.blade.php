@extends('layouts.resumeTemplate')

@section('title', 'Porto Details')

@section('content')


    <main id="main">
        {{-- @foreach ($Porto as $Porto) --}}
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Portfolio Details</h2>
                    <ol>
                        <li><a href="/resume#portfolio">Home</a></li>
                        <li>{{ $Porto->title }}</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <!-- Card with an image on left -->
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="row gy-4">

                                <!-- Slides with indicators -->
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="/assets/img/slides-1.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="/assets/img/slides-2.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="/assets/img/slides-3.jpg" class="d-block w-100" alt="...">
                                        </div>
                                    </div>

                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>

                                </div><!-- End Slides with indicators -->



                            </div>
                            {{-- <img src="assets/img/card.jpg" class="img-fluid rounded-start" alt="..."> --}}
                        </div>

                        <div class="col-md-8">
                            <div class="portfolio-info">
                                <h3>Project information</h3>
                                <ul>
                                    <li><strong>Category</strong>: Web design</li>
                                    <li><strong>Client</strong>: A Company</li>
                                    <li><strong>Project date</strong>: 01 March, 2023</li>
                                    <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card with an image on left -->

                <div class="col-lg-12">
                    <div class="portfolio-description">
                        <h2>{{ $Porto->title }}</h2>
                        <p>{{ $Porto->description }}</p>
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Details Section -->
        {{-- @endforeach --}}

    </main><!-- End #main -->
@endsection
