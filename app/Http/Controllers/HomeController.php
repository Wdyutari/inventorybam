<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function InputData() {
        $data = [
            'title' => 'Dashboard - Input Data',
            'menu' => 'Input Data',
        ];
        return view('inputdata', $data);
    }
    
    public function CetakData() {
        $data = [
            'title' => 'Dashboard - Cetak Data',
            'menu' => 'Cetak Data',
        ];
        return view('cetakdata', $data);
    }
    
    public function Referensi() {
        $data = [
            'title' => 'Dashboard - Referensi',
            'menu' => 'Referensi',
        ];
        return view('referensi', $data);
    }

    public function Index() {
        $data = User::get();
        return view('index', compact('data'));
    }


}
