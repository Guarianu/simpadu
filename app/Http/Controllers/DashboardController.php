<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $data = ['nama' => "Irfan", 'foto' => 'avatar.png'];
        return view('dashboard', compact ('data')); 
        
    }
}
