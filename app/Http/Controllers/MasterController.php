<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    //Unit Kerja
    public function minventori() {
        $data = [
            'title' => 'Master Data',
            'menu' => 'Master Inventori',
        ];
        return view('masterdata/minventori', $data);
    }

    public function unitbisnis(){
        $data = [
            'title' => 'Master Data',
            'menu' => 'Master Inventori',
        ];
        return view('masterdata/unitbisnis', $data);
    }
}
