@extends('layouts.app')

@section('title', 'Hot Product - Eka Adhikari Cipta')
@section('description', 'Discover our hot and trending rattan furniture products')

@section('content')
<!-- Hot Product Hero Section -->
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
                <img src="{{ asset('storage/images/featured-chair.png') }}" alt="Featured Product"
                    class="w-full h-full object-contain">
            </div>

            <!-- Product Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white p-4 rounded-lg">
                    <img src="{{ asset('storage/images/EAC1020.png') }}" alt="Product 1"
                        class="w-full aspect-square object-cover rounded">
                </div>
                <div class="bg-white p-4 rounded-lg">
                    <img src="{{ asset('storage/images/EAC1021.png') }}" alt="Product 2"
                        class="w-full aspect-square object-cover rounded">
                </div>
                <div class="bg-white p-4 rounded-lg">
                    <img src="{{ asset('storage/images/EAC1022.png') }}" alt="Product 3"
                        class="w-full aspect-square object-cover rounded">
                </div>
                <div class="bg-white p-4 rounded-lg">
                    <img src="{{ asset('storage/images/EAC1023.png') }}" alt="Product 4"
                        class="w-full aspect-square object-cover rounded">
                </div>
            </div>

            <!-- Second Row -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-6">
                <div class="bg-white p-4 rounded-lg">
                    <img src="{{ asset('storage/images/EAC1024.png') }}" alt="Product 5"
                        class="w-full aspect-square object-cover rounded">
                </div>
                <div class="bg-white p-4 rounded-lg">
                    <img src="{{ asset('storage/images/EAC1025.png') }}" alt="Product 6"
                        class="w-full aspect-square object-cover rounded">
                </div>
                <div class="bg-white p-4 rounded-lg">
                    <img src="{{ asset('storage/images/EAC1026.png') }}" alt="Product 7"
                        class="w-full aspect-square object-cover rounded">
                </div>
                <div class="bg-white p-4 rounded-lg">
                    <img src="{{ asset('storage/images/EAC1027.png') }}" alt="Product 8"
                        class="w-full aspect-square object-cover rounded">
                </div>
            </div>
        </div>
    </section>

{{-- <section class="relative bg-dark pt-32 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-4 uppercase tracking-wider">
                HOT PRODUCT
            </h1>
            <p class="text-xl text-white/80">
                Our Best Collection
            </p>
        </div>
    </div>
</section> --}}

<!-- Product Grid Section -->
{{-- <section class="py-20 bg-neutral">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Products will be dynamically loaded here -->
            @foreach(['EAC1020.png', 'EAC1021.png', 'EAC1022.png', 'EAC1023.png', 
                     'EAC1024.png', 'EAC1025.png', 'EAC1026.png', 'EAC1027.png'] as $product)
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden mb-4">
                        <img src="{{ asset('storage/images/' . $product) }}" 
                             alt="Product Image" 
                             class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-lg font-semibold text-primary mb-2">
                        {{ str_replace(['.png', 'EAC'], ['', 'Product '], $product) }}
                    </h3>
                    <p class="text-sm text-gray-600">
                        Premium quality rattan furniture
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section> --}}
@endsection
