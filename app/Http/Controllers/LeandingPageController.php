<?php

namespace App\Http\Controllers;

use App\ProfileMadrasah;
use App\Ekstrakulikuler;
use App\GuruTendik;
use App\Contact;
use Illuminate\Http\Request;

class LeandingPageController extends Controller
{
    public function index()
    {
        $profile_madrasah = ProfileMadrasah::first();
        $ekstrakulikuler = Ekstrakulikuler::orderByRaw('created_at DESC')->get();
        $gurutendik = GuruTendik::all();
        $contact = Contact::first();
        return view('welcome', compact('profile_madrasah', 'ekstrakulikuler','gurutendik','contact'));
    }
}
