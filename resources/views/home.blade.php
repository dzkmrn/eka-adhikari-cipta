@extends('layouts.app')

@section('title', 'Home - Eka Adhikari Cipta')
@section('description', 'Your Trusted For Rattan Quality - Eka Adhikari Cipta')

@section('content')
<!-- Warm Greeting Section -->
<section class="relative min-h-screen bg-neutral py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-5xl md:text-7xl font-bold text-primary mb-4 uppercase tracking-wider">
                WARM GREETING
            </h1>
            <p class="text-lg text-primary-dark mt-4">
                FROM EKA ADHIKARI CIPTA
            </p>
        </div>

        <!-- Logo and Description -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-16">
            <div>
                <img src="{{ asset('storage/images/logo.png') }}" alt="EAC Logo" class="w-48 mx-auto md:mx-0">
            </div>
            <div>
                <p class="text-primary-dark leading-relaxed">
                    EKA ADHIKARI CIPTA is a state-owned source for premium rattan furniture. We bring you high quality and durable furniture that reflects your taste for elegance and quality.
                </p>
            </div>
        </div>

        <!-- Team Photos -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach(['team1.jpg', 'team2.jpg', 'team3.jpg', 'team4.jpg'] as $photo)
                <img src="{{ asset('storage/images/' . $photo) }}" alt="Team Member" class="w-full h-64 object-cover rounded-lg">
            @endforeach
        </div>
    </div>
</section>

<!-- Introducing Our Team Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-primary mb-8 uppercase tracking-wider">
                INTRODUCING OUR TEAM
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- CEO -->
            <div class="text-center">
                <img src="{{ asset('storage/images/ADEN.png') }}" alt="Aden P. Muntaz" class="w-48 h-48 mx-auto rounded-full mb-6">
                <h3 class="text-2xl font-bold text-primary mb-2">ADEN P. MUNTAZ</h3>
                <p class="text-primary-dark">Chief Executive Officer</p>
            </div>

            <!-- COO -->
            <div class="text-center">
                <img src="{{ asset('storage/images/ABDUL.png') }}" alt="Abdul Malik K. A." class="w-48 h-48 mx-auto rounded-full mb-6">
                <h3 class="text-2xl font-bold text-primary mb-2">ABDUL MALIK K. A.</h3>
                <p class="text-primary-dark">Chief Operational Officer</p>
            </div>

            <!-- CPO -->
            <div class="text-center">
                <img src="{{ asset('storage/images/ZACKY.png') }}" alt="M. Zacky Sulthoni" class="w-48 h-48 mx-auto rounded-full mb-6">
                <h3 class="text-2xl font-bold text-primary mb-2">M. ZACKY SULTHONI</h3>
                <p class="text-primary-dark">Chief Production Officer</p>
            </div>

            <!-- CMO -->
            <div class="text-center">
                <img src="{{ asset('storage/images/IRGI.png') }}" alt="Irgi Adil D. M." class="w-48 h-48 mx-auto rounded-full mb-6">
                <h3 class="text-2xl font-bold text-primary mb-2">IRGI ADIL D. M.</h3>
                <p class="text-primary-dark">Chief Marketing Officer</p>
            </div>

            <!-- CTO -->
            <div class="text-center">
                <img src="{{ asset('storage/images/AFIF.png') }}" alt="Abdul Afif" class="w-48 h-48 mx-auto rounded-full mb-6">
                <h3 class="text-2xl font-bold text-primary mb-2">ABDUL AFIF</h3>
                <p class="text-primary-dark">Chief Technology Officer</p>
            </div>
        </div>
    </div>
</section>

<!-- Limited Offering Section -->
<section class="bg-dark py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-12">
            <div>
                <h2 class="text-5xl font-bold text-white mb-2 uppercase tracking-wider">LIMITED OFFERING</h2>
                <p class="text-lg text-white/80">OUR BEST DEAL</p>
            </div>
            <button class="bg-primary text-white px-8 py-3 rounded-lg uppercase hover:bg-primary-dark transition">
                SCROLL DOWN
            </button>
        </div>

        <!-- Featured Product -->
        <div class="relative h-96 mb-16">
            <img src="{{ asset('storage/images/featured-chair.png') }}" alt="Featured Product" class="w-full h-full object-contain">
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white p-4 rounded-lg">
                <img src="{{ asset('storage/images/EAC1020.png') }}" alt="Product 1" class="w-full aspect-square object-cover rounded">
            </div>
            <div class="bg-white p-4 rounded-lg">
                <img src="{{ asset('storage/images/EAC1021.png') }}" alt="Product 2" class="w-full aspect-square object-cover rounded">
            </div>
            <div class="bg-white p-4 rounded-lg">
                <img src="{{ asset('storage/images/EAC1022.png') }}" alt="Product 3" class="w-full aspect-square object-cover rounded">
            </div>
            <div class="bg-white p-4 rounded-lg">
                <img src="{{ asset('storage/images/EAC1023.png') }}" alt="Product 4" class="w-full aspect-square object-cover rounded">
            </div>
        </div>

        <!-- Second Row -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-6">
            <div class="bg-white p-4 rounded-lg">
                <img src="{{ asset('storage/images/EAC1024.png') }}" alt="Product 5" class="w-full aspect-square object-cover rounded">
            </div>
            <div class="bg-white p-4 rounded-lg">
                <img src="{{ asset('storage/images/EAC1025.png') }}" alt="Product 6" class="w-full aspect-square object-cover rounded">
            </div>
            <div class="bg-white p-4 rounded-lg">
                <img src="{{ asset('storage/images/EAC1026.png') }}" alt="Product 7" class="w-full aspect-square object-cover rounded">
            </div>
            <div class="bg-white p-4 rounded-lg">
                <img src="{{ asset('storage/images/EAC1027.png') }}" alt="Product 8" class="w-full aspect-square object-cover rounded">
            </div>
        </div>
    </div>
</section>

<!-- Get Closer Section -->
<section class="relative py-20 bg-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Left Side - Map -->
            <div class="relative h-[600px]">
                <h2 class="text-5xl font-bold text-white mb-8 uppercase tracking-wider">
                    GET CLOSER
                </h2>
                <p class="text-xl text-white/80 mb-4">WITH US</p>
                <div class="h-[400px] bg-neutral rounded-lg overflow-hidden">
                    <div id="map" class="w-full h-full">
                        <!-- Map will be loaded here -->
                    </div>
                </div>
            </div>

            <!-- Right Side - Contact Form -->
            <div>
                <h3 class="text-3xl font-bold text-white mb-8 uppercase">WE ON THE PLACE</h3>
                <form class="space-y-6">
                    <div>
                        <input type="text" name="name" placeholder="NAME" 
                               class="w-full bg-transparent border-2 border-primary/50 rounded-lg p-4 text-white">
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="EMAIL" 
                               class="w-full bg-transparent border-2 border-primary/50 rounded-lg p-4 text-white">
                    </div>
                    <div>
                        <textarea name="message" placeholder="MESSAGE" rows="6"
                                  class="w-full bg-transparent border-2 border-primary/50 rounded-lg p-4 text-white"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-primary text-white py-4 rounded-lg uppercase hover:bg-primary-dark transition">
                        SUBMIT
                    </button>
                </form>

                <!-- Social Media Section -->
                <div class="mt-12">
                    <h3 class="text-3xl font-bold text-white mb-6 uppercase">FOLLOW US ON</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white hover:text-primary transition">
                            <img src="{{ asset('storage/images/instagram.png') }}" alt="Instagram" class="w-12 h-12">
                        </a>
                        <a href="#" class="text-white hover:text-primary transition">
                            <img src="{{ asset('storage/images/linkedin.png') }}" alt="LinkedIn" class="w-12 h-12">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
