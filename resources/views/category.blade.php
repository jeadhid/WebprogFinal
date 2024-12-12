@extends('layout')

@section('content')
<div class="container">
    <!-- Page Header -->
    <div class="text-center mb-4">
        <h2 class="fw-bold">Category: Infectious Diseases</h2>
        <p class="text-muted">Explore diseases categorized under <strong>Infectious Diseases</strong>.</p>
    </div>

    <!-- Diseases Grid -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ([
            ['name' => 'Disease 1', 'description' => 'Short description of Disease 1', 'image' => 'https://via.placeholder.com/600x300?text=Disease+1'],
            ['name' => 'Disease 2', 'description' => 'Short description of Disease 2', 'image' => 'https://via.placeholder.com/600x300?text=Disease+2'],
            ['name' => 'Disease 3', 'description' => 'Short description of Disease 3', 'image' => 'https://via.placeholder.com/600x300?text=Disease+3'],
            ['name' => 'Disease 4', 'description' => 'Short description of Disease 4', 'image' => 'https://via.placeholder.com/600x300?text=Disease+4'],
            ['name' => 'Disease 5', 'description' => 'Short description of Disease 5', 'image' => 'https://via.placeholder.com/600x300?text=Disease+5'],
        ] as $disease)
            <div class="col">
                <div class="card h-100">
                    <!-- Disease Image -->
                    <img src="{{ $disease['image'] }}" 
                         class="card-img-top" 
                         alt="{{ $disease['name'] }}"
                         style="border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); max-height: 200px; object-fit: cover;">
                    
                    <!-- Card Content -->
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">{{ $disease['name'] }}</h5>
                        <p class="card-text text-muted">
                            {{ $disease['description'] }}
                        </p>
                        <a href="#" class="btn btn-primary"><i class="fas fa-info-circle"></i> Learn More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
