<?php

namespace App\Http\Controllers;

use App\Models\Withdrawal;
use Illuminate\Http\Request;

class WithdrawalController extends Controller
{
    public function index() {
        $data = Withdrawal::all();
        return view("withdrawal.index", ["data" => $data]);
    }
    public function delete($id) {
        $data = Withdrawal::findOrFail($id);
        $data->delete();
        return redirect()->back()->withSuccess("Withdrawal deleted");
    }

    public function view($id)
    {
        $data = Withdrawal::where("id", $id)->orderBy("id", "asc")->first();
        if ($data) {
            return view("withdrawal.view", ["data" => $data]);
        }
        abort(404);
    }
    public function postEdit(Request $request) {
        $data = Withdrawal::findOrFail($request->id);
        $data->status = $request->status;
        $data->update();
        return redirect()->back()->withSuccess("Withdrawal updated");
    }
}
