<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index(Request $request)
    {
        $query = Pet::with('shelter')
            ->where('status', 'Available');

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('species')) {
            $query->where('species', $request->species);
        }

        $pets = $query->latest()->paginate(8)->withQueryString();

        return view('pets.index', compact('pets'));
    }

    public function show(Pet $pet)
    {
        $pet->load(['shelter', 'medicalRecords']);

        return view('pets.show', compact('pet'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(Pet $pet)
    {
        //
    }

    public function update(Request $request, Pet $pet)
    {
        //
    }

    public function destroy(Pet $pet)
    {
        //
    }
}
