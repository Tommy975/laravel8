<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function starter_page(){
        return view('starter');
    }
    
    public function services_page(){
        return view('admin/pages/services');
    }
    
    public function calendar_page(){
        return view('admin/pages/calendar');
    }
}
