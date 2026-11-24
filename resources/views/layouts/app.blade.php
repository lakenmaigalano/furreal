
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FurReal - Find Your Forever Friend')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F0F7F1] text-[#254B3D]">

    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <a href="{{ route('home') }}" class="text-2xl font-extrabold text-[#315C49]">
                FurReal<span class="text-[#A8C5AE]">.</span>
            </a>

            <div class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="{{ route('home') }}" class="hover:text-[#88A994]">Home</a>
                <a href="{{ route('pets.index') }}" class="hover:text-[#88A994]">Adopt</a>
                <a href="#" class="hover:text-[#88A994]">Pet Care</a>
                <a href="#" class="hover:text-[#88A994]">About Us</a>
            </div>

            <div class="flex items-center gap-3">
                @guest
                    <a href="{{ route('login') }}"
                       class="text-sm font-semibold hover:text-[#88A994]">
                        Log in
                    </a>

                    <a href="{{ route('register') }}"
                       class="bg-[#C9B8E8] hover:bg-[#B7A4DC] text-[#42345D] px-5 py-2.5 rounded-full text-sm font-semibold">
                        Sign Up
                    </a>
                @endguest

                @auth
                    <span class="hidden sm:inline text-sm">
                        Hi, {{ auth()->user()->name }}
                    </span>
                    @if (auth()->user()->is_admin)
                        <a href="{{ route('admin.dashboard') }}"class="text-sm font-semibold text-[#477257]">
                            Dashboard
                        </a>
                    @endif

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="bg-[#C9B8E8] hover:bg-[#B7A4DC] text-[#42345D] px-5 py-2.5 rounded-full text-sm font-semibold">
                            Log out
                        </button>
                    </form>
                @endauth
            </div>

        </div>
    </nav>

    <main>
        @if (session('success'))
            <div class="max-w-7xl mx-auto px-6 pt-5">
                <div class="bg-green-100 text-green-800 p-4 rounded-xl">
                    {{ session('success') }}
                </div>
            </div>
        @endif

        @if (session('error'))
            <div class="max-w-7xl mx-auto px-6 pt-5">
                <div class="bg-red-100 text-red-800 p-4 rounded-xl">
                    {{ session('error') }}
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="mt-20 bg-[#315C49] text-white">
        <div class="max-w-7xl mx-auto px-6 py-10 text-center">
            <h2 class="text-2xl font-bold">FurReal.</h2>
            <p class="mt-2 text-sm text-green-100">
                Find your forever friend.
            </p>
            <p class="mt-6 text-xs text-green-100">
                © {{ date('Y') }} FurReal. All rights reserved.
            </p>
        </div>
    </footer>

</body>
</html>
