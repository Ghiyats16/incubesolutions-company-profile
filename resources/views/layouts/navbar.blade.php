@php
    // cek apakah sedang di halaman home
    $isHome = request()->routeIs('home');
@endphp

<nav id="navbar"
    class="fixed top-0 left-0 w-full z-50
           bg-slate-900/80 backdrop-blur
           border-b border-white/10
           transition-transform duration-300">

    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <!-- LOGO -->
        <a href="{{ route('home') }}"
           class="text-xl font-bold text-white">
            Incube<span class="text-blue-500">Solutions</span>
        </a>

        <!-- DESKTOP MENU -->
        <div class="hidden md:flex items-center gap-8 text-slate-300">
            <a href="{{ $isHome ? '#home' : route('home').'#home' }}"
               class="hover:text-white transition">
                Home
            </a>

            <a href="{{ $isHome ? '#about' : route('home').'#about' }}"
               class="hover:text-white transition">
                About
            </a>

            <a href="{{ $isHome ? '#services' : route('home').'#services' }}"
               class="hover:text-white transition">
                Services
            </a>

            <a href="{{ route('contact') }}"
               class="px-4 py-2 bg-blue-600 hover:bg-blue-700
                      text-white rounded-lg transition">
                Contact
            </a>
        </div>

        <!-- MOBILE BUTTON -->
        <button id="menuBtn" class="md:hidden text-white text-2xl">
            ☰
        </button>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobileMenu"
         class="hidden md:hidden bg-slate-900 border-t border-white/10">
        <a href="{{ $isHome ? '#home' : route('home').'#home' }}"
           class="block px-6 py-3 text-slate-300 hover:bg-slate-800">
            Home
        </a>

        <a href="{{ $isHome ? '#about' : route('home').'#about' }}"
           class="block px-6 py-3 text-slate-300 hover:bg-slate-800">
            About
        </a>

        <a href="{{ $isHome ? '#services' : route('home').'#services' }}"
           class="block px-6 py-3 text-slate-300 hover:bg-slate-800">
            Services
        </a>

        <a href="{{ route('contact') }}"
           class="block px-6 py-3 text-blue-400 hover:bg-slate-800">
            Contact
        </a>
    </div>
</nav>

{{-- SCRIPT: MOBILE MENU + HIDE NAVBAR ON SCROLL --}}
<script>
    // mobile menu toggle
    document.getElementById('menuBtn').onclick = () => {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    };

    // hide / show navbar on scroll
    let lastScrollTop = 0;
    const navbar = document.getElementById("navbar");

    window.addEventListener("scroll", function () {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop && scrollTop > 100) {
            navbar.classList.add("-translate-y-full");
        } else {
            navbar.classList.remove("-translate-y-full");
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    });
</script>
