<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categorys = Category::all();
        return view('categorys.index', compact('categorys'));
    }

    public function create()
    {
        return view('categorys.create');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->price = $request->price;
        $category->status = $request->status;
        $category->description = $request->description;
        $category->save();

        return back();
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return back();
    }
}
