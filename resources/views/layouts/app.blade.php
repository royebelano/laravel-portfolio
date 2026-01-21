<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Royet Belano | Laravel Developer')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-950 text-gray-100 antialiased font-sans">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 bg-gray-950/70 backdrop-blur-lg border-b border-gray-800 transition-all duration-300 shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <!-- Logo -->
            <a href="#home" class="font-bold text-xl md:text-2xl text-white hover:text-blue-500 transition">
                Royet<span class="text-blue-500">.</span>dev
            </a>

         <!-- Left-Aligned Navbar Links (Pro Font Size) -->
<div class="hidden md:flex justify-start space-x-12 items-center text-lg font-semibold">
    <a href="#home" class="group relative text-gray-200 hover:text-blue-400 hover-slide-up transition-smooth">
        Home
        <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-500 transition-all duration-300 group-hover:w-full"></span>
    </a>

    <a href="#about" class="group relative text-gray-200 hover:text-blue-400 hover-slide-up transition-smooth">
        About
        <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-500 transition-all duration-300 group-hover:w-full"></span>
    </a>

    <a href="#portfolio" class="group relative text-gray-200 hover:text-blue-400 hover-slide-up transition-smooth">
        Portfolio
        <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-500 transition-all duration-300 group-hover:w-full"></span>
    </a>

    <a href="#contact" class="group relative text-gray-200 hover:text-blue-400 hover-slide-up transition-smooth">
        Contact
        <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-500 transition-all duration-300 group-hover:w-full"></span>
    </a>
</div>


            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn" class="text-gray-400 hover:text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-gray-950/95 border-t border-gray-800">
            <a href="#home" class="block px-6 py-3 border-b border-gray-800 hover:bg-gray-900 transition">Home</a>
            <a href="#projects" class="block px-6 py-3 border-b border-gray-800 hover:bg-gray-900 transition">Projects</a>
            <a href="#contact" class="block px-6 py-3 border-b border-gray-800 hover:bg-gray-900 transition">Contact</a>
            @auth
                <a href="/dashboard" class="block px-6 py-3 border-b border-gray-800 hover:bg-gray-900 transition">Dashboard</a>
                <form method="POST" action="{{ route('logout') }}" class="px-6 py-3 border-b border-gray-800 hover:bg-gray-900 transition">
                    @csrf
                    <button>Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="block px-6 py-3 border-b border-gray-800 hover:bg-gray-900 transition">Login</a>
                <a href="{{ route('register') }}" class="block px-6 py-3 border-b border-gray-800 hover:bg-gray-900 transition">Register</a>
            @endauth
        </div>
    </nav>

    <!-- Page Content -->
    <main class="pt-24">
        @yield('content')
    </main>

    <!-- Mobile Menu Toggle Script -->
    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>

</body>
</html>
