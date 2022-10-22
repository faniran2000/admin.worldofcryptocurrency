<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index() {
        $data = Category::all();
        return view("category.index", ["data" => $data]);
    }
    public function delete($id) {
        $data = Category::findOrFail($id);
        $data->delete();
        return redirect()->back()->withSuccess("Category deleted");
    }
    public function postNew(Request $request) {
        $data = new Category();
        $data->name = ucwords($request->name);
        $data->slug = Str::slug(strtolower($request->name), "-", "en");
        $data->save();
        return redirect()->back()->withSuccess("Category created");
    }
}
