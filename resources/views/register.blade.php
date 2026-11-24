
@extends('layouts.app')

@section('title', 'Create Account | FurReal')

@section('content')

<section class="min-h-[75vh] flex items-center justify-center px-6 py-12">

    <div class="w-full max-w-5xl bg-white rounded-[2rem] shadow-sm overflow-hidden grid grid-cols-1 md:grid-cols-2">

        <!-- Left Side -->
        <div class="bg-[#DFEDE1] p-10 md:p-14 flex flex-col justify-center">

            <span class="text-5xl">🐾</span>

            <h1 class="text-4xl font-extrabold text-[#315C49] mt-6 leading-tight">
                Your adoption journey starts here!
            </h1>

            <p class="text-gray-600 mt-4 leading-relaxed">
                Create your FurReal account and get one step closer
                to meeting your new best friend.
            </p>

            <div class="mt-8 text-6xl">🐶 🐱</div>

            <p class="text-sm text-[#477257] mt-8 font-semibold">
                Find your forever friend.
            </p>

        </div>

        <!-- Right Side -->
        <div class="p-10 md:p-14">

            <h2 class="text-3xl font-extrabold">Create Account</h2>

            <p class="text-gray-500 mt-2">
                Join FurReal and start finding your companion.
            </p>

            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-4 rounded-xl mt-6 text-sm">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('register') }}" method="POST" class="mt-8 space-y-5">
                @csrf

                <!-- Name -->
                <div>
                    <label class="block text-sm font-semibold mb-2">
                        Full Name
                    </label>

                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Enter your full name"
                        required
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#A8C5AE]"
                    >

                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-semibold mb-2">
                        Email Address
                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Enter your email"
                        required
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#A8C5AE]"
                    >

                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-semibold mb-2">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Create a password"
                        required
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#A8C5AE]"
                    >

                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div>
                    <label class="block text-sm font-semibold mb-2">
                        Confirm Password
                    </label>

                    <input
                        type="password"
                        name="password_confirmation"
                        placeholder="Re-enter your password"
                        required
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#A8C5AE]"
                    >
                </div>

                <button
                    type="submit"
                    class="w-full bg-[#C9B8E8] hover:bg-[#B7A4DC] text-[#42345D] py-3 rounded-full font-bold transition"
                >
                    Create Account
                </button>

            </form>

            <p class="text-center text-sm text-gray-500 mt-8">
                Already have an account?

                <a href="{{ route('login') }}"
                   class="text-[#477257] font-bold hover:underline">
                    Log in
                </a>
            </p>

        </div>

    </div>

</section>

@endsection
