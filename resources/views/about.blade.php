@extends('layouts.master')
@section('css')
    <style>
        .swiper-history {
            position: relative !important;
            width: 100%;
            height: 100%;
        }

        .swiper-history .swiper {
            margin-inline: initial;
            padding-top: 6rem;
            padding-bottom: 4rem;
        }

        .swiper-certificate .swiper,
        .swiper-award .swiper {
            margin-inline: initial;
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .swiper-management .swiper {
            margin-inline: initial;
            /* padding-top: 3rem; */
            padding-bottom: 3rem;
        }

        .swiper-history .swiper-button-prev::after,
        .swiper-history .swiper-button-next::after {
            content: "";
        }

        .swiper-history .swiper-button-prev,
        .swiper-history .swiper-button-next {
            bottom: initial;
            top: 2rem;
            width: 40px;
            height: 40px;
            background-color: #a4ca62;
            border-radius: 50%;
            font-size: 1rem;
            padding: 6px;
            color: white;
        }

        .swiper-history .swiper-button-prev {
            left: calc(50% - 4rem);
        }

        .swiper-history .swiper-button-next {
            right: calc(50% - 4rem);
        }

        .swiper-history .swiper-pagination {
            position: absolute !important;
            bottom: 0 !important;
            width: 100%;
            text-align: center;
        }

        .swiper-history .swiper-pagination .swiper-pagination-bullet {
            background-color: #a4ca62;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            margin: 0 5px;
        }

        .swiper-management .swiper-pagination-bullet,
        .swiper-certificate .swiper-pagination .swiper-pagination-bullet,
        .swiper-awards .swiper-pagination .swiper-pagination-bullet,
        .swiper-award .swiper-pagination-bullet {
            background-color: #2E4354;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            margin: 0 5px;
        }

        .swiper-history .swiper-pagination .swiper-pagination-bullet-active {
            width: 16px;
            height: 6px;
            border-radius: 10px;
            background-color: #a4ca62;
        }

        .swiper-management .swiper-pagination-bullet-active,
        .swiper-certificate .swiper-pagination .swiper-pagination-bullet-active,
        .swiper-awards .swiper-pagination .swiper-pagination-bullet-active,
        .swiper-award .swiper-pagination-bullet-active {
            width: 16px;
            height: 6px;
            border-radius: 10px;
            background-color: #2E4354;
        }
    </style>
@endsection
@section('content')
    <x-home />
    <x-scroll-top-button />

    <section class='overflow-hidden'>
        <div class='max-w-7xl mx-auto px-4'>
            <hr class='h-4 bg-[#A4CA62] border-none' />
            <div class='bg-[#415464F2] px-2 xl:px-10 py-6'>
                <div class='grid grid-cols-1 md:grid-cols-2 gap-4 overflow-hidden'>
                    <div data-aos='fade-right' data-aos-duration='1000'
                        class='text-[20px] sm:text-[40px] lg:text-[50px] text-[#fff] font-[600] leading-none'>
                        <h1 class='text-[#ffffff]'>EGE Cambodia Energy </h1>
                        <p>Solutions.</p>
                    </div>
                    <div class='flex flex-row space-x-2 items-center justify-end'>
                        <div data-aos='fade-left' data-aos-duration='1000'
                            class='w-full md:w-[200px] h-[150px] lg:h-[200px] pt-2 px-1 lg:pl-2 lg:pr-10 bg-[#A4CA62] text-[#415464]'>
                            <p class="text-[12px] lg:text-[20px] font-[700]">Over 10 MW</p>
                            <p class='text-[10px] lg:text-[12px]'>solar panels installed, providing clean energy to businesses and communities</p>
                        </div>
                        <div data-aos='fade-left' data-aos-duration='1300'
                            class='w-full md:w-[200px] h-[150px] lg:h-[200px] pt-2 pb-20 px-2 lg:pl-2 lg:pr-10 font-[400] text-[10px] lg:text-[15px] text-[#ffffff] bg-[#00AFD7]'>
                            <p class="text-[12px] lg:text-[20px] font-[700]">98% system</p>
                            <p class='text-[10px] lg:text-[12px]'>uptime for reliable </p>
                            <p class='text-[10px] lg:text-[12px]'>energy solutions</p>
                        </div>
                        <div data-aos='fade-left' data-aos-duration='1600'
                            class='w-full md:w-[200px] h-[150px] lg:h-[200px] pt-2 pb-20 px-2 lg:pl-2 lg:pr-10 font-[400] text-[10px] md:text-[11px] text-[#ffffff] bg-[#FF5900]'>
                            <p class="text-[12px] lg:text-[20px] font-[700]">45 - 90%</p>
                            <p class='text-[10px] lg:text-[12px]'>savings on energy costs </p>
                        </div>
                    </div>
                </div>
                <div data-aos='fade-right' data-aos-duration='1000'
                    class='flex flex-col space-y-2 pt-3 text-[#ffffff] text-[12px] md:text-[15px]'>
                    <p>In 2019, three visionaries came together to tackle Cambodia`s pressing energy challenges. Frustrated
                        by frequent power outages and unreliable electricity, they envisioned a brighter future powered by
                        sustainable energy. With this shared purpose, EGE Cambodia was born—founded on the belief that
                        renewable energy, particularly solar, is key to transforming lives and communities.</p>
                    <p>From the start, the founders sought to go beyond simply providing solar panels. They built a company
                        that offers comprehensive solutions—from expert consultancy and tailored project management to
                        seamless installation and maintenance. Their goal was clear: to make reliable, eco-friendly energy
                        accessible and affordable for all, from small businesses to agricultural enterprises.</p>
                    <p>Today, EGE Cambodia is a trusted leader in solar energy, delivering cost-effective solutions that
                        reduce carbon emissions and empower communities across the country. Guided by the founders` vision,
                        we continue to expand our impact, driving Cambodia toward a sustainable and energy-secure future.
                    </p>
                </div>
            </div>

            <div class='grid grid-cols-1 md:grid-cols-2 gap-4 py-10 overflow-hidden'>
                {{-- {/* vision */} --}}
                <div id='vision' data-aos='fade-right' data-aos-duration='1500' class=''>
                    <hr class='h-4 border-none bg-[#ffffff]' />
                    <div
                        class='flex flex-col md:flex-row items-start space-x-0 md:space-x-5 lg:space-x-10 text-[13px] lg:text-[15px] text-[#415464] p-5 lg:p-8'>
                        <img src={{ asset('assets/images/about/vision.png') }} alt="" class='w-16 lg:w-20' />
                        <div>
                            <h1 class='text-[30px] lg:text-[50px] font-[700]'>Vision</h1>
                            <p>Our vision is to lead the transition to sustainable energy by providing innovative, reliable,
                                and accessible solar solutions. We strive to create a future where individuals and
                                communities thrive with clean, affordable energy.</p>
                        </div>
                    </div>
                </div>
                {{-- mission --}}
                <div id='mission' data-aos='fade-left' data-aos-duration='1500' class='bg-[#415464]'>
                    <hr class='h-4 border-none bg-[#A4CA62]' />
                    <div
                        class='flex flex-col md:flex-row items-start space-x-0 md:space-x-5 lg:space-x-10 text-[13px] lg:text-[15px] text-[#ffffff] p-5 lg:p-8'>
                        <img src={{ asset('assets/images/about/mission.png') }} alt="" class='w-16 lg:w-20' />
                        <div>
                            <h1 class='text-[30px] lg:text-[50px] text-[#A4CA62] font-[700]'>Mission</h1>
                            <p>We are committed to empowering Phnom Penh and beyond with innovative solar technologies.
                                Through comprehensive services—from installation to maintenance—we provide clean,
                                affordable, and efficient energy solutions, aligned with Sustainable Development Goal (SDG)
                                7.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- core values  --}}
            <div id='core_values' class='px-8 text-[#415464]'>
                <div data-aos='fade-right' data-aos-duration='1000'>
                    <img src={{ asset('assets/images/about/core_values.png') }} alt="" class='w-20 h-24' />
                    <h1 class='text-[30px] lg:text-[50px] font-[700]'>Core Values</h1>
                </div>
                <div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-2'>
                    <div data-aos='fade-up' data-aos-duration='1000'
                        class='text-[12px] md:text-[14px] text-[#415464] hover:text-[#A4CA62] hover:bg-[#415464] p-4'>
                        <h2 class='text-[16px] md:text-[20px] font-[700]'>Sustainability</h2>
                        <p class=''>Sustainability is at the heart of everything we do, guiding our decisions to
                            create a positive impact on the environment and the communities we serve.</p>
                    </div>
                    <div data-aos='fade-up' data-aos-duration='1200'
                        class='text-[12px] md:text-[14px] text-[#415464] hover:text-[#A4CA62] hover:bg-[#415464] p-4'>
                        <h2 class='text-[16px] md:text-[20px] font-[700]'>Women Empowerment</h2>
                        <p class=''>Our team comprises 60-70% women experts, and we additionally support female
                            end-users, experts inclusivity and gender equality in every aspect of our operations.</p>
                    </div>
                    <div data-aos='fade-up' data-aos-duration='1400'
                        class='text-[12px] md:text-[14px] text-[#415464] hover:text-[#A4CA62] hover:bg-[#415464] p-4'>
                        <h2 class='text-[16px] md:text-[20px] font-[700]'>Accountability</h2>
                        <p class=''>Accountability is the cornerstone of our commitment, as we hold ourselves
                            responsible for the impact of our actions on our clients, communities, and the planet.</p>
                    </div>
                    <div data-aos='fade-up' data-aos-duration='1000'
                        class='text-[12px] md:text-[14px] text-[#415464] hover:text-[#A4CA62] hover:bg-[#415464] p-4'>
                        <h2 class='text-[16px] md:text-[20px] font-[700]'>Reliability</h2>
                        <p class=''>Reliability is our promise, ensuring that our clients can depend on us for
                            consistent and trustworthy solar energy solutions that meet their needs and expectations.</p>
                    </div>
                    <div data-aos='fade-up' data-aos-duration='1200'
                        class='text-[12px] md:text-[14px] text-[#415464] hover:text-[#A4CA62] hover:bg-[#415464] p-4'>
                        <h2 class='text-[16px] md:text-[20px] font-[700]'>Innovation</h2>
                        <p class=''>Innovation is our driving force, propelling us to continuously explore
                            cutting-edge technologies and creative approaches to enhance our services and contribute to the
                            advancement of sustainable energy solutions.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id='history' class='w-full relative min-h-screen my-10 bg-cover bg-center'
            style="background-image: url('{{ asset('assets/images/about/about-bg-1.png') }}')">
            <div class='absolute inset-0 w-full h-full bg-[#415464] opacity-90'></div>
            <div
                class='w-full h-full max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 items-center md:items-start justify-center p-4 md:px-10 py-10'>
                <div class='flex flex-col text-center md:text-start space-y-1 md:space-y-20'>
                    <h1 data-aos='fade-right' data-aos-duration='1000'
                        class='w-full md:max-w-[300px] text-[30px] md:text-[40px] xl:text-[60px] font-bold text-[#ffffff] leading-none'>
                        Our History
                    </h1>
                    <p data-aos='fade-right' data-aos-duration='1200'
                        class='w-full md:max-w-[300px] text-[20px] md:text-[30px] xl:text-[40px] font-bold text-[#ffffff]'>
                        <span class='text-[#A4CA62]'>Our Strengths</span> We focus on quality in our products, services, and
                        after-sales support.
                    </p>
                </div>

                {{-- history labtop --}}
                <div class="hidden md:col-span-2 md:flex flex-col space-y-4 md:space-y-7 overflow-hidden">
                    @foreach ($ourhistories as $index => $history)
                        <div class="relative overflow-hidden group transition-all duration-500"
                        style="color:
                            @if ($index === 0) #f5f5f5
                            @elseif($index === 1) #e5e5e5
                            @elseif($index === 2) #d4d4d4
                            @elseif($index === 3) #c4c4c4
                            @elseif($index === 4) #b4b4b4
                            @elseif($index === 5) #a3a3a3
                            @elseif($index === 6) #939393
                            @elseif($index === 7) #828282
                            @elseif($index === 8) #737373
                            @elseif($index === 9) #626262
                            @endif;">

                            <div data-aos="fade-left" data-aos-duration="1000" class="flex flex-col md:flex-row md:space-x-4 items-center px-4">
                                <!-- Image -->
                                <img src="{{ asset($history->image) }}" alt="{{ $history->year }}" class="w-20" />

                                <div class="w-full">
                                    <!-- Title and Year/Month -->
                                    <div class="flex items-center justify-between">
                                        <h1 class="text-[20px] xl:text-[30px] font-bold">{{ $history->year }}</h1>
                                        <h1 class="text-[20px] xl:text-[30px] font-bold">{{ $history->month }}</h1>
                                    </div>

                                    <!-- Separator Line -->
                                    <hr class="h-1 my-2 bg-[#A4CA62] border-none" />

                                    <!-- Description -->
                                    <p class="text-[12px] lg:text-[14px]">{{ $history->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>



                    {{-- <div
                        class='relative transition-all duration-500 overflow-hidden'>
                        <div data-aos='fade-left' data-aos-duration='1000'
                            class='flex flex-col md:flex-row md:space-x-4 items-center px-4'>
                            <img src={{ asset('assets/images/about/icon-1.png') }} alt='' class='w-20' />
                            <div class='w-full'>
                                <div class='flex items-center justify-between'>
                                    <h1 class='text-[20px] xl:text-[30px] font-bold text-[#ffffff]'>2019-2020</h1>
                                    <h1 class='text-[20px] xl:text-[30px] font-bold text-[#A4CA62]'>SEPTEMBER</h1>
                                </div>
                                <hr class='h-1 my-2 bg-[#A4CA62] border-none' />
                                <p class='text-[12px] lg:text-[14px] text-[#ffffff]'>EGE began importing Eco Green Energy
                                    solar panels, a leading French brand, as the sole distributor in Cambodia, supplying
                                    solar equipment across 25 cities and provinces.</p>
                            </div>
                        </div>
                    </div>
                    <div class='relative opacity-10 hover:opacity-100 hover:scale-105 transition-all duration-500'>
                        <div data-aos='fade-left' data-aos-duration='1000'
                            class='flex flex-col md:flex-row md:space-x-4 items-center px-4'>
                            <img src={{ asset('assets/images/about/icon-2.png') }} alt='' class='w-20' />
                            <div class='w-full'>
                                <div class='flex items-center justify-between'>
                                    <h1 class='text-[20px] xl:text-[30px] font-bold text-[#ffffff]'>2021</h1>
                                    <h1 class='text-[20px] xl:text-[30px] font-bold text-[#A4CA62]'>JANUARY</h1>
                                </div>
                                <hr class='h-1 my-2 bg-[#A4CA62] border-none' />
                                <p class='text-[12px] lg:text-[14px] text-[#ffffff]'>EGE Cambodia was officially registered
                                    and successfully delivered 21 projects.</p>
                            </div>
                        </div>
                    </div>
                    <div class='relative opacity-10 hover:opacity-100 hover:scale-105 transition-all duration-500'>
                        <div data-aos='fade-left' data-aos-duration='1000'
                            class='flex flex-col md:flex-row md:space-x-4 items-center px-4'>
                            <img src={{ asset('assets/images/about/icon-3.png') }} alt='' class='w-20' />
                            <div class='w-full'>
                                <div class='flex items-center justify-between'>
                                    <h1 class='text-[20px] xl:text-[30px] font-bold text-[#ffffff]'>2022</h1>
                                    <h1 class='text-[20px] xl:text-[30px] font-bold text-[#A4CA62]'>JANUARY</h1>
                                </div>
                                <hr class='h-1 my-2 bg-[#A4CA62] border-none' />
                                <p class='text-[12px] lg:text-[14px] text-[#ffffff]'>EGE provided solar solutions through
                                    supply, distribution, consulting, EPC projects, and maintenance, successfully delivering
                                    23 projects.</p>
                            </div>
                        </div>
                    </div>
                    <div class='relative opacity-10 hover:opacity-100 hover:scale-105 transition-all duration-500'>
                        <div data-aos='fade-left' data-aos-duration='1000'
                            class='flex flex-col md:flex-row md:space-x-4 items-center px-4'>
                            <img src={{ asset('assets/images/about/icon-4.png') }} alt='' class='w-20' />
                            <div class='w-full'>
                                <div class='flex items-center justify-between'>
                                    <h1 class='text-[20px] xl:text-[30px] font-bold text-[#ffffff]'>2023</h1>
                                    <h1 class='text-[20px] xl:text-[30px] font-bold text-[#A4CA62]'>JANUARY</h1>
                                </div>
                                <hr class='h-1 my-2 bg-[#A4CA62] border-none' />
                                <p class='text-[12px] lg:text-[14px] text-[#ffffff]'>EGE developed solar irrigation
                                    systems, offering supply and installation services for the agricultural sector across
                                    multiple regions. EGE successfully delivered 28 projects in 2023.</p>
                            </div>
                        </div>
                    </div>
                    <div class='relative opacity-10 hover:opacity-100 hover:scale-105 transition-all duration-500'>
                        <div data-aos='fade-left' data-aos-duration='1000'
                            class='flex flex-col md:flex-row md:space-x-4 items-center px-4'>
                            <img src={{ asset('assets/images/about/icon-5.png') }} alt='' class='w-20' />
                            <div class='w-full'>
                                <div class='flex items-center justify-between'>
                                    <h1 class='text-[20px] xl:text-[30px] font-bold text-[#ffffff]'>2024</h1>
                                    <h1 class='text-[20px] xl:text-[30px] font-bold text-[#A4CA62]'>JANUARY</h1>
                                </div>
                                <hr class='h-1 my-2 bg-[#A4CA62] border-none' />
                                <p class='text-[12px] lg:text-[14px] text-[#ffffff]'>Delivered over 10MW of solar energy
                                    across Cambodia within the year.</p>
                            </div>
                        </div>
                    </div> --}}
                </div>

                {{-- history mobile --}}
                <div class='md:hidden swiper-history'>
                    <!-- Swiper -->
                    <div class="swiper historySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($ourhistories as $index => $history)
                                <div class="swiper-slide"
                                    style="color:
                                        @if ($index === 0) #f5f5f5
                                        @elseif($index === 1) #e5e5e5
                                        @elseif($index === 2) #d4d4d4
                                        @elseif($index === 3) #c4c4c4
                                        @elseif($index === 4) #b4b4b4
                                        @elseif($index === 5) #a3a3a3
                                        @elseif($index === 6) #939393
                                        @elseif($index === 7) #828282
                                        @elseif($index === 8) #737373
                                        @elseif($index === 9) #626262
                                        @endif;">
                                    <div class='flex flex-col items-center px-4'>
                                        <img src={{ asset($history->image) }} alt="" class='w-20 h-[85px]' />
                                        <div class='w-full'>
                                            <div class='flex items-center justify-between'>
                                                <h1 class='text-[20px] xl:text-[30px] font-bold '>
                                                    {{ $history->year }}
                                                </h1>
                                                <h1 class='text-[20px] xl:text-[30px] font-bold '>
                                                    {{ $history->month }}
                                                </h1>
                                            </div>
                                            <hr class='h-1 my-2 bg-[#A4CA62] border-none' />
                                            <p class='text-[12px] lg:text-[14px] h-[80px]'>
                                                {{ $history->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- <div class="swiper-slide">
                                <div class='flex flex-col items-center px-4'>
                                    <img src={{ asset('assets/images/about/icon-1.png') }} alt=""
                                        class='w-20 h-[85px]' />
                                    <div class='w-full'>
                                        <div class='flex items-center justify-between'>
                                            <h1 class='text-[20px] xl:text-[30px] font-bold text-[#ffffff]'>
                                                2019-2020
                                            </h1>
                                            <h1 class='text-[20px] xl:text-[30px] font-bold text-[#A4CA62]'>
                                                SEPTEMBER
                                            </h1>
                                        </div>
                                        <hr class='h-1 my-2 bg-[#A4CA62] border-none' />
                                        <p class='text-[12px] lg:text-[14px] text-[#ffffff] h-[80px]'>
                                            EGE began importing Eco Green Energy solar panels, a leading French brand, as
                                            the sole distributor in Cambodia, supplying solar equipment across 25 cities and
                                            provinces.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class='relative transition-all duration-500'>
                                    <div class='flex flex-col md:flex-row md:space-x-4 items-center px-4'>
                                        <img src={{ asset('assets/images/about/icon-2.png') }} alt=""
                                            class='w-20 h-[85px]' />
                                        <div class='w-full'>
                                            <div class='flex items-center justify-between'>
                                                <h1 class='text-[20px] xl:text-[30px] font-bold text-[#ffffff]'>
                                                    2021
                                                </h1>
                                                <h1 class='text-[20px] xl:text-[30px] font-bold text-[#A4CA62]'>
                                                    JANUARY
                                                </h1>
                                            </div>
                                            <hr class='h-1 my-2 bg-[#A4CA62] border-none' />
                                            <p class='text-[12px] lg:text-[14px] text-[#ffffff] h-[80px]'>
                                                EGE Cambodia was officially registered and successfully delivered 21
                                                projects.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class='relative transition-all duration-500'>
                                    <div class='flex flex-col md:flex-row md:space-x-4 items-center px-4'>
                                        <img src={{ asset('assets/images/about/icon-3.png') }} alt=""
                                            class='w-20 h-[85px]' />
                                        <div class='w-full'>
                                            <div class='flex items-center justify-between'>
                                                <h1 class='text-[20px] xl:text-[30px] font-bold text-[#ffffff]'>
                                                    2022
                                                </h1>
                                                <h1 class='text-[20px] xl:text-[30px] font-bold text-[#A4CA62]'>
                                                    JANUARY
                                                </h1>
                                            </div>
                                            <hr class='h-1 my-2 bg-[#A4CA62] border-none' />
                                            <p class='text-[12px] lg:text-[14px] text-[#ffffff] h-[80px]'>
                                                EGE provided solar solutions through supply, distribution, consulting, EPC
                                                projects, and maintenance, successfully delivering 23 projects.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class='relative transition-all duration-500'>
                                    <div class='flex flex-col md:flex-row md:space-x-4 items-center px-4'>
                                        <img src={{ asset('assets/images/about/icon-4.png') }} alt=""
                                            class='w-20 h-[85px]' />
                                        <div class='w-full'>
                                            <div class='flex items-center justify-between'>
                                                <h1 class='text-[20px] xl:text-[30px] font-bold text-[#ffffff]'>
                                                    2023
                                                </h1>
                                                <h1 class='text-[20px] xl:text-[30px] font-bold text-[#A4CA62]'>
                                                    JANUARY
                                                </h1>
                                            </div>
                                            <hr class='h-1 my-2 bg-[#A4CA62] border-none' />
                                            <p class='text-[12px] lg:text-[14px] text-[#ffffff] h-[80px]'>
                                                EGE developed solar irrigation systems, offering supply and installation
                                                services for the agricultural sector across multiple regions. EGE
                                                successfully delivered 28 projects in 2023.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class='relative transition-all duration-500'>
                                    <div class='flex flex-col md:flex-row md:space-x-4 items-center px-4'>
                                        <img src={{ asset('assets/images/about/icon-5.png') }} alt=""
                                            class='w-20 h-[85px]' />
                                        <div class='w-full'>
                                            <div class='flex items-center justify-between'>
                                                <h1 class='text-[20px] xl:text-[30px] font-bold text-[#ffffff]'>
                                                    2024
                                                </h1>
                                                <h1 class='text-[20px] xl:text-[30px] font-bold text-[#A4CA62]'>
                                                    JANUARY
                                                </h1>
                                            </div>
                                            <hr class='h-1 my-2 bg-[#A4CA62] border-none' />
                                            <p class='text-[12px] lg:text-[14px] text-[#ffffff] h-[80px]'>
                                                Delivered over 10MW of solar energy across Cambodia within the year.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}


                        </div>
                        <div class="swiper-button-next"><i class="fa-solid fa-arrow-right"></i></div>
                        <div class="swiper-button-prev"><i class="fa-solid fa-arrow-left"></i></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>

        {{-- management team --}}
        <div id='management_team' class='max-w-7xl mx-auto px-4'>
            <h1 data-aos='fade-right' data-aos-duration='1000'
                class='text-[25px] md:text-[40px] lg:text-[50px] text-[#415464] font-[700] my-10'>Our Management Team</h1>
            <div class='hidden md:grid grid-cols-3 gap-10 lg:gap-20'>
                <div data-aos='fade-up' data-aos-duration='1200'
                    class='text-center md:text-[15px] lg:text-[20px] font-[700] text-[#415464]'>
                    <div class='relative group w-full'>
                        <img src={{ asset('assets/images/about/person-1.png') }} alt=""
                            class='w-full h-full object-cover' onclick="openPopup('popup1')" />
                        {{-- <div
                        class='fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-start bg-[#A4CA62] shadow-lg p-4 w-full rounded-lg opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto transition-opacity duration-500'>
                        <p class="text-[#415464] text-[10px] lg:text-[11px] font-[500]">Pascal&apos;s extensive
                            experience in project management, electrical systems, and solar energy is a cornerstone of
                            EGE Cambodia&apos;s ability to deliver high-quality, sustainable energy solutions. As
                            Director, his leadership and expertise in commissioning and MEP ensure that EGE&apos;s
                            projects are executed with precision and efficiency. Clients benefit from Pascal&apos;s deep
                            technical knowledge and strategic oversight, which enable them to maximize the performance
                            and longevity of their energy systems. His background in both Southeast Asia and China gives
                            him a unique perspective that enhances EGE&apos;s ability to meet the diverse needs of
                            clients across the region.
                        </p>
                    </div> --}}
                    </div>
                    <h1 class='mt-3 mb-2'>Pascal Gizard</h1>
                    <p class='bg-[#A4CA62] text-[#ffffff] py-1'>Director & Co-founder</p>
                </div>
                <div data-aos='fade-up' data-aos-duration='1000'
                    class='text-center md:text-[15px] lg:text-[20px] font-[700] text-[#415464]'>
                    <div class="relative group w-full">
                        <img src={{ asset('assets/images/about/person-2.png') }} alt=""
                            class="w-full h-full object-cover" onclick="openPopup('popup2')" />
                        {{-- <div
                            class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-start  bg-[#A4CA62] shadow-lg p-4 w-full rounded-lg opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto transition-opacity duration-500">
                            <p class="text-[#415464] text-[10px] lg:text-[11px] font-[500]">Chanraksmey&apos;s entrepreneurial spirit and extensive experience in the renewable energy sector make her an invaluable asset to EGE Cambodia. As the CEO and founder, she has positioned the company as a trusted solar energy distributor and developer. Her leadership and deep understanding of green energy solutions ensure that EGE&apos;s clients receive cost-effective, reliable, and impactful renewable energy solutions. Chanraksmey&apos;s multilingual skills and mentorship further strengthen EGE&apos;s ability to serve a diverse client base, driving both innovation and growth in Cambodia&apos;s energy sector.
                            </p>
                        </div> --}}
                    </div>

                    <h1 class='mt-3 mb-2'>Chanraksmey Vorn</h1>
                    <p class='bg-[#A4CA62] text-[#ffffff] py-1'>Founder & CEO</p>
                </div>
                <div data-aos='fade-up' data-aos-duration='1400'
                    class='text-center md:text-[15px] lg:text-[20px] font-[700] text-[#415464]'>
                    <div class='relative group w-full'>
                        <img src={{ asset('assets/images/about/person-3.png') }} alt=""
                            class='w-full h-full object-cover' onclick="openPopup('popup3')" />
                        {{-- <div
                            class='fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-start bg-[#A4CA62] shadow-lg p-4 w-full rounded-lg opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto transition-opacity duration-500'>
                            <p class="text-[#415464] text-[10px] lg:text-[11px] font-[500]">As a passionate leader in the
                                renewable energy sector, Chanthida brings a wealth of knowledge and a commitment to driving
                                sustainable change. Her expertise in innovative energy solutions has significantly
                                contributed to EGE Cambodia&apos;s success in advancing renewable projects. By fostering
                                growth and collaborating with diverse stakeholders, Thida ensures that EGE&apos;s solutions
                                are efficient and impactful, helping clients navigate the evolving energy landscape to
                                achieve long-term sustainability.
                            </p>
                        </div> --}}
                    </div>
                    <h1 class='mt-3 mb-2'>Chanthida Vorn</h1>
                    <p class='bg-[#A4CA62] text-[#ffffff] py-1'>Head of BD & Co-Founder</p>
                </div>
            </div>

            <div id='management_team' class='md:hidden swiper-management'>
                {{-- management team mobile --}}
                <div class="swiper managementSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div
                                class='flex flex-col items-center justify-center text-center md:text-[15px] lg:text-[20px] font-[700] text-[#415464]'>
                                <div class='relative group w-2/3 h-1/2'>
                                    <img src={{ asset('assets/images/about/person-1.png') }} alt=""
                                        class='w-full h-full object-cover' onclick="openPopup('popup1')" />
                                    {{-- <div
                                        class='fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-start bg-[#a4ca62] w-full shadow-lg p-4 rounded-lg opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto transition-opacity duration-500'>
                                        <p class="text-[#415464] text-[10px] font-[500]">Pascal&apos;s extensive experience
                                            in project management, electrical systems, and solar energy is a cornerstone of
                                            EGE Cambodia&apos;s ability to deliver high-quality, sustainable energy
                                            solutions. As Director, his leadership and expertise in commissioning and MEP
                                            ensure that EGE&apos;s projects are executed with precision and efficiency.
                                            Clients benefit from Pascal&apos;s deep technical knowledge and strategic
                                            oversight, which enable them to maximize the performance and longevity of their
                                            energy systems. His background in both Southeast Asia and China gives him a
                                            unique perspective that enhances EGE&apos;s ability to meet the diverse needs of
                                            clients across the region.</p>
                                    </div> --}}
                                </div>
                                <h1 class='mt-3 mb-1'>Pascal Gizard</h1>
                                <p class='w-[80%] sm:w-[60%] bg-[#A4CA62] text-[#ffffff] p-2'>Director & Co-founder</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class='flex flex-col items-center justify-center text-center md:text-[15px] lg:text-[20px] font-[700] text-[#415464]'>
                                <div class='relative group w-2/3 h-1/2'>
                                    <img src={{ asset('assets/images/about/person-2.png') }} alt=""
                                        class='w-full h-full object-cover' onclick="openPopup('popup2')" />
                                    {{-- <div
                                        class='fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-start bg-[#a4ca62] w-full shadow-lg p-4 rounded-lg opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto transition-opacity duration-500'>
                                        <p class="text-[#415464] text-[10px] font-[500]">Chanraksmey&apos;s entrepreneurial
                                            spirit and extensive experience in the renewable energy sector make her an
                                            invaluable asset to EGE Cambodia. As the CEO and founder, she has positioned the
                                            company as a trusted solar energy distributor and developer. Her leadership and
                                            deep understanding of green energy solutions ensure that EGE&apos;s clients
                                            receive cost-effective, reliable, and impactful renewable energy solutions.
                                            Chanraksmey&apos;s multilingual skills and mentorship further strengthen
                                            EGE&apos;s ability to serve a diverse client base, driving both innovation and
                                            growth in Cambodia&apos;s energy sector.</p>
                                    </div> --}}
                                </div>
                                <h1 class='mt-3 mb-1'>Chanraksmey Vorn</h1>
                                <p class='w-[80%] sm:w-[60%] bg-[#A4CA62] text-[#ffffff] p-2'>Founder & CEO</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class='flex flex-col items-center justify-center text-center md:text-[15px] lg:text-[20px] font-[700] text-[#415464]'>
                                <div class='relative group w-2/3 h-1/2'>
                                    <img src={{ asset('assets/images/about/person-3.png') }} alt=""
                                        class='w-full h-full object-cover' onclick="openPopup('popup3')" />
                                    {{-- <div
                                        class='fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-start bg-[#a4ca62] w-full shadow-lg p-4 rounded-lg opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto transition-opacity duration-500'>
                                        <p class="text-[#415464] text-[10px] font-[500]">As a passionate leader in the
                                            renewable energy sector, Chanthida brings a wealth of knowledge and a commitment
                                            to driving sustainable change. Her expertise in innovative energy solutions has
                                            significantly contributed to EGE Cambodia&apos;s success in advancing renewable
                                            projects. By fostering growth and collaborating with diverse stakeholders, Thida
                                            ensures that EGE&apos;s solutions are efficient and impactful, helping clients
                                            navigate the evolving energy landscape to achieve long-term sustainability.</p>
                                    </div> --}}
                                </div>
                                <h1 class='mt-3 mb-1'>Chanthida Vorn</h1>
                                <p class='w-[80%] sm:w-[60%] bg-[#A4CA62] text-[#ffffff] p-2'>Head of BD & Co-Founder</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <!-- Popups text -->
            @foreach ($managements as $management)
                <div id="popup{{ $management->id }}"
                    class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden px-2 z-[100]">
                    <div class="bg-white rounded-lg shadow-lg p-6 text-start max-w-md mx-auto">
                        <p class="text-[12px] font-medium text-[#415464] mb-4">{{ $management->description }}</p>
                        <button
                            class="bg-[#A4CA62] text-[12px] text-[#415464] px-4 py-2 rounded-lg shadow-md hover:bg-[#add665]"
                            onclick="closePopup('popup{{ $management->id }}')">
                            Close
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- certificate --}}
        <div id='registration_docs'
            class='hidden md:grid grid-cols-4 gap-6 px-4 items-center max-w-7xl mx-auto my-20 overflow-hidden'>
            <div data-aos='fade-right' data-aos-duration='1000' class='md:col-span-2'>
                <img src={{ asset('assets/images/about/certificate-1.png') }} alt="" />
            </div>
            <div data-aos='fade-left' data-aos-duration='1000'>
                <img src={{ asset('assets/images/about/certificate-2.png') }} alt="" />
            </div>
            <div data-aos='fade-left' data-aos-duration='1200'>
                <img src={{ asset('assets/images/about/certificate-3.png') }} alt="" />
            </div>
        </div>
        <div id='registration_docs' class='md:hidden swiper-certificate'>
            <div class="swiper certificateSwiper" style="width: 80%; height: 300px; margin: auto;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center h-full">
                            <img src={{ asset('assets/images/about/certificate-1.png') }} alt=""
                                class="h-full object-contain" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center h-full">
                            <img src={{ asset('assets/images/about/certificate-2.png') }} alt=""
                                class="h-full object-contain" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center h-full">
                            <img src={{ asset('assets/images/about/certificate-3.png') }} alt=""
                                class="h-full object-contain" />
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        {{-- Awards & Accreditations --}}
        <div class='max-w-7xl mx-auto px-4'>
            <div class='my-10'>
                <h1 class='text-[30px] md:text-[40px] lg:text-[50px] text-[#415464] font-[700] leading-none'>Awards &
                    <br /> Accreditations
                </h1>
                <p class='text-[12px] md:text-[16px] font-[500] md:max-w-[600px]'>Our industry recognition underscores
                    our dedication to delivering reliable, eco-friendly energy solutions.</p>
            </div>
            {{-- Awards & Accreditations labtop --}}
            <div id='certificate' class='hidden md:grid grid-cols-5 gap-10 overflow-hidden py-20'>
                <div data-aos='fade-up' data-aos-duration='1200'>
                    <div
                        class="flex flex-col items-center text-center w-full">
                        <img src={{ asset('assets/images/about/awards-1.png') }} alt=''
                            class="w-full h-[150px] lg:h-[200px] xl:h-[250px] 2xl:h-[300px] object-contain" />
                        <p
                            class="max-w-[200px] h-[120px] pt-7 text-[11px] lg:text-[13px] xl:text-[15px] text-[#415464] font-[500]">
                            2023 OUTSTANDING ASEAN WOMAN ENTREPRENEUR AWARD
                        </p>
                    </div>
                </div>
                <div data-aos='fade-up' data-aos-duration='1200'>
                    <div
                        class="flex flex-col items-center text-center w-full">
                        <img src={{ asset('assets/images/about/awards-2.png') }} alt=''
                            class="w-full h-[150px] lg:h-[200px] xl:h-[250px] 2xl:h-[300px] object-contain" />
                        <p
                            class="max-w-[200px] h-[120px] pt-7 text-[11px] lg:text-[13px] xl:text-[15px] text-[#415464] font-[500]">
                            2024 OUTSTANDING ASEAN WOMAN ENTREPRENEUR AWARD
                        </p>
                    </div>
                </div>
                <div data-aos='fade-up' data-aos-duration='1200'>
                    <div
                        class="flex flex-col items-center text-center w-full">
                        <img src={{ asset('assets/images/about/awards-3.png') }} alt=''
                            class="w-full h-[150px] lg:h-[200px] xl:h-[250px] 2xl:h-[300px] object-contain" />
                        <p
                            class="max-w-[200px] h-[120px] pt-7 text-[11px] lg:text-[13px] xl:text-[15px] text-[#415464] font-[500]">
                            GREAT ASEAN CSR ENTREPRENEUR AWARD 2024
                        </p>
                    </div>
                </div>
                <div data-aos='fade-up' data-aos-duration='1200'>
                    <div
                        class="flex flex-col items-center text-center w-full">
                        <img src={{ asset('assets/images/about/awards-4.png') }} alt=''
                            class="w-full h-[150px] lg:h-[200px] xl:h-[250px] 2xl:h-[300px] object-contain" />
                        <p
                            class="max-w-[200px] h-[120px] pt-7 text-[11px] lg:text-[13px] xl:text-[15px] text-[#415464] font-[500]">
                            GREAT ASEAN CSR ENTREPRENEUR AWARD 2024
                        </p>
                    </div>
                </div>
                <div data-aos='fade-up' data-aos-duration='1200'>
                    <div
                        class="flex flex-col items-center text-center w-full">
                        <img src={{ asset('assets/images/about/awards-5.png') }} alt=''
                            class="w-full h-[150px] lg:h-[200px] xl:h-[250px] 2xl:h-[300px] object-contain" />
                        <p
                            class="max-w-[200px] h-[120px] pt-7 text-[11px] lg:text-[13px] xl:text-[15px] text-[#415464] font-[500]">
                            CERTIFICATE OF AUTHORIZATION
                        </p>
                    </div>
                </div>
            </div>
            {{-- Awards & Accreditations mobile --}}
            <div id='certificate' class='md:hidden swiper-awards py-20'>
                <div class="swiper awardsSwiper" style="width: 80%; height: 300px; margin: auto;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="flex flex-col items-center text-center w-full h-[150px]">
                                <img src={{ asset('assets/images/about/awards-1.png') }} alt=''
                                    class="w-full h-full object-contain" />
                                <p class="max-w-[200px] h-[100px] pt-7 text-[11px] text-[#415464] font-[500]">
                                    2023 OUTSTANDING ASEAN WOMAN ENTREPRENEUR AWARD
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col items-center text-center w-full h-[150px]">
                                <img src={{ asset('assets/images/about/awards-2.png') }} alt=''
                                    class="w-full h-full object-contain" />
                                <p class="max-w-[200px] h-[100px] pt-7 text-[11px] text-[#415464] font-[500]">
                                    2024 OUTSTANDING ASEAN WOMAN ENTREPRENEUR AWARD
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col items-center text-center w-full h-[150px]">
                                <img src={{ asset('assets/images/about/awards-3.png') }} alt=''
                                    class="w-full h-full object-contain" />
                                <p class="max-w-[200px] h-[100px] pt-7 text-[11px] text-[#415464] font-[500]">
                                    GREAT ASEAN CSR ENTREPRENEUR AWARD 2024
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col items-center text-center w-full h-[150px]">
                                <img src={{ asset('assets/images/about/awards-4.png') }} alt=''
                                    class="w-full h-full object-contain" />
                                <p class="max-w-[200px] h-[100px] pt-7 text-[11px] text-[#415464] font-[500]">
                                    GREAT ASEAN CSR ENTREPRENEUR AWARD 2024
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col items-center text-center w-full h-[150px]">
                                <img src={{ asset('assets/images/about/awards-5.png') }} alt=''
                                    class="w-full h-full object-contain" />
                                <p class="max-w-[200px] h-[100px] pt-7 text-[11px] text-[#415464] font-[500]">
                                    CERTIFICATE OF AUTHORIZATION
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>


            <div class='hidden md:grid grid-cols-4 gap-4 mt-20 overflow-hidden'>
                <img data-aos='fade-right' data-aos-duration='1000' src={{ asset('assets/images/about/awards-6.png') }}
                    alt="" class="" />
                <img data-aos='fade-right' data-aos-duration='1200' src={{ asset('assets/images/about/awards-7.png') }}
                    alt="" class="" />
                <img data-aos='fade-left' data-aos-duration='1000' src={{ asset('assets/images/about/awards-8.png') }}
                    alt="" class="" />
                <img data-aos='fade-left' data-aos-duration='1200' src={{ asset('assets/images/about/awards-9.png') }}
                    alt="" class="" />
            </div>
            <div class='md:hidden swiper-award'>
                <div class="swiper awardSwiper" style="width: 80%; height 400px; margin: auto;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src={{ asset('assets/images/about/awards-6.png') }} alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src={{ asset('assets/images/about/awards-7.png') }} alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src={{ asset('assets/images/about/awards-8.png') }} alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src={{ asset('assets/images/about/awards-9.png') }} alt="" />
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <div class="overflow-hidden">
            <hr class='h-[16px] bg-[#A4CA62] mt-20 max-w-7xl mx-auto' />
            <div class='w-full h-[50vh] md:h-screen relative'>
                <img src={{ asset('assets/images/about/about-bg-2.png') }} alt=""
                    class='w-full h-full object-cover' />
                <div
                    class='absolute right-[50%] translate-x-1/2 md:-translate-x-0 md:right-[100px] top-[50px] xl:top-[100px] text-[#ffffff]'>
                    <hr data-aos='fade-left' data-aos-duration='1000'
                        class='h-[5px] bg-[#A4CA62] border-none w-[300px]' />
                    <div data-aos='fade-left' data-aos-duration='1000'
                        class='max-w-[500px] h-[150px] md:h-[180px] xl:h-[200px] bg-black/80 py-4 pl-8 pr-20 leading-none'>
                        <h1 class='text-[25px] md:text-[30px] xl:text-[40px] font-[700]'>Our warehouse</h1>
                        <p>can store up to</p>
                        <p class='text-[40px] md:text-[60px] xl:text-[70px] text-[#A4CA62] font-[700] py-2'>1000 kW</p>
                        <p class='text-right text-[15px] font-[700]'>of solar panels</p>
                    </div>
                </div>
            </div>
        </div>

        <div class='w-full mx-auto h-[50vh] sm:h-[80vh] md:h-full relative mt-4'>
            <img src={{ asset('assets/images/about/about-bg-3.png') }} alt=""
                class='w-full h-full object-cover' />
            <div
                class='absolute w-full md:w-[700px] px-4 top-[20px] md:top-[100px] left-1/2 -translate-x-1/2 text-center text-[#000000] text-[12px] md:text-[16px] lg:text-[20px]'>
                <h1 data-aos='fade-up' data-aos-duration='1000'
                    class='text-[30px] md:text-[50px] lg:text-[60px] text-[#415464] font-[700]'>Future Goal</h1>
                <p data-aos='fade-up' data-aos-duration='1200'>Our future objective is to extend our solar footprint into
                    new territories,
                    speciﬁcally targeting expansion into Southeast Asia region.</p>
            </div>
        </div>

        @include('components.banner')
        @include('components.footer')

    </section>
@endsection

@section('js')
    <script>
        function openPopup(popupId) {
            document.getElementById(popupId).classList.remove('hidden');
        }

        function closePopup(popupId) {
            document.getElementById(popupId).classList.add('hidden');
        }
    </script>
@endsection
