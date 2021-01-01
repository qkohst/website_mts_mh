<?php

namespace App\Http\Controllers;

use App\ProfileMadrasah;
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
        $madrasah = ProfileMadrasah::first();
        return view('home', compact('madrasah'));
    }
}
