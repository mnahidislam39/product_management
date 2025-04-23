<!-- resources/views/products/create.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title class="text-center">Create Product</title>
    <style>
        .text-center{
            text-align: center;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }

        form {
            max-width: 500px;
            margin: auto;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input,
        textarea,
        button {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>Create New Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <label>Product ID:</label>
        <input type="text" name="product_id" required><br><br>

        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Description:</label>
        <textarea name="description"></textarea><br><br>

        <label>Price:</label>
        <input type="number" step="0.01" name="price" required><br><br>

        <label>Stock:</label>
        <input type="number" name="stock"><br><br>

        <label>Image URL:</label>
        <input type="text" name="image"><br><br>

        <button type="submit">Create Product</button>
    </form>

    <a href="{{ route('products.index') }}">Back to Products</a>
</body>

</html>
