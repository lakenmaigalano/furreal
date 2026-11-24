<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Shelter;
use App\Models\Adopter;

class AdminController extends Controller
{
    public function index()
    {
        $totalPets = Pet::count();
        $availablePets = Pet::where('status', 'Available')->count();
        $totalShelters = Shelter::count();
        $totalAdopters = Adopter::count();

        $recentPets = Pet::with('shelter')
            ->latest()
            ->take(5)
            ->get();

        $recentApplications = Adopter::with(['user', 'pets'])
            ->latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'totalPets',
            'availablePets',
            'totalShelters',
            'totalAdopters',
            'recentPets',
            'recentApplications'
        ));
    }
}
