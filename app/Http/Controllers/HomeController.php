<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use Input;
use App\Http\Requests\createBuku;

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
        return view('member');
        
    }
}
