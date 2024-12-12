@extends('layout')

@section('content')

<div class="container d-flex align-items-center justify-content-center" style="min-height: 80vh;">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="text-center mb-4">
                    <h2 class="fw-bold text-primary">Admin Login</h2>
                    <p class="text-muted">Sign in to manage the system</p>
                </div>
                <form method="POST" action="{{ route('dologin') }}">
                    @csrf
                    @if($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                    </div>
                    @endif
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="fas fa-envelope text-primary"></i></span>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="fas fa-lock text-primary"></i></span>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                        </div>
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary" value="login">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
