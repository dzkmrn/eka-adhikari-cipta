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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
            <div class="text-center mb-12 m-auto">
                <h1 class="text-5xl md:text-8xl font-home text-white mb-4 uppercase tracking-wider">
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
            {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
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
                            class="h-full object-contain bg-center z-20">

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
                            @if ($product['dimension'] && !is_array($product['dimension']))
                            <p><span class="text-gray-500">Material:</span> {{ $product['material'] }}</p>
                            <p><span class="text-gray-500">Finishing:</span> {{ $product['finishing'] }}</p>
                            <p><span class="text-gray-500">Color:</span> {{ $product['color'] }}</p>
                            <p><span class="text-gray-500">Dimension:</span> {{ $product['dimension'] }}</p>
                            @endif
                            @if ($product['dimension'] && is_array($product['dimension']))
                            <p><span class="text-gray-500">Material:</span> {{ $product['material'] }}</p>
                            <p><span class="text-gray-500">Finishing:</span> {{ $product['finishing'] }}</p>
                            <p><span class="text-gray-500">Color:</span> {{ $product['color'] }}</p>
                            @foreach ($product['dimension'] as $key => $value)
                            <p><span class="text-gray-500">{{ $key }}:</span> {{ $value }}</p>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div> --}}

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($paginatedProducts as $product)
                    @php
                        $colors = ['#545454', '#404040', '#919191', '#545454'];
                        $bgColor = $colors[$loop->index % count($colors)];
                    @endphp

                    <div class="rounded-lg overflow-hidden shadow hover:shadow-lg transition"
                        onclick="openModal('{{ $product['code'] }}')">
                        <!-- Product Image -->
                        <div class="aspect-square relative flex items-center justify-center cursor-pointer">
                            <div class="absolute inset-0"
                                style="background: linear-gradient(to top, {{ $bgColor }} 50%, transparent 50%);">
                            </div>
                            <img src="{{ asset('images/product/' . $product['image']) }}" alt="{{ $product['name'] }}"
                                class="h-full object-contain bg-center z-20 transition-transform duration-300 hover:scale-105">
                        </div>

                        <!-- Product Details -->
                        <div class="p-4">
                            <div class="text-xs text-gray-500 font-medium mb-1">{{ $product['code'] }}</div>
                            <h3 class="text-sm font-bold text-gray-900 mb-3 leading-tight">{{ $product['name'] }}</h3>

                            <div class="space-y-1 text-xs text-gray-600">
                                @if ($product['dimension'] && !is_array($product['dimension']))
                                    <p><span class="text-gray-500">Material:</span> {{ $product['material'] }}</p>
                                    <p><span class="text-gray-500">Finishing:</span> {{ $product['finishing'] }}</p>
                                    <p><span class="text-gray-500">Color:</span> {{ $product['color'] }}</p>
                                    <p><span class="text-gray-500">Dimension:</span> {{ $product['dimension'] }}</p>
                                @endif
                                @if ($product['dimension'] && is_array($product['dimension']))
                                    <p><span class="text-gray-500">Material:</span> {{ $product['material'] }}</p>
                                    <p><span class="text-gray-500">Finishing:</span> {{ $product['finishing'] }}</p>
                                    <p><span class="text-gray-500">Color:</span> {{ $product['color'] }}</p>
                                    @foreach ($product['dimension'] as $key => $value)
                                        <p><span class="text-gray-500">{{ $key }}:</span> {{ $value }}</p>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div id="modal-{{ $product['code'] }}"
                        class="fixed inset-0 z-100 hidden items-center justify-center bg-black/50 backdrop-blur-sm">
                        <div class="bg-white rounded-lg max-w-lg w-full shadow-lg overflow-hidden relative">
                            <!-- Header -->
                            <div class="flex justify-between items-center p-4 border-b">
                                <h2 class="text-lg font-semibold text-gray-800">{{ $product['name'] }}</h2>
                                <button onclick="closeModal('{{ $product['code'] }}')"
                                    class="text-gray-500 hover:text-gray-700 text-2xl leading-none">&times;</button>
                            </div>

                            <!-- Body -->
                            <div class="p-6">
                                <img src="{{ asset('images/product/' . $product['image']) }}" alt="{{ $product['name'] }}"
                                    class="w-full h-64 object-contain mb-4">

                                <div class="text-sm text-gray-700 space-y-2">
                                    <p><span class="font-medium text-gray-600">Code:</span> {{ $product['code'] }}</p>
                                    <p><span class="font-medium text-gray-600">Material:</span> {{ $product['material'] }}</p>
                                    <p><span class="font-medium text-gray-600">Finishing:</span> {{ $product['finishing'] }}</p>
                                    <p><span class="font-medium text-gray-600">Color:</span> {{ $product['color'] }}</p>

                                    @if ($product['dimension'] && !is_array($product['dimension']))
                                        <p><span class="font-medium text-gray-600">Dimension:</span> {{ $product['dimension'] }}</p>
                                    @endif

                                    @if ($product['dimension'] && is_array($product['dimension']))
                                        <div>
                                            <span class="font-medium text-gray-600">Dimension:</span>
                                            <ul class="list-disc ml-5">
                                                @foreach ($product['dimension'] as $key => $value)
                                                    <li>{{ $key }}: {{ $value }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <!-- Footer -->
                            <div class="flex justify-end items-center px-6 py-4 space-x-3">
                                <!-- Tombol Close -->
                                <button onclick="closeModal('{{ $product['code'] }}')"
                                    class="flex items-center justify-center px-4 py-2 bg-gray-700 text-white text-sm rounded-md hover:bg-gray-800 transition-colors duration-200 w-32">
                                    Close
                                </button>

                                <!-- Tombol WhatsApp -->
                                <a href="https://wa.me/6282215231118" target="_blank"
                                    class="flex items-center justify-center px-4 py-2 bg-green-600 text-white text-sm rounded-md hover:bg-green-700 transition-colors duration-200 w-32">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 32 32"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M26.576 5.363c-2.69-2.69-6.406-4.354-10.511-4.354-8.209 0-14.865 6.655-14.865 14.865 0 2.732 0.737 5.291 2.022 7.491l-0.038-0.070-2.109 7.702 7.879-2.067c2.051 1.139 4.498 1.809 7.102 1.809h0.006c8.209-0.003 14.862-6.659 14.862-14.868 0-4.103-1.662-7.817-4.349-10.507l0 0zM16.062 28.228h-0.005c-0 0-0.001 0-0.001 0-2.319 0-4.489-0.64-6.342-1.753l0.056 0.031-0.451-0.267-4.675 1.227 1.247-4.559-0.294-0.467c-1.185-1.862-1.889-4.131-1.889-6.565 0-6.822 5.531-12.353 12.353-12.353s12.353 5.531 12.353 12.353c0 6.822-5.53 12.353-12.353 12.353h-0zM22.838 18.977c-0.371-0.186-2.197-1.083-2.537-1.208-0.341-0.124-0.589-0.185-0.837 0.187-0.246 0.371-0.958 1.207-1.175 1.455-0.216 0.249-0.434 0.279-0.805 0.094-1.15-0.466-2.138-1.087-2.997-1.852l0.010 0.009c-0.799-0.74-1.484-1.587-2.037-2.521l-0.028-0.052c-0.216-0.371-0.023-0.572 0.162-0.757 0.167-0.166 0.372-0.434 0.557-0.65 0.146-0.179 0.271-0.384 0.366-0.604l0.006-0.017c0.043-0.087 0.068-0.188 0.068-0.296 0-0.131-0.037-0.253-0.101-0.357l0.002 0.003c-0.094-0.186-0.836-2.014-1.145-2.758-0.302-0.724-0.609-0.625-0.836-0.637-0.216-0.010-0.464-0.012-0.712-0.012-0.395 0.010-0.746 0.188-0.988 0.463l-0.001 0.002c-0.802 0.761-1.3 1.834-1.3 3.023 0 0.026 0 0.053 0.001 0.079l-0-0.004c0.131 1.467 0.681 2.784 1.527 3.857l-0.012-0.015c1.604 2.379 3.742 4.282 6.251 5.564l0.094 0.043c0.548 0.248 1.25 0.513 1.968 0.74l0.149 0.041c0.442 0.14 0.951 0.221 1.479 0.221 0.303 0 0.601-0.027 0.889-0.078l-0.031 0.004c1.069-0.223 1.956-0.868 2.497-1.749l0.009-0.017c0.165-0.366 0.261-0.793 0.261-1.242 0-0.185-0.016-0.366-0.047-0.542l0.003 0.019c-0.092-0.155-0.34-0.247-0.712-0.434z" />
                                    </svg>
                                    WhatsApp
                                </a>
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

@push('scripts')
    <script>
        // Open modal
        function openModal(id) {
            document.getElementById('modal-' + id).classList.remove('hidden');
            document.getElementById('modal-' + id).classList.add('flex');
        }

        // Close modal
        function closeModal(id) {
            const modal = document.getElementById('modal-' + id);
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        }

        // Close modal when clicking outside the content
        document.addEventListener('click', function (e) {
            if (e.target.classList.contains('bg-black/50')) {
                e.target.classList.remove('flex');
                e.target.classList.add('hidden');
            }
        });
    </script>
@endpush