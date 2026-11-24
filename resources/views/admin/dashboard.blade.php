
@extends('layouts.app')

@section('title', 'Admin Dashboard | FurReal')

@section('content')

<section class="max-w-7xl mx-auto px-6 py-10">

    <!-- Dashboard Heading -->
    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 mb-10">

        <div>
            <p class="text-sm font-semibold text-[#88A994]">
                FURREAL MANAGEMENT
            </p>

            <h1 class="text-3xl font-extrabold mt-2">
                Admin Dashboard
            </h1>

            <p class="text-gray-500 mt-2">
                Welcome back! Here's what's happening at FurReal.
            </p>
        </div>

        <span class="bg-[#DFEDE1] text-[#315C49] px-5 py-3 rounded-full text-sm font-semibold">
            Administrator
        </span>

    </div>

    <!-- Statistics -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        <div class="bg-white rounded-3xl p-6 shadow-sm">
            <p class="text-sm text-gray-500">Total Pets</p>
            <h2 class="text-4xl font-extrabold mt-3">{{ $totalPets }}</h2>
            <p class="text-sm text-[#88A994] mt-2">Registered pets</p>
        </div>

        <div class="bg-white rounded-3xl p-6 shadow-sm">
            <p class="text-sm text-gray-500">Available Pets</p>
            <h2 class="text-4xl font-extrabold mt-3">{{ $availablePets }}</h2>
            <p class="text-sm text-[#88A994] mt-2">Looking for a home</p>
        </div>

        <div class="bg-white rounded-3xl p-6 shadow-sm">
            <p class="text-sm text-gray-500">Total Shelters</p>
            <h2 class="text-4xl font-extrabold mt-3">{{ $totalShelters }}</h2>
            <p class="text-sm text-[#88A994] mt-2">Registered shelters</p>
        </div>

        <div class="bg-white rounded-3xl p-6 shadow-sm">
            <p class="text-sm text-gray-500">Registered Adopters</p>
            <h2 class="text-4xl font-extrabold mt-3">{{ $totalAdopters }}</h2>
            <p class="text-sm text-[#88A994] mt-2">Adopter profiles</p>
        </div>

    </div>

    <!-- Recent Pets -->
    <div class="bg-white rounded-3xl p-8 mt-10 shadow-sm">

        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-bold">Recent Pet Listings</h2>

            <a href="{{ route('admin.pets.create') }}"
               class="bg-[#C9B8E8] hover:bg-[#B7A4DC] text-[#42345D] px-5 py-2 rounded-full text-sm font-semibold">
                + Add Pet
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left">

                <thead>
                    <tr class="border-b text-sm text-gray-500">
                        <th class="py-4">Pet Name</th>
                        <th class="py-4">Species</th>
                        <th class="py-4">Breed</th>
                        <th class="py-4">Shelter</th>
                        <th class="py-4">Status</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($recentPets as $pet)
                        <tr class="border-b last:border-0 text-sm">
                            <td class="py-4 font-semibold">{{ $pet->name }}</td>
                            <td class="py-4">{{ $pet->species }}</td>
                            <td class="py-4">{{ $pet->breed ?? 'Mixed Breed' }}</td>
                            <td class="py-4">{{ $pet->shelter->name }}</td>
                            <td class="py-4">
                                <span class="bg-[#E8F1E9] text-[#477257] px-3 py-1 rounded-full text-xs">
                                    {{ $pet->status }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-6 text-center text-gray-500">
                                No pets have been added yet.
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

    </div>

    <!-- Recent Applications -->
    <div class="bg-white rounded-3xl p-8 mt-8 shadow-sm">

        <h2 class="text-xl font-bold mb-6">
            Recent Adoption Applications
        </h2>

        @forelse ($recentApplications as $adopter)

            @forelse ($adopter->pets as $pet)

                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-3 border-b last:border-0 py-4">

                    <div>
                        <p class="font-semibold">{{ $adopter->user->name }}</p>
                        <p class="text-sm text-gray-500">
                            Applied for {{ $pet->name }}
                        </p>
                    </div>

                    <span class="bg-[#F0EAF9] text-[#65518B] px-4 py-2 rounded-full text-xs font-semibold">
                        {{ $pet->pivot->status }}
                    </span>

                </div>

            @empty
                <p class="text-gray-500">No applications yet.</p>
            @endforelse

        @empty
            <p class="text-gray-500">No applications yet.</p>
        @endforelse

    </div>

</section>

@endsection
