@extends('layouts.app')

@section('title', 'Portfolio Edit')

@section('content')
    <div class="pagetitle">
        <h1>Portfolio</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Portfolio</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <a href="porto/create" class="btn btn-primary mb-3">Add Data</a>

    @if ($message = Session::get('message'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            Success!
            <p>{{ $message }}</p>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- Table with hoverable rows -->
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Porto Title</th>
                <th scope="col">Description</th>
                <th scope="col">Picture</th>
                {{-- <th scope="col">Type</th> --}}
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach ($portos as $porto)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $porto->title }}</td>
                    <td>{{ $porto->description }}</td>
                    {{-- <td>{{ $porto->type }}</td> --}}
                    <td>
                        <img src="/image/{{ $porto->image }}" alt="" class="img-fluid" width="100">
                    </td>
                    <td>
                        <a href="{{ route('porto.edit', $porto->id) }}" class="btn btn-warning"><i
                                class="bi bi-pencil-square"></i></a>

                        <form method="POST" action="{{ route('porto.destroy', $porto->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- End Table with hoverable rows -->
@endsection
