<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    
    public function index() {
        $data = Account::where('type', 'vendor')->get();
        return view("vendor.index", ["data" => $data]);
    }
    public function delete($id) {
        $data = Account::findOrFail($id);
        $data->delete();
        return redirect()->back()->withSuccess("Vendor deleted");
    }

    public function view($id)
    {
        $data = Account::where("id", $id)->orderBy("id", "asc")->first();
        if ($data) {
            $vendor = Vendor::where("user_id", $id)->orderBy("id", "asc")->first();
            return view("vendor.view", ["data" => $data, 'vendor' => $vendor]);
        }
        abort(404);
    }
}
