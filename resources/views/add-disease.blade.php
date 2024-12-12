@extends('layout')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h2 class="fw-bold">Add New Disease</h2>
        <p>
            <span class="badge bg-info text-dark fs-5 py-2 px-3">Admin Panel</span>
        </p>
    </div>



    <form action="{{ route('disease-add') }}" method="POST" enctype="multipart/form-data"
    onsubmit="return confirm('Are you sure you want to add this disease?');">
    @csrf
    <div class="row">
        <div class="col-md-5">
            <div class="mb-3">
                <label for="image" class="form-label fw-bold">Disease Image</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <img src="https://via.placeholder.com/600x400?text=Upload+Image"
                 alt="Upload Preview"
                 class="img-fluid rounded mt-3"
                 style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        </div>

        <div class="col-md-7">
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Disease Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter disease name" required>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label fw-bold">Category</label>
                <select name="category_id" id="category" class="form-select" required>
                    <option value="" disabled selected>Choose category...</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="overview" class="form-label fw-bold">Overview</label>
                <textarea name="overview" id="overview" class="form-control" rows="4" placeholder="Write a brief overview" required></textarea>
            </div>

            <div class="mb-3">
                <label for="symptoms" class="form-label fw-bold">Symptoms</label>
                <textarea name="symptoms" id="symptoms" class="form-control" rows="3" placeholder="List the symptoms" required></textarea>
            </div>

            <div class="mb-3">
                <label for="causes" class="form-label fw-bold">Causes</label>
                <textarea name="causes" id="causes" class="form-control" rows="3" placeholder="Describe the causes" required></textarea>
            </div>

            <div class="mb-3">
                <label for="treatment" class="form-label fw-bold">Treatment</label>
                <textarea name="treatment" id="treatment" class="form-control" rows="3" placeholder="Describe the treatment" required></textarea>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between mt-4">
        <button type="button" class="btn btn-secondary" onclick="window.location.href = '{{ route('disease') }}';">
            <i class="fas fa-arrow-left"></i> Cancel
        </button>
        <button type="submit" class="btn btn-success">
            <i class="fas fa-plus"></i> Add Disease
        </button>
    </div>
</form>
</div>
@endsection
