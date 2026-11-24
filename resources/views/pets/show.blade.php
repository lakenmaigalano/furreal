
@extends('layouts.app')

@section('title', $pet->name . ' | FurReal')

@section('content')

<section class="max-w-6xl mx-auto px-6 py-12">

    <!-- Back Button -->
    <a href="{{ route('pets.index') }}"
       class="text-[#477257] font-semibold hover:underline">
        ← Back to available pets
    </a>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-8">

        <!-- Pet Image Placeholder -->
        <div class="bg-[#DFEDE1] rounded-[2rem] min-h-[400px] flex items-center justify-center">
            <span class="text-9xl">
                {{ $pet->species == 'Dog' ? '🐶' : '🐱' }}
            </span>
        </div>

        <!-- Pet Information -->
        <div class="bg-white rounded-[2rem] p-8 shadow-sm">

            <div class="flex justify-between items-center">
                <span class="bg-[#E8F1E9] text-[#477257] px-4 py-2 rounded-full text-sm font-semibold">
                    {{ $pet->species }}
                </span>

                <span class="text-sm text-green-700 font-semibold">
                    {{ $pet->status }}
                </span>
            </div>

            <h1 class="text-4xl font-extrabold mt-6">
                Meet {{ $pet->name }}
            </h1>

            <p class="text-gray-500 mt-2">
                {{ $pet->breed ?? 'Mixed Breed' }}
            </p>

            <div class="grid grid-cols-2 gap-4 mt-8">

                <div class="bg-[#F0F7F1] p-4 rounded-2xl">
                    <p class="text-sm text-gray-500">Age</p>
                    <p class="font-bold mt-1">
                        {{ $pet->age ?? 'Unknown' }}
                        {{ $pet->age == 1 ? 'year' : 'years' }}
                    </p>
                </div>

                <div class="bg-[#F0F7F1] p-4 rounded-2xl">
                    <p class="text-sm text-gray-500">Gender</p>
                    <p class="font-bold mt-1">{{ $pet->gender }}</p>
                </div>

            </div>

            <div class="mt-8">
                <h2 class="text-xl font-bold">About {{ $pet->name }}</h2>

                <p class="text-gray-600 mt-3 leading-relaxed">
                    {{ $pet->description ?? 'No description available yet.' }}
                </p>
            </div>

            <div class="mt-8">
                <h2 class="text-lg font-bold">Shelter Information</h2>

                <p class="text-gray-600 mt-2">
                    {{ $pet->shelter->name }}
                </p>

                <p class="text-sm text-gray-500">
                    {{ $pet->shelter->address }}
                </p>
            </div>

            <!-- Adoption Button -->
            @if ($pet->status == 'Available')

                @auth
                    <form action="{{ route('adoptions.store', $pet) }}" method="POST">
                        @csrf

                        <button type="submit"
                            class="w-full mt-8 bg-[#C9B8E8] hover:bg-[#B7A4DC] text-[#42345D] py-4 rounded-full font-bold">
                            Apply for Adoption
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}"
                       class="block text-center mt-8 bg-[#C9B8E8] hover:bg-[#B7A4DC] text-[#42345D] py-4 rounded-full font-bold">
                        Log in to Adopt
                    </a>
                @endauth

            @else

                <p class="mt-8 bg-gray-100 text-gray-600 p-4 rounded-xl text-center">
                    This pet is currently unavailable for adoption.
                </p>

            @endif

        </div>

    </div>

    <!-- Medical Records -->
    <div class="bg-white rounded-[2rem] p-8 mt-12 shadow-sm">

        <h2 class="text-2xl font-extrabold">Medical History</h2>

        <p class="text-gray-500 mt-2">
            Health records and veterinary updates for {{ $pet->name }}.
        </p>

        <div class="mt-6 space-y-4">

            @forelse ($pet->medicalRecords as $record)

                <div class="bg-[#F0F7F1] rounded-2xl p-5">

                    <div class="flex flex-col sm:flex-row sm:justify-between gap-2">
                        <h3 class="font-bold">
                            {{ $record->medical_condition }}
                        </h3>

                        <span class="text-sm text-gray-500">
                            {{ $record->record_date->format('M d, Y') }}
                        </span>
                    </div>

                    <p class="text-gray-600 text-sm mt-2">
                        {{ $record->treatment }}
                    </p>

                </div>

            @empty

                <p class="text-gray-500">
                    No medical records available.
                </p>

            @endforelse

        </div>

    </div>

</section>

@endsection
