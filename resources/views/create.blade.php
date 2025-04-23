@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Create New Product</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Product ID</label>
                <input type="text" name="product_id" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label>Price</label>
                <input type="number" name="price" step="0.01" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Stock</label>
                <input type="number" name="stock" class="form-control">
            </div>

            <div class="mb-3">
                <label>Image URL</label>
                <input type="text" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
