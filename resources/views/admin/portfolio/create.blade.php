@extends('layouts.dashboardTemplate')

@section('title', 'Portfolio Edit')

@section('content')
    <div class="pagetitle">
        <h1>Add Data</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/porto">Portfolio</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <a href="/porto" class="btn btn-primary mb-3">Back</a>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Add Portfolio</h5>

            <!-- Floating Labels Form -->
            <form method="post" action="{{ route('porto.store') }}" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                            id="floatingName" placeholder="Title">
                        <label for="floatingName">Title</label>
                    </div>
                </div>

                @error('title')
                    <small style="color:red">{{ $message }}</small>
                @enderror

                <div class="col-12">
                    <div class="form-floating">
                        <textarea type="text" name="description" class="form-control" id="floatingTextarea" placeholder="Description"
                            style="height: 100px;"></textarea>
                        <label for="floatingTextarea">Description</label>
                    </div>
                </div>

                @error('description')
                    <small style="color:red">{{ $message }}</small>
                @enderror

                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <select name="type" class="form-select" id="floatingSelect" aria-label="State">
                            <option value="">...</option>
                            <option value="Application">Application</option>
                            <option value="Website">Website</option>
                            <option value="IoT">IoT</option>
                        </select>
                        <label for="floatingSelect">Type</label>
                    </div>
                    @error('type')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-8">
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Upload Picture</label>
                        <div class="col-sm-10">
                            <input type="file" name="image" class="form-control" id="formFile">
                        </div>
                        @error('image')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </div>
                </div>



                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form><!-- End floating Labels Form -->

        </div>
    </div>
@endsection
