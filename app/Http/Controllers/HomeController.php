<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.home');
    }

    public function vProduct() 
    {
        return view('pages.product');
    }

    public function checkIn() 
    {
        return view('pages.check-in');
    }

    public function checkOut()
    {
        return view('pages.check-out');
    }

    public function Sup() 
    {
        return view('pages.supplier');
    }

    public function vSet() 
    {
        return view('pages.setting');
    }
}
