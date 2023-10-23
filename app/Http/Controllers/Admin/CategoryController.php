<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // $categories = Category::all();
        // $categories = Category::where('name', '=', 'Category 2')->orWhere('name', '=', 'Category 4)->where('id', '=', '4')->first();
        $categories = Category::paginate(3);

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate
        (
            [
                'name' => 'required|string|unique:categories,name',
                'description' => 'nullable|string|min:5'
            ]
        );

        // $category = new Category();
        // $category->name = $request->name;
        // $category->description = $request->description;
        // $category->save();

        Category::create($request->all());

        return to_route('categories.index')->with('success', 'Category successflly added!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'))->with('success', "Category $category->name successfully edited!");
    }

    public function update(Request $request, Category $category)
    {
        $request->validate
        (
            [
                'name' => 'required|string|unique:categories,name,'.$category->id, //третий атрибут игнорирует столбец по id
                'description' => 'nullable|string|min:5'
            ]
        );

        $category->update($request->all());

        return to_route('categories.index')->with('success', 'Category successflly edited!');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return to_route('categories.index')->with('success', 'Category successflly edited!');
    }
}
