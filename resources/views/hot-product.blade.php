@extends('layouts.app')

@section('title', 'Hot Product - Eka Adhikari Cipta')
@section('description', 'Discover our hot and trending rattan furniture products')

@push('styles')
    <style>
        .bg-img-limited-off {
            background-image: url('{{ asset('images/TRENT-ARNOLD-BG.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .text-nav {
            color: white !important;
        }
    </style>
@endpush

@section('content')
    <!-- Hot Product Hero Section -->
    <!-- Limited Offering Section -->
    {{-- <section class="min-h-screen relative py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-12 bg-img-limited-off">
                <button class="bg-primary text-white px-8 py-3 rounded-lg uppercase hover:bg-primary-dark transition">
                    SCROLL DOWN
                </button>
            </div>
        </div>
    </section> --}}

    <section class="relative min-h-screen flex items-center justify-center pt-20 bg-img-limited-off md:bg-center bg-left" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 m-auto relative -translate-y-[70px]">
                <button id="scrollBtn"
                    class="bg-[#404040] text-white text-3xl p-8 rounded-lg uppercase hover:bg-white hover:text-primary transition translate-y-[190%] md:-translate-x-[110%] md:translate-y-[190%]">
                    SCROLL DOWN
                </button>
            </div>
        </div>
    </section>

    <section
        class="relative min-h-screen py-16 px-4 sm:px-6 lg:px-16 bg-image-dark bg-center bg-cover object-cover bg-no-repeat"
        style="width: 100%;">
        <!-- Product Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-8" id="product" data-aos="fade-up">
            @foreach (['EAC1236.png', 'EAC1023.png', 'EAC1022.png', 'EAC1238.png', 'EAC1020.png', 'EAC1247.png', 'EAC1237.png', 'EAC204.png'] as $item)
                <div class="bg-gradient-to-b from-[#AFAFAF] via-[#C6C6C6] to-[#E6E6E6] p-4 rounded-xl">
                    <img src="{{ asset('images/product/' . $item) }}" alt="Product {{ $loop->index + 1 }}"
                        class="w-full aspect-square object-cover rounded-xl">
                </div>
            @endforeach
            
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.getElementById('scrollBtn').addEventListener('click', function () {
            document.getElementById('product').scrollIntoView({
                behavior: 'smooth'
            });
        });
    </script>
@endpush