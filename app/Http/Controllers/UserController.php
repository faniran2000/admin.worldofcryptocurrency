<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        return view('index');
    }
    public function profile() {
        $user = Auth::user();
    }
    public function login() {
        return view('login');
    }
    public function postLogin(Request $request){
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);
        $credentials = $request->only(['email', 'password']);
        if(Auth::attempt($credentials)){
            return redirect()->route('home');
        }
        return redirect()->back()->withError("Invalid email address/password provided.");
    }
    public function logout() {
        Auth::logout();
        return redirect()->route('login')->withSuccess("Logged out successfully.");
    }
}
