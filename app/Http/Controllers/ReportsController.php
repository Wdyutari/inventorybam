<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function HeadOffice() {
        $data = [
            'title' => 'Report - Head Office',
            'menu' => 'Head Office',
        ];
        return view('reports/headOffice', $data);
    }
}
