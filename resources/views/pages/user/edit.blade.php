@extends('layouts.app')

@section('title', 'Create User')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="container-fluid">
        <!-- Header -->
        @include('components.card-header', [
            'title' => 'Edit User',
            'breadcrumbs' => [
                ['text' => 'Home', 'link' => route('dashboard.index'), 'active' => false],
                ['text' => 'User', 'link' => route('user.index'), 'active' => false],
                ['text' => 'Edit', 'link' => '#', 'active' => true],
            ],
        ])
        <div class="card w-100 position-relative overflow-hidden">
            <!-- Title -->
            <div class="px-4 py-3 border-bottom">
                <h5 class="card-title fw-semibold mb-0 lh-sm">Edit User</h5>
            </div>

            {{-- Form --}}
            <div class="card-body">
                <form action="{{ route('user.update', $user) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" placeholder="Name" value="{{ $user->name }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" placeholder="Email" value="{{ $user->email }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone"
                                value="{{ $user->phone }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="roles" class="form-label">Roles</label>
                            <select class="form-control form-select" id="roles" name="roles">
                                <option value="USER" {{ $user->roles == 'USER' ? 'selected' : '' }}>USER</option>
                                <option value="ADMIN" {{ $user->roles == 'ADMIN' ? 'selected' : '' }}>ADMIN</option>
                            </select>
                        </div>
                    </div>

                    {{-- <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> --}}

                    <button type="submit" class="btn btn-primary rounded px-4 mt-2">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
