<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function InputData() {
        $data = [
            'title' => 'Input Data',
            'menu' => 'Input Data',
        ];
        return view('inputdata', $data);
    }

    public function Index() {
        $data = User::get();
        return view('index', compact('data'));
    }


}
