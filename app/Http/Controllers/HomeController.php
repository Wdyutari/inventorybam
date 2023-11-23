<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard() {
        return view('inputdata');
    }
    
    public function cetakData() {
        return view('cetakdata');
    }
    
    public function referensi() {
        return view('referensi');
    }

    public function index() {
        $data = User::get();
        return view('index', compact('data'));
    }


}
