@extends('layouts.app')

@section('title', 'Edit Product')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="container-fluid">
        <!-- Header -->
        @include('components.card-header', [
            'title' => 'Edit Product',
            'breadcrumbs' => [
                ['text' => 'Home', 'link' => route('dashboard.index'), 'active' => false],
                ['text' => 'Product', 'link' => route('product.index'), 'active' => false],
                ['text' => 'Edit', 'link' => '#', 'active' => true],
            ],
        ])
        <div class="card w-100 position-relative overflow-hidden">
            <!-- Title -->
            <div class="px-4 py-3 border-bottom">
                <h5 class="card-title fw-semibold mb-0 lh-sm">Edit Product</h5>
            </div>

            {{-- Form --}}
            <div class="card-body">
                <form action="{{ route('product.update', $product) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" placeholder="Name" value="{{ $product->name }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select class="form-control" id="category_id" name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock"
                            name="stock" placeholder="Stock" value="{{ $product->stock }}" required>
                        @error('stock')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Price"
                                value="{{ number_format($product->price, 0, ',', '.') }}" required>
                        </div>
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image Product</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                            name="image" accept="image/png, image/jpeg">
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
    <script>
        // Format input price to currency
        // $('#price').on('input', function() {
        //     // Remove non-numeric characters from input
        //     var sanitized = $(this).val().replace(/[^0-9]/g, '');

        //     // Format to currency
        //     var formatted = sanitized.replace(/\B(?=(\d{3})+(?!\d))/g, ".");

        //     // Update input value
        //     $(this).val(formatted);
        // });
    </script>
@endpush