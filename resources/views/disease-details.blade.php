@extends('layout')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h2 class="fw-bold">Disease: {{$disease->name}}</h2>
        <p>
            <span class="badge bg-info text-dark fs-5 py-2 px-3">Category: {{$disease->category->name}}</span>
        </p>
    </div>

    <div class="row">
        <div class="col-md-5">
            <img src="{{ asset('storage/diseases/'.$disease->photo) }}"
                 alt="Disease Image"
                 class="img-fluid rounded"
                 style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        </div>

        <!-- Disease Details -->
        <div class="col-md-7">
            <h4 class="fw-bold">Overview</h4>
            <p>{{$disease->description}}</p>

            <h4 class="fw-bold mt-4">Symptoms</h4>
            <ul>
                <li>{{$disease->symptoms}}</li>
            </ul>

            <h4 class="fw-bold mt-4">Causes</h4>
            <p>{{$disease->cause}}</p>

            <h4 class="fw-bold mt-4">Treatment</h4>
            <p>{{$disease->treatment}}</p>

            <a href="{{ route('disease') }}" class="btn btn-primary mt-3"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
    </div>

    <div class="mt-5">
        <h4 class="fw-bold">Other Diseases in This Category</h4>
        <div class="d-flex overflow-auto mt-3" style="gap: 1rem; padding-bottom: 1rem;">
            @foreach ($related as $item)
                <div class="card flex-shrink-0" style="width: 12rem;">
                    <!-- Disease Image -->
                    <img src="{{ asset('storage/diseases/'.$item->photo) }}"
                         class="card-img-top"
                         alt="{{ $item->name }}"
                         style="height: 150px; object-fit: cover; border-radius: 8px;">

                    <!-- Card Content -->
                    <div class="card-body text-center">
                        <h6 class="card-title fw-bold">{{ $item->name }}</h6>
                        <a href="{{ route('disease.detail', ['disease'=>$item->id]) }}" class="btn btn-sm btn-outline-primary">View Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
