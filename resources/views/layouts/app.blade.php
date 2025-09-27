<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Eka Adhikari Cipta')</title>
    <meta name="description"
        content="@yield('description', 'Eka Adhikari Cipta - Leading company in innovation and quality products')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    <style>
        .bg-image-light {
            background-image: url('{{ asset('images/LIGHT-BG.png') }}');
        }
        .bg-image-dark {
            background-image: url('{{ asset('images/DARK-BG.png') }}');
        }
    </style>
</head>

<body class="font-sans antialiased bg-image-light text-dark">
    <!-- Navigation -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-colors duration-300">
        <!-- Main navigation with brown background -->
        <div class="backdrop-blur-md border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-around items-center h-16 border-b border-[#938272]">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">
                        <img src="{{ asset('images/DARK-LOGO.png') }}" alt="EAC Logo" class="h-10 w-auto" style="scale: 1.5;">
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline">
                            <a href="{{ route('home') }}"
                                class="nav-link px-3 py-2 text-sm font-medium text-secondary hover:text-primary-dark transition-colors duration-200 {{ request()->routeIs('home') ? 'text-primary-dark' : '' }}">
                                HOME
                            </a>
                            <a href="{{ route('about') }}"
                                class="nav-link px-3 py-2 text-sm font-medium text-secondary hover:text-primary-dark transition-colors duration-200 {{ request()->routeIs('about') ? 'text-primary-dark' : '' }}">
                                ABOUT US
                            </a>
                            <a href="{{ route('collection') }}"
                                class="nav-link px-3 py-2 text-sm font-medium text-secondary hover:text-primary-dark transition-colors duration-200 {{ request()->routeIs('collection') ? 'text-primary-dark' : '' }}">
                                COLLECTION
                            </a>
                            <a href="{{ route('hot-product') }}"
                                class="nav-link px-3 py-2 text-sm font-medium text-secondary hover:text-primary-dark transition-colors duration-200 {{ request()->routeIs('hot-product') ? 'text-primary-dark' : '' }}">
                                HOT PRODUCT
                            </a>
                            <a href="{{ route('contact') }}"
                                class="nav-link px-3 py-2 text-sm font-medium text-secondary hover:text-primary-dark transition-colors duration-200 {{ request()->routeIs('contact') ? 'text-primary-dark' : '' }}">
                                CONTACT US
                            </a>
                        </div>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="md:hidden">
                        <button type="button"
                            class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-primary focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="mobile-menu hidden md:hidden bg-white/95 backdrop-blur-md border-b border-gray-200">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{ route('home') }}"
                    class="nav-link block px-3 py-2 text-base font-medium text-gray-800 hover:text-primary transition-colors duration-200 {{ request()->routeIs('home') ? 'text-primary' : '' }}">
                    HOME
                </a>
                <a href="{{ route('about') }}"
                    class="nav-link block px-3 py-2 text-base font-medium text-gray-800 hover:text-primary transition-colors duration-200 {{ request()->routeIs('about') ? 'text-primary' : '' }}">
                    ABOUT US
                </a>
                <a href="{{ route('collection') }}"
                    class="nav-link block px-3 py-2 text-base font-medium text-gray-800 hover:text-primary transition-colors duration-200 {{ request()->routeIs('collection') ? 'text-primary' : '' }}">
                    COLLECTION
                </a>
                <a href="{{ route('home') }}#hot-product"
                    class="nav-link block px-3 py-2 text-base font-medium text-gray-800 hover:text-primary transition-colors duration-200">
                    HOT PRODUCT
                </a>
                <a href="{{ route('contact') }}"
                    class="nav-link block px-3 py-2 text-base font-medium text-gray-800 hover:text-primary transition-colors duration-200 {{ request()->routeIs('contact') ? 'text-primary' : '' }}">
                    CONTACT US
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white text-gray-800">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Column 1 - Company Info -->
                <div>
                    <div class="w-8 h-8 bg-blue-500 rounded-sm mb-4"></div>
                    <h3 class="text-lg font-bold text-gray-800 mb-4">EKA ADHIKARI CIPTA</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Eka adhikari cipta is your trusted source for premium rattan furniture. We bring you
                        high-quality and durable designs that elevate any space. With a focus on craftsmanship and
                        customer satisfaction, we deliver stylish yet functional pieces for homes and businesses
                        worldwide.
                    </p>
                </div>

                <!-- Column 2 - Links -->
                <div>
                    <h3 class="text-lg font-bold text-gray-800 mb-4">LINK</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}"
                                class="text-sm text-gray-600 hover:text-primary transition-colors duration-200">HOME</a>
                        </li>
                        <li><a href="{{ route('about') }}"
                                class="text-sm text-gray-600 hover:text-primary transition-colors duration-200">ABOUT
                                US</a></li>
                        <li><a href="{{ route('collection') }}"
                                class="text-sm text-gray-600 hover:text-primary transition-colors duration-200">COLLECTION</a>
                        </li>
                        <li><a href="{{ route('home') }}#hot-product"
                                class="text-sm text-gray-600 hover:text-primary transition-colors duration-200">HOT
                                PRODUCT</a></li>
                        <li><a href="{{ route('contact') }}"
                                class="text-sm text-gray-600 hover:text-primary transition-colors duration-200">CONTACT
                                US</a></li>
                    </ul>
                </div>

                <!-- Column 3 - Social Media -->
                <div>
                    <h3 class="text-lg font-bold text-gray-800 mb-4">SOCIAL MEDIA</h3>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="w-8 h-8 bg-gray-200 rounded flex items-center justify-center hover:bg-gray-300 transition-colors duration-200">
                            <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-8 h-8 bg-gray-200 rounded flex items-center justify-center hover:bg-gray-300 transition-colors duration-200">
                            <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Column 4 - Contact Information -->
                <div>
                    <h3 class="text-lg font-bold text-gray-800 mb-4">CONTACT INFORMATION</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>JL. BUKIT TUNGGAL BLOK C3 NO 18 RT010/RW008 (BLOK C3 NO 18) NGALIYAN KOTA SEMARANG, JAWA
                            TENGAH, ID 50189</p>
                        <p>Call: +62 822 1523 1118/ +62 812 1673 2484</p>
                        <p>Email: ekaadhikaricipta@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript for mobile menu -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const mobileMenuButton = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');

            mobileMenuButton.addEventListener('click', function () {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 20,
            loop: true,
        });
    </script>
    <script>
        const navbar = document.getElementById("navbar");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 0) {
                // pas di-scroll
                navbar.classList.add("bg-transparent");
                navbar.classList.remove("bg-image-light");
            } else {
                // posisi paling atas (tidak scroll)
                navbar.classList.remove("bg-transparent");
                navbar.classList.add("bg-image-light");
            }
        });
    </script>
</body>

</html>