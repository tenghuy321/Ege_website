@extends('layouts.master')
@section('css')
    <style>
        .swiper-products .swiper {
            margin-inline: initial;
            padding-top: 4rem;
            padding-bottom: 2rem;
        }

        .swiper-products .swiper-pagination {
            position: absolute !important;
            bottom: 0 !important;
            width: 100%;
            text-align: center;
        }

        .swiper-products .swiper-pagination .swiper-pagination-bullet {
            background-color: #a4ca62;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            margin: 0 5px;
        }

        .swiper-products .swiper-pagination .swiper-pagination-bullet-active {
            width: 16px;
            height: 6px;
            border-radius: 10px;
            background-color: #a4ca62;
        }
    </style>
@endsection
@section('content')
    <x-home />
    <x-scroll-top-button />

    {{-- products --}}
    <div id="product" class="max-w-7xl mx-auto">
        <hr class="h-4 bg-[#A4CA62] border-none" />
        <div class="bg-[#4B5D6C] px-4 md:px-20 py-5">
            <div class="px-5" data-aos='fade-right' data-aos-duration='1000'>
                <h1 class="text-[30px] md:text-[40px] lg:text-[50px] text-[#A4CA62] font-[700]">Our Products</h1>
                <p class="text-[14px] md:text-[16px] text-[#ffffff]">We supply the following <br />
                    products </p>
            </div>
            <div class="hidden sm:grid sm:grid-cols-2 lg:grid-cols-4 gap-4 pt-5 pb-20">

                @foreach ($product_des as $index => $items)
                    <div class="relative group z-[100]" data-aos='fade-up' data-aos-duration='1000'>
                        <img src="{{ asset($items->image) }}" alt="Product Image" class="w-full aspect-[4/3] object-cover" />
                        <div class="flex items-center justify-center bg-[#A4CA62] py-4 text-center text-[20px] font-[600] text-[#4B5D6C] h-[80px]">
                            {{ $items->product_name }}
                        </div>
                        <div
                            class="absolute bottom-[20px] left-1/2 transform w-[95%] h-[240px] overflow-y-auto p-4 -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity bg-[#D9ECEE] text-[#415464] text-sm rounded duration-300 ease-in-out">
                            <div class="flex flex-col space-y-2 text-[10px] leading-1">
                                @if (!empty($items->key_specifications))
                                    <p class="text-[11px] font-[600]">Key Specifications: </p>
                                    @foreach (json_decode($items->key_specifications, true) as $key_specifications)
                                        @if (is_array($key_specifications) &&
                                                isset($key_specifications['title'], $key_specifications['body']) &&
                                                !empty($key_specifications['title']) &&
                                                !empty($key_specifications['body']))
                                            <ul class="max-w-md list-disc list-inside ml-2">
                                                <li>
                                                    <span class="font-[600]">{{ $key_specifications['title'] }} :</span>
                                                    {{ $key_specifications['body'] }}
                                                </li>
                                            </ul>
                                        @elseif (isset($key_specifications['body']) && empty($key_specifications['title']))
                                            <!-- If there is no title, just display the body -->
                                            <ul class="max-w-md list-disc list-inside ml-2">
                                                <li>{{ $key_specifications['body'] }}</li>
                                            </ul>
                                        @endif
                                    @endforeach
                                @endif
                                @if (!empty($items->benefits))
                                    <p class="text-[11px] font-[600]">Benefits: </p>
                                    @foreach (json_decode($items->benefits, true) as $benefits)
                                        @if (is_array($benefits) &&
                                                isset($benefits['title'], $benefits['body']) &&
                                                !empty($benefits['title']) &&
                                                !empty($benefits['body']))
                                            <ul class="max-w-md list-disc list-inside ml-2">
                                                <li>
                                                    <span class="font-[600]">{{ $benefits['title'] }} :</span>
                                                    {{ $benefits['body'] }}
                                                </li>
                                            </ul>
                                        @elseif (isset($benefits['body']) && empty($benefits['title']))
                                            <!-- If there is no title, just display the body -->
                                            <ul class="max-w-md list-disc list-inside ml-2">
                                                <li>{{ $benefits['body'] }}</li>
                                            </ul>
                                        @endif
                                    @endforeach
                                @endif

                                @if (!empty($items->use_cases))
                                    <p class="text-[11px] font-[600]">Use Case: </p>
                                    @foreach (json_decode($items->use_cases, true) as $use_cases)
                                        @if (is_array($use_cases) &&
                                                isset($use_cases['title'], $use_cases['body']) &&
                                                !empty($use_cases['title']) &&
                                                !empty($use_cases['body']))
                                            <ul class="max-w-md list-disc list-inside ml-2">
                                                <li>
                                                    <span class="font-[600]">{{ $use_cases['title'] }} :</span>
                                                    {{ $use_cases['body'] }}
                                                </li>
                                            </ul>
                                        @elseif (isset($use_cases['body']) && empty($use_cases['title']))
                                            <!-- If there is no title, just display the body -->
                                            <ul class="max-w-md list-disc list-inside ml-2">
                                                <li>{{ $use_cases['body'] }}</li>
                                            </ul>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="sm:hidden swiper-products relative">
                <div class="swiper productsSwiper" style="width: 100%; height: auto; margin: auto;">
                    <div class="swiper-wrapper">

                    @foreach ($product_des as $index => $items)
                        <div class="swiper-slide relative group z-[300]">
                            <img src={{ asset($items->image) }} alt=""
                                class="w-full aspect-[4/3] object-cover object-center" />
                            <div class="flex items-center justify-center bg-[#A4CA62] py-4 text-center text-[16px] font-[600] text-[#4B5D6C] h-[80px]">
                                {{ $items->product_name }}
                            </div>
                            <div
                                class="absolute bottom-[30%] left-1/2 transform w-[95%] h-[250px] overflow-y-auto p-2 -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity bg-[#D9ECEE] text-[#415464] text-sm rounded duration-300 ease-in-out z-50">
                                <div class="flex flex-col space-y-2 text-[10px] leading-1">
                                    @if (!empty($items->key_specifications))
                                        <p class="font-[600]">Key Specifications: </p>
                                        @foreach (json_decode($items->key_specifications, true) as $key_specifications)
                                            @if (is_array($key_specifications) &&
                                                    isset($key_specifications['title'], $key_specifications['body']) &&
                                                    !empty($key_specifications['title']) &&
                                                    !empty($key_specifications['body']))
                                                <ul class="max-w-md list-disc list-inside ml-2">
                                                    <li>
                                                        <span class="font-[600]">{{ $key_specifications['title'] }} :</span>
                                                        {{ $key_specifications['body'] }}
                                                    </li>
                                                </ul>
                                            @elseif (isset($key_specifications['body']) && empty($key_specifications['title']))
                                                <!-- If there is no title, just display the body -->
                                                <ul class="max-w-md list-disc list-inside ml-2">
                                                    <li>{{ $key_specifications['body'] }}</li>
                                                </ul>
                                            @endif
                                        @endforeach
                                    @endif
                                    @if (!empty($items->benefits))
                                        <p class="font-[600]">Benefits: </p>
                                        @foreach (json_decode($items->benefits, true) as $benefits)
                                            @if (is_array($benefits) &&
                                                    isset($benefits['title'], $benefits['body']) &&
                                                    !empty($benefits['title']) &&
                                                    !empty($benefits['body']))
                                                <ul class="max-w-md list-disc list-inside ml-2">
                                                    <li>
                                                        <span class="font-[600]">{{ $benefits['title'] }} :</span>
                                                        {{ $benefits['body'] }}
                                                    </li>
                                                </ul>
                                            @elseif (isset($benefits['body']) && empty($benefits['title']))
                                                <!-- If there is no title, just display the body -->
                                                <ul class="max-w-md list-disc list-inside ml-2">
                                                    <li>{{ $benefits['body'] }}</li>
                                                </ul>
                                            @endif
                                        @endforeach
                                    @endif

                                    @if (!empty($items->use_cases))
                                        <p class="font-[600]">Use Case: </p>
                                        @foreach (json_decode($items->use_cases, true) as $use_cases)
                                            @if (is_array($use_cases) &&
                                                    isset($use_cases['title'], $use_cases['body']) &&
                                                    !empty($use_cases['title']) &&
                                                    !empty($use_cases['body']))
                                                <ul class="max-w-md list-disc list-inside ml-2">
                                                    <li>
                                                        <span class="font-[600]">{{ $use_cases['title'] }} :</span>
                                                        {{ $use_cases['body'] }}
                                                    </li>
                                                </ul>
                                            @elseif (isset($use_cases['body']) && empty($use_cases['title']))
                                                <!-- If there is no title, just display the body -->
                                                <ul class="max-w-md list-disc list-inside ml-2">
                                                    <li>{{ $use_cases['body'] }}</li>
                                                </ul>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- 6 reason to choose us --}}
    <div id="reason" class="w-full relative my-10 bg-cover bg-center"
        style="background-image: url('{{ asset('assets/images/products/reason-bg-1.png') }}')">
        <div class="bg-[#2A4352]/90">
            <div data-aos='fade-right' data-aos-duration='1000'
                class="w-full lg:w-[80%] xl:w-2/3 mr-auto p-4 md:px-24 py-6 text-start">
                <h1 class="text-[25px] md:text-[40px] lg:text-[50px] text-[#A4CA62] font-[700]">6 Reasons to choose us</h1>
                <p class="text-[14px] md:text-[16px] text-[#ffffff]">Why We&#39;re the Right Partner for Your Success</p>
            </div>
        </div>
        {{-- laptop --}}
        <div class="hidden md:block overflow-hidden">
            <div class="bg-[#415464]/90">
                <div class="w-full lg:w-[90%] xl:w-[80%] mr-auto px-10 lg:px-20 py-6 flex items-center space-x-2 sm:space-x-4 text-start"
                    data-aos='fade-right' data-aos-duration='1200'>
                    <h1
                        class="text-[80px] sm:text-[100px] md:text-[150px] text-[#A4CA62] font-[700] leading-none tracking-tighter">
                        01</h1>
                    <hr class="h-[6rem] md:h-[9rem] w-1 md:w-[6px] bg-[#ffffff]" />
                    <div class="text-[#ffffff] text-[10px] sm:text-[12px] md:text-[13px] xl:text-[16px]">
                        <h1 class="text-[16px] md:text-[25px] xl:text-[40px] font-[600]">High Quality</h1>
                        <p>We adhere to French standards, offering products with long-term warranties and full efﬁciency,
                            guaranteeing the utmost quality and durability.</p>
                    </div>
                </div>
            </div>
            <div class="bg-[#2A4352]/90">
                <div class="w-full lg:w-[90%] xl:w-[80%] ml-auto px-10 lg:px-20 py-6 flex items-center space-x-2 sm:space-x-4 text-end"
                    data-aos='fade-left' data-aos-duration='1200'>
                    <div class="text-[#ffffff] text-[10px] sm:text-[12px] md:text-[13px] xl:text-[16px]">
                        <h1 class="text-[16px] md:text-[25px] xl:text-[40px] font-[600]">Always Available in Stock</h1>
                        <p>We maintain a continuous supply of our products, ensuring they are always readily available for
                            our clients needs.</p>
                    </div>
                    <hr class="h-[6rem] md:h-[9rem] w-1 md:w-[6px] bg-[#ffffff]" />
                    <h1
                        class="text-[80px] sm:text-[100px] md:text-[150px] text-[#A4CA62] font-[700] leading-none tracking-tighter">
                        02</h1>
                </div>
            </div>
            <div class="bg-[#415464]/90">
                <div class="w-full lg:w-[90%] xl:w-[80%] mr-auto px-10 lg:px-20 py-6 flex items-center space-x-2 sm:space-x-4 text-start"
                    data-aos='fade-right' data-aos-duration='1200'>
                    <h1
                        class="text-[80px] sm:text-[100px] md:text-[150px] text-[#A4CA62] font-[700] leading-none tracking-tighter">
                        03</h1>
                    <hr class="h-[6rem] md:h-[9rem] w-1 md:w-[6px] bg-[#ffffff]" />
                    <div class="text-[#ffffff] text-[10px] sm:text-[12px] md:text-[13px] xl:text-[16px]">
                        <h1 class="text-[16px] md:text-[25px] xl:text-[40px] font-[600]">Excellent Service Delivery</h1>
                        <p>Our commitment to excellent service delivery ensures prompt and efﬁcient assistance, meeting our
                            clients needs with professionalism and reliability.</p>
                    </div>
                </div>
            </div>
            <div class="bg-[#2A4352]/90">
                <div class="w-full lg:w-[90%] xl:w-[80%] ml-auto px-10 lg:px-20 py-6 flex items-center space-x-2 sm:space-x-4 text-end"
                    data-aos='fade-left' data-aos-duration='1200'>
                    <div class="text-[#ffffff] text-[10px] sm:text-[12px] md:text-[13px] xl:text-[16px]">
                        <h1 class="text-[16px] md:text-[25px] xl:text-[40px] font-[600]">Packaged Price with Installation
                        </h1>
                        <p>We provide transparent and convenient packaged prices that include seamless installation,
                            offering our clients a hassle-free experience from purchase to set up.</p>
                    </div>
                    <hr class="h-[6rem] md:h-[9rem] w-1 md:w-[6px] bg-[#ffffff]" />
                    <h1
                        class="text-[80px] sm:text-[100px] md:text-[150px] text-[#A4CA62] font-[700] leading-none tracking-tighter">
                        04</h1>
                </div>
            </div>
            <div class="bg-[#415464]/90">
                <div class="w-full lg:w-[90%] xl:w-[80%] mr-auto px-10 lg:px-20 py-6 flex items-center space-x-2 sm:space-x-4 text-start"
                    data-aos='fade-right' data-aos-duration='1200'>
                    <h1
                        class="text-[80px] sm:text-[100px] md:text-[150px] text-[#A4CA62] font-[700] leading-none tracking-tighter">
                        05</h1>
                    <hr class="h-[6rem] md:h-[9rem] w-1 md:w-[6px] bg-[#ffffff]" />
                    <div class="text-[#ffffff] text-[10px] sm:text-[12px] md:text-[13px] xl:text-[16px]">
                        <h1 class="text-[16px] md:text-[25px] xl:text-[40px] font-[600] leading-none">Highly Experienced
                            Team with More than 20 years of Expertise</h1>
                        <p>Our team boasts extensive experience, with each member contributing over 15 years of expertise to
                            deliver top-notch solutions and support.</p>
                    </div>
                </div>
            </div>
            <div class="bg-[#2A4352]/90">
                <div class="w-full lg:w-[90%] xl:w-[80%] ml-auto px-10 lg:px-20 py-6 flex items-center space-x-2 sm:space-x-4 text-end"
                    data-aos='fade-left' data-aos-duration='1200'>
                    <div class="text-[#ffffff] text-[10px] sm:text-[12px] md:text-[13px] xl:text-[16px]">
                        <h1 class="text-[16px] md:text-[25px] xl:text-[40px] font-[600]">After Sales Service</h1>
                        <p>Our dedication extends beyond the sale with a comprehensive after-sales service, including
                            product exchange, to ensure our clients continued satisfaction.</p>
                    </div>
                    <hr class="h-[6rem] md:h-[9rem] w-1 md:w-[6px] bg-[#ffffff]" />
                    <h1
                        class="text-[80px] sm:text-[100px] md:text-[150px] text-[#A4CA62] font-[700] leading-none tracking-tighter">
                        06</h1>
                </div>
            </div>
        </div>
        {{-- mobile --}}
        <div class="md:hidden overflow-hidden">
            <div class="bg-[#415464]/90">
                <div class="w-full px-4 py-6 flex flex-col items-center space-y-2 text-start" data-aos='fade-right'
                    data-aos-duration='1200'>
                    <h1 class="text-[80px] text-[#A4CA62] font-[700] leading-none tracking-tighter">01</h1>
                    <hr class="w-full h-[2px] bg-[#ffffff]" />
                    <div class="text-[#ffffff] text-[10px] text-center">
                        <h1 class="text-[16px] font-[600]">High Quality</h1>
                        <p class="pt-1">We adhere to French standards, offering products with long-term warranties and
                            full efﬁciency, guaranteeing the utmost quality and durability.</p>
                    </div>
                </div>
            </div>
            <div class="bg-[#2A4352]/90">
                <div class="w-full px-4 py-6 flex flex-col items-center space-y-2 text-start" data-aos='fade-left'
                    data-aos-duration='1200'>
                    <h1 class="text-[80px] text-[#A4CA62] font-[700] leading-none tracking-tighter">02</h1>
                    <hr class="w-full h-[2px] bg-[#ffffff]" />
                    <div class="text-[#ffffff] text-[10px] text-center">
                        <h1 class="text-[16px] font-[600]">Always Available in Stock</h1>
                        <p class="pt-1">We maintain a continuous supply of our products, ensuring they are always readily
                            available for our clients needs.</p>
                    </div>
                </div>
            </div>
            <div class="bg-[#415464]/90">
                <div class="w-full px-4 py-6 flex flex-col items-center space-y-2 text-start" data-aos='fade-right'
                    data-aos-duration='1200'>
                    <h1 class="text-[80px] text-[#A4CA62] font-[700] leading-none tracking-tighter">03</h1>
                    <hr class="w-full h-[2px] bg-[#ffffff]" />
                    <div class="text-[#ffffff] text-[10px] text-center">
                        <h1 class="text-[16px] font-[600]">Excellent Service Delivery</h1>
                        <p class="pt-1">Our commitment to excellent service delivery ensures prompt and efﬁcient
                            assistance, meeting our clients needs with professionalism and reliability.</p>
                    </div>
                </div>
            </div>
            <div class="bg-[#2A4352]/90">
                <div class="w-full px-4 py-6 flex flex-col items-center space-y-2 text-start" data-aos='fade-left'
                    data-aos-duration='1200'>
                    <h1 class="text-[80px] text-[#A4CA62] font-[700] leading-none tracking-tighter">04</h1>
                    <hr class="w-full h-[2px] bg-[#ffffff]" />
                    <div class="text-[#ffffff] text-[10px] text-center">
                        <h1 class="text-[16px] font-[600]">Packaged Price with Installation</h1>
                        <p class="pt-1">We provide transparent and convenient packaged prices that include seamless
                            installation, offering our clients a hassle-free experience from purchase to set up.</p>
                    </div>
                </div>
            </div>
            <div class="bg-[#415464]/90">
                <div class="w-full px-4 py-6 flex flex-col items-center space-y-2 text-start" data-aos='fade-right'
                    data-aos-duration='1200'>
                    <h1 class="text-[80px] text-[#A4CA62] font-[700] leading-none tracking-tighter">05</h1>
                    <hr class="w-full h-[2px] bg-[#ffffff]" />
                    <div class="text-[#ffffff] text-[10px] text-center">
                        <h1 class="text-[16px] font-[600]">Highly Expertise Team with More Than 15 Years Experiences </h1>
                        <p class="pt-1">Our team boasts extensive experience, with each member contributing over 15 years
                            of expertise to deliver top-notch solutions and support.</p>
                    </div>
                </div>
            </div>
            <div class="bg-[#2A4352]/90">
                <div class="w-full px-4 py-6 flex flex-col items-center space-y-2 text-start" data-aos='fade-left'
                    data-aos-duration='1200'>
                    <h1 class="text-[80px] text-[#A4CA62] font-[700] leading-none tracking-tighter">06</h1>
                    <hr class="w-full h-[2px] bg-[#ffffff]" />
                    <div class="text-[#ffffff] text-[10px] text-center">
                        <h1 class="text-[16px] font-[600]">After Sales Service</h1>
                        <p class="pt-1">Our dedication extends beyond the sale with a comprehensive after-sales service,
                            including product exchange, to ensure our clients continued satisfaction.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.banner')
    @include('components.footer')
@endsection
