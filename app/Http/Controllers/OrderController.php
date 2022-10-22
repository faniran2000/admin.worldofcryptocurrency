<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $data = Order::all();
        return view("order.index", ["data" => $data]);
    }
    public function delete($id) {
        $data = Order::findOrFail($id);
        $data->delete();
        return redirect()->back()->withSuccess("Order deleted");
    }
}
