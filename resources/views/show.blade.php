@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Product Details</h1>

        <div class="mb-3">
            <strong>Product ID:</strong> {{ $product->product_id }}
        </div>
        <div class="mb-3">
            <strong>Name:</strong> {{ $product->name }}
        </div>
        <div class="mb-3">
            <strong>Description:</strong> {{ $product->description }}
        </div>
        <div class="mb-3">
            <strong>Price:</strong> ${{ $product->price }}
        </div>
        <div class="mb-3">
            <strong>Stock:</strong> {{ $product->stock }}
        </div>
        <div class="mb-3">
            <strong>Image:</strong><br>
            @if ($product->image)
                <img src="{{ $product->image }}" alt="Image" style="max-width: 200px;">
            @else
                No image.
            @endif
        </div>

        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection
