<?php

namespace App\Http\Controllers;

use App\ProfileMadrasah;
use App\Ekstrakulikuler;
use App\GuruTendik;
use Illuminate\Http\Request;

class LeandingPageController extends Controller
{
    public function index()
    {
        $profile_madrasah = ProfileMadrasah::first();
        $ekstrakulikuler = Ekstrakulikuler::orderByRaw('created_at DESC')->get();
        $gurutendik = GuruTendik::all();
        return view('welcome', compact('profile_madrasah', 'ekstrakulikuler','gurutendik'));
    }
}
