@extends('layouts.app')

@section('title', 'Collection - Eka Adhikari Cipta')
@section('description', 'Our Collection - Woven Furniture by Eka Adhikari Cipta')

@push('styles')
    <style>
        .bg-img-collection {
            background-image: url('{{ asset('images/COLLECTION-BG.png') }}');
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
    <section class="relative min-h-screen flex items-center bg-img-collection justify-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 m-auto">
                <h1 class="text-5xl md:text-8xl font-bold text-white mb-4 uppercase tracking-wider">
                    OUR COLLECTION
                </h1>
                <p class="text-3xl md:text-7xl text-white mt-4">
                    WOVEN FURNITURE
                </p>
            </div>
        </div>
    </section>

    <!-- Product Grid Section -->
    <section class="py-16 bg-image-light object-cover bg-no-repeat bg-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($paginatedProducts as $product)
                    @php
                        $colors = ['#545454', '#404040', '#919191', '#545454'];
                        $bgColor = $colors[$loop->index % count($colors)];
                    @endphp

                    <div class="rounded-lg overflow-hidden">
                        <!-- Product Image -->
                        <div class="aspect-square relative flex items-center justify-center">
                            <div class="absolute inset-0"
                                style="background: linear-gradient(to top, {{ $bgColor }} 50%, transparent 50%);">
                            </div>
                            <img src="{{ asset('images/product/' . $product['image']) }}" alt="{{ $product['name'] }}"
                                class="h-full object-cover bg-center z-20">

                            <!-- Overlay 70% bawah -->
                        </div>

                        <!-- Product Details -->
                        <div class="p-4">
                            <!-- Product Code -->
                            <div class="text-xs text-gray-500 font-medium mb-1">{{ $product['code'] }}</div>

                            <!-- Product Name -->
                            <h3 class="text-sm font-bold text-gray-900 mb-3 leading-tight">{{ $product['name'] }}</h3>

                            <!-- Product Specifications -->
                            <div class="space-y-1 text-xs text-gray-600">
                                <p><span class="text-gray-500">Material:</span> {{ $product['material'] }}</p>
                                <p><span class="text-gray-500">Finishing:</span> {{ $product['finishing'] }}</p>
                                <p><span class="text-gray-500">Color:</span> {{ $product['color'] }}</p>
                                <p><span class="text-gray-500">Dimension:</span> {{ $product['dimension'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @if($totalPages > 1)
                <div class="mt-16 flex justify-center">
                    <div class="flex items-center space-x-4">
                        @for($i = 1; $i <= $totalPages; $i++)
                            <a href="{{ request()->fullUrlWithQuery(['page' => $i]) }}"
                                class="min-w-[40px] h-10 flex items-center justify-center text-sm font-semibold transition-colors duration-200
                                                                      {{ $i == $currentPage ? 'bg-[#938272] text-[#fdfdfd]' : 'bg-[#404040] text-[#fdfdfd] hover:bg-[#404040]/90 border border-gray-200' }}">
                                {{ $i }}
                            </a>
                        @endfor
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection