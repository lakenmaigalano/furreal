<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
class HomeController extends Controller
{
     public function index()
    {
        $pets = Pet::with('shelter')
            ->where('status', 'Available')
            ->latest()
            ->take(4)
            ->get();

        return view('home', compact('pets'));
    }
}
