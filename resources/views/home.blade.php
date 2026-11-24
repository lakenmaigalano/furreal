
@extends('layouts.app')

@section('title', 'FurReal - Find Your Forever Friend')

@section('content')

    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-6 py-16">
        <div class="bg-[#DFEDE1] rounded-[2rem] p-10 md:p-16 flex flex-col md:flex-row items-center gap-10">

            <div class="flex-1">
                <span class="bg-white text-[#477257] px-4 py-2 rounded-full text-sm font-semibold">
                    Give a pet a second chance
                </span>

                <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mt-6 text-[#315C49]">
                    Find your
                    <span class="text-[#91B69A]">forever</span>
                    friend.
                </h1>

                <p class="mt-5 text-gray-600 leading-relaxed max-w-lg">
                    Every pet deserves a loving home. Meet adorable pets
                    waiting for someone just like you.
                </p>

                <a href="{{ route('pets.index') }}"
                   class="inline-block mt-8 bg-[#C9B8E8] hover:bg-[#B7A4DC] text-[#42345D] px-8 py-4 rounded-full font-bold">
                    Explore Pets →
                </a>
            </div>

            <div class="flex-1 flex justify-center">
                <div class="bg-white rounded-full w-64 h-64 md:w-80 md:h-80 flex items-center justify-center shadow-sm">
                    <span class="text-9xl">🐶</span>
                </div>
            </div>

        </div>
    </section>

    <!-- Featured Pets -->
    <section class="max-w-7xl mx-auto px-6 py-10">

        <div class="flex flex-col sm:flex-row justify-between sm:items-end gap-4 mb-8">
            <div>
                <p class="text-sm font-semibold text-[#88A994]">MEET YOUR NEW BEST FRIEND</p>
                <h2 class="text-3xl font-extrabold mt-2">Pets waiting for you</h2>
                <p class="text-gray-500 mt-2">
                    A few lovely faces looking for a forever home.
                </p>
            </div>

            <a href="{{ route('pets.index') }}"
               class="text-[#477257] font-semibold hover:underline">
                View all pets →
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @forelse ($pets as $pet)
                <x-pet-card :pet="$pet" />
            @empty
                <p class="col-span-full text-gray-500">
                    No pets are available at the moment. Please check again soon!
                </p>
            @endforelse
        </div>

    </section>

    <!-- Adoption Message -->
    <section class="max-w-7xl mx-auto px-6 mt-16">
        <div class="bg-white rounded-3xl p-10 text-center">
            <h2 class="text-3xl font-extrabold">A little love changes everything.</h2>

            <p class="text-gray-500 mt-3 max-w-xl mx-auto">
                Adoption gives animals another chance to experience
                a happy and loving life.
            </p>

            <a href="{{ route('pets.index') }}"
               class="inline-block mt-6 bg-[#315C49] hover:bg-[#254B3D] text-white px-8 py-3 rounded-full font-semibold">
                Start Your Adoption
            </a>
        </div>
    </section>

@endsection
