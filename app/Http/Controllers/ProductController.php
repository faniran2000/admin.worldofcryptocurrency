<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $data = Product::all();
        return view("product.index", ["data" => $data]);
    }
    public function new() {
        return view("product.new");
    }
    public function view($id) {
        $data = Product::findOrFail($id);
        return view("product.view", ["data" => $data]);
    }
    public function delete($id) {
        $data = Product::findOrFail($id);
        $data->delete();
        return redirect()->back()->withSuccess("Product deleted");
    }
    public function postEdit(Request $request) {
        $data = Product::findOrFail($request->id);
        $data->is_live = $request->is_live;
        $data->is_featured = $request->is_featured;
        $data->update();
        return redirect()->back()->withSuccess("Product updated");
    }
}
