{{-- @extends('layout')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h2 class="fw-bold">Edit Disease: </h2>
        <p>
            <span class="badge bg-info text-dark fs-5 py-2 px-3">Category:
                <select class="form-select d-inline w-auto" aria-label="Category">
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </span>
        </p>
    </div>

    <div class="row">
        <div class="col-md-5">
            <label for="diseaseImage" class="form-label fw-bold">Disease Image</label>
            <input type="file" class="form-control" id="diseaseImage">
            <img src="https://via.placeholder.com/600x400?text=Disease+Image"
                 alt="Disease Image"
                 class="img-fluid rounded mt-3"
                 style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        </div>

        <div class="col-md-7">
            <form action="{{ route('disease.update', ['id'=>$disease->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Name</label>
                    <textarea class="form-control" id="name" rows="1">{{ $disease->name }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="overview" class="form-label fw-bold">Overview</label>
                    <textarea class="form-control" id="overview" rows="4">{{ $disease->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="symptoms" class="form-label fw-bold">Symptoms</label>
                    <textarea class="form-control" id="symptoms" rows="3">{{ $disease->symptoms }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="causes" class="form-label fw-bold">Causes</label>
                    <textarea class="form-control" id="causes" rows="3">{{ $disease->cause }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="treatment" class="form-label fw-bold">Treatment</label>
                    <textarea class="form-control" id="treatment" rows="3">{{ $disease->treatment }}</textarea>
                </div>
                <div class="text-center mt-5">
                    <button class="btn btn-danger btn-lg" onclick="confirmCancel()"><i class="fas fa-times"></i> Cancel</button>
                    <button class="btn btn-success btn-lg me-2" onclick="confirmSave()"><i class="fas fa-save"></i> Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    
</div>

<script>
    function confirmSave() {
        if (confirm('Are you sure you want to save the changes?')) {
            alert('Changes saved successfully!');
        }
    }

    function confirmCancel() {
        if (confirm('Are you sure you want to cancel the changes? Any unsaved data will be lost.')) {
            alert('Changes canceled.');
        }
    }
</script>
@endsection --}}


@extends('layout')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h2 class="fw-bold">Edit Disease: {{ $disease->name }}</h2>
        <p>
            <span class="badge bg-info text-dark fs-5 py-2 px-3">Category:
                <select class="form-select d-inline w-auto" name="category_id" form="editDiseaseForm">
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}" 
                            {{ $disease->category_id == $item->id ? 'selected' : '' }}>
                            {{ $item->name }}
                        </option>
                    @endforeach
                </select>
            </span>
        </p>
    </div>

    <div class="row">
        <div class="col-md-5">
            <label for="diseaseImage" class="form-label fw-bold">Disease Image</label>
            <input type="file" class="form-control" id="diseaseImage" name="image" form="editDiseaseForm">
            <img src="{{ $disease->image ? asset('storage/' . $disease->image) : 'https://via.placeholder.com/600x400?text=Disease+Image' }}"
                 alt="Disease Image"
                 class="img-fluid rounded mt-3"
                 style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        </div>

        <div class="col-md-7">
            <form id="editDiseaseForm" action="{{ route('disease.update', ['id' => $disease->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $disease->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="overview" class="form-label fw-bold">Overview</label>
                    <textarea class="form-control" id="overview" name="overview" rows="4" required>{{ old('overview', $disease->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="symptoms" class="form-label fw-bold">Symptoms</label>
                    <textarea class="form-control" id="symptoms" name="symptoms" rows="3" required>{{ old('symptoms', $disease->symptoms) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="causes" class="form-label fw-bold">Causes</label>
                    <textarea class="form-control" id="causes" name="causes" rows="3" required>{{ old('causes', $disease->causes) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="treatment" class="form-label fw-bold">Treatment</label>
                    <textarea class="form-control" id="treatment" name="treatment" rows="3" required>{{ old('treatment', $disease->treatment) }}</textarea>
                </div>
                <div class="text-center mt-5">
                    <a href="{{ route('disease') }}" class="btn btn-danger btn-lg"><i class="fas fa-times"></i> Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg me-2"><i class="fas fa-save"></i> Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection