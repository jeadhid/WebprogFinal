@extends('layout')

@section('content')
<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="fw-bold text-primary">Admin Dashboard - Manage Diseases</h2>
        <a href="{{ url('/admin/add-disease') }}" class="btn btn-success">
            <i class="fas fa-plus-circle"></i> Add New Disease
        </a>
    </div>
    <hr>

    <form method="GET" action="#" class="mb-4">
        <div class="row g-3">
            <div class="col-md-8">
                <input type="text" name="search" class="form-control" placeholder="Search diseases..." />
            </div>
            <div class="col-md-4">
                <select name="category" class="form-select">
                    <option value="">All Categories</option>
                    <option value="Viral">Viral</option>
                    <option value="Bacterial">Bacterial</option>
                    <option value="Genetic">Genetic</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">
            <i class="fas fa-filter"></i> Filter
        </button>
    </form>

    <!-- Disease Cards -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @for($i = 0; $i < 6; $i++)
        <div class="col">
            <div class="card shadow-sm">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Disease Image" style="height: 15rem;">
                <div class="card-body">
                    <h5 class="card-title">Disease Name {{ $i + 1 }}</h5>
                    <p class="card-text text-muted small">Category: Viral</p>
                    <p class="card-text">Short description of the disease goes here...</p>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="#" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection
