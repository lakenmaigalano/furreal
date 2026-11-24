
@extends('layouts.app')

@section('title', 'Adopt a Pet | FurReal')

@section('content')

<section class="max-w-7xl mx-auto px-6 py-12">

    <div class="text-center mb-10">
        <p class="text-sm font-semibold text-[#88A994]">
            YOUR NEW BEST FRIEND IS WAITING
        </p>

        <h1 class="text-4xl font-extrabold mt-3">
            Find your perfect companion.
        </h1>

        <p class="text-gray-500 mt-3">
            Browse our adorable pets and find the one that feels like home.
        </p>
    </div>

    <!-- Search and Filter -->
    <div class="bg-white rounded-3xl p-6 shadow-sm mb-10">

        <form action="{{ route('pets.index') }}" method="GET"
              class="grid grid-cols-1 md:grid-cols-3 gap-4">

            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Search pet by name..."
                class="border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#A8C5AE]"
            >

            <select
                name="species"
                class="border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#A8C5AE]"
            >
                <option value="">All pets</option>
                <option value="Dog" {{ request('species') == 'Dog' ? 'selected' : '' }}>
                    Dogs
                </option>
                <option value="Cat" {{ request('species') == 'Cat' ? 'selected' : '' }}>
                    Cats
                </option>
            </select>

            <button
                type="submit"
                class="bg-[#C9B8E8] hover:bg-[#B7A4DC] text-[#42345D] rounded-xl font-semibold py-3"
            >
                Search Pets
            </button>

        </form>

    </div>

    <!-- Pet Results -->
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Available Pets</h2>

        <p class="text-sm text-gray-500">
            {{ $pets->total() }} pets found
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        @forelse ($pets as $pet)

            <x-pet-card :pet="$pet" />

        @empty

            <div class="col-span-full bg-white rounded-3xl p-12 text-center">
                <span class="text-5xl">🐾</span>

                <h3 class="text-xl font-bold mt-4">
                    No pets found
                </h3>

                <p class="text-gray-500 mt-2">
                    Try another search or filter.
                </p>

                <a href="{{ route('pets.index') }}"
                   class="inline-block mt-5 text-[#477257] font-semibold hover:underline">
                    View all pets
                </a>
            </div>

        @endforelse

    </div>

    <!-- Pagination -->
    <div class="mt-10">
        {{ $pets->links() }}
    </div>

</section>

@endsection
