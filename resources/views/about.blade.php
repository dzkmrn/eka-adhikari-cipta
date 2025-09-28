@extends('layouts.app')

@section('title', 'About Us - Eka Adhikari Cipta')
@section('description', 'Learn about Eka Adhikari Cipta - Our mission, vision, and the team behind our success')

@push('styles')
    <style>
        .bg-img-about-us {
            background-image: url('{{ asset('images/ABOUT-US-BG.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-top justify-center bg-img-about-us pt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
            <div class="text-center mb-12 m-auto">
                <h1 class="text-5xl md:text-9xl font-home text-primary mb-4 uppercase tracking-wider">
                    WARM GREETING
                </h1>
                <p class="text-3xl md:text-7xl text-primary mt-4">
                    FROM EKA ADHIKARI CIPTA
                </p>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 bg-image-light object-cover bg-center bg-no-repeat">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

                <!-- Left: Logo -->
                <div class="flex flex-col items-center md:items-start text-center md:text-left">
                    <img src="{{ asset('images/LOGO-FULL.png') }}" alt="Logo" class="w-100 h-auto object-contain mb-4">
                </div>

                <!-- Right: Text -->
                <div>
                    <h3 class="text-4xl md:text-6xl font-home text-primary mb-6">ABOUT US</h3>
                    <p class="text-primary leading-relaxed">
                        Eka adhikari cipta is your trusted source for premium rattan furniture.
                        We bring you high-quality and durable designs that elevate any space.
                        With a focus on craftsmanship and customer satisfaction, we deliver
                        stylish yet functional pieces for homes and businesses worldwide.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-16 px-4 bg-image-light object-cover bg-center bg-no-repeat">
        <div class="max-w-7xl mx-auto space-y-32" data-aos="fade-up">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-0 items-center">
                <div class="relative px-4 lg:px-0">
                    <img src="{{ asset('images/WAREHOUSE.png') }}" alt="Rattan Furniture Workshop"
                        class="w-full object-contain bg-center bg-no-repeat">
                </div>
                <div class="relative px-4 lg:px-0">
                    <div
                        class="relative lg:absolute bg-primary text-white p-8 shadow-lg md:w-[150%] md:-ml-60 top-0 md:top-1/2 md:-translate-y-[220px] -translate-y-[250px] z-10">
                        <h3 class="text-xl font-home leading-tight text-justify">
                            EKA ADHIKARI CIPTA AIM TO INTRODUCE LOCAL RATTAN FURNITURE TO THE INTERNATIONAL MARKET, OFFERING
                            INNOVATIVE DESIGNS AND THE HIGHEST QUALITY.
                        </h3>
                    </div>
                    <div class="mt-4 lg:mt-0 pt-4 -translate-y-[250px] md:translate-y-0">
                        <p class="text-primary leading-relaxed text-justify">
                            Eka adhikari cipta aiming to introduce the finest local rattan furniture to the global market,
                            setting new standards of design and excellence. We focus on innovation and the highest quality,
                            ensuring that each piece embodies the unique beauty of rattan while meeting the evolving needs
                            of our international clientele.
                        </p>
                    </div>
                </div>
            </div>
            <div class="relative px-4 md:px-0 -translate-y-[200px] md:translate-y-0">
                <div class="relative">
                    <img src="{{ asset('images/VISION.png') }}" alt="Rattan Manufacturing Process"
                        class="w-full h-96 object-cover rounded-lg shadow-lg brightness-50">
                    <div class="absolute inset-0 flex items-center justify-center rounded-lg">
                        <h2
                            class="text-4xl md:text-5xl lg:text-6xl font-home text-white text-center tracking-wider px-6">
                            TO PROVIDE THE BEST EXPERIENCE
                        </h2>
                    </div>
                </div>

                <div class="relative flex justify-center mt-[-5rem] z-10">
                    <div class="max-w-2xl bg-[#5D4037]/90 backdrop-blur-sm text-white p-8 rounded-lg shadow-2xl">
                        <p class="leading-relaxed text-center">
                            We take pride in maintaining rigorous quality control throughout every stage of production. Our
                            continuous drive for innovation and improvement ensures that we consistently meet the
                            expectations of our customers, while our dedicated customer service team is always on hand to
                            provide tailored support, ensuring an exceptional experience from start to finish.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-6 py-16 px-4 bg-image-dark object-cover bg-center bg-no-repeat">
        <div class="max-w-7xl mx-auto space-y-8" data-aos="fade-up">
            <div>
                <h1 class="text-center text-4xl md:text-6xl font-home text-white mb-6">INTRODUCING OUR TEAM</h1>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 mb-0 items-top">
                <div class="bg-[#E6E6E6] ms-0 md:ms-4">
                    <img src="{{ asset('images/person/CEO.png') }}" alt="CEO">
                </div>
                <div class="flex flex-col">
                    <div class="relative h-fit p-8 bg-[#ECECEC]">
                        <h1 class="text-[#404040] text-3xl md:text-6xl font-home">ADEN P. MUNTAZ</h1>
                        <p class="text-[#404040] text-2xl md:text-3xl mt-2">CEO of Eka Adhikari Cipta</p>
                    </div>
                    <div class="relative p-8 bg-[#DDDDDD] h-full">
                        <p class="text-[#404040] text-2xl md:text-3xl text-justify">Aden Paiq Muntaz was born with honor in
                            Tegal, Indonesia. Mr. Muntaz possesses
                            dynamic leadership skills with professional
                            experience in Human Resources
                            Management (HRM) and Marketing. His
                            background in HRM has strengthened his
                            ability to build effectiveteams and foster a
                            productive work culture, while his
                            marketing expertise equips him to identify
                            global trends, design marketing strategies,
                            and develop a strong international network.</p>
                    </div>
                </div>
                <div class="bg-[#E6E6E6] flex flex-col">
                    <img src="{{ asset('images/person/CFO.png') }}" alt="CFO" class="w-full md:w-auto">
                    <div class="h-fit md:h-full p-8 bg-[#ECECEC] w-full">
                        <h1 class="text-[#404040] text-3xl md:text-6xl font-home">ABDUL MALIK K. A.</h1>
                        <p class="text-[#404040] text-2xl md:text-3xl mt-2">Chief Finance Officer</p>
                    </div>
                    <div class="px-8 pt-8 pb-24 bg-[#DDDDDD] h-full">
                        <p class="text-[#404040] text-2xl md:text-3xl text-justify">With his experience in finance, Abdul
                            Malik
                            has developed expertise in financial
                            management, budgeting, and corporate cash
                            flow management. Accuracy and integrity are
                            his guiding principles in every financial
                            decision, making him an important pillar in
                            maintaining the stability and growth of the
                            company.</p>
                    </div>
                </div>

                <!-- COO -->
                <div class="bg-[#E6E6E6] flex flex-col">
                    <img src="{{ asset('images/person/COO.png') }}" alt="COO" class="w-full md:w-auto">
                    <div class="h-fit p-8 bg-[#ECECEC] w-full">
                        <h1 class="text-[#404040] text-3xl md:text-6xl font-home">M. ZACKY SULTHONI</h1>
                        <p class="text-[#404040] text-2xl md:text-3xl mt-2">Chief Operational Officer</p>
                    </div>
                    <div class="px-8 pt-8 pb-24 bg-[#DDDDDD] h-full">
                        <p class="text-[#404040] text-2xl md:text-3xl text-justify">M. Zacky Sulthoni has experience and
                            expertise in managing production processes,
                            ensuring efficiency, and maintaining product
                            quality in accordance with international
                            standards. His leadership and consistency in
                            organizing workflows make him a key driving
                            force in the smooth operation of the company.</p>
                    </div>
                </div>
                <div class="bg-[#E6E6E6] flex flex-col">
                    <img src="{{ asset('images/person/CMO.png') }}" alt="CMO" class="w-full md:w-auto">
                    <div class="h-fit md:h-full p-8 bg-[#ECECEC] w-full">
                        <h1 class="text-[#404040] text-3xl md:text-6xl font-home">IRGI AQIL D. M.</h1>
                        <p class="text-[#404040] text-2xl md:text-3xl mt-2">Chief Marketing Officer</p>
                    </div>
                    <div class="px-8 pt-8 pb-24 bg-[#DDDDDD] h-full">
                        <p class="text-[#404040] text-2xl md:text-3xl text-justify">With experience in marketing and
                            customer
                            management, Irgi has expertise in building
                            long-term relationships with clients and
                            developing effective marketing strategies. His
                            ability to understand customer needs makes
                            him a leader in expanding networks and
                            maintaining customer loyalty.</p>
                    </div>
                </div>

                <!-- CIO -->
                <div class="bg-[#E6E6E6] flex flex-col">
                    <img src="{{ asset('images/person/CIO.png') }}" alt="CIO" class="w-full md:w-auto">
                    <div class="h-fit p-8 bg-[#ECECEC] w-full">
                        <h1 class="text-[#404040] text-3xl md:text-6xl font-home">ABDUL AFIF</h1>
                        <p class="text-[#404040] text-2xl md:text-3xl mt-2">Chief Information Officer</p>
                    </div>
                    <div class="px-8 pt-8 pb-24 bg-[#DDDDDD] h-full">
                        <p class="text-[#404040] text-2xl md:text-3xl text-justify">With his strong technological expertise,
                            Abdul Afif focuses on developing information
                            systems and implementing digital solutions
                            that support operational efficiency within the
                            company. His dedication to utilizing the latest
                            technology ensures that the company remains
                            adaptive and competitive in the digital age.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection