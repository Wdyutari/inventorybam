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
 
    public function Klinik() {
        $data = [
            'title' => 'Report - Klinik',
            'menu' => 'Klinik',
        ];
        return view('reports/klinik', $data);
    }
    
    public function Rs() {
        $data = [
            'title' => 'Report - Rumah Sakit',
            'menu' => 'Rumah Sakit',
        ];
        return view('reports/rs', $data);
    }
}
