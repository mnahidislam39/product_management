<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

// Import the Product model

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Product::query();

        // Search filter
        if ($search = $request->input('search')) {
            $query->where('product_id', 'like', "%$search%")
                ->orWhere('description', 'like', "%$search%");
        }

        // Sorting
        $sort      = $request->input('sort', 'name');
        $direction = $request->input('direction', 'asc');

        $products = $query->orderBy($sort, $direction)
            ->paginate(10)
            ->withQueryString();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'product_id' => 'required|unique:products',
            'name'       => 'required|string',
            'price'      => 'required|numeric',
            'stock'      => 'nullable|integer',
            'image'      => 'nullable|url',
        ]);

        // Create a new product
        Product::create([
            'product_id'  => $request->product_id,
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $request->price,
            'stock'       => $request->stock,
            'image'       => $request->image,
        ]);

        // Redirect back to the products list
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
