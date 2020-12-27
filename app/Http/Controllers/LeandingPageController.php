<?php

namespace App\Http\Controllers;

use App\ProfileMadrasah;
use Illuminate\Http\Request;

class LeandingPageController extends Controller
{
    public function index()
    {
        $profile_madrasah = ProfileMadrasah::first();
        return view('welcome', compact('profile_madrasah'));
    }
}
