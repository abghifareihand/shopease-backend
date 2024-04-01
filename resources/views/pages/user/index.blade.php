@extends('layouts.app')

@section('title', 'User')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="container-fluid">


        <!-- Alert -->
        @include('layouts.alert')

        <!-- Header -->
        @include('components.card-header', [
            'title' => 'All User',
            'breadcrumbs' => [
                ['text' => 'Home', 'link' => route('dashboard.index'), 'active' => false],
                ['text' => 'User', 'link' => '#', 'active' => true],
            ],
        ])

        <div class="card w-100 position-relative overflow-hidden">
            <!-- Title -->
            <div class="px-4 py-3 border-bottom d-flex align-items-center">
                <h5 class="card-title fw-semibold mb-0 lh-sm">Users</h5>
                <div class="ms-auto flex-shrink-0">
                    <a href="{{ route('user.create') }}" class="btn btn-success"><i class="fs-4 ti ti-plus me-1"></i>
                        Create User</a>
                </div>
            </div>
            <!-- Tables -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table border text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr class="fw-semibold">
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Roles</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="border-top">
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img src="{{ asset('assets/images/profile/user-1.jpg') }}"
                                                    class="rounded-circle" width="40" height="40" alt="" />
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">{{ $user->name }}</h6>
                                                <p class="fs-2 mb-0 text-muted">
                                                    {{ $user->email }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 fs-3">{{ $user->phone }}</p>
                                    </td>
                                    <td>
                                        @if ($user->roles == 'ADMIN')
                                            <span
                                                class="badge bg-primary-subtle rounded-3 py-8 text-primary fw-semibold fs-2y">{{ $user->roles }}</span>
                                        @else
                                            <span
                                                class="badge bg-danger-subtle rounded-3 py-8 text-danger fw-semibold fs-2y">{{ $user->roles }}</span>
                                        @endif
                                    </td>

                                    <td class="text-center">
                                        @if ($user->roles != 'ADMIN')
                                            <div class="dropdown dropstart">
                                                <a href="#" class="text-muted" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown">
                                                    <i class="ti ti-dots fs-6"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li>
                                                        <a href="{{ route('user.edit', $user->id) }}"
                                                            class="dropdown-item d-flex align-items-center gap-3">
                                                            <i class="fs-4 ti ti-edit"></i>
                                                            Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('user.destroy', $user->id) }}"
                                                            method="POST">
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            <input type="hidden" name="_token"
                                                                value="{{ csrf_token() }}" />
                                                            <button class="dropdown-item d-flex align-items-center gap-3">
                                                                <i class="fs-4 ti ti-trash"></i>
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        @else
                                            <div class="text-muted">
                                                <i class="ti ti-eye fs-6"></i>
                                            </div>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="float-right mt-8">
                    {{ $users->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
