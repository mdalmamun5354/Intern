<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('backend.dashboard');
    }
    public function tables(){
        return view('backend.tables');
    }
    public function billing(){
        return view('backend.billing');
    }
    public function profile(){
        return view('backend.profile');
    }
    public function addProduct(){
        return view('backend.addProduct');
    }
}
