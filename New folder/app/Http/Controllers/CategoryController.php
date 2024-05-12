<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        // return view('categories.create');
        return view('admin_category.createCategory');
    }

    // Thêm danh mục mới vào cơ sở dữ liệu
public function AddNewCategory(Request $request)
{
    // Validate request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255'
    ]);

    // Create new category
    $category = new Categori();
    $category->name = $validatedData['name'];
    $category->save();

    return redirect()->route('admin_category.index')->with('success', 'Danh mục được thêm thành công!');
}

    public function edit(Category $category)
    {
        return view('categories.edit',compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|max:100',
        ]);

        $category->update($request->all());

        return redirect()->route('categories.index')
                         ->with('success','Category updated successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')
                         ->with('success','Category deleted successfully');
    }
}
