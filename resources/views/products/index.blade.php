@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>All Products</h1>

        <form method="GET" action="{{ route('products.index') }}" class="mb-3">
            <input type="text" name="search" placeholder="Search by ID or Description..." value="{{ request('search') }}">
            <button type="submit">Search</button>
        </form>

        <a href="{{ route('products.create') }}" class="btn btn-success mb-3 text-center">Create New Product</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th><a href="?sort=name&direction={{ request('direction') == 'asc' ? 'desc' : 'asc' }}">Name</a></th>
                    <th><a href="?sort=price&direction={{ request('direction') == 'asc' ? 'desc' : 'asc' }}">Price</a></th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)

                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>${{ $product->price }}</td>
                        <td>
                            <a href="{{ route('products.show', $product) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure?')"
                                    class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No products found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $products->withQueryString()->links() }}
    </div>
@endsection
