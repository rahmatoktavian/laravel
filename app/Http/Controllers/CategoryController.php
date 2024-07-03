<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::latest()->simplePaginate(10);
          
        return view('category.index', compact('category'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $category = Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('category.index')
                         ->with('success', 'Category created successfully.');
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);

        $category->update([
            'name' => $request->name,
        ]);
          
        return redirect()->route('category.index')
                        ->with('success', 'Category updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::where('id', $id)->delete();

        return redirect()->route('category.index')
                        ->with('success', 'Category deleted successfully');
    }
}