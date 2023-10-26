<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // $products = Product::join('categories', 'products.category_id', '=', 'categories.id')->select('products.*', 'categories.name as category_name')->paginate(3);
        $products = Product::all();

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all()->pluck('name', 'id');

        return view('admin.products.create', compact('categories'));
    }

    public function store(ProductRequest $request)
    {
        $createdProduct = Product::create($request->all());

        if($request->image)
        {
            $createdProduct->image = $request->file('image')->store('uploads'); //повертається шлях до зображення
            $createdProduct->save();
        }

        return to_route('products.index')->with('success', 'Product successfully edited!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Product $product)
    {
        $categories = Category::all()->pluck('name', 'id');

        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->all());
        
        if($request->image)
        {
            $product->image = $request->file('image')->store('uploads');
            $product->update();
        }

        return to_route('products.index')->with('success', 'Product successfully edited!');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return to_route('products.index')->with('success', 'Product successfully deleted!');
    }
}
