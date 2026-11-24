
<div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-lg transition">

    <div class="h-52 bg-[#E3EEE5] flex items-center justify-center">
        <span class="text-6xl">🐾</span>
    </div>

    <div class="p-5">
        <div class="flex justify-between items-center">
            <h3 class="text-xl font-bold">{{ $pet->name }}</h3>

            <span class="bg-[#E8F1E9] text-[#477257] text-xs px-3 py-1 rounded-full">
                {{ $pet->species }}
            </span>
        </div>

        <p class="text-sm text-gray-500 mt-2">
            {{ $pet->breed ?? 'Mixed Breed' }}
        </p>

        <p class="text-sm text-gray-500 mt-1">
            {{ $pet->age ?? 'Unknown' }} {{ $pet->age == 1 ? 'year' : 'years' }} old
            · {{ $pet->gender }}
        </p>

        <p class="text-sm text-gray-500 mt-3">
            {{ $pet->shelter->name }}
        </p>

        <a href="{{ route('pets.show', $pet) }}"
           class="block text-center mt-5 bg-[#C9B8E8] hover:bg-[#B7A4DC] text-[#42345D] py-3 rounded-full font-semibold text-sm">
            Meet {{ $pet->name }}
        </a>
    </div>

</div>
