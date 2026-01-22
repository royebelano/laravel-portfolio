@extends('layouts.app')
@section('title', 'Royet Belano | Laravel Developer')
@section('content')
<section id="home" class="relative min-h-screen flex items-center overflow-hidden bg-[#030014]">

    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:35px_35px] animate-grid"></div>
        <div class="absolute -top-[10%] -left-[10%] w-[45%] h-[45%] bg-purple-600/15 rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute -bottom-[10%] -right-[10%] w-[40%] h-[40%] bg-blue-600/10 rounded-full blur-[100px]"></div>
    </div>

    <div class="relative z-10 w-full max-w-7xl mx-auto px-6 md:px-12 py-10 ">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <div class="max-w-4xl space-y-7 text-left">
                <div class="space-y-0">
                    <h1 class="text-7xl md:text-[80px] font-extrabold tracking-tighter leading-[0.85] text-white">
                        Backend
                    </h1>
                    <h1 class="text-7xl md:text-[80px] font-extrabold tracking-tighter leading-[1.5] bg-gradient-to-r from-blue-500 via-purple-500 to-indigo-500 bg-clip-text text-transparent">
                        Developer
                    </h1>
                </div>

                <div class="flex items-center text-lg md:text-2xl text-gray-400 font-normal tracking-wide opacity-90">
                    <span id="typewriter" class="text-white font-medium ml-1"></span>
                    <span class="w-[2px] h-5 md:h-6 bg-purple-500 ml-1 animate-pulse"></span>
                </div>

                <div class="flex flex-wrap gap-2 pt-2">
                    <span class="animate-float px-4 py-1.5 rounded-lg border border-white/10 bg-white/5 text-gray-300 text-sm font-medium transition-all duration-300 hover:bg-purple-500/10 hover:border-purple-500/50 hover:text-white hover:shadow-[0_0_15px_rgba(168,85,247,0.2)] hover:-translate-y-1 cursor-default">React</span>
                    <span class="animate-float px-4 py-1.5 rounded-lg border border-white/10 bg-white/5 text-gray-300 text-sm font-medium transition-all duration-300 hover:bg-blue-500/10 hover:border-blue-500/50 hover:text-white hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] hover:-translate-y-1 cursor-default [animation-delay:0.2s]">Javascript</span>
                    <span class="animate-float px-4 py-1.5 rounded-lg border border-white/10 bg-white/5 text-gray-300 text-sm font-medium transition-all duration-300 hover:bg-green-500/10 hover:border-green-500/50 hover:text-white hover:shadow-[0_0_15px_rgba(34,197,94,0.2)] hover:-translate-y-1 cursor-default [animation-delay:0.4s]">Node.js</span>
                    <span class="animate-float px-4 py-1.5 rounded-lg border border-white/10 bg-white/5 text-gray-300 text-sm font-medium transition-all duration-300 hover:bg-sky-500/10 hover:border-sky-500/50 hover:text-white hover:shadow-[0_0_15px_rgba(14,165,233,0.2)] hover:-translate-y-1 cursor-default [animation-delay:0.6s]">Tailwind</span>
                </div>

                <div class="flex flex-wrap gap-4 pt-2">
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

                <div class="flex gap-4 ml-1 md:ml-28">
                    <a href="https://github.com/royebelano" target="_blank" class="group p-3 rounded-xl border border-white/10 bg-white/5 hover:bg-purple-500/20 hover:border-purple-500/50 hover:-translate-y-1 transition-all duration-300">
                        <img src="https://cdn.simpleicons.org/github/white" class="w-6 h-6 group-hover:scale-110 transition-transform" alt="Github">
                    </a>
                    <a href="https://www.facebook.com/royet.belano.52" target="_blank" class="group p-3 rounded-xl border border-white/10 bg-white/5 hover:bg-blue-600/20 hover:border-blue-500/50 hover:-translate-y-1 transition-all duration-300">
                        <img src="https://cdn.simpleicons.org/facebook/white" class="w-6 h-6 group-hover:scale-110 transition-transform" alt="Facebook">
                    </a>
                </div>
            </div>

            <div class="hidden lg:flex justify-center items-center relative">
                <div class="absolute w-72 h-72 bg-purple-500/20 rounded-full blur-[100px] animate-pulse"></div>

                <div class="relative z-10 p-2 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm animate-float">
                    <img src="https://media4.giphy.com/media/v1.Y2lkPTc5MGI3NjExdDFvazdvdmxqdnJmZG12eDIxcWY5YXlibHJqdWMzYXZyN2VybGhzZyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/78XCFBGOlS6keY1Bil/giphy.gif"
                         alt="Coding GIF"
                         class="rounded-xl w-full max-w-lg shadow-2xl mix-blend-screen opacity-60">
                </div>
            </div>

        </div>
    </div>
</section>
<script>
    const typewriterElement = document.getElementById("typewriter");
    const phrase = "Information Technology";
    let isDeleting = false;
    let charIndex = 0;
    let typeSpeed = 150;

    function type() {
        const currentText = phrase.substring(0, charIndex);
        typewriterElement.textContent = currentText;

        if (!isDeleting && charIndex < phrase.length) {
            charIndex++;
            typeSpeed = 150;
        } else if (isDeleting && charIndex > 0) {
            charIndex--;
            typeSpeed = 70;
        } else {
            isDeleting = !isDeleting;
            typeSpeed = isDeleting ? 1000 : 500;
        }
        setTimeout(type, typeSpeed);
    }

    document.addEventListener("DOMContentLoaded", () => {
        setTimeout(type, 500);
    });
</script>

        <!-- Right: Highlight Card -->

</section>
<style>
    .reveal-left, .reveal-right, .reveal-up {
        opacity: 0;
        filter: blur(5px);
        transition: all 1.2s cubic-bezier(0.17, 0.55, 0.55, 1);
    }
    .reveal-left { transform: translateX(-50px); }
    .reveal-right { transform: translateX(50px); }
    .reveal-up { transform: translateY(50px); } /* Pops from bottom */

    .reveal-left.active, .reveal-right.active, .reveal-up.active {
        opacity: 1;
        filter: blur(0);
        transform: translate(0);
    }
</style>
<style>
    /* Initial states for pop-out effect */
    .reveal-left, .reveal-right, .reveal-up {
        opacity: 0;
        filter: blur(8px);
        transition: all 1.2s cubic-bezier(0.17, 0.55, 0.55, 1);
    }

    .reveal-left { transform: translateX(-50px); }
    .reveal-right { transform: translateX(50px); }
    .reveal-up { transform: translateY(50px); }

    /* Active states when scrolled into view */
    .reveal-left.active, .reveal-right.active, .reveal-up.active {
        opacity: 1;
        filter: blur(0);
        transform: translate(0, 0);
    }

    /* Delayed animation for stats cards */
    .delay-100 { transition-delay: 100ms; }
    .delay-200 { transition-delay: 200ms; }
</style>

<section id="about" class="py-24 bg-[#030014] relative overflow-hidden font-sans">

    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:35px_35px]"></div>
        <div class="absolute -top-[10%] -right-[10%] w-[35%] h-[35%] bg-purple-600/10 rounded-full blur-[110px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">

        <div class="text-center mb-16 reveal-up">
            <h2 class="text-5xl font-extrabold text-[#a855f7] mb-4 tracking-tighter uppercase">About Me</h2>
            <div class="h-1.5 w-24 bg-gradient-to-r from-blue-500 via-purple-500 to-indigo-500 mx-auto rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center mb-20">

            <div class="space-y-7 reveal-left">
                <div class="space-y-2">
                    <h3 class="text-4xl font-bold text-[#a855f7] leading-tight tracking-tight">Hello, I'm</h3>
                    <h1 class="text-6xl font-extrabold text-white tracking-tighter">Royet Belano</h1>
                </div>

                <p class="text-gray-300 leading-relaxed text-lg opacity-90">
                    I am an <span class="text-white font-semibold">Information Technology graduate</span> specializing in <span class="text-white font-semibold">Back-End Development</span>. I am passionate about building the "behind-the-scenes" logic of applications, focusing on database optimization, server security, and creating high-performance APIs that ensure a seamless user experience.
                </p>


            </div>

            <div class="flex justify-center items-center reveal-right">
                <div class="relative group">
                    <div class="absolute inset-0 bg-purple-600/20 rounded-full blur-[80px] group-hover:bg-purple-600/40 transition-all duration-700 animate-pulse"></div>

                    <div class="relative z-10 w-72 h-72 md:w-96 md:h-96 rounded-full border-4 border-white/5 overflow-hidden shadow-2xl backdrop-blur-sm">
                        <img src="{{ asset('Pic.jpg') }}"
                             alt="Royet Belano"
                             class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">

            <a href="#portfolio" class="reveal-up bg-[#11112b]/50 border border-white/10 p-8 rounded-3xl backdrop-blur-md hover:border-purple-500/50 transition-all duration-300 group hover:-translate-y-2 relative block">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-white/5 rounded-2xl group-hover:bg-purple-500/20 transition-colors">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <span class="text-5xl font-bold text-white tracking-tighter">4</span>
                </div>
                <h4 class="text-white font-bold text-xl mb-1 uppercase tracking-wider">Total Projects</h4>
                <p class="text-gray-400 text-sm">Innovative web solutions crafted</p>
                <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transition-all transform translate-x-2 group-hover:translate-x-0">
                    <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </div>
            </a>

            <a href="#portfolio" class="reveal-up delay-100 bg-[#11112b]/50 border border-white/10 p-8 rounded-3xl backdrop-blur-md hover:border-purple-500/50 transition-all duration-300 group hover:-translate-y-2 relative block">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-white/5 rounded-2xl group-hover:bg-purple-500/20 transition-colors">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <span class="text-5xl font-bold text-white tracking-tighter">2</span>
                </div>
                <h4 class="text-white font-bold text-xl mb-1 uppercase tracking-wider">Certificates</h4>
                <p class="text-gray-400 text-sm">Professional skills validated</p>
                <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transition-all transform translate-x-2 group-hover:translate-x-0">
                    <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </div>
            </a>

            <a href="#portfolio" class="reveal-up delay-200 bg-[#11112b]/50 border border-white/10 p-8 rounded-3xl backdrop-blur-md hover:border-purple-500/50 transition-all duration-300 group hover:-translate-y-2 relative block">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-white/5 rounded-2xl group-hover:bg-purple-500/20 transition-colors">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9h18"></path></svg>
                    </div>
                    <span class="text-5xl font-bold text-white tracking-tighter">2</span>
                </div>
                <h4 class="text-white font-bold text-xl mb-1 uppercase tracking-wider">Years Experience</h4>
                <p class="text-gray-400 text-sm">Continuous learning journey</p>
                <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transition-all transform translate-x-2 group-hover:translate-x-0">
                    <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </div>
            </a>
        </div>
    </div>
</section>

<script>
    const setupReveal = () => {
        const observerOptions = {
            threshold: 0.15,
            rootMargin: "0px 0px -50px 0px"
        };

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                } else {
                    // Optional: remove this if you want animation to happen only once
                    entry.target.classList.remove('active');
                }
            });
        }, observerOptions);

        // Apply observer to all revealable elements
        document.querySelectorAll('.reveal-left, .reveal-right, .reveal-up').forEach((el) => {
            revealObserver.observe(el);
        });
    };

    // Initialize after DOM is ready
    document.addEventListener('DOMContentLoaded', setupReveal);
</script>
<style>
    :root {
        --accent: #a855f7;
    }

    /* Tab Content Base */
    .content-section {
        display: none;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
    }

    /* Tech Stack specifically needs smaller columns */
    #tech-section.active {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
    }

    .content-section.active {
        display: grid;
    }

    /* UNIVERSAL REVEAL ANIMATION */
    .reveal-card {
        opacity: 0;
        transform: translateY(30px) scale(0.95);
        transition: all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    /* Trigger animation when parent is active */
    .content-section.active .reveal-card {
        opacity: 1;
        transform: translateY(0) scale(1);
    }

    /* Staggered Delays for any card */
    .delay-100 { transition-delay: 0.1s; }
    .delay-200 { transition-delay: 0.2s; }
    .delay-300 { transition-delay: 0.3s; }
    .delay-400 { transition-delay: 0.4s; }
    .delay-500 { transition-delay: 0.5s; }
    .delay-600 { transition-delay: 0.6s; }

    /* Hover Effects for All Cards */
    .portfolio-card, .tech-item {
        background: rgba(17, 17, 43, 0.7);
        border: 1px solid rgba(255, 255, 255, 0.05);
        backdrop-blur: 12px;
        transition: all 0.4s ease;
    }

    .portfolio-card:hover, .tech-item:hover {
        border-color: var(--accent);
        background: rgba(168, 85, 247, 0.08);
        transform: translateY(-10px);
        box-shadow: 0 15px 30px -10px rgba(168, 85, 247, 0.3);
    }

    .portfolio-tab.active {
        background-color: rgba(139, 92, 246, 0.2);
        border-color: rgba(139, 92, 246, 0.5);
        color: white;
    }
</style>

<section id="portfolio" class="py-24 bg-[#030014] relative font-sans">
    <div class="max-w-7xl mx-auto px-6 relative z-10">

        <div class="text-center mb-16">
            <h2 class="text-5xl font-extrabold text-[#a855f7] mb-4 uppercase tracking-tighter">Portfolio Showcase</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Click the tabs to see my journey with animated transitions.</p>
        </div>

        <div class="flex justify-center mb-16">

            <div class="inline-flex bg-white/5 border border-white/10 p-2 rounded-2xl backdrop-blur-md">
                <style>
    /* Tab Container Styling */
    .tab-container {
        display: inline-flex;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.1);
        padding: 0.5rem; /* Space sa paligid ng buttons */
        border-radius: 1.5rem;
        backdrop-blur: 16px;
        box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.5);
    }

    /* Malaking Buttons */
    .portfolio-tab {
        padding: 1rem 2.5rem; /* Mas malapad at mas mataas */
        font-size: 1.1rem; /* Mas malaking text */
        letter-spacing: 0.05em;
        border-radius: 1.25rem;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }

    /* Animation: Active State with Glow */
    .portfolio-tab.active {
        background: #a855f7; /* Purple background */
        color: white !important;
        box-shadow: 0 0 20px rgba(168, 85, 247, 0.4);
        transform: scale(1.05); /* Bahagyang lalaki ang button pag active */
    }

    /* Animation: Hover State */
    .portfolio-tab:not(.active):hover {
        background: rgba(168, 85, 247, 0.1);
        color: white;
        transform: translateY(-2px);
    }

    /* Reveal-Up Animation for the whole group */
    .reveal-up {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.8s ease-out;
    }
    .reveal-up.active {
        opacity: 1;
        transform: translateY(0);
    }
</style>
                <button id="btn-projects" onclick="switchTab(event, 'projects-section')" class="portfolio-tab active px-8 py-3 rounded-xl font-bold transition-all">Projects</button>
                <button id="btn-certs" onclick="switchTab(event, 'certificates-section')" class="portfolio-tab px-8 py-3 rounded-xl font-bold text-gray-400 hover:text-white transition-all">Certificates</button>
                <button id="btn-tech" onclick="switchTab(event, 'tech-section')" class="portfolio-tab px-8 py-3 rounded-xl font-bold text-gray-400 hover:text-white transition-all">Tech Stack</button>
            </div>
        </div>

       <div id="projects-section" class="content-section active grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <div class="portfolio-card reveal-card p-8 rounded-3xl group">
        <h3 class="text-2xl font-bold text-white mb-2">IT Support System</h3>
        <p class="text-gray-400 mb-6 text-sm">Laravel · MySQL · Tailwind</p>
    </div>

    <div class="portfolio-card reveal-card delay-100 p-8 rounded-3xl group">
        <h3 class="text-2xl font-bold text-white mb-2">Library System</h3>
        <p class="text-gray-400 mb-6 text-sm">Laravel · MySQL · Tailwind</p>
    </div>

    <div class="portfolio-card reveal-card delay-200 p-8 rounded-3xl group">
        <h3 class="text-2xl font-bold text-white mb-2">Inventory Manager</h3>
        <p class="text-gray-400 mb-6 text-sm">PHP · JS API</p>
    </div>

    <div class="portfolio-card reveal-card delay-400 p-8 rounded-3xl group border border-white/10 hover:border-purple-500 transition-all duration-300 flex flex-col justify-between">
        <div>
            <h3 class="text-2xl font-bold text-white mb-2">Skular.ph</h3>
            <p class="text-gray-400 mb-6 text-sm">PHP · JS · API · MYSQL </p>
            <div class="opacity-0 group-hover:opacity-100 transition-opacity mb-4">
            </div>
        </div>


        </div>
    </div>




</div>





<style>
    /* Grid Layout para sa Certifications */
    #certificates-section {
        display: none; /* Hidden by default, activated by JS */
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }
    #certificates-section.active { display: grid; }

    /* Ang Bento Card Container */
    .cert-insert-card {
        background: rgba(10, 10, 25, 0.9);
        border: 4px solid white; /* Makapal na border gaya ng request mo */
        border-radius: 1.5rem;
        position: relative;
        overflow: hidden;
        aspect-ratio: 16/11; /* Para pantay-pantay ang shape ng mga certs */
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        box-shadow: 0 0 20px rgba(168, 85, 247, 0.3);
        cursor: pointer;
    }

    /* Mismong Image ng Certificate */
    .cert-insert-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    /* "View Certificate" Overlay */
    .cert-overlay {
        position: absolute;
        inset: 0;
        background: rgba(168, 85, 247, 0.6); /* Purple tint */
        backdrop-blur: 4px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all 0.3s ease;
    }

    /* Hover Effects */
    .cert-insert-card:hover {
        transform: scale(1.05) translateY(-10px);
        border-color: #a855f7;
        box-shadow: 0 0 40px rgba(168, 85, 247, 0.6);
    }

    .cert-insert-card:hover .cert-overlay {
        opacity: 1;
    }

    .cert-insert-card:hover img {
        transform: scale(1.1);
    }
</style>



    <div id="certificates-section" class="content-section">
    <div class="cert-insert-card reveal-card" onclick="openModal('{{ asset('Cert 1.jpg') }}')">
        <img src="{{ asset('Cert 1.jpg') }}" alt="Certificate 1">
        <div class="cert-overlay">
            <svg class="w-14 h-14 text-white mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
            <span class="text-white font-black uppercase tracking-widest text-lg">View Certificate</span>
        </div>
    </div>

    <div class="cert-insert-card reveal-card delay-100" onclick="openModal('{{ asset('Cert 2.png') }}')">
        <img src="{{ asset('Cert 2.png') }}" alt="Certificate 2">
        <div class="cert-overlay">
            <svg class="w-14 h-14 text-white mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
            <span class="text-white font-black uppercase tracking-widest text-lg">View Certificate</span>
        </div>
    </div>
</div>

<div id="certModal" class="fixed inset-0 z-[999] hidden flex items-center justify-center bg-black/95 backdrop-blur-md p-4" onclick="closeModal()">
    <button class="absolute top-8 right-8 text-white text-6xl font-thin hover:text-purple-500 transition-colors">&times;</button>
    <img id="modalImg" class="max-w-full max-h-[85vh] rounded-xl shadow-2xl border border-white/10 transform transition-all duration-300 scale-90 opacity-0" src="" alt="Full View">
</div>
<script>
    // Function to open the certificate in full view
function openModal(imgSrc) {
    const modal = document.getElementById('certModal');
    const modalImg = document.getElementById('modalImg');

    modalImg.src = imgSrc;
    modal.classList.remove('hidden');

    // Animation for the image pop-up
    setTimeout(() => {
        modalImg.classList.remove('scale-90', 'opacity-0');
        modalImg.classList.add('scale-100', 'opacity-100');
    }, 20);

    document.body.style.overflow = 'hidden'; // Stop scrolling
}

// Function to close the modal
function closeModal() {
    const modal = document.getElementById('certModal');
    const modalImg = document.getElementById('modalImg');

    modalImg.classList.add('scale-90', 'opacity-0');
    modalImg.classList.remove('scale-100', 'opacity-100');

    setTimeout(() => {
        modal.classList.add('hidden');
        modalImg.src = ""; // Reset source
    }, 300);

    document.body.style.overflow = 'auto'; // Enable scrolling
}
</script>

    <style>
    /* 1. TECH GRID LAYOUT */
    .tech-grid {
        display: none;
        grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
        gap: 2rem;
    }
    .tech-grid.active { display: grid; }

    /* 2. BOLD BORDER & BASE CARD */
    .tech-item {
        background: rgba(10, 10, 25, 0.95);
        border: 4px solid white; /* Makapal na border */
        border-radius: 2rem;
        padding: 2.5rem 1rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1.25rem;
        position: relative;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); /* Elastic feel */
        box-shadow: 0 0 20px rgba(168, 85, 247, 0.3);
    }

    /* 3. THE POP-OUT ENTRANCE */
    .reveal-card {
        opacity: 0;
        /* Naka-shrink at nasa ilalim muna */
        transform: scale(0.3) translateY(50px);
        transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55); /* Over-shoot effect */
    }

    /* Kapag active ang section, mag-pop out ang cards */
    .content-section.active .reveal-card {
        opacity: 1;
        transform: scale(1) translateY(0);
    }

    /* Staggered Pop-Out (Isa-isang pagsulpot) */
    .delay-100 { transition-delay: 0.1s; }
    .delay-200 { transition-delay: 0.2s; }
    .delay-300 { transition-delay: 0.3s; }
    .delay-400 { transition-delay: 0.4s; }
    .delay-500 { transition-delay: 0.5s; }

    /* 4. HOVER INTERACTION (Pop-Out further) */
    .tech-item:hover {
        transform: scale(1.1) translateY(-10px); /* Lalaki lalo pag hino-hover */
        border-color: #a855f7;
        box-shadow: 0 0 40px rgba(168, 85, 247, 0.6);
        z-index: 50;
    }

    .tech-item img {
        transition: transform 0.3s ease;
    }

    .tech-item:hover img {
        transform: scale(1.2) rotate(5deg); /* Pop out din yung icon sa loob */
    }
</style>

<div id="tech-section" class="content-section tech-grid">
    <div class="tech-item reveal-card">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" width="65">
        <span class="text-white text-lg font-bold tracking-widest">HTML</span>
    </div>

    <div class="tech-item reveal-card delay-100">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" width="65">
        <span class="text-white text-lg font-bold tracking-widest">CSS</span>
    </div>

    <div class="tech-item reveal-card delay-200">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" width="65">
        <span class="text-white text-lg font-bold tracking-widest">JavaScript</span>
    </div>

    <div class="tech-item reveal-card delay-300">
        <img src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg" width="65">
        <span class="text-white text-lg font-bold tracking-widest text-center">Tailwind CSS</span>
    </div>

    <div class="tech-item reveal-card delay-400">
        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" width="65">
        <span class="text-white text-lg font-bold tracking-widest">ReactJS</span>
    </div>


</div>


    </div>
</section>

<script>
    function switchTab(event, sectionId) {
        // Reset all sections and trigger re-animation
        const sections = document.querySelectorAll('.content-section');
        sections.forEach(s => {
            s.classList.remove('active');
            // Quick hack to restart animation: remove then add back
            const cards = s.querySelectorAll('.reveal-card');
            cards.forEach(c => {
                c.style.animation = 'none';
                c.offsetHeight; // trigger reflow
                c.style.animation = null;
            });
        });

        // Reset tab buttons
        document.querySelectorAll('.portfolio-tab').forEach(t => {
            t.classList.remove('active', 'text-white');
            t.classList.add('text-gray-400');
        });

        // Activate target section
        const target = document.getElementById(sectionId);
        target.classList.add('active');

        // Highlight active button
        let activeBtn;
        if (event) {
            activeBtn = event.currentTarget;
        } else {
            const map = { 'projects-section': 'btn-projects', 'certificates-section': 'btn-certs', 'tech-section': 'btn-tech' };
            activeBtn = document.getElementById(map[sectionId]);
        }

        if (activeBtn) {
            activeBtn.classList.add('active', 'text-white');
            activeBtn.classList.remove('text-gray-400');
        }
    }
</script>
<style>
    /* 1. Floating Animation para sa Main Card */
    @keyframes floatContact {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }

    .contact-card {
        background: rgba(17, 17, 43, 0.8);
        backdrop-blur: 20px;
        border: 2px solid rgba(168, 85, 247, 0.2);
        box-shadow: 0 0 40px rgba(0, 0, 0, 0.5);
        animation: floatContact 6s ease-in-out infinite;
    }

    /* 2. Glow Animation para sa "Get In Touch" Button */
    .btn-glow {
        position: relative;
        z-index: 1;
        overflow: hidden;
    }
    .btn-glow::after {
        content: '';
        position: absolute;
        top: -50%; left: -50%;
        width: 200%; height: 200%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, transparent 70%);
        opacity: 0;
        transition: opacity 0.3s;
        z-index: -1;
    }
    .btn-glow:hover::after { opacity: 1; }

    /* 3. Reveal Animation Logic */
    .reveal-contact {
        opacity: 0;
        transform: scale(0.9) translateY(30px);
        transition: all 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
    }
    .reveal-contact.active {
        opacity: 1;
        transform: scale(1) translateY(0);
    }

    /* 4. Social Button Custom Hovers */
    .social-btn {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .social-btn:hover {
        transform: translateY(-5px);
        background: rgba(255, 255, 255, 0.1);
    }
</style>

<section id="contact" class="py-24 bg-[#030014] relative overflow-hidden font-sans border-t border-white/5">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-purple-600/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-5xl mx-auto px-6 relative z-10">
        <div class="contact-card reveal-contact p-12 md:p-20 rounded-[3.5rem] text-center">

            <div class="inline-flex items-center justify-center w-20 h-20 bg-purple-500/10 rounded-3xl mb-8 border border-purple-500/30">
                <svg class="w-10 h-10 text-purple-500 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>

            <h2 class="text-5xl md:text-6xl font-extrabold text-white mb-6 tracking-tight leading-tight">
                Let’s build something <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#a855f7] to-[#d8b4fe]">extraordinary</span>.
            </h2>

            <p class="text-gray-400 text-xl mb-12 max-w-2xl mx-auto leading-relaxed">
                I’m currently available for freelance work or full-time positions. If you have a question or just want to say hi, my inbox is always open!
            </p>

            <div class="flex flex-col md:flex-row items-center justify-center gap-6">
                <a href="mailto:belanoroyet0@gmail.com"
                   class="btn-glow px-10 py-5 bg-[#a855f7] hover:bg-[#9333ea] text-white rounded-2xl font-bold text-lg shadow-2xl shadow-purple-500/30 transition-all hover:scale-110 active:scale-95 flex items-center gap-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                    </svg>
                    Get In Touch
                </a>

                <div class="flex gap-4">
                    <a href="https://github.com/royebelano" target="_blank"
                       class="social-btn p-5 bg-white/5 border border-white/10 rounded-2xl text-gray-400 hover:text-white hover:border-white/40 shadow-lg">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.041-1.416-4.041-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/royet.belano.52" target="_blank"
                       class="social-btn p-5 bg-white/5 border border-white/10 rounded-2xl text-gray-400 hover:text-[#1877F2] hover:border-[#1877F2]/40 shadow-lg">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-20 flex flex-col md:flex-row justify-between items-center gap-6 border-t border-white/5 pt-10">
            <div class="text-gray-500 text-sm">
                <p>© 2026 Royet Belano. Built with Passion & Caffeine.</p>
            </div>
            <div class="flex gap-8 text-gray-500 text-sm">
                <a href="#about" class="hover:text-white transition-colors">About</a>
                <a href="#portfolio" class="hover:text-white transition-colors">Work</a>
                <a href="#contact" class="hover:text-white transition-colors">Contact</a>
            </div>
        </div>
    </div>
</section>

<script>
    // Trigger para sa reveal-contact animation pag scroll
    const contactObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('.reveal-contact').forEach(el => contactObserver.observe(el));
</script>
@endsection
