@extends('layouts.app')

@section('title', 'Create Product')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="container-fluid">
        <!-- Header -->
        @include('components.card-header', [
            'title' => 'Create Product',
            'breadcrumbs' => [
                ['text' => 'Home', 'link' => route('dashboard.index'), 'active' => false],
                ['text' => 'Product', 'link' => route('product.index'), 'active' => false],
                ['text' => 'Create', 'link' => '#', 'active' => true],
            ],
        ])
        <div class="card w-100 position-relative overflow-hidden">
            <!-- Title -->
            <div class="px-4 py-3 border-bottom">
                <h5 class="card-title fw-semibold mb-0 lh-sm">Create Product</h5>
            </div>

            {{-- Form --}}
            <div class="card-body">
                <form action="{{ route('product.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name Product</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" placeholder="Name" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-control form-select" name="category_id">
                            <option value="">-- Select Category --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="description"
                            name="description" placeholder="Description" value="{{ old('description') }}" required>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock"
                            name="stock" placeholder="Stock" value="{{ old('stock') }}" required>
                        @error('stock')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Price"
                                value="{{ old('price') }}" required>
                        </div>
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image Product</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                            name="image" accept="image/png, image/jpeg" required>
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary rounded px-4 mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
    {{-- <script>
        $(document).ready(function() {
            $('#price').on('input', function() {
                var price = $(this).val();
                // Hapus semua karakter selain angka
                price = price.replace(/\D/g, '');
                // Tambahkan titik sebagai pemisah ribuan
                price = price.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                // Update nilai input
                $(this).val(price);
            });
        });
    </script> --}}

@endpush
