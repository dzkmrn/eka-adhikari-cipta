@extends('layouts.app')

@section('title', 'Contact Us - Eka Adhikari Cipta')
@section('description', 'Get closer with Eka Adhikari Cipta. Contact us for premium rattan furniture')

@push('styles')
    <style>
        .bg-img-contact {
            background-image: url('{{ asset('images/CONTACT-US-BG.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .text-nav {
            color: white !important;
        }
    </style>
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center bg-img-contact justify-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
            <div class="text-center mb-12 m-auto">
                <h1 class="text-5xl md:text-8xl font-home text-white mb-4 uppercase tracking-wider">
                    GET CLOSER
                </h1>
                <p class="text-3xl md:text-7xl text-white mt-4">
                    WITH US
                </p>
            </div>
        </div>
    </section>

    <!-- Contact and Location Section -->
    <section class="py-20 bg-image-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Left Side - Map -->
                <div>
                    <h2 class="text-3xl font-bold text-white mb-8 uppercase tracking-wider">WE ON THE PLACE</h2>
                    <div class="bg-gray-700 rounded-lg overflow-hidden h-96 flex items-center justify-center">
                        <div class="text-center text-gray-400">
                            <svg class="w-12 h-12 mx-auto mb-4 animate-spin" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                                </path>
                            </svg>
                            <p>Loading Map...</p>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Contact Form -->
                <div>
                    @if(session('success'))
                        <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name"
                                class="block text-sm font-medium text-white mb-2 uppercase tracking-wider">NAME</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-3 bg-secondary border-2 border-primary rounded-lg text-dark placeholder-gray-500 focus:outline-none focus:border-primary-light @error('name') border-red-500 @enderror"
                                value="{{ old('name') }}" placeholder="Your Name">
                            @error('name')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email"
                                class="block text-sm font-medium text-white mb-2 uppercase tracking-wider">EMAIL</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 bg-secondary border-2 border-primary rounded-lg text-dark placeholder-gray-500 focus:outline-none focus:border-primary-light @error('email') border-red-500 @enderror"
                                value="{{ old('email') }}" placeholder="Your Email">
                            @error('email')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message"
                                class="block text-sm font-medium text-white mb-2 uppercase tracking-wider">MESSAGE</label>
                            <textarea id="message" name="message" rows="6" required
                                class="w-full px-4 py-3 bg-secondary border-2 border-primary rounded-lg text-dark placeholder-gray-500 focus:outline-none focus:border-primary-light @error('message') border-red-500 @enderror"
                                placeholder="Your Message">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full bg-primary hover:bg-primary-dark text-white font-bold py-3 px-6 rounded-lg transition-colors duration-200 uppercase tracking-wider">
                            SUBMIT
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Section -->
    <section class="py-20 bg-image-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
            <div class="text-center">
                <div class="bg-gray-800 px-8 py-4 rounded-lg inline-block mb-12">
                    <h2 class="text-2xl font-bold text-white uppercase tracking-wider">FOLLOW US ON</h2>
                </div>

                <div class="flex justify-center space-x-12">
                    <!-- Instagram -->
                    <a href="#" class="group">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-purple-500 via-pink-500 to-orange-400 rounded-lg flex items-center justify-center group-hover:scale-105 transition-transform duration-200">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </div>
                    </a>

                    <!-- LinkedIn -->
                    <a href="#" class="group">
                        <div
                            class="w-20 h-20 bg-blue-600 rounded-lg flex items-center justify-center group-hover:scale-105 transition-transform duration-200">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection