@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Edit Product</h1>

        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Product ID</label>
                <input type="text" name="product_id" value="{{ $product->product_id }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control">{{ $product->description }}</textarea>
            </div>

            <div class="mb-3">
                <label>Price</label>
                <input type="number" name="price" value="{{ $product->price }}" step="0.01" class="form-control"
                    required>
            </div>

            <div class="mb-3">
                <label>Stock</label>
                <input type="number" name="stock" value="{{ $product->stock }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Image URL</label>
                <input type="text" name="image" value="{{ $product->image }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
