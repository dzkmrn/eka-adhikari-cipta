@extends('layouts.app')

@section('title', 'Hot Product - Eka Adhikari Cipta')
@section('description', 'Discover our hot and trending rattan furniture products')

@section('content')
<!-- Hot Product Hero Section -->
<section class="relative bg-dark pt-32 pb-20">
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
</section>

<!-- Product Grid Section -->
<section class="py-20 bg-neutral">
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
</section>
@endsection
