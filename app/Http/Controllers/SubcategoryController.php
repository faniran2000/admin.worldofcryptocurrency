<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class SubcategoryController extends Controller
{
    public function index() {
        $category = Category::all();
        $data = Subcategory::all();
        return view("subcategory.index", ["category" => $category, "data" => $data]);
    }
    public function delete($id) {
        $data = Subcategory::findOrFail($id);
        $data->delete();
        return redirect()->back()->withSuccess("Subcategory deleted");
    }
    public function postNew(Request $request) {
        $data = new Subcategory();
        $data->name = ucwords($request->name);
        $data->category_id = $request->category_id;
        $data->slug = Str::slug(strtolower($request->name), "-", "en");
        $data->save();
        return redirect()->back()->withSuccess("Subcategory created");
    }
}
