<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index() {
        $data = Account::where('type', 'user')->get();
        return view("user.index", ["data" => $data]);
    }
    public function delete($id) {
        $data = Account::findOrFail($id);
        $data->delete();
        return redirect()->back()->withSuccess("User deleted");
    }
}
