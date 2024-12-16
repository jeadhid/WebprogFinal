@extends('layout')

@section('content')

<div class="container">
    <div class="text-center mb-4">
        <h2 class="fw-bold">Human Diseases Encyclopedia</h2>
        <p class="text-muted">Discover information about various human diseases, their symptoms, and treatments.</p>
    </div>

    <div class="row mb-4">
        <div class="col-md-6">
            <form action="{{ route('disease') }}" method="GET" class="d-flex">
                <input type="text" name="search" class="form-control" placeholder="Search diseases..." value="{{ request('search') ?? '' }}">
                <button type="submit" class="btn btn-primary ms-2">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <div class="col-md-6">
            <form action="" method="GET" class="d-flex justify-content-end">
                <select name="category" class="form-select w-50" onchange="location.href=this.value;">
                    <option value="{{ route('disease') }}" {{ request('category_id') ? '' : 'selected' }}>All Categories</option>
                    @foreach ($categories as $item)
                        <option value="{{ route('disease', ['category_id' => $item->id]) }}"
                            {{ request('category_id') == $item->id ? 'selected' : '' }}>
                            {{ $item->name }}
                        </option>
                    @endforeach
                </select>
            </form>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-4">

        @foreach ($diseases as $item)
            <div class="col">
                <div class="card h-100 overflow-hidden">
                    <img src="{{ asset('storage/diseases/'.$item->photo) }}" class="card-img-top" alt="Disease image" style="height: 200px; object-fit: cover">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->name}}</h5>
                        <span class="" style="color: rgb(27, 47, 136)">
                            {{$item->category->name}}   
                        </span>
                        <p class="card-text text-muted">
                            {{$item->description}}
                        </p>
                    </div>
                    <div class="card-footer text-center d-flex justify-content-between">
                        <a href="{{ route('disease.detail', ['disease'=>$item->id]) }}" class="btn btn-primary flex-grow-1 me-2">
                            <i class="fas fa-info-circle"></i> Learn More
                        </a>
                        @auth
                            <form action="{{ route('disease.delete', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this disease?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                            <div class="col-3">
                                <a href="{{ route('disease.edit', ['disease'=>$item]) }}" class="btn btn-warning me-2">
                                    <i class="fas fa-edit"></i>
                               </a>
                            </div>
                            
                        @endauth
                    </div>
                </div>
            </div>
        @endforeach


    </div>

    <div class="d-flex justify-content-center mt-4">
        {{$diseases->links()}}
    </div>
</div>
@endsection
