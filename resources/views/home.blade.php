@extends('layouts.app')

@section('title', 'Home - Eka Adhikari Cipta')
@section('description', 'Your Trusted For Rattan Quality - Eka Adhikari Cipta')

@push('styles')
    <style>
        .bg-image-home {
            background-image: url('{{ asset('images/HOME-BG.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .bg-image-about-us-lite {
            background-image: url('{{ asset('images/ABOUT-US.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .shadow-up {
            box-shadow: 0 -10px 20px rgba(0, 0, 0, 0.2); /* X | Y | blur | color */
        }

        .bg-img-custom {
            background-image: url('{{ asset('images/CUSTOM.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>

@endpush

@section('content')
    <!-- Warm Greeting Section -->
    <section class="relative min-h-screen flex items-center justify-center pt-20 bg-image-home bg-left md:bg-bottom">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 m-auto relative -translate-y-[70px]">
                <h1 class="text-5xl md:text-9xl font-bold text-primary mb-4 uppercase tracking-wider">
                    YOUR TRUSTED
                </h1>
                <p class="text-3xl md:text-7xl text-primary mt-4">
                    FOR RATTAN QUALITY
                </p>
            </div>
        </div>
    </section>

    <!-- Start the tour Section -->
    <section class="pt-20 bg-image-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Title -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-primary mb-8 uppercase tracking-wider">
                    START THE TOUR
                </h2>
            </div>

            <!-- Cards -->
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 text-center">
                <a href="{{ route('about') }}">
                    <div class="flex flex-col items-center">
                        <h2 class="text-2xl font-bold text-secondary mb-4">ABOUT US</h2>
                        <div class="w-full h-[250px] rounded-t-3xl overflow-hidden bg-[#545454]">
                            <img src="{{ asset('images/ABOUT-US.png') }}" alt="about us"
                                class="w-full h-full object-cover object-center">
                        </div>
                    </div>
                </a>

                <a href="{{ route('collection') }}">
                    <div class="flex flex-col items-center">
                        <h2 class="text-2xl font-bold text-secondary mb-4">COLLECTION</h2>
                        <div class="w-full h-[250px] rounded-t-3xl overflow-hidden bg-[#545454]">
                            <img src="{{ asset('images/COLLECTION.png') }}" alt="collection"
                                class="w-full h-full object-cover object-bottom">
                        </div>
                    </div>
                </a>

                <a href="{{ route('contact') }}">
                    <div class="flex flex-col items-center">
                        <h2 class="text-2xl font-bold text-secondary mb-4">CONTACT US</h2>
                        <div class="w-full h-[250px] rounded-t-3xl flex items-center justify-center bg-[#545454]">
                            <img src="{{ asset('images/LOGO.png') }}" alt="contact logo" class="h-32 w-auto" style="scale: 2.5;">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- How We Work Section --}}
    <section class="relative bg-image-light py-16 shadow-up">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1
                    class="inline-block bg-[#938272] text-white text-3xl md:text-6xl font-bold px-8 py-3 rounded-lg shadow-lg uppercase">
                    HOW WE WORK
                </h1>
            </div>
            <div class="grid gap-8 md:grid-cols-3">
                <div
                    class="bg-gradient-to-b from-[#938272] via-[#938172] to-[#6D6257] text-white rounded-2xl shadow-lgtext-justify">
                    <img src="{{ asset('images/INNO.png') }}" alt="" class="object-contain w-full">
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-gradient-to-b from-[#938272] via-[#938172] to-[#6D6257] text-white rounded-2xl shadow-lg text-justify">
                    <img src="{{ asset('images/MONI.png') }}" alt="" class="object-contain w-full">
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-gradient-to-b from-[#938272] via-[#938172] to-[#6D6257] text-white rounded-2xl shadow-lg text-justify">
                    <img src="{{ asset('images/COMMU.png') }}" alt="" class="object-contain w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- HOT PRODUCT SECTION -->
    <section class="relative bg-image-light py-20 my-16">
        <div class="w-full px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-6xl font-bold uppercase tracking-wide text-primary">
                    HOT PRODUCT
                </h2>
            </div>

            <!-- Slider -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach(['EAC1236.png', 'EAC1023.png', 'EAC1022.png', 'EAC1238.png', 'EAC1020.png', 'EAC1247.png', 'EAC1237.png', 'EAC204.png'] as $product)
                        <div class="swiper-slide">
                            <div class="bg-primary rounded-2xl p-6 flex justify-center items-center">
                                <img src="{{ asset('images/product/' . $product) }}" alt="{{ $product }}" class="rounded-xl max-h-64 object-contain">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-16 px-8 bg-img-custom">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">
            <div class="text-center mb-12 py-6">
                <h2 class="text-4xl md:text-6xl font-bold uppercase tracking-wide text-white mt-4">
                    CUSTOM
                </h2>
                <p class="text-lg text-white/90 mt-4">Every space has a story, and we believe that furniture should be part
                    of
                    that story. Through our Custom Order service, you can specify the design, size, materials, and finish to
                    suit your business or personal needs.
                </p>
            </div>
        </div>
    </section>
@endsection