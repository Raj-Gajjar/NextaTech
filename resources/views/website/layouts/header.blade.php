
<header class="bg-gray-900 shadow-md sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center py-3 px-6">

        <!-- Logo / Company Name -->
        <h1 class="text-white text-lg font-bold tracking-wide flex items-center">
            <i class="bi bi-speedometer2 me-2 text-purple-400"></i> NexaTech
        </h1>

        <!-- Hamburger Button (Mobile) -->
        <button id="menu-btn" class="text-gray-300 md:hidden focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <!-- Navigation (Desktop) -->
        <nav id="menu" class="hidden md:flex md:items-center md:space-x-4">
            <a href="{{ route('home') }}"
               class="flex items-center px-4 py-2 text-gray-300 hover:bg-gradient-to-r from-purple-500 to-blue-500 hover:text-white rounded transition
               {{ request()->routeIs('home') ? 'bg-gradient-to-r from-purple-500 to-blue-500 text-white' : '' }}">
                <i class="bi bi-house me-2"></i> Home
            </a>
            <a href="{{ route('website.services') }}"
               class="flex items-center px-4 py-2 text-gray-300 hover:bg-gradient-to-r from-purple-500 to-blue-500 hover:text-white rounded transition
               {{ request()->routeIs('website.services') ? 'bg-gradient-to-r from-purple-500 to-blue-500 text-white' : '' }}">
                <i class="bi bi-gear me-2"></i> Services
            </a>
            <a href="{{ route('website.blogs') }}"
               class="flex items-center px-4 py-2 text-gray-300 hover:bg-gradient-to-r from-purple-500 to-blue-500 hover:text-white rounded transition
               {{ request()->routeIs('website.blogs') ? 'bg-gradient-to-r from-purple-500 to-blue-500 text-white' : '' }}">
                <i class="bi bi-journal-text me-2"></i> Blogs
            </a>
            <a href="{{ route('website.jobs') }}"
               class="flex items-center px-4 py-2 text-gray-300 hover:bg-gradient-to-r from-purple-500 to-blue-500 hover:text-white rounded transition
               {{ request()->routeIs('website.jobs') ? 'bg-gradient-to-r from-purple-500 to-blue-500 text-white' : '' }}">
                <i class="bi bi-briefcase me-2"></i> Jobs
            </a>
            <a href="{{ route('website.contacts') }}"
               class="flex items-center px-4 py-2 text-gray-300 hover:bg-gradient-to-r from-purple-500 to-blue-500 hover:text-white rounded transition
               {{ request()->routeIs('website.contacts') ? 'bg-gradient-to-r from-purple-500 to-blue-500 text-white' : '' }}">
                <i class="bi bi-envelope me-2"></i> Contact
            </a>
        </nav>

    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-gray-800">
        <a href="{{ route('home') }}"
           class="block px-4 py-3 text-gray-300 hover:bg-gradient-to-r from-purple-500 to-blue-500 hover:text-white transition rounded">
            <i class="bi bi-house me-2"></i> Home
        </a>
        <a href="{{ route('website.services') }}"
           class="block px-4 py-3 text-gray-300 hover:bg-gradient-to-r from-purple-500 to-blue-500 hover:text-white transition rounded">
            <i class="bi bi-gear me-2"></i> Services
        </a>
        <a href="{{ route('website.blogs') }}"
           class="block px-4 py-3 text-gray-300 hover:bg-gradient-to-r from-purple-500 to-blue-500 hover:text-white transition rounded">
            <i class="bi bi-journal-text me-2"></i> Blogs
        </a>
        <a href="{{ route('website.jobs') }}"
           class="block px-4 py-3 text-gray-300 hover:bg-gradient-to-r from-purple-500 to-blue-500 hover:text-white transition rounded">
            <i class="bi bi-briefcase me-2"></i> Jobs
        </a>
        <a href="{{ route('website.contacts') }}"
           class="block px-4 py-3 text-gray-300 hover:bg-gradient-to-r from-purple-500 to-blue-500 hover:text-white transition rounded">
            <i class="bi bi-envelope me-2"></i> Contact
        </a>
    </div>

    <script>
        // Mobile menu toggle
        const btn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</header>
