@extends('layouts.app')

@section('title', 'Royet Belano | Laravel Developer')

@section('content')

<section id="home" class="relative min-h-screen flex items-center overflow-hidden
                         bg-gray-800">


    <div class="absolute inset-0 overflow-hidden">
<div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:35px_35px] animate-grid"></div>        <div class="absolute -top-[10%] -left-[10%] w-[45%] h-[45%] bg-purple-600/15 rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute -bottom-[10%] -right-[10%] w-[40%] h-[40%] bg-blue-600/10 rounded-full blur-[100px]"></div>
    </div>

    <div class="relative z-10 w-full max-w-7xl mx-auto px-6 md:px-12 py-20">

        <div class="max-w-4xl space-y-7 text-left">

            <div class="space-y-0">
                <h1 class="text-7xl md:text-[110px] font-extrabold tracking-tighter leading-[0.85] text-white">
                    Backend
                </h1>
                <h1 class="text-7xl md:text-[110px] font-extrabold tracking-tighter leading-[0.85] bg-gradient-to-r from-blue-500 via-purple-500 to-indigo-500 bg-clip-text text-transparent">
                    Developer
                </h1>
            </div>

    <div class="flex items-center text-lg md:text-2xl text-gray-400 font-normal tracking-wide opacity-90">
    <span id="typewriter" class="text-White-400 font-medium ml-1"></span>

    <span class="w-[2px] h-5 md:h-6 bg-purple-500 ml-1 animate-pulse"></span>
</div>

<script>
    const typewriterElement = document.getElementById("typewriter");
    const phrase = "Information Technology";
    let isDeleting = false;
    let charIndex = 0;
    let typeSpeed = 150;

    function type() {
        // Kasalukuyang state ng text
        const currentText = phrase.substring(0, charIndex);
        typewriterElement.textContent = currentText;

        if (!isDeleting && charIndex < phrase.length) {
            // Nagta-type
            charIndex++;
            typeSpeed = 150;
        } else if (isDeleting && charIndex > 0) {
            // Nagbubura
            charIndex--;
            typeSpeed = 70; // Mas mabilis kapag nagbubura
        } else {
            // Pagpapalit ng state
            isDeleting = !isDeleting;
            typeSpeed = isDeleting ? 1000 : 500; // Pause bago magbura o mag-type ulit
        }

        setTimeout(type, typeSpeed);
    }

    // Start the loop
    document.addEventListener("DOMContentLoaded", () => {
        setTimeout(type, 500);
    });

</script>
            <p class="text-gray-400 text-lg md:text-xl max-w-xl leading-relaxed font-medium">
            </p>

           <div class="flex flex-wrap gap-2 pt-2">
    <span class="animate-float px-4 py-1.5 rounded-lg border border-white/10 bg-white/5 text-gray-300 text-sm font-medium transition-all duration-300 hover:bg-purple-500/10 hover:border-purple-500/50 hover:text-white hover:shadow-[0_0_15px_rgba(168,85,247,0.2)] hover:-translate-y-1 cursor-default">
        React
    </span>

    <span class="animate-float px-4 py-1.5 rounded-lg border border-white/10 bg-white/5 text-gray-300 text-sm font-medium transition-all duration-300 hover:bg-blue-500/10 hover:border-blue-500/50 hover:text-white hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] hover:-translate-y-1 cursor-default [animation-delay:0.2s]">
        Javascript
    </span>

    <span class="animate-float px-4 py-1.5 rounded-lg border border-white/10 bg-white/5 text-gray-300 text-sm font-medium transition-all duration-300 hover:bg-green-500/10 hover:border-green-500/50 hover:text-white hover:shadow-[0_0_15px_rgba(34,197,94,0.2)] hover:-translate-y-1 cursor-default [animation-delay:0.4s]">
        Node.js
    </span>

    <span class="animate-float px-4 py-1.5 rounded-lg border border-white/10 bg-white/5 text-gray-300 text-sm font-medium transition-all duration-300 hover:bg-sky-500/10 hover:border-sky-500/50 hover:text-white hover:shadow-[0_0_15px_rgba(14,165,233,0.2)] hover:-translate-y-1 cursor-default [animation-delay:0.6s]">
        Tailwind
    </span>
</div>

<style>
@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
}

.animate-float {
    animation: float 3s ease-in-out infinite;
}
</style>

           <div class="flex flex-wrap gap-4 pt-2 -mt-4">
    <a href="#portfolio" class="group relative flex items-center gap-3 px-8 py-3.5 bg-black/40 border border-white/10 text-white font-bold rounded-xl transition-all duration-300 hover:border-purple-500/50 hover:shadow-[0_0_30px_rgba(168,85,247,0.3)] hover:-translate-y-1">
        <div class="absolute inset-0 rounded-xl bg-gradient-to-r from-purple-600/20 to-blue-600/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
        <span class="relative">Projects</span>
        <span class="relative group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform duration-300">↗</span>
    </a>

     <a href="#contact" class="group relative flex items-center gap-3 px-8 py-3.5 bg-black/40 border border-white/10 text-white font-bold rounded-xl transition-all duration-300 hover:border-purple-500/50 hover:shadow-[0_0_30px_rgba(168,85,247,0.3)] hover:-translate-y-1">
        <div class="absolute inset-0 rounded-xl bg-gradient-to-r from-purple-600/20 to-blue-600/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
        <span>Contact</span>
        <span class="group-hover:scale-110 transition-transform duration-300">✉</span>
    </a>
</div>

<div class="flex gap-4 ml-20 md:ml-25 -mt-5 md:-mt-1">
        <a href="https://github.com/royebelano" target="_blank"
       class="group p-3 rounded-xl border border-white/10 bg-white/5 hover:bg-purple-500/20 hover:border-purple-500/50 hover:-translate-y-1 transition-all duration-300">
        <img src="https://cdn.simpleicons.org/github/white" class="w-6 h-6 group-hover:scale-110 transition-transform" alt="Github">
    </a>

    <a href="https://www.facebook.com/royet.belano.52" target="_blank"
       class="group p-3 rounded-xl border border-white/10 bg-white/5 hover:bg-blue-600/20 hover:border-blue-500/50 hover:-translate-y-1 transition-all duration-300">
        <img src="https://cdn.simpleicons.org/facebook/white" class="w-6 h-6 group-hover:scale-110 transition-transform" alt="Facebook">
    </a>
</div>

</section>

        <!-- Right: Highlight Card -->
        <div class="relative animate-fadeIn delay-600">
            <div class="absolute inset-0 bg-blue-500/20 blur-3xl rounded-full"></div>
            <div class="relative bg-gray-900 border border-gray-800 rounded-2xl p-8 shadow-xl">
                <p class="text-sm text-gray-400">Currently building:</p>
                <h3 class="mt-2 font-semibold text-lg">
                    IT Support Ticketing System
                </h3>
                <p class="mt-2 text-gray-500 text-sm">
                    Laravel · Tailwind · MySQL
                </p>
            </div>
        </div>

    </div>
</section>

<!-- ABOUT ME SECTION -->
<section id="about" class="py-24 bg-gray-900">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <div class="space-y-4 animate-fadeIn">
            <h2 class="text-4xl font-bold text-white">About Me</h2>
            <p class="text-gray-400">
                I am a passionate web developer specializing in Laravel. I love creating
                clean, modern interfaces and efficient backend systems.
            </p>
            <p class="text-gray-400">
                With experience in IT support systems, ticketing platforms, and custom web apps,
                I strive to deliver professional solutions for businesses and projects.
            </p>
        </div>

        <div class="flex justify-center animate-fadeIn delay-200">
            <img src="https://via.placeholder.com/400x400.png?text=Royet+Belano"
                 alt="Royet Belano"
                 class="rounded-2xl border border-gray-800 shadow-xl">
        </div>
    </div>
</section>

<!-- PORTFOLIO / PROJECTS SECTION -->
<section id="portfolio" class="py-24 bg-gray-950">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-white mb-12 text-center animate-fadeIn">Portfolio</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Project Card Example -->
            <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6 shadow-xl hover:scale-105 transition-transform duration-300 animate-fadeIn">
                <h3 class="font-semibold text-lg text-white mb-2">IT Support System</h3>
                <p class="text-gray-400 text-sm mb-4">Laravel · MySQL · Tailwind</p>
                <a href="#" target="_blank" class="text-blue-500 hover:underline font-medium">View Project</a>
            </div>

            <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6 shadow-xl hover:scale-105 transition-transform duration-300 animate-fadeIn delay-200">
                <h3 class="font-semibold text-lg text-white mb-2">Ticketing Platform</h3>
                <p class="text-gray-400 text-sm mb-4">Laravel · MySQL · Tailwind</p>
                <a href="#" target="_blank" class="text-blue-500 hover:underline font-medium">View Project</a>
            </div>

            <div class="bg-gray-900 border border-gray-800 rounded-2xl p-6 shadow-xl hover:scale-105 transition-transform duration-300 animate-fadeIn delay-400">
                <h3 class="font-semibold text-lg text-white mb-2">Portfolio Website</h3>
                <p class="text-gray-400 text-sm mb-4">Laravel · Tailwind · Vite</p>
                <a href="#" target="_blank" class="text-blue-500 hover:underline font-medium">View Project</a>
            </div>

        </div>
    </div>
</section>

<!-- CONTACT / CALL TO ACTION SECTION -->
<section id="contact" class="py-24 bg-gray-900">
    <div class="max-w-3xl mx-auto px-6 text-center animate-fadeIn">
        <h2 class="text-4xl font-bold text-white mb-6">Contact Me</h2>
        <p class="text-gray-400 mb-8">Have a project in mind? Let’s work together!</p>
        <a href="mailto:your-email@example.com"
           class="px-8 py-4 bg-blue-600 hover:bg-blue-700 rounded-lg font-semibold transition">
           Get In Touch
        </a>
    </div>
</section>

@endsection
