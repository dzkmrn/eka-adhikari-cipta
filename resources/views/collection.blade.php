@extends('layouts.app')

@section('title', 'Collection - Eka Adhikari Cipta')
@section('description', 'Our Collection - Woven Furniture by Eka Adhikari Cipta')

@section('content')
<!-- Hero Section -->
<section class="relative h-[60vh] flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ asset('storage/images/COLLECTION BG.png') }}');">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 text-center text-white px-4 sm:px-6 lg:px-8">
        <h1 class="text-5xl md:text-7xl font-bold mb-4 uppercase tracking-wider">OUR COLLECTION</h1>
        <h2 class="text-4xl md:text-6xl font-normal uppercase tracking-wider">WOVEN FURNITURE</h2>
    </div>
</section>

<!-- Product Grid Section -->
<section class="py-20 bg-neutral">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($paginatedProducts as $product)
                <div class="bg-gray-800 rounded-lg overflow-hidden">
                    <div class="aspect-w-1 aspect-h-1">
                        <img src="{{ asset('storage/images/' . $product['image']) }}" alt="{{ $product['name'] }}" class="w-full h-64 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-white mb-2">{{ $product['code'] }}</h3>
                        <h4 class="text-sm font-semibold text-white mb-3">{{ $product['name'] }}</h4>
                        <div class="space-y-1 text-xs text-gray-300">
                            <p><span class="font-medium">Material:</span> {{ $product['material'] }}</p>
                            <p><span class="font-medium">Finishing:</span> {{ $product['finishing'] }}</p>
                            <p><span class="font-medium">Color:</span> {{ $product['color'] }}</p>
                            <p><span class="font-medium">Dimension:</span> {{ $product['dimension'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        @if($totalPages > 1)
            <div class="mt-12 flex justify-center">
                <div class="flex space-x-2">
                    @for($i = 1; $i <= $totalPages; $i++)
                        <a href="{{ request()->fullUrlWithQuery(['page' => $i]) }}" 
                           class="w-10 h-10 flex items-center justify-center text-sm font-medium rounded {{ $i == $currentPage ? 'bg-primary text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                            {{ $i }}
                        </a>
                    @endfor
                </div>
            </div>
        @endif
    </div>
</section>
@endsection