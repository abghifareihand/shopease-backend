<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Product::query();

        // Filter berdasarkan pencarian nama produk
        if ($request->has('search') && $request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Ambil data produk sesuai kriteria pencarian
        $products = $query->paginate(10);

        return view('pages.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $fileName = time() . '.' . $request->image->extension();
        $path = $request->file('image')->storeAs('products', $fileName, 'public');
        $data['image'] = 'storage/' . $path;
        Product::create($data);
        return redirect()->route('product.index')->with('success', 'Product created successfully.');
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
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('pages.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $product = Product::findOrFail($id);
        $data = $request->all();

        // Jika ada file gambar yang diunggah, simpan gambar baru
        if ($request->file('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $path = $request->file('image')->storeAs('products', $fileName, 'public');
            $data['image'] = 'storage/' . $path;
        }

        $product->update($data); // Memperbarui data produk

        return redirect()->route('product.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $name = $product->name;
        $product->delete();
        return redirect()->route('product.index')->with('success', $name . ' deleted successfully.');
    }
}
