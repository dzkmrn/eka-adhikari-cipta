@extends('layouts.app')

@section('title', 'About Us - Eka Adhikari Cipta')
@section('description', 'Learn about Eka Adhikari Cipta - Our mission, vision, and the team behind our success')

@section('content')
<!-- Hero Section -->
<section class="relative h-96 flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('storage/images/ABOUT US BG.png') }}" alt="About Us Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/50"></div>
    </div>
    
    <div class="relative z-10 text-center text-white px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">About Us</h1>
        <p class="text-xl text-gray-200 max-w-3xl mx-auto">
            Discover the story behind Eka Adhikari Cipta and the people who make it all possible
        </p>
    </div>
</section>

<!-- Company Story Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Story</h2>
                <p class="text-lg text-gray-600 mb-6">
                    Founded with a vision to revolutionize the industry, Eka Adhikari Cipta has been at the forefront 
                    of innovation for over two decades. We started as a small team with big dreams and have grown into 
                    a global leader in our field.
                </p>
                <p class="text-lg text-gray-600 mb-6">
                    Our journey has been marked by continuous innovation, unwavering commitment to quality, and a 
                    deep understanding of our customers' needs. We believe in creating products that not only meet 
                    expectations but exceed them.
                </p>
                <p class="text-lg text-gray-600">
                    Today, we continue to push boundaries, embrace new technologies, and maintain our position as 
                    industry leaders while staying true to our core values of integrity, excellence, and customer satisfaction.
                </p>
            </div>
            <div class="relative">
                <img src="{{ asset('storage/images/WAREHOUSE.png') }}" alt="Our Facility" class="rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Mission -->
            <div class="text-center p-8 bg-white rounded-lg shadow-lg">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <img src="{{ asset('storage/images/VISION.png') }}" alt="Mission" class="w-8 h-8">
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Mission</h3>
                <p class="text-gray-600">
                    To deliver innovative, high-quality products and services that exceed customer expectations 
                    while maintaining the highest standards of integrity and excellence in everything we do.
                </p>
            </div>

            <!-- Vision -->
            <div class="text-center p-8 bg-white rounded-lg shadow-lg">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <img src="{{ asset('storage/images/INNO.png') }}" alt="Vision" class="w-8 h-8">
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Vision</h3>
                <p class="text-gray-600">
                    To be the global leader in our industry, recognized for innovation, quality, and customer 
                    satisfaction, while creating sustainable value for all our stakeholders.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Values</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                The principles that guide everything we do
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <img src="{{ asset('storage/images/COMMU.png') }}" alt="Integrity" class="w-8 h-8">
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Integrity</h3>
                <p class="text-gray-600">
                    We conduct business with honesty, transparency, and ethical practices in all our interactions.
                </p>
            </div>

            <div class="text-center p-6">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <img src="{{ asset('storage/images/CUSTOM.png') }}" alt="Customer Focus" class="w-8 h-8">
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Customer Focus</h3>
                <p class="text-gray-600">
                    Our customers are at the heart of everything we do. We listen, understand, and deliver solutions that matter.
                </p>
            </div>

            <div class="text-center p-6">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <img src="{{ asset('storage/images/MONI.png') }}" alt="Innovation" class="w-8 h-8">
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Innovation</h3>
                <p class="text-gray-600">
                    We embrace change, foster creativity, and continuously seek new ways to improve and innovate.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Meet Our Leadership Team</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                The experienced professionals who lead Eka Adhikari Cipta to success
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($teamMembers as $member)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-200">
                <div class="aspect-w-3 aspect-h-4">
                    <img src="{{ asset('storage/images/' . $member['image']) }}" alt="{{ $member['name'] }}" class="w-full h-64 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $member['name'] }}</h3>
                    <p class="text-orange-600 font-medium mb-4">{{ $member['position'] }}</p>
                    <p class="text-gray-600">
                        Leading with expertise and vision to drive our company forward.
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
            Ready to Work With Us?
        </h2>
        <p class="text-xl text-secondary mb-8 max-w-3xl mx-auto">
            Discover how our expertise and commitment to excellence can benefit your business
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-primary hover:bg-gray-100 px-8 py-3 rounded-lg font-semibold transition-colors duration-200">
                Get In Touch
            </a>
            <a href="{{ route('collection') }}" class="border-2 border-white text-white hover:bg-white hover:text-primary px-8 py-3 rounded-lg font-semibold transition-colors duration-200">
                View Our Products
            </a>
        </div>
    </div>
</section>
@endsection
