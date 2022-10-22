<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $data = User::all();
        return view("admin.index", ["data" => $data]);
    }
    public function new() {
        return view("admin.new");
    }
    public function view($id) {
        $data = User::findOrFail($id);
        return view("admin.view", ["data" => $data]);
    }
    public function delete($id) {
        $data = User::findOrFail($id);
        $data->delete();
        return redirect()->back()->withSuccess("Admin deleted");
    }
    public function postNew(Request $request) {
        $data = new User();
        $photo = "";
        if($request->file("photo")){
            $destinationPath = 'images/admins/';
            $photo = date('YmdHis') . "." . $request->file("photo")->getClientOriginalExtension();
            $request->file("photo")->move($destinationPath, $photo);
        }
        $data->fullname = $request->fullname;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->photo = asset($destinationPath.$photo);
        $data->about = $request->about;
        $data->password = bcrypt($request->password);
        $data->role = $request->role;
        $data->save();
        return redirect()->back()->withSuccess("Admin created");
    }
    public function postEdit(Request $request) {
        $data = User::findOrFail($request->id);
        $photo = "";
        if($request->file("photo")){
            $destinationPath = 'images/admins/';
            $photo = date('YmdHis') . "." . $request->file("photo")->getClientOriginalExtension();
            $request->file("photo")->move($destinationPath, $photo);
        }
        $data->fullname = $request->fullname;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->photo = $photo == "" ? $data->photo : asset($destinationPath.$photo);
        $data->about = $request->about;
        $data->password = $request->password != "" ? bcrypt($request->password) : $data->password;
        $data->role = $request->role;
        $data->update();
        return redirect()->back()->withSuccess("Admin updated");
    }
}
