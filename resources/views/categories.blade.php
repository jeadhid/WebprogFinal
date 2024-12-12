@extends('layout')

@section('content')
<div class="container">
    <!-- Page Header -->
    <div class="text-center mb-4">
        <h2 class="fw-bold">Disease Categories</h2>
        <p class="text-muted">Explore diseases by category to understand their types and impacts.</p>
    </div>

    <!-- Categories Grid -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($category as $item)
            <div class="col">
                <div class="card h-100">
                    <!-- Styled Image -->
                    <img src="{{ asset('storage/categories/'.$item->photo) }}"
                         class="card-img-top"
                         alt="{{ $item->name }}"
                         style="border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); max-height: 200px; object-fit: cover;">

                    <!-- Card Content -->
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">{{ $item->name }}</h5>
                        <p class="card-text text-muted">
                            {{$item->description}}
                        </p>
                        <a href="{{ route('disease', ['category_id' => $item->id]) }}" class="btn btn-primary"><i class="fas fa-arrow-right"></i> View Diseases</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
