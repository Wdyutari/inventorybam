<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function profile(){
        $data = [
            'title' => 'Profile',
            'menu' => 'Profile',
        ];
        return view('user/profile', $data);
    }
    
    public function mRole(){
        $data = [
            'title' => 'Manajemen Role',
            'menu' => 'Manajemen Role',
        ];
        return view('user/mRole', $data);
    }
}
