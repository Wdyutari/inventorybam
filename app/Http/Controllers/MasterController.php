<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    //Unit Kerja
    public function unitKerja() {
        $data = [
            'title' => 'Master - Unit Kerja',
            'menu' => 'Unit Kerja',
        ];
        return view('masterdata/unitkerja', $data);
    }
}
