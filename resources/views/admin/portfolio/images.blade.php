@extends('layouts.dashboardTemplate')

@section('title', 'View Images')

@section('content')
    <div class="pagetitle">
        <h1>View Portfolio Images</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/porto">Portfolio</a></li>
                <li class="breadcrumb-item active">Images</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <a href="/porto" class="btn btn-primary mb-3">Back</a>
    @error('image[]')
        <small style="color:red">{{ $message }}</small>
    @enderror
    @if ($message = Session::get('message'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            Success!
            <p>{{ $message }}</p>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form method="post" action="/porto/add-img/{{ $Porto->id }}" enctype="multipart/form-data" class="row g-3">
        @csrf

        <div class="col-md-12">
            <div class="row mb-1">
                <label for="formFile" class="col-sm-2 col-form-label">Upload Picture</label>
                {{-- coba ini ntar diganti input filenya dari inputNumber jd file kalo eror kalo ga komen ini apus aja --}}
                <div class="col-sm-4">
                    <input type="file" name="image[]" class="form-control" id="formFile" accept="image/*" multiple
                        required>
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>

    </form><!-- End floating Labels Form -->


    <section id="images" class="images section-bg">
        <div class="row">

            <div class="row images-container" data-aos="fade-up" data-aos-delay="100">
                @foreach ($images as $image)
                    <div class="col-lg-4 col-md-6 container">
                        <div class="images-wrap">
                            <img src="/image/{{ $image->image }}" class="img-fluid" alt="{{ $image->title }}">
                            <div class="images-links">
                                <a href="/image/{{ $image->image }}" target="_blank" data-gallery="imagesGallery"
                                    class="images-lightbox" title="{{ $image->title }}"><i class="bx bx-plus"></i></a>
                                <a href="/porto/remove-img/{{ $image->id }}" title="Delete"><i
                                        class="bx bx-trash"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
