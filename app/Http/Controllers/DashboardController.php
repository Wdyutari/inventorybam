<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function Index() {
        $data = [
            'title' => 'Dashboard',
        ];
        dd(auth()->user()->getRoleNames());
        return view('index', $data);
    }
}
