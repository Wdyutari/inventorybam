<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Inventory - Login',
        ];
        return view('auth.login', $data);
    }

    public function loginProses(Request $request){
        $request->validate([
            'nopeg' =>'required',
            'password' => 'required',
        ]);

        $data = [
            'nopeg' => $request->nopeg,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('login')->with('failed', 'Nopeg atau Password Salah');
        }
    }

    public function logoutProses(){
        Auth::logout();
        return redirect()->route('login');
    }
}
