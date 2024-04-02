<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(10);
        return view('pages.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $fileName = time() . '.' . $request->image->extension();
        $path = $request->file('image')->storeAs('categories', $fileName, 'public');
        $data['image'] = 'storage/' . $path;
        Category::create($data);
        return redirect()->route('category.index')->with('success', 'Category created successfully.');
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
        $category = Category::findOrFail($id);
        return view('pages.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->all();

        // Jika ada file gambar yang diunggah, simpan gambar baru
        if ($request->file('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $path = $request->file('image')->storeAs('categories', $fileName, 'public');
            $data['image'] = 'storage/' . $path;
        }
        $category->update($data);
        return redirect()->route('category.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $name = $category->name;
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category ' . $name . ' deleted successfully.');
    }
}
