<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){

        if(Auth::user())
        {
            return view('dashboard');
        }else{
            return view('login');
        }

     
    }
}
