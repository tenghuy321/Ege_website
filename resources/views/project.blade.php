@extends('layouts.master')
@section('css')
    <style>
        /* project and activity */
        .swiper-activity .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-project .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 100px;
        }

        .swiper-activity .swiper-slide,
        .swiper-project .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }

        .swiper-activity .swiper-pagination .swiper-pagination-bullet {
            background-color: #A4CA62;
            width: 6px;
            height: 4px;
            border-radius: 10px;
        }

        .swiper-project .swiper-pagination .swiper-pagination-bullet {
            background-color: #415464;
            width: 6px;
            height: 4px;
            border-radius: 10px;
        }

        .swiper-activity .swiper-pagination .swiper-pagination-bullet-active {
            background-color: #A4CA62;
            width: 12px;
            height: 4px;
            border-radius: 10px;
        }

        .swiper-project .swiper-pagination .swiper-pagination-bullet-active {
            background-color: #415464;
            width: 12px;
            height: 4px;
            border-radius: 10px;
        }

        /* client */
        @keyframes scrollleft {
            to {
                left: -200px;
            }
        }

        @keyframes scrollRight {
            to {
                right: -200px;
            }
        }

        .client_item {
            width: 200px;
            height: 200px;
            position: absolute;
            left: max(calc(200px * 9), 100%);
            animation: scrollleft 30s linear infinite;
        }

        .partner_item {
            width: 200px;
            height: 200px;
            position: absolute;
            left: max(calc(200px * 15), 100%);
            animation: scrollleft 40s linear infinite;
        }

        .network_item,
        .supply_item {
            width: 150px;
            height: 200px;
            position: absolute;
            right: max(calc(200px * 9), 100%);
            animation: scrollRight 30s linear infinite;
        }


        .client_item.item1,
        .network_item.item1,
        .supply_item.item1 {
            animation-delay: calc(30s / 9 * (9 - 1) * -1);
        }

        .client_item.item2,
        .network_item.item2,
        .supply_item.item2 {
            animation-delay: calc(30s / 9 * (9 - 2) * -1);
        }

        .client_item.item3,
        .network_item.item3,
        .supply_item.item3 {
            animation-delay: calc(30s / 9 * (9 - 3) * -1);
        }

        .client_item.item4,
        .network_item.item4,
        .supply_item.item4 {
            animation-delay: calc(30s / 9 * (9 - 4) * -1);
        }

        .client_item.item5,
        .network_item.item5,
        .supply_item.item5 {
            animation-delay: calc(30s / 9 * (9 - 5) * -1);
        }

        .client_item.item6,
        .network_item.item6,
        .supply_item.item6 {
            animation-delay: calc(30s / 9 * (9 - 6) * -1);
        }

        .client_item.item7,
        .network_item.item7,
        .supply_item.item7 {
            animation-delay: calc(30s / 9 * (9 - 7) * -1);
        }

        .client_item.item8,
        .network_item.item8,
        .supply_item.item8 {
            animation-delay: calc(30s / 9 * (9 - 8) * -1);
        }

        .client_item.item9,
        .network_item.item9,
        .supply_item.item9 {
            animation-delay: calc(30s / 9 * (9 - 9) * -1);
        }

        .partner_item.item1 {
            animation-delay: calc(40s / 15 * (15 - 1) * -1);
        }

        .partner_item.item2 {
            animation-delay: calc(40s / 15 * (15 - 2) * -1);
        }

        .partner_item.item3 {
            animation-delay: calc(40s / 15 * (15 - 3) * -1);
        }

        .partner_item.item4 {
            animation-delay: calc(40s / 15 * (15 - 4) * -1);
        }

        .partner_item.item5 {
            animation-delay: calc(40s / 15 * (15 - 5) * -1);
        }

        .partner_item.item6 {
            animation-delay: calc(40s / 15 * (15 - 6) * -1);
        }

        .partner_item.item7 {
            animation-delay: calc(40s / 15 * (15 - 7) * -1);
        }

        .partner_item.item8 {
            animation-delay: calc(40s / 15 * (15 - 8) * -1);
        }

        .partner_item.item9 {
            animation-delay: calc(40s / 15 * (15 - 9) * -1);
        }

        .partner_item.item10 {
            animation-delay: calc(40s / 15 * (15 - 10) * -1);
        }

        .partner_item.item11 {
            animation-delay: calc(40s / 15 * (15 - 11) * -1);
        }

        .partner_item.item12 {
            animation-delay: calc(40s / 15 * (15 - 12) * -1);
        }

        .partner_item.item13 {
            animation-delay: calc(40s / 15 * (15 - 13) * -1);
        }

        .partner_item.item14 {
            animation-delay: calc(40s / 15 * (15 - 14) * -1);
        }

        .partner_item.item15 {
            animation-delay: calc(40s / 15 * (15 - 15) * -1);
        }
    </style>
@endsection
@section('content')
    <x-home />
    <x-scroll-top-button />


    <div id='project' class='bg-[#D9ECEE]'>
        <hr class='h-4 bg-[#A4CA62] border-none max-w-7xl mx-auto px-4' />
        <div class='max-w-7xl mx-auto px-4 py-10'>
            <h1 data-aos='fade-right' data-aos-duration='1000'
                class='text-[30px] md:text-[40px] lg:text-[50px] text-[#415464] font-[700] leading-none md:mb-4'>Project
                <br />
                Credentials
            </h1>
            {{-- laptop --}}
            <div class='hidden md:grid grid-cols-3 lg:grid-cols-4 gap-4 overflow-hidden'>

                {{-- item 1 --}}
                <div data-aos='fade-right' data-aos-duration='1200' class="relative">
                    <img src={{ asset('assets/images/projects/project-1.png') }} alt="" class='w-full h-[200px]' />
                    <hr class='h-2 bg-[#A4CA62] border-none' />
                    <div class='bg-[#415464] text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Water Treatment
                            Plant</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span> National
                            Water Supply Authority 50KW</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Kampot Province
                        </p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> 2021</p>

                        <button data-target="infoPanel1"
                            class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                    </div>
                </div>
                {{-- item 2 --}}
                <div data-aos='fade-right' data-aos-duration='1200'>
                    <img src={{ asset('assets/images/projects/project-9.png') }} alt="" class='w-full h-[200px]' />
                    <hr class='h-2 bg-[#A4CA62] border-none' />
                    <div class='bg-[#415464] text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Water Treatment
                            Plant</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span> 340W & 20KW
                            Polycrystalline Solar Panels</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Banteay Meanchey
                            Province</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> April 2023</p>

                        <button data-target="infoPanel2"
                            class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                    </div>
                </div>
                {{-- item 3 --}}
                <div data-aos='fade-right' data-aos-duration='1200'>
                    <img src={{ asset('assets/images/projects/project-2.png') }} alt="" class='w-full h-[200px]' />
                    <hr class='h-2 bg-[#A4CA62] border-none' />
                    <div class='bg-[#415464] text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Workshop Rooftops
                        </p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span> 20KW On-grid
                            Hybrid & Mono-crystalline 450W Solar Panels</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Phnom Penh</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> 2021</p>

                        <button data-target="infoPanel3"
                            class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                    </div>
                </div>
                {{-- item 4 --}}
                <div data-aos='fade-right' data-aos-duration='1200'>
                    <img src={{ asset('assets/images/projects/project-10.png') }} alt="" class='w-full h-[200px]' />
                    <hr class='h-2 bg-[#A4CA62] border-none' />
                    <div class='bg-[#415464] text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Rooftop Ice
                            Factory
                        </p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span> 200KW & 450W
                            Monocrystalline Solar Panels</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Battambang
                            Province
                        </p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> 2022</p>

                        <button data-target="infoPanel4"
                            class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                    </div>
                </div>
                {{-- item 5 --}}
                <div data-aos='fade-right' data-aos-duration='1200'>
                    <img src={{ asset('assets/images/projects/project-3.png') }} alt="" class='w-full h-[200px]' />
                    <hr class='h-2 bg-[#A4CA62] border-none' />
                    <div class='bg-[#415464] text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Cambodia Programme
                            for Sustainable and Inclusive Growth in the Fisheries Sector & Capture Component (Capfish
                            Capture)
                        </p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span> A Complete
                            Photovoltaic System 5KWP Hybrid PV System Supply & Installation</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Home Taste Food,
                            Siem Reap Province</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> April 2023</p>

                        <button data-target="infoPanel5"
                            class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                    </div>
                </div>
                {{-- item 6 --}}
                <div data-aos='fade-right' data-aos-duration='1200'>
                    <img src={{ asset('assets/images/projects/project-5.png') }} alt="" class='w-full h-[200px]' />
                    <hr class='h-2 bg-[#A4CA62] border-none' />
                    <div class='bg-[#415464] text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Solar Rooftop for
                            Amaru Rice Warehouse</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span> 90KWP
                            Off-grid
                            Hybrid Solar PV System ,“Eco Green Energy” Monocrystalline Solar PV of 550W</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Phnom Penh</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> November 2023</p>

                        <button data-target="infoPanel6"
                            class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                    </div>
                </div>
                {{-- item 7 --}}
                <div data-aos='fade-right' data-aos-duration='1200'>
                    <img src={{ asset('assets/images/projects/project-6.png') }} alt=""
                        class='w-full h-[200px]' />
                    <hr class='h-2 bg-[#A4CA62] border-none' />
                    <div class='bg-[#415464] text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Solar System</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span>
                            Monocrystalline Module 450W</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> 2022</p>

                        <button data-target="infoPanel7"
                            class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                    </div>
                </div>
                {{-- item 8 --}}
                <div data-aos='fade-right' data-aos-duration='1200'>
                    <img src={{ asset('assets/images/projects/project-11.png') }} alt=""
                        class='w-full h-[200px]' />
                    <hr class='h-2 bg-[#A4CA62] border-none' />
                    <div class='bg-[#415464] text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Solar System</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span>
                            Polycrystalline Module 340W</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> 2022</p>

                        <button data-target="infoPanel8"
                            class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                    </div>
                </div>
                {{-- item 9 --}}
                <div data-aos='fade-right' data-aos-duration='1200'>
                    <img src={{ asset('assets/images/projects/project-7.png') }} alt=""
                        class='w-full h-[200px]' />
                    <hr class='h-2 bg-[#A4CA62] border-none' />
                    <div class='bg-[#415464] text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Villas Phnom
                            Penh
                        </p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span> 10KW
                            Terrace
                            Top On-grid Hybrid Authority 50KW</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Phnom Penh</p>

                        <button data-target="infoPanel9"
                            class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                    </div>
                </div>
                {{-- item 10 --}}
                <div data-aos='fade-right' data-aos-duration='1200'>
                    <img src={{ asset('assets/images/projects/project-12.png') }} alt=""
                        class='w-full h-[200px]' />
                    <hr class='h-2 bg-[#A4CA62] border-none' />
                    <div class='bg-[#415464] text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Villas Siem Reap
                        </p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span> 10KW
                            Terrace
                            Top Off-grid Hybrid</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Siem Reap
                            Province
                        </p>

                        <button data-target="infoPanel10"
                            class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                    </div>
                </div>
                {{-- item 11 --}}
                <div data-aos='fade-right' data-aos-duration='1200'>
                    <img src={{ asset('assets/images/projects/project-13.png') }} alt=""
                        class='w-full h-[200px]' />
                    <hr class='h-2 bg-[#A4CA62] border-none' />
                    <div class='bg-[#415464] text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Villas Phnom
                            Penh
                        </p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span> 10KW
                            Rooftop
                            On-grid</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Phnom Penh</p>

                        <button data-target="infoPanel11"
                            class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                    </div>
                </div>
                {{-- item 12 --}}
                <div data-aos='fade-right' data-aos-duration='1200'>
                    <img src={{ asset('assets/images/projects/project-14.png') }} alt=""
                        class='w-full h-[200px]' />
                    <hr class='h-2 bg-[#A4CA62] border-none' />
                    <div class='bg-[#415464] text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Eco Village</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span> 10KW
                            Off-grid
                            Rooftop</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Kampot Province
                        </p>

                        <button data-target="infoPanel12"
                            class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                    </div>
                </div>
                {{-- item 13 --}}
                <div data-aos='fade-right' data-aos-duration='1200'>
                    <img src={{ asset('assets/images/projects/project-15.png') }} alt=""
                        class='w-full h-[200px]' />
                    <hr class='h-2 bg-[#A4CA62] border-none' />
                    <div class='bg-[#415464] text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Solar Irrigation
                        </p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span> Pepper
                            Plantation, Kampot & Logan Plantation, Battambang</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Kampot &
                            Battambang
                            Provinces</p>

                        <button data-target="infoPanel13"
                            class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                    </div>
                </div>
                {{-- item 14 --}}
                <div data-aos='fade-right' data-aos-duration='1200'>
                    <img src={{ asset('assets/images/projects/project-16.png') }} alt=""
                        class='w-full h-[200px]' />
                    <hr class='h-2 bg-[#A4CA62] border-none' />
                    <div class='bg-[#415464] text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Farming</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span> Goat,
                            Turkey,
                            Chicken Farm & Fish Farm</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Kampong Speu &
                            Kampong Cham Provinces</p>

                        <button data-target="infoPanel14"
                            class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                    </div>
                </div>
                {{-- item 15 --}}
                <div data-aos='fade-right' data-aos-duration='1200'>
                    <img src={{ asset('assets/images/projects/project-4.png') }} alt=""
                        class='w-full h-[200px]' />
                    <hr class='h-2 bg-[#A4CA62] border-none' />
                    <div class='bg-[#415464] text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Oral District
                            Resort
                        </p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span> 15KW
                            Off-grid
                            Solar Light</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Kampong Speu
                            Province</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> 2022</p>

                        <button data-target="infoPanel15"
                            class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                    </div>
                </div>
                {{-- item 16 --}}
                <div data-aos='fade-right' data-aos-duration='1200'>
                    <img src={{ asset('assets/images/projects/project-8.png') }} alt=""
                        class='w-full h-[200px]' />
                    <hr class='h-2 bg-[#A4CA62] border-none' />
                    <div class='bg-[#415464] text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Oral District
                            Resort
                        </p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span> 200 Solar
                            Light</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Kampong Speu
                            Province</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> 2022</p>

                        <button data-target="infoPanel16"
                            class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                    </div>
                </div>
                {{-- item 17 --}}
                <div data-aos='fade-right' data-aos-duration='1200'>
                    <img src={{ asset('assets/images/projects/project-17.png') }} alt=""
                        class='w-full h-[200px]' />
                    <hr class='h-2 bg-[#A4CA62] border-none' />
                    <div class='bg-[#415464] text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Solar Irrigation
                            2022</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span> 5Hp of
                            Solar
                            Water Pump System for Fish Farm</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Kampong Cham
                            Province</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> 2022</p>

                        <button data-target="infoPanel17"
                            class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                    </div>
                </div>
                {{-- item 18 --}}
                <div data-aos='fade-right' data-aos-duration='1200'>
                    <img src={{ asset('assets/images/projects/project-18.png') }} alt=""
                        class='w-full h-[200px]' />
                    <hr class='h-2 bg-[#A4CA62] border-none' />
                    <div class='bg-[#415464] text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Solar Irrigation
                            2023</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span> 5Hp of
                            Solar
                            Irrigation System</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Banteay
                            Meanchey
                            Province</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> 2023</p>

                        <button data-target="infoPanel18"
                            class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                    </div>
                </div>
                {{-- item 19 --}}
                <div data-aos='fade-right' data-aos-duration='1200'>
                    <img src={{ asset('assets/images/projects/project-19.png') }} alt=""
                        class='w-full h-[200px]' />
                    <hr class='h-2 bg-[#A4CA62] border-none' />
                    <div class='bg-[#415464] text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Sahmakum Teang
                            Tnaut
                            Organizational (STT)</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span> 35 Sets of
                            Solar Street Light Supply & Installation for Community</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Kandal Province
                        </p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> August 2024</p>

                        <button data-target="infoPanel19"
                            class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                    </div>
                </div>
                {{-- item 20 --}}
                <div data-aos='fade-right' data-aos-duration='1200'>
                    <img src={{ asset('assets/images/projects/project-20.png') }} alt=""
                        class='w-full h-[200px]' />
                    <hr class='h-2 bg-[#A4CA62] border-none' />
                    <div class='bg-[#415464] text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Cambodia Climate
                            Change Alliance - Phase3 (CCCA-lll)</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span> 340W
                            Polycrystalline Solar Panels</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> 20 Health
                            Centers &
                            Water Stations in 3 Provinces, Cambodia</p>
                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> 2022</p>

                        <button data-target="infoPanel20"
                            class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                    </div>
                </div>
            </div>

            {{-- mobile --}}
            <div class='swiper-project md:hidden'>
                <div class="swiper projectSwiper">
                    <div class="swiper-wrapper">
                        {{-- item 1 --}}
                        <div class="swiper-slide ">
                            <img src={{ asset('assets/images/projects/project-1.png') }} alt=""
                                class='w-full h-auto' />
                            <hr class='h-2 bg-[#A4CA62] border-none' />
                            <div class='bg-[#415464] relative text-[#ffffff] p-3 h-[150px]'>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Water
                                    Treatment
                                    Plant</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span>
                                    National Water
                                    Supply Authority 50KW</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Kampot
                                    Province</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> 2021</p>

                                <button data-target="infoPanel1"
                                    class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                            </div>
                        </div>
                        {{-- item 2 --}}
                        <div class="swiper-slide ">
                            <img src={{ asset('assets/images/projects/project-9.png') }} alt=""
                                class='w-full h-auto' />
                            <hr class='h-2 bg-[#A4CA62] border-none' />
                            <div class='bg-[#415464] relative text-[#ffffff] p-3 h-[150px]'>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Water
                                    Treatment
                                    Plant</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span>
                                    340W &
                                    20KW
                                    Polycrystalline Solar Panels</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Banteay
                                    Meanchey
                                    Province</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> April 2023
                                </p>

                                <button data-target="infoPanel2"
                                    class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                            </div>
                        </div>
                        {{-- item 3 --}}
                        <div class="swiper-slide ">
                            <img src={{ asset('assets/images/projects/project-2.png') }} alt=""
                                class='w-full h-[200px]' />
                            <hr class='h-2 bg-[#A4CA62] border-none' />
                            <div class='bg-[#415464] relative text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Workshop
                                    Rooftops
                                </p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span>
                                    20KW
                                    On-grid
                                    Hybrid & Mono-crystalline 450W Solar Panels</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Phnom
                                    Penh
                                </p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> 2021</p>

                                <button data-target="infoPanel3"
                                    class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                            </div>
                        </div>
                        {{-- item 4 --}}
                        <div class="swiper-slide ">
                            <img src={{ asset('assets/images/projects/project-10.png') }} alt=""
                                class='w-full h-[200px]' />
                            <hr class='h-2 bg-[#A4CA62] border-none' />
                            <div class='bg-[#415464] relative text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Rooftop
                                    Ice
                                    Factory
                                </p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span>
                                    200KW
                                    & 450W
                                    Monocrystalline Solar Panels</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span>
                                    Battambang
                                    Province
                                </p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> 2022</p>

                                <button data-target="infoPanel4"
                                    class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                            </div>
                        </div>
                        {{-- item 5 --}}
                        <div class="swiper-slide ">
                            <img src={{ asset('assets/images/projects/project-3.png') }} alt=""
                                class='w-full h-[200px]' />
                            <hr class='h-2 bg-[#A4CA62] border-none' />
                            <div class='bg-[#415464] relative text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Cambodia
                                    Programme
                                    for Sustainable and Inclusive Growth in the Fisheries Sector & Capture Component
                                    (Capfish
                                    Capture)
                                </p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span> A
                                    Complete
                                    Photovoltaic System 5KWP Hybrid PV System Supply & Installation</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Home
                                    Taste
                                    Food, Siem Reap Province</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> April 2023
                                </p>

                                <button data-target="infoPanel5"
                                    class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                            </div>
                        </div>
                        {{-- item 6 --}}
                        <div class="swiper-slide ">
                            <img src={{ asset('assets/images/projects/project-5.png') }} alt=""
                                class='w-full h-[200px]' />
                            <hr class='h-2 bg-[#A4CA62] border-none' />
                            <div class='bg-[#415464] relative text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Solar
                                    Rooftop for Amaru Rice Warehouse</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span>
                                    90KWP
                                    Off-grid
                                    Hybrid Solar PV System ,“Eco Green Energy” Monocrystalline Solar PV of 550W</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Phnom
                                    Penh
                                </p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> November
                                    2023
                                </p>

                                <button data-target="infoPanel6"
                                    class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                            </div>
                        </div>
                        {{-- item 7 --}}
                        <div class="swiper-slide ">
                            <img src={{ asset('assets/images/projects/project-6.png') }} alt=""
                                class='w-full h-[200px]' />
                            <hr class='h-2 bg-[#A4CA62] border-none' />
                            <div class='bg-[#415464] relative text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Solar
                                    System
                                </p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span>
                                    Monocrystalline Module 450W</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> 2022</p>

                                <button data-target="infoPanel7"
                                    class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                            </div>
                        </div>
                        {{-- item 8 --}}
                        <div class="swiper-slide ">
                            <img src={{ asset('assets/images/projects/project-11.png') }} alt=""
                                class='w-full h-[200px]' />
                            <hr class='h-2 bg-[#A4CA62] border-none' />
                            <div class='bg-[#415464] relative text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Solar
                                    System
                                </p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span>
                                    Polycrystalline Module 340W</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> 2022</p>

                                <button data-target="infoPanel8"
                                    class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                            </div>
                        </div>
                        {{-- item 9 --}}
                        <div class="swiper-slide ">
                            <img src={{ asset('assets/images/projects/project-7.png') }} alt=""
                                class='w-full h-[200px]' />
                            <hr class='h-2 bg-[#A4CA62] border-none' />
                            <div class='bg-[#415464] relative text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Villas
                                    Phnom
                                    Penh
                                </p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span>
                                    10KW
                                    Terrace
                                    Top On-grid Hybrid Authority 50KW</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Phnom
                                    Penh
                                </p>

                                <button data-target="infoPanel9"
                                    class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                            </div>
                        </div>
                        {{-- item 10 --}}
                        <div class="swiper-slide ">
                            <img src={{ asset('assets/images/projects/project-12.png') }} alt=""
                                class='w-full h-[200px]' />
                            <hr class='h-2 bg-[#A4CA62] border-none' />
                            <div class='bg-[#415464] relative text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Villas
                                    Siem
                                    Reap</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span>
                                    10KW
                                    Terrace
                                    Top Off-grid Hybrid</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Siem
                                    Reap
                                    Province
                                </p>

                                <button data-target="infoPanel10"
                                    class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                            </div>
                        </div>
                        {{-- item 11 --}}
                        <div class="swiper-slide ">
                            <img src={{ asset('assets/images/projects/project-13.png') }} alt=""
                                class='w-full h-[200px]' />
                            <hr class='h-2 bg-[#A4CA62] border-none' />
                            <div class='bg-[#415464] relative text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Villas
                                    Phnom
                                    Penh
                                </p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span>
                                    10KW
                                    Rooftop
                                    On-grid</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Phnom
                                    Penh
                                </p>

                                <button data-target="infoPanel11"
                                    class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                            </div>
                        </div>
                        {{-- item 12 --}}
                        <div class="swiper-slide ">
                            <img src={{ asset('assets/images/projects/project-14.png') }} alt=""
                                class='w-full h-[200px]' />
                            <hr class='h-2 bg-[#A4CA62] border-none' />
                            <div class='bg-[#415464] relative text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Eco
                                    Village
                                </p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span>
                                    10KW
                                    Off-grid
                                    Rooftop</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Kampot
                                    Province</p>

                                <button data-target="infoPanel12"
                                    class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                            </div>
                        </div>
                        {{-- item 13 --}}
                        <div class="swiper-slide ">
                            <img src={{ asset('assets/images/projects/project-15.png') }} alt=""
                                class='w-full h-[200px]' />
                            <hr class='h-2 bg-[#A4CA62] border-none' />
                            <div class='bg-[#415464] relative text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Solar
                                    Irrigation</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span>
                                    Pepper
                                    Plantation, Kampot & Logan Plantation, Battambang</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Kampot
                                    &
                                    Battambang
                                    Provinces</p>
                                <button data-target="infoPanel13"
                                    class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                            </div>
                        </div>
                        {{-- item 14 --}}
                        <div class="swiper-slide ">
                            <img src={{ asset('assets/images/projects/project-16.png') }} alt=""
                                class='w-full h-[200px]' />
                            <hr class='h-2 bg-[#A4CA62] border-none' />
                            <div class='bg-[#415464] relative text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Farming
                                </p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span>
                                    Goat,
                                    Turkey,
                                    Chicken Farm & Fish Farm</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Kampong
                                    Speu &
                                    Kampong Cham Provinces</p>

                                <button data-target="infoPanel14"
                                    class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                            </div>
                        </div>
                        {{-- item 15 --}}
                        <div class="swiper-slide ">
                            <img src={{ asset('assets/images/projects/project-4.png') }} alt=""
                                class='w-full h-[200px]' />
                            <hr class='h-2 bg-[#A4CA62] border-none' />
                            <div class='bg-[#415464] relative text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Oral
                                    District Resort
                                </p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span>
                                    15KW
                                    Off-grid
                                    Solar Light</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Kampong
                                    Speu
                                    Province</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> 2022</p>

                                <button data-target="infoPanel15"
                                    class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                            </div>
                        </div>
                        {{-- item 16 --}}
                        <div class="swiper-slide ">
                            <img src={{ asset('assets/images/projects/project-8.png') }} alt=""
                                class='w-full h-[200px]' />
                            <hr class='h-2 bg-[#A4CA62] border-none' />
                            <div class='bg-[#415464] relative text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Oral
                                    District Resort
                                </p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span>
                                    200
                                    Solar
                                    Light</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Kampong
                                    Speu
                                    Province</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> 2022</p>

                                <button data-target="infoPanel16"
                                    class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                            </div>
                        </div>
                        {{-- item 17 --}}
                        <div class="swiper-slide ">
                            <img src={{ asset('assets/images/projects/project-17.png') }} alt=""
                                class='w-full h-[200px]' />
                            <hr class='h-2 bg-[#A4CA62] border-none' />
                            <div class='bg-[#415464] relative text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Solar
                                    Irrigation
                                    2022</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span>
                                    5Hp of
                                    Solar
                                    Water Pump System for Fish Farm</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Kampong
                                    Cham
                                    Province</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> 2022</p>

                                <button data-target="infoPanel166"
                                    class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                            </div>
                        </div>
                        {{-- item 18 --}}
                        <div class="swiper-slide ">
                            <img src={{ asset('assets/images/projects/project-18.png') }} alt=""
                                class='w-full h-[200px]' />
                            <hr class='h-2 bg-[#A4CA62] border-none' />
                            <div class='bg-[#415464] relative text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Solar
                                    Irrigation
                                    2023</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span>
                                    5Hp of
                                    Solar
                                    Irrigation System</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Banteay
                                    Meanchey
                                    Province</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> 2023</p>

                                <button data-target="infoPanel18"
                                    class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                            </div>
                        </div>
                        {{-- item 19 --}}
                        <div class="swiper-slide ">
                            <img src={{ asset('assets/images/projects/project-19.png') }} alt=""
                                class='w-full h-[200px]' />
                            <hr class='h-2 bg-[#A4CA62] border-none' />
                            <div class='bg-[#415464] relative text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Sahmakum
                                    Teang Tnaut
                                    Organizational (STT)</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span> 35
                                    Sets of
                                    Solar Street Light Supply & Installation for Community</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> Kandal
                                    Province</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> August 2024
                                </p>

                                <button data-target="infoPanel19"
                                    class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                            </div>
                        </div>
                        {{-- item 20 --}}
                        <div class="swiper-slide ">
                            <img src={{ asset('assets/images/projects/project-20.png') }} alt=""
                                class='w-full h-[200px]' />
                            <hr class='h-2 bg-[#A4CA62] border-none' />
                            <div class='bg-[#415464] relative text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span> Cambodia
                                    Climate
                                    Change Alliance - Phase3 (CCCA-lll)</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of Work:</span>
                                    340W
                                    Polycrystalline Solar Panels</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Location:</span> 20
                                    Health
                                    Centers &
                                    Water Stations in 3 Provinces, Cambodia</p>
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span> 2022</p>

                                <button data-target="infoPanel20"
                                    class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Overlay -->
            <div id="overlay" class="fixed inset-0 bg-black/50 z-[998] hidden"></div>
            <!-- Info 1 -->
            <div id="infoPanel1"
                class="infoPanel fixed top-0 right-[-100%] w-[90%] md:w-[500px] h-full bg-[#A4CA62] text-black p-4 shadow-lg transition-all duration-500 z-[999] overflow-y-auto">
                <button
                    class="closeBtn absolute top-4 right-4 text-black w-4 h-4 md:w-6 md:h-6 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>
                <div class="pt-8">
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Project :</span> Water Treatment
                        Plant</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Scope of Work :</span> National
                        Water Supply Authority 50KW</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Location :</span> Kampot Province
                    </p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Year :</span> 2021</p>

                    <div class="text-[10px] md:text-[12px]">
                        <p class="font-[600] mt-1">Overview</p>
                        <p class="">In April 2023, EGE Cambodia partnered with the Capfish Capture Programme to
                            support sustainable practices in the fisheries sector by installing a 5KWP Hybrid Photovoltaic
                            System at Home Taste Food in Siem Reap Province. This system was designed to provide reliable
                            and eco-friendly energy, reducing reliance on traditional electricity sources while enhancing
                            operational efficiency.</p>
                        <p class="font-[600] mt-1">Challenges</p>
                        <p class="">The fisheries sector faces increasing energy demands for refrigeration,
                            processing, and storage. High electricity costs and intermittent grid supply posed significant
                            challenges for Home Taste Food, a local fish processing facility. The need for a cost-effective,
                            sustainable energy solution was paramount.</p>
                        <p class="font-[600] mt-1">Solution</p>
                        <p class="">EGE Cambodia supplied and installed a 5KWP Hybrid PV System, combining solar
                            power with hybrid storage capabilities. This setup ensured continuous energy availability, even
                            during grid outages, while optimizing energy consumption for the facility’s operational needs.
                        </p>
                        <p class="font-[600] my-1">Impact</p>

                        <ol class="max-w-md space-y-1 text-black list-decimal list-inside ">
                            <li>
                                <span class="font-[600]">Environmental Benefits :</span>
                                <p class="">The system reduces carbon emissions by an estimated x tons annually,
                                    contributing to cleaner air and a healthier environment in the region.
                                    By shifting from traditional energy sources to solar, the project promotes sustainable
                                    energy adoption in Cambodia’s fisheries sector.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Cost Savings :</span>
                                <p class="">Home Taste Food has seen a xx% reduction in monthly energy costs,
                                    allowing the business to reinvest savings into operations and growth.
                                    Reduced reliance on grid electricity and elimination of diesel generator usage have
                                    further minimized operational expenses.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Operational Efficiency :</span>
                                <p class="">With reliable solar energy, the facility operates without interruptions,
                                    ensuring the quality and freshness of processed fish products.
                                    Hybrid storage provides backup power during outages, securing vital refrigeration and
                                    processing activities.
                                </p>
                            </li>
                        </ol>

                        <p class="font-[600] mt-1">Conclusion</p>
                        <p class="">This project showcases EGE Cambodia’s commitment to delivering innovative and
                            impactful solar solutions tailored to the needs of local businesses. By addressing both
                            environmental and financial challenges, the installation at Home Taste Food demonstrates the
                            potential of solar power to drive sustainable growth in Cambodia’s fisheries sector.</p>
                        <p class="font-[600] mt-1">Testimonial </p>
                        <p>“With this system, we’ve achieved more than cost savings—we’ve secured a reliable energy source
                            that supports our operations and contributes to sustainability,” says a representative from Home
                            Taste Food</p>
                    </div>
                </div>
            </div>
            <!-- Info 2 -->
            <div id="infoPanel2"
                class="infoPanel fixed top-0 right-[-100%] w-[90%] md:w-[500px] h-full bg-[#A4CA62] text-black p-4 shadow-lg transition-all duration-500 z-[999] overflow-y-auto">
                <button
                    class="closeBtn absolute top-4 right-4 text-black w-4 h-4 md:w-6 md:h-6 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>
                <div class="pt-8">
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Project :</span> Water Treatment
                        Plant</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Scope of Work :</span> 340W & 20KW
                        Polycrystalline Solar Panels</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Location :</span> Banteay Meanchey
                        Province</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Year :</span> April 2023</p>

                    <div class="text-[10px] md:text-[12px]">
                        <p class="font-[600] mt-1">Overview</p>
                        <p class="">In April 2023, EGE Cambodia partnered with the Capfish Capture Programme to
                            support sustainable practices in the fisheries sector by installing a 5KWP Hybrid Photovoltaic
                            System at Home Taste Food in Siem Reap Province. This system was designed to provide reliable
                            and eco-friendly energy, reducing reliance on traditional electricity sources while enhancing
                            operational efficiency.</p>
                        <p class="font-[600] mt-1">Challenges</p>
                        <p class="">The fisheries sector faces increasing energy demands for refrigeration,
                            processing, and storage. High electricity costs and intermittent grid supply posed significant
                            challenges for Home Taste Food, a local fish processing facility. The need for a cost-effective,
                            sustainable energy solution was paramount.</p>
                        <p class="font-[600] mt-1">Solution</p>
                        <p class="">EGE Cambodia supplied and installed a 5KWP Hybrid PV System, combining solar
                            power with hybrid storage capabilities. This setup ensured continuous energy availability, even
                            during grid outages, while optimizing energy consumption for the facility’s operational needs.
                        </p>
                        <p class="font-[600] my-1">Impact</p>

                        <ol class="max-w-md space-y-1 text-black list-decimal list-inside ">
                            <li>
                                <span class="font-[600]">Environmental Benefits :</span>
                                <p class="">The system reduces carbon emissions by an estimated x tons annually,
                                    contributing to cleaner air and a healthier environment in the region.
                                    By shifting from traditional energy sources to solar, the project promotes sustainable
                                    energy adoption in Cambodia’s fisheries sector.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Cost Savings :</span>
                                <p class="">Home Taste Food has seen a xx% reduction in monthly energy costs,
                                    allowing the business to reinvest savings into operations and growth.
                                    Reduced reliance on grid electricity and elimination of diesel generator usage have
                                    further minimized operational expenses.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Operational Efficiency :</span>
                                <p class="">With reliable solar energy, the facility operates without interruptions,
                                    ensuring the quality and freshness of processed fish products.
                                    Hybrid storage provides backup power during outages, securing vital refrigeration and
                                    processing activities.
                                </p>
                            </li>
                        </ol>

                        <p class="font-[600] mt-1">Conclusion</p>
                        <p class="">This project showcases EGE Cambodia’s commitment to delivering innovative and
                            impactful solar solutions tailored to the needs of local businesses. By addressing both
                            environmental and financial challenges, the installation at Home Taste Food demonstrates the
                            potential of solar power to drive sustainable growth in Cambodia’s fisheries sector.</p>
                        <p class="font-[600] mt-1">Testimonial </p>
                        <p>“With this system, we’ve achieved more than cost savings—we’ve secured a reliable energy source
                            that supports our operations and contributes to sustainability,” says a representative from Home
                            Taste Food</p>
                    </div>
                </div>
            </div>
            <!-- Info 3-->
            <div id="infoPanel3"
                class="infoPanel fixed top-0 right-[-100%] w-[90%] md:w-[500px] h-full bg-[#A4CA62] text-black p-4 shadow-lg transition-all duration-500 z-[999] overflow-y-auto">
                <button
                    class="closeBtn absolute top-4 right-4 text-black w-4 h-4 md:w-6 md:h-6 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>
                <div class="pt-8">
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Project :</span> Workshop Rooftops
                    </p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Scope of Work :</span> 20KW On-grid
                        Hybrid & Mono-crystalline 450W Solar Panels</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Location :</span> Phnom Penh</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Year :</span> 2021</p>

                    <div class="text-[10px] md:text-[12px]">
                        <p class="font-[600] mt-1">Overview</p>
                        <p class="">In April 2023, EGE Cambodia partnered with the Capfish Capture Programme to
                            support sustainable practices in the fisheries sector by installing a 5KWP Hybrid Photovoltaic
                            System at Home Taste Food in Siem Reap Province. This system was designed to provide reliable
                            and eco-friendly energy, reducing reliance on traditional electricity sources while enhancing
                            operational efficiency.</p>
                        <p class="font-[600] mt-1">Challenges</p>
                        <p class="">The fisheries sector faces increasing energy demands for refrigeration,
                            processing, and storage. High electricity costs and intermittent grid supply posed significant
                            challenges for Home Taste Food, a local fish processing facility. The need for a cost-effective,
                            sustainable energy solution was paramount.</p>
                        <p class="font-[600] mt-1">Solution</p>
                        <p class="">EGE Cambodia supplied and installed a 5KWP Hybrid PV System, combining solar
                            power with hybrid storage capabilities. This setup ensured continuous energy availability, even
                            during grid outages, while optimizing energy consumption for the facility’s operational needs.
                        </p>
                        <p class="font-[600] my-1">Impact</p>

                        <ol class="max-w-md space-y-1 text-black list-decimal list-inside ">
                            <li>
                                <span class="font-[600]">Environmental Benefits :</span>
                                <p class="">The system reduces carbon emissions by an estimated x tons annually,
                                    contributing to cleaner air and a healthier environment in the region.
                                    By shifting from traditional energy sources to solar, the project promotes sustainable
                                    energy adoption in Cambodia’s fisheries sector.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Cost Savings :</span>
                                <p class="">Home Taste Food has seen a xx% reduction in monthly energy costs,
                                    allowing the business to reinvest savings into operations and growth.
                                    Reduced reliance on grid electricity and elimination of diesel generator usage have
                                    further minimized operational expenses.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Operational Efficiency :</span>
                                <p class="">With reliable solar energy, the facility operates without interruptions,
                                    ensuring the quality and freshness of processed fish products.
                                    Hybrid storage provides backup power during outages, securing vital refrigeration and
                                    processing activities.
                                </p>
                            </li>
                        </ol>

                        <p class="font-[600] mt-1">Conclusion</p>
                        <p class="">This project showcases EGE Cambodia’s commitment to delivering innovative and
                            impactful solar solutions tailored to the needs of local businesses. By addressing both
                            environmental and financial challenges, the installation at Home Taste Food demonstrates the
                            potential of solar power to drive sustainable growth in Cambodia’s fisheries sector.</p>
                        <p class="font-[600] mt-1">Testimonial </p>
                        <p>“With this system, we’ve achieved more than cost savings—we’ve secured a reliable energy source
                            that supports our operations and contributes to sustainability,” says a representative from Home
                            Taste Food</p>
                    </div>
                </div>
            </div>
            <!-- Info 4-->
            <div id="infoPanel4"
                class="infoPanel fixed top-0 right-[-100%] w-[90%] md:w-[500px] h-full bg-[#A4CA62] text-black p-4 shadow-lg transition-all duration-500 z-[999] overflow-y-auto">
                <button
                    class="closeBtn absolute top-4 right-4 text-black w-4 h-4 md:w-6 md:h-6 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>
                <div class="pt-8">
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Project :</span> Rooftop Ice
                        Factory
                    </p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Scope of Work :</span> 200KW & 450W
                        Monocrystalline Solar Panels</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Location :</span> Battambang
                        Province
                    </p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Year :</span> 2022</p>

                    <div class="text-[10px] md:text-[12px]">
                        <p class="font-[600] mt-1">Overview</p>
                        <p class="">In April 2023, EGE Cambodia partnered with the Capfish Capture Programme to
                            support sustainable practices in the fisheries sector by installing a 5KWP Hybrid Photovoltaic
                            System at Home Taste Food in Siem Reap Province. This system was designed to provide reliable
                            and eco-friendly energy, reducing reliance on traditional electricity sources while enhancing
                            operational efficiency.</p>
                        <p class="font-[600] mt-1">Challenges</p>
                        <p class="">The fisheries sector faces increasing energy demands for refrigeration,
                            processing, and storage. High electricity costs and intermittent grid supply posed significant
                            challenges for Home Taste Food, a local fish processing facility. The need for a cost-effective,
                            sustainable energy solution was paramount.</p>
                        <p class="font-[600] mt-1">Solution</p>
                        <p class="">EGE Cambodia supplied and installed a 5KWP Hybrid PV System, combining solar
                            power with hybrid storage capabilities. This setup ensured continuous energy availability, even
                            during grid outages, while optimizing energy consumption for the facility’s operational needs.
                        </p>
                        <p class="font-[600] mt-1">Impact</p>

                        <ol class="max-w-md space-y-1 text-black list-decimal list-inside ">
                            <li>
                                <span class="font-[600]">Environmental Benefits :</span>
                                <p class="">The system reduces carbon emissions by an estimated x tons annually,
                                    contributing to cleaner air and a healthier environment in the region.
                                    By shifting from traditional energy sources to solar, the project promotes sustainable
                                    energy adoption in Cambodia’s fisheries sector.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Cost Savings :</span>
                                <p class="">Home Taste Food has seen a xx% reduction in monthly energy costs,
                                    allowing the business to reinvest savings into operations and growth.
                                    Reduced reliance on grid electricity and elimination of diesel generator usage have
                                    further minimized operational expenses.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Operational Efficiency :</span>
                                <p class="">With reliable solar energy, the facility operates without interruptions,
                                    ensuring the quality and freshness of processed fish products.
                                    Hybrid storage provides backup power during outages, securing vital refrigeration and
                                    processing activities.
                                </p>
                            </li>
                        </ol>

                        <p class="font-[600] mt-1">Conclusion</p>
                        <p class="">This project showcases EGE Cambodia’s commitment to delivering innovative and
                            impactful solar solutions tailored to the needs of local businesses. By addressing both
                            environmental and financial challenges, the installation at Home Taste Food demonstrates the
                            potential of solar power to drive sustainable growth in Cambodia’s fisheries sector.</p>
                        <p class="font-[600] mt-1">Testimonial </p>
                        <p>“With this system, we’ve achieved more than cost savings—we’ve secured a reliable energy source
                            that supports our operations and contributes to sustainability,” says a representative from Home
                            Taste Food</p>
                    </div>
                </div>
            </div>
            <!-- Info 5-->
            <div id="infoPanel5"
                class="infoPanel fixed top-0 right-[-100%] w-[90%] md:w-[500px] h-full bg-[#A4CA62] text-black p-4 shadow-lg transition-all duration-500 z-[999] overflow-y-auto">
                <button
                    class="closeBtn absolute top-4 right-4 text-black w-4 h-4 md:w-6 md:h-6 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>
                <div class="pt-8">
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Project :</span> Cambodia Programme
                        for Sustainable and Inclusive Growth in the Fisheries Sector & Capture Component (Capfish
                        Capture)
                    </p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Scope of Work :</span> A Complete
                        Photovoltaic System 5KWP Hybrid PV System Supply & Installation</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Location :</span> Home Taste Food,
                        Siem Reap Province</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Year :</span> April 2023</p>

                    <div class="text-[10px] md:text-[12px]">
                        <p class="font-[600] mt-1">Overview</p>
                        <p class="">In April 2023, EGE Cambodia partnered with the Capfish Capture Programme to
                            support sustainably practices in the fisheries sector by installing a 5KWP Hybrid Photovoltaic
                            System at Home Taste Food in Siem Reap Province. This system was designed to provide reliable
                            and eco-friendly energy, reducing reliance on traditional electricity sources while enhancing
                            operational efficiency.</p>
                        <p class="font-[600] mt-1">Challenges</p>
                        <p class="">The fisheries sector faces increasing energy demands for refrigeration,
                            processing, and storage. High electricity costs and intermittent grid supply posed significant
                            challenges for Home Taste Food, a local fish processing facility. The need for a cost-effective,
                            sustainable energy solution was paramount.</p>
                        <p class="font-[600] mt-1">Solution</p>
                        <p class="">EGE Cambodia supplied and installed a 5KWP Hybrid PV System, combining solar
                            power with hybrid storage capabilities. This setup ensured continuous energy availability, even
                            during grid outages, while optimizing energy consumption for the facility’s operational needs.
                        </p>
                        <p class="font-[600] my-1">Impact</p>

                        <ol class="max-w-md space-y-1 text-black list-decimal list-inside ">
                            <li>
                                <span class="font-[600]">Environmental Benefits :</span>
                                <p class="">The system reduces carbon emissions by an estimated x tons annually,
                                    contributing to cleaner air and a healthier environment in the region.
                                    By shifting from traditional energy sources to solar, the project promotes sustainable
                                    energy adoption in Cambodia’s fisheries sector.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Cost Savings :</span>
                                <p class="">Home Taste Food has seen a xx% reduction in monthly energy costs,
                                    allowing the business to reinvest savings into operations and growth.
                                    Reduced reliance on grid electricity and elimination of diesel generator usage have
                                    further minimized operational expenses.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Operational Efficiency :</span>
                                <p class="">With reliable solar energy, the facility operates without interruptions,
                                    ensuring the quality and freshness of processed fish products.
                                    Hybrid storage provides backup power during outages, securing vital refrigeration and
                                    processing activities.
                                </p>
                            </li>
                        </ol>

                        <p class="font-[600] mt-1">Conclusion</p>
                        <p class="">This project showcases EGE Cambodia’s commitment to delivering innovative and
                            impactful solar solutions tailored to the needs of local businesses. By addressing both
                            environmental and financial challenges, the installation at Home Taste Food demonstrates the
                            potential of solar power to drive sustainable growth in Cambodia’s fisheries sector.</p>
                        <p class="font-[600] mt-1">Testimonial </p>
                        <p>“With this system, we’ve achieved more than cost savings—we’ve secured a reliable energy source
                            that supports our operations and contributes to sustainability,” says a representative from Home
                            Taste Food</p>
                    </div>
                </div>
            </div>
            <!-- Info 6-->
            <div id="infoPanel6"
                class="infoPanel fixed top-0 right-[-100%] w-[90%] md:w-[500px] h-full bg-[#A4CA62] text-black p-4 shadow-lg transition-all duration-500 z-[999] overflow-y-auto">
                <button
                    class="closeBtn absolute top-4 right-4 text-black w-4 h-4 md:w-6 md:h-6 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>
                <div class="pt-8">
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Project :</span> Solar Rooftop for
                        Amaru Rice Warehouse</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Scope of Work :</span> 90KWP
                        Off-grid Hybrid Solar PV System , “Eco Green Energy” Monocrystalline Solar PV of 550W</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Location :</span> Phnom Penh</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Year :</span> November 2023</p>

                    <div class="text-[10px] md:text-[12px]">
                        <p class="font-[600] mt-1">Overview</p>
                        <p class="">In April 2023, EGE Cambodia partnered with the Capfish Capture Programme to
                            support sustainable practices in the fisheries sector by installing a 5KWP Hybrid Photovoltaic
                            System at Home Taste Food in Siem Reap Province. This system was designed to provide reliable
                            and eco-friendly energy, reducing reliance on traditional electricity sources while enhancing
                            operational efficiency.</p>
                        <p class="font-[600] mt-1">Challenges</p>
                        <p class="">The fisheries sector faces increasing energy demands for refrigeration,
                            processing, and storage. High electricity costs and intermittent grid supply posed significant
                            challenges for Home Taste Food, a local fish processing facility. The need for a cost-effective,
                            sustainable energy solution was paramount.</p>
                        <p class="font-[600] mt-1">Solution</p>
                        <p class="">EGE Cambodia supplied and installed a 5KWP Hybrid PV System, combining solar
                            power with hybrid storage capabilities. This setup ensured continuous energy availability, even
                            during grid outages, while optimizing energy consumption for the facility’s operational needs.
                        </p>
                        <p class="font-[600] my-1">Impact</p>

                        <ol class="max-w-md space-y-1 text-black list-decimal list-inside ">
                            <li>
                                <span class="font-[600]">Environmental Benefits :</span>
                                <p class="">The system reduces carbon emissions by an estimated x tons annually,
                                    contributing to cleaner air and a healthier environment in the region.
                                    By shifting from traditional energy sources to solar, the project promotes sustainable
                                    energy adoption in Cambodia’s fisheries sector.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Cost Savings :</span>
                                <p class="">Home Taste Food has seen a xx% reduction in monthly energy costs,
                                    allowing the business to reinvest savings into operations and growth.
                                    Reduced reliance on grid electricity and elimination of diesel generator usage have
                                    further minimized operational expenses.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Operational Efficiency :</span>
                                <p class="">With reliable solar energy, the facility operates without interruptions,
                                    ensuring the quality and freshness of processed fish products.
                                    Hybrid storage provides backup power during outages, securing vital refrigeration and
                                    processing activities.
                                </p>
                            </li>
                        </ol>

                        <p class="font-[600] mt-1">Conclusion</p>
                        <p class="">This project showcases EGE Cambodia’s commitment to delivering innovative and
                            impactful solar solutions tailored to the needs of local businesses. By addressing both
                            environmental and financial challenges, the installation at Home Taste Food demonstrates the
                            potential of solar power to drive sustainable growth in Cambodia’s fisheries sector.</p>
                        <p class="font-[600] mt-1">Testimonial </p>
                        <p>“With this system, we’ve achieved more than cost savings—we’ve secured a reliable energy source
                            that supports our operations and contributes to sustainability,” says a representative from Home
                            Taste Food</p>
                    </div>
                </div>
            </div>
            <!-- Info 7-->
            <div id="infoPanel7"
                class="infoPanel fixed top-0 right-[-100%] w-[90%] md:w-[500px] h-full bg-[#A4CA62] text-black p-4 shadow-lg transition-all duration-500 z-[999] overflow-y-auto">
                <button
                    class="closeBtn absolute top-4 right-4 text-black w-4 h-4 md:w-6 md:h-6 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>
                <div class="pt-8">
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Project :</span> Solar System</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Scope of Work :</span>
                        Monocrystalline Module 450W</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Year :</span> 2022</p>

                    <div class="text-[10px] md:text-[12px]">
                        <p class="font-[600] mt-1">Overview</p>
                        <p class="">In April 2023, EGE Cambodia partnered with the Capfish Capture Programme to
                            support sustainable practices in the fisheries sector by installing a 5KWP Hybrid Photovoltaic
                            System at Home Taste Food in Siem Reap Province. This system was designed to provide reliable
                            and eco-friendly energy, reducing reliance on traditional electricity sources while enhancing
                            operational efficiency.</p>
                        <p class="font-[600] mt-1">Challenges</p>
                        <p class="">The fisheries sector faces increasing energy demands for refrigeration,
                            processing, and storage. High electricity costs and intermittent grid supply posed significant
                            challenges for Home Taste Food, a local fish processing facility. The need for a cost-effective,
                            sustainable energy solution was paramount.</p>
                        <p class="font-[600] mt-1">Solution</p>
                        <p class="">EGE Cambodia supplied and installed a 5KWP Hybrid PV System, combining solar
                            power with hybrid storage capabilities. This setup ensured continuous energy availability, even
                            during grid outages, while optimizing energy consumption for the facility’s operational needs.
                        </p>
                        <p class="font-[600] my-1">Impact</p>

                        <ol class="max-w-md space-y-1 text-black list-decimal list-inside ">
                            <li>
                                <span class="font-[600]">Environmental Benefits :</span>
                                <p class="">The system reduces carbon emissions by an estimated x tons annually,
                                    contributing to cleaner air and a healthier environment in the region.
                                    By shifting from traditional energy sources to solar, the project promotes sustainable
                                    energy adoption in Cambodia’s fisheries sector.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Cost Savings :</span>
                                <p class="">Home Taste Food has seen a xx% reduction in monthly energy costs,
                                    allowing the business to reinvest savings into operations and growth.
                                    Reduced reliance on grid electricity and elimination of diesel generator usage have
                                    further minimized operational expenses.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Operational Efficiency :</span>
                                <p class="">With reliable solar energy, the facility operates without interruptions,
                                    ensuring the quality and freshness of processed fish products.
                                    Hybrid storage provides backup power during outages, securing vital refrigeration and
                                    processing activities.
                                </p>
                            </li>
                        </ol>

                        <p class="font-[600] mt-1">Conclusion</p>
                        <p class="">This project showcases EGE Cambodia’s commitment to delivering innovative and
                            impactful solar solutions tailored to the needs of local businesses. By addressing both
                            environmental and financial challenges, the installation at Home Taste Food demonstrates the
                            potential of solar power to drive sustainable growth in Cambodia’s fisheries sector.</p>
                        <p class="font-[600] mt-1">Testimonial </p>
                        <p>“With this system, we’ve achieved more than cost savings—we’ve secured a reliable energy source
                            that supports our operations and contributes to sustainability,” says a representative from Home
                            Taste Food</p>
                    </div>
                </div>
            </div>
            <!-- Info 8-->
            <div id="infoPanel8"
                class="infoPanel fixed top-0 right-[-100%] w-[90%] md:w-[500px] h-full bg-[#A4CA62] text-black p-4 shadow-lg transition-all duration-500 z-[999] overflow-y-auto">
                <button
                    class="closeBtn absolute top-4 right-4 text-black w-4 h-4 md:w-6 md:h-6 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>
                <div class="pt-8">
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Project :</span> Solar System</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Scope of Work :</span>
                        Polycrystalline Module 340W</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Year :</span> 2022</p>

                    <div class="text-[10px] md:text-[12px]">
                        <p class="font-[600] mt-1">Overview</p>
                        <p class="">In April 2023, EGE Cambodia partnered with the Capfish Capture Programme to
                            support sustainable practices in the fisheries sector by installing a 5KWP Hybrid Photovoltaic
                            System at Home Taste Food in Siem Reap Province. This system was designed to provide reliable
                            and eco-friendly energy, reducing reliance on traditional electricity sources while enhancing
                            operational efficiency.</p>
                        <p class="font-[600] mt-1">Challenges</p>
                        <p class="">The fisheries sector faces increasing energy demands for refrigeration,
                            processing, and storage. High electricity costs and intermittent grid supply posed significant
                            challenges for Home Taste Food, a local fish processing facility. The need for a cost-effective,
                            sustainable energy solution was paramount.</p>
                        <p class="font-[600] mt-1">Solution</p>
                        <p class="">EGE Cambodia supplied and installed a 5KWP Hybrid PV System, combining solar
                            power with hybrid storage capabilities. This setup ensured continuous energy availability, even
                            during grid outages, while optimizing energy consumption for the facility’s operational needs.
                        </p>
                        <p class="font-[600] my-1">Impact</p>

                        <ol class="max-w-md space-y-1 text-black list-decimal list-inside ">
                            <li>
                                <span class="font-[600]">Environmental Benefits :</span>
                                <p class="">The system reduces carbon emissions by an estimated x tons annually,
                                    contributing to cleaner air and a healthier environment in the region.
                                    By shifting from traditional energy sources to solar, the project promotes sustainable
                                    energy adoption in Cambodia’s fisheries sector.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Cost Savings :</span>
                                <p class="">Home Taste Food has seen a xx% reduction in monthly energy costs,
                                    allowing the business to reinvest savings into operations and growth.
                                    Reduced reliance on grid electricity and elimination of diesel generator usage have
                                    further minimized operational expenses.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Operational Efficiency :</span>
                                <p class="">With reliable solar energy, the facility operates without interruptions,
                                    ensuring the quality and freshness of processed fish products.
                                    Hybrid storage provides backup power during outages, securing vital refrigeration and
                                    processing activities.
                                </p>
                            </li>
                        </ol>

                        <p class="font-[600] mt-1">Conclusion</p>
                        <p class="">This project showcases EGE Cambodia’s commitment to delivering innovative and
                            impactful solar solutions tailored to the needs of local businesses. By addressing both
                            environmental and financial challenges, the installation at Home Taste Food demonstrates the
                            potential of solar power to drive sustainable growth in Cambodia’s fisheries sector.</p>
                        <p class="font-[600] mt-1">Testimonial </p>
                        <p>“With this system, we’ve achieved more than cost savings—we’ve secured a reliable energy source
                            that supports our operations and contributes to sustainability,” says a representative from Home
                            Taste Food</p>
                    </div>
                </div>
            </div>
            <!-- Info 9-->
            <div id="infoPanel9"
                class="infoPanel fixed top-0 right-[-100%] w-[90%] md:w-[500px] h-full bg-[#A4CA62] text-black p-4 shadow-lg transition-all duration-500 z-[999] overflow-y-auto">
                <button
                    class="closeBtn absolute top-4 right-4 text-black w-4 h-4 md:w-6 md:h-6 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>
                <div class="pt-8">
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Project :</span> Villas Phnom
                        Penh
                    </p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Scope of Work :</span> 10KW
                        Terrace Top On-grid Hybrid Authority 50KW</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Location :</span> Phnom Penh</p>

                    <div class="text-[10px] md:text-[12px]">
                        <p class="font-[600] mt-1">Overview</p>
                        <p class="">In April 2023, EGE Cambodia partnered with the Capfish Capture Programme to
                            support sustainable practices in the fisheries sector by installing a 5KWP Hybrid Photovoltaic
                            System at Home Taste Food in Siem Reap Province. This system was designed to provide reliable
                            and eco-friendly energy, reducing reliance on traditional electricity sources while enhancing
                            operational efficiency.</p>
                        <p class="font-[600] mt-1">Challenges</p>
                        <p class="">The fisheries sector faces increasing energy demands for refrigeration,
                            processing, and storage. High electricity costs and intermittent grid supply posed significant
                            challenges for Home Taste Food, a local fish processing facility. The need for a cost-effective,
                            sustainable energy solution was paramount.</p>
                        <p class="font-[600] mt-1">Solution</p>
                        <p class="">EGE Cambodia supplied and installed a 5KWP Hybrid PV System, combining solar
                            power with hybrid storage capabilities. This setup ensured continuous energy availability, even
                            during grid outages, while optimizing energy consumption for the facility’s operational needs.
                        </p>
                        <p class="font-[600] my-1">Impact</p>

                        <ol class="max-w-md space-y-1 text-black list-decimal list-inside ">
                            <li>
                                <span class="font-[600]">Environmental Benefits :</span>
                                <p class="">The system reduces carbon emissions by an estimated x tons annually,
                                    contributing to cleaner air and a healthier environment in the region.
                                    By shifting from traditional energy sources to solar, the project promotes sustainable
                                    energy adoption in Cambodia’s fisheries sector.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Cost Savings :</span>
                                <p class="">Home Taste Food has seen a xx% reduction in monthly energy costs,
                                    allowing the business to reinvest savings into operations and growth.
                                    Reduced reliance on grid electricity and elimination of diesel generator usage have
                                    further minimized operational expenses.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Operational Efficiency :</span>
                                <p class="">With reliable solar energy, the facility operates without interruptions,
                                    ensuring the quality and freshness of processed fish products.
                                    Hybrid storage provides backup power during outages, securing vital refrigeration and
                                    processing activities.
                                </p>
                            </li>
                        </ol>

                        <p class="font-[600] mt-1">Conclusion</p>
                        <p class="">This project showcases EGE Cambodia’s commitment to delivering innovative and
                            impactful solar solutions tailored to the needs of local businesses. By addressing both
                            environmental and financial challenges, the installation at Home Taste Food demonstrates the
                            potential of solar power to drive sustainable growth in Cambodia’s fisheries sector.</p>
                        <p class="font-[600] mt-1">Testimonial </p>
                        <p>“With this system, we’ve achieved more than cost savings—we’ve secured a reliable energy source
                            that supports our operations and contributes to sustainability,” says a representative from Home
                            Taste Food</p>
                    </div>
                </div>
            </div>
            <!-- Info 10-->
            <div id="infoPanel10"
                class="infoPanel fixed top-0 right-[-100%] w-[90%] md:w-[500px] h-full bg-[#A4CA62] text-black p-4 shadow-lg transition-all duration-500 z-[999] overflow-y-auto">
                <but8n
                    class="closeBtn absolute top-4 right-4 text-black w-4 h-4 md:w-6 md:h-6 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </but8n>
                <div class="pt-8">
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Project :</span> Villas Siem Reap
                    </p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Scope of Work :</span> 10KW
                        Terrace Top Off-grid Hybrid</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Location :</span> Siem Reap
                        Province
                    </p>
                    <div class="text-[10px] md:text-[12px]">
                        <p class="font-[600] mt-1">Overview</p>
                        <p class="">In April 2023, EGE Cambodia partnered with the Capfish Capture Programme to
                            support sustainable practices in the fisheries sector by installing a 5KWP Hybrid Photovoltaic
                            System at Home Taste Food in Siem Reap Province. This system was designed to provide reliable
                            and eco-friendly energy, reducing reliance on traditional electricity sources while enhancing
                            operational efficiency.</p>
                        <p class="font-[600] mt-1">Challenges</p>
                        <p class="">The fisheries sector faces increasing energy demands for refrigeration,
                            processing, and storage. High electricity costs and intermittent grid supply posed significant
                            challenges for Home Taste Food, a local fish processing facility. The need for a cost-effective,
                            sustainable energy solution was paramount.</p>
                        <p class="font-[600] mt-1">Solution</p>
                        <p class="">yGE Cambodia supplied and installed a 5KWP Hybrid PV System, combining solar
                            power with hybrid storage capabilities. This setup ensured continuous energy availability, even
                            during grid outages, while optimizing energy consumption for the facility’s operational needs.
                        </p>
                        <p class="font-[600] mt-1">Impact</p>

                        <ol class="max-w-md space-y-1 text-black list-decimal list-inside ">
                            <li>
                                <span class="font-[600]">Environmental Benefits :</span>
                                <p class="">The system reduces carbon emissions by an estimated x tons annually,
                                    contributing to cleaner air and a healthier environment in the region.
                                    By shifting from traditional energy sources to solar, the project promotes sustainable
                                    energy adoption in Cambodia’s fisheries sector.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Cost Savings :</span>
                                <p class="">Home Taste Food has seen a xx% reduction in monthly energy costs,
                                    allowing the business to reinvest savings into operations and growth.
                                    Reduced reliance on grid electricity and elimination of diesel generator usage have
                                    further minimized operational expenses.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Operational Efficiency :</span>
                                <p class="">With reliable solar energy, the facility operates without interruptions,
                                    ensuring the quality and freshness of processed fish products.
                                    Hybrid storage provides backup power during outages, securing vital refrigeration and
                                    processing activities.
                                </p>
                            </li>
                        </ol>

                        <p class="font-[600] mt-1">Conclusion</p>
                        <p class="">This project showcases EGE Cambodia’s commitment to delivering innovative and
                            impactful solar solutions tailored to the needs of local businesses. By addressing both
                            environmental and financial challenges, the installation at Home Taste Food demonstrates the
                            potential of solar power to drive sustainable growth in Cambodia’s fisheries sector.</p>
                        <p class="font-[600] mt-1">Testimonial </p>
                        <p>“With this system, we’ve achieved more than cost savings—we’ve secured a reliable energy source
                            that supports our operations and contributes to sustainability,” says a representative from Home
                            Taste Food</p>
                    </div>
                </div>
            </div>
            <!-- Info 11-->
            <div id="infoPanel11"
                class="infoPanel fixed top-0 right-[-100%] w-[90%] md:w-[500px] h-full bg-[#A4CA62] text-black p-4 shadow-lg transition-all duration-500 z-[999] overflow-y-auto">
                <but8n
                    class="closeBtn absolute top-4 right-4 text-black w-4 h-4 md:w-6 md:h-6 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </but8n>
                <div class="pt-8">
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Project :</span> Villas Phnom
                        Penh
                    </p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Scope of Work :</span> 10KW
                        Rooftop On-grid</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Location :</span> Phnom Penh</p>

                    <div class="text-[10px] md:text-[12px]">
                        <p class="font-[600] mt-1">Overview</p>
                        <p class="">In April 2023, EGE Cambodia partnered with the Capfish Capture Programme to
                            support sustainable practices in the fisheries sector by installing a 5KWP Hybrid Photovoltaic
                            System at Home Taste Food in Siem Reap Province. This system was designed to provide reliable
                            and eco-friendly energy, reducing reliance on traditional electricity sources while enhancing
                            operational efficiency.</p>
                        <p class="font-[600] mt-1">Challenges</p>
                        <p class="">The fisheries sector faces increasing energy demands for refrigeration,
                            processing, and storage. High electricity costs and intermittent grid supply posed significant
                            challenges for Home Taste Food, a local fish processing facility. The need for a cost-effective,
                            sustainable energy solution was paramount.</p>
                        <p class="font-[600] mt-1">Solution</p>
                        <p class="">yGE Cambodia supplied and installed a 5KWP Hybrid PV System, combining solar
                            power with hybrid storage capabilities. This setup ensured continuous energy availability, even
                            during grid outages, while optimizing energy consumption for the facility’s operational needs.
                        </p>
                        <p class="font-[600] mt-1">Impact</p>

                        <ol class="max-w-md space-y-1 text-black list-decimal list-inside ">
                            <li>
                                <span class="font-[600]">Environmental Benefits :</span>
                                <p class="">The system reduces carbon emissions by an estimated x tons annually,
                                    contributing to cleaner air and a healthier environment in the region.
                                    By shifting from traditional energy sources to solar, the project promotes sustainable
                                    energy adoption in Cambodia’s fisheries sector.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Cost Savings :</span>
                                <p class="">Home Taste Food has seen a xx% reduction in monthly energy costs,
                                    allowing the business to reinvest savings into operations and growth.
                                    Reduced reliance on grid electricity and elimination of diesel generator usage have
                                    further minimized operational expenses.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Operational Efficiency :</span>
                                <p class="">With reliable solar energy, the facility operates without interruptions,
                                    ensuring the quality and freshness of processed fish products.
                                    Hybrid storage provides backup power during outages, securing vital refrigeration and
                                    processing activities.
                                </p>
                            </li>
                        </ol>

                        <p class="font-[600] mt-1">Conclusion</p>
                        <p class="">This project showcases EGE Cambodia’s commitment to delivering innovative and
                            impactful solar solutions tailored to the needs of local businesses. By addressing both
                            environmental and financial challenges, the installation at Home Taste Food demonstrates the
                            potential of solar power to drive sustainable growth in Cambodia’s fisheries sector.</p>
                        <p class="font-[600] mt-1">Testimonial </p>
                        <p>“With this system, we’ve achieved more than cost savings—we’ve secured a reliable energy source
                            that supports our operations and contributes to sustainability,” says a representative from Home
                            Taste Food</p>
                    </div>
                </div>
            </div>
            <!-- Info 12-->
            <div id="infoPanel12"
                class="infoPanel fixed top-0 right-[-100%] w-[90%] md:w-[500px] h-full bg-[#A4CA62] text-black p-4 shadow-lg transition-all duration-500 z-[999] overflow-y-auto">
                <but8n
                    class="closeBtn absolute top-4 right-4 text-black w-4 h-4 md:w-6 md:h-6 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </but8n>
                <div class="pt-8">
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Project :</span> Eco Village</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Scope of Work :</span> 10KW
                        Off-grid Rooftop</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Location :</span> Kampot Province
                    </p>
                    <p class="mb-1 text-[12px]"><span class="font-[600]">Year :</span> April 2023</p>

                    <div class="text-[10px] md:text-[12px]">
                        <p class="font-[600] mt-1">Overview</p>
                        <p class="">In April 2023, EGE Cambodia partnered with the Capfish Capture Programme to
                            support sustainable practices in the fisheries sector by installing a 5KWP Hybrid Photovoltaic
                            System at Home Taste Food in Siem Reap Province. This system was designed to provide reliable
                            and eco-friendly energy, reducing reliance on traditional electricity sources while enhancing
                            operational efficiency.</p>
                        <p class="font-[600] mt-1">Challenges</p>
                        <p class="">The fisheries sector faces increasing energy demands for refrigeration,
                            processing, and storage. High electricity costs and intermittent grid supply posed significant
                            challenges for Home Taste Food, a local fish processing facility. The need for a cost-effective,
                            sustainable energy solution was paramount.</p>
                        <p class="font-[600] mt-1">Solution</p>
                        <p class="">yGE Cambodia supplied and installed a 5KWP Hybrid PV System, combining solar
                            power with hybrid storage capabilities. This setup ensured continuous energy availability, even
                            during grid outages, while optimizing energy consumption for the facility’s operational needs.
                        </p>
                        <p class="font-[600] mt-1">Impact</p>

                        <ol class="max-w-md space-y-1 text-black list-decimal list-inside ">
                            <li>
                                <span class="font-[600]">Environmental Benefits :</span>
                                <p class="">The system reduces carbon emissions by an estimated x tons annually,
                                    contributing to cleaner air and a healthier environment in the region.
                                    By shifting from traditional energy sources to solar, the project promotes sustainable
                                    energy adoption in Cambodia’s fisheries sector.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Cost Savings :</span>
                                <p class="">Home Taste Food has seen a xx% reduction in monthly energy costs,
                                    allowing the business to reinvest savings into operations and growth.
                                    Reduced reliance on grid electricity and elimination of diesel generator usage have
                                    further minimized operational expenses.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Operational Efficiency :</span>
                                <p class="">With reliable solar energy, the facility operates without interruptions,
                                    ensuring the quality and freshness of processed fish products.
                                    Hybrid storage provides backup power during outages, securing vital refrigeration and
                                    processing activities.
                                </p>
                            </li>
                        </ol>

                        <p class="font-[600] mt-1">Conclusion</p>
                        <p class="">This project showcases EGE Cambodia’s commitment to delivering innovative and
                            impactful solar solutions tailored to the needs of local businesses. By addressing both
                            environmental and financial challenges, the installation at Home Taste Food demonstrates the
                            potential of solar power to drive sustainable growth in Cambodia’s fisheries sector.</p>
                        <p class="font-[600] mt-1">Testimonial </p>
                        <p>“With this system, we’ve achieved more than cost savings—we’ve secured a reliable energy source
                            that supports our operations and contributes to sustainability,” says a representative from Home
                            Taste Food</p>
                    </div>
                </div>
            </div>
            <!-- Info 13-->
            <div id="infoPanel13"
                class="infoPanel fixed top-0 right-[-100%] w-[90%] md:w-[500px] h-full bg-[#A4CA62] text-black p-4 shadow-lg transition-all duration-500 z-[999] overflow-y-auto">
                <but8n
                    class="closeBtn absolute top-4 right-4 text-black w-4 h-4 md:w-6 md:h-6 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </but8n>
                <div class="pt-8">
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Project :</span> Solar Irrigation
                    </p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Scope of Work :</span> Pepper
                        Plantation, Kampot & Logan Plantation, Battambang</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Location :</span> Kampot &
                        Battambang
                        Provinces</p>

                    <div class="text-[10px] md:text-[12px]">
                        <p class="font-[600] mt-1">Overview</p>
                        <p class="">In April 2023, EGE Cambodia partnered with the Capfish Capture Programme to
                            support sustainable practices in the fisheries sector by installing a 5KWP Hybrid Photovoltaic
                            System at Home Taste Food in Siem Reap Province. This system was designed to provide reliable
                            and eco-friendly energy, reducing reliance on traditional electricity sources while enhancing
                            operational efficiency.</p>
                        <p class="font-[600] mt-1">Challenges</p>
                        <p class="">The fisheries sector faces increasing energy demands for refrigeration,
                            processing, and storage. High electricity costs and intermittent grid supply posed significant
                            challenges for Home Taste Food, a local fish processing facility. The need for a cost-effective,
                            sustainable energy solution was paramount.</p>
                        <p class="font-[600] mt-1">Solution</p>
                        <p class="">yGE Cambodia supplied and installed a 5KWP Hybrid PV System, combining solar
                            power with hybrid storage capabilities. This setup ensured continuous energy availability, even
                            during grid outages, while optimizing energy consumption for the facility’s operational needs.
                        </p>
                        <p class="font-[600] mt-1">Impact</p>

                        <ol class="max-w-md space-y-1 text-black list-decimal list-inside ">
                            <li>
                                <span class="font-[600]">Environmental Benefits :</span>
                                <p class="">The system reduces carbon emissions by an estimated x tons annually,
                                    contributing to cleaner air and a healthier environment in the region.
                                    By shifting from traditional energy sources to solar, the project promotes sustainable
                                    energy adoption in Cambodia’s fisheries sector.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Cost Savings :</span>
                                <p class="">Home Taste Food has seen a xx% reduction in monthly energy costs,
                                    allowing the business to reinvest savings into operations and growth.
                                    Reduced reliance on grid electricity and elimination of diesel generator usage have
                                    further minimized operational expenses.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Operational Efficiency :</span>
                                <p class="">With reliable solar energy, the facility operates without interruptions,
                                    ensuring the quality and freshness of processed fish products.
                                    Hybrid storage provides backup power during outages, securing vital refrigeration and
                                    processing activities.
                                </p>
                            </li>
                        </ol>

                        <p class="font-[600] mt-1">Conclusion</p>
                        <p class="">This project showcases EGE Cambodia’s commitment to delivering innovative and
                            impactful solar solutions tailored to the needs of local businesses. By addressing both
                            environmental and financial challenges, the installation at Home Taste Food demonstrates the
                            potential of solar power to drive sustainable growth in Cambodia’s fisheries sector.</p>
                        <p class="font-[600] mt-1">Testimonial </p>
                        <p>“With this system, we’ve achieved more than cost savings—we’ve secured a reliable energy source
                            that supports our operations and contributes to sustainability,” says a representative from Home
                            Taste Food</p>
                    </div>
                </div>
            </div>
            <!-- Info 14-->
            <div id="infoPanel14"
                class="infoPanel fixed top-0 right-[-100%] w-[90%] md:w-[500px] h-full bg-[#A4CA62] text-black p-4 shadow-lg transition-all duration-500 z-[999] overflow-y-auto">
                <but8n
                    class="closeBtn absolute top-4 right-4 text-black w-4 h-4 md:w-6 md:h-6 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </but8n>
                <div class="pt-8">
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Project :</span> Farming</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Scope of Work :</span> Goat,
                        Turkey,
                        Chicken Farm & Fish Farm</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Location :</span> Kampong Speu &
                        Kampong Cham Provinces</p>


                    <div class="text-[10px] md:text-[12px]">
                        <p class="font-[600] mt-1">Overview</p>
                        <p class="">In April 2023, EGE Cambodia partnered with the Capfish Capture Programme to
                            support sustainable practices in the fisheries sector by installing a 5KWP Hybrid Photovoltaic
                            System at Home Taste Food in Siem Reap Province. This system was designed to provide reliable
                            and eco-friendly energy, reducing reliance on traditional electricity sources while enhancing
                            operational efficiency.</p>
                        <p class="font-[600] mt-1">Challenges</p>
                        <p class="">The fisheries sector faces increasing energy demands for refrigeration,
                            processing, and storage. High electricity costs and intermittent grid supply posed significant
                            challenges for Home Taste Food, a local fish processing facility. The need for a cost-effective,
                            sustainable energy solution was paramount.</p>
                        <p class="font-[600] mt-1">Solution</p>
                        <p class="">yGE Cambodia supplied and installed a 5KWP Hybrid PV System, combining solar
                            power with hybrid storage capabilities. This setup ensured continuous energy availability, even
                            during grid outages, while optimizing energy consumption for the facility’s operational needs.
                        </p>
                        <p class="font-[600] mt-1">Impact</p>

                        <ol class="max-w-md space-y-1 text-black list-decimal list-inside ">
                            <li>
                                <span class="font-[600]">Environmental Benefits :</span>
                                <p class="">The system reduces carbon emissions by an estimated x tons annually,
                                    contributing to cleaner air and a healthier environment in the region.
                                    By shifting from traditional energy sources to solar, the project promotes sustainable
                                    energy adoption in Cambodia’s fisheries sector.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Cost Savings :</span>
                                <p class="">Home Taste Food has seen a xx% reduction in monthly energy costs,
                                    allowing the business to reinvest savings into operations and growth.
                                    Reduced reliance on grid electricity and elimination of diesel generator usage have
                                    further minimized operational expenses.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Operational Efficiency :</span>
                                <p class="">With reliable solar energy, the facility operates without interruptions,
                                    ensuring the quality and freshness of processed fish products.
                                    Hybrid storage provides backup power during outages, securing vital refrigeration and
                                    processing activities.
                                </p>
                            </li>
                        </ol>

                        <p class="font-[600] mt-1">Conclusion</p>
                        <p class="">This project showcases EGE Cambodia’s commitment to delivering innovative and
                            impactful solar solutions tailored to the needs of local businesses. By addressing both
                            environmental and financial challenges, the installation at Home Taste Food demonstrates the
                            potential of solar power to drive sustainable growth in Cambodia’s fisheries sector.</p>
                        <p class="font-[600] mt-1">Testimonial </p>
                        <p>“With this system, we’ve achieved more than cost savings—we’ve secured a reliable energy source
                            that supports our operations and contributes to sustainability,” says a representative from Home
                            Taste Food</p>
                    </div>
                </div>
            </div>
            <!-- Info 15-->
            <div id="infoPanel15"
                class="infoPanel fixed top-0 right-[-100%] w-[90%] md:w-[500px] h-full bg-[#A4CA62] text-black p-4 shadow-lg transition-all duration-500 z-[999] overflow-y-auto">
                <but8n
                    class="closeBtn absolute top-4 right-4 text-black w-4 h-4 md:w-6 md:h-6 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </but8n>
                <div class="pt-8">
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Project :</span> Oral District
                        Resort
                    </p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Scope of Work :</span> 15KW
                        Off-grid
                        Solar Light</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Location :</span> Kampong Speu
                        Province</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Year :</span> 2022</p>


                    <div class="text-[10px] md:text-[12px]">
                        <p class="font-[600] mt-1">Overview</p>
                        <p class="">In April 2023, EGE Cambodia partnered with the Capfish Capture Programme to
                            support sustainable practices in the fisheries sector by installing a 5KWP Hybrid Photovoltaic
                            System at Home Taste Food in Siem Reap Province. This system was designed to provide reliable
                            and eco-friendly energy, reducing reliance on traditional electricity sources while enhancing
                            operational efficiency.</p>
                        <p class="font-[600] mt-1">Challenges</p>
                        <p class="">The fisheries sector faces increasing energy demands for refrigeration,
                            processing, and storage. High electricity costs and intermittent grid supply posed significant
                            challenges for Home Taste Food, a local fish processing facility. The need for a cost-effective,
                            sustainable energy solution was paramount.</p>
                        <p class="font-[600] mt-1">Solution</p>
                        <p class="">yGE Cambodia supplied and installed a 5KWP Hybrid PV System, combining solar
                            power with hybrid storage capabilities. This setup ensured continuous energy availability, even
                            during grid outages, while optimizing energy consumption for the facility’s operational needs.
                        </p>
                        <p class="font-[600] mt-1">Impact</p>

                        <ol class="max-w-md space-y-1 text-black list-decimal list-inside ">
                            <li>
                                <span class="font-[600]">Environmental Benefits :</span>
                                <p class="">The system reduces carbon emissions by an estimated x tons annually,
                                    contributing to cleaner air and a healthier environment in the region.
                                    By shifting from traditional energy sources to solar, the project promotes sustainable
                                    energy adoption in Cambodia’s fisheries sector.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Cost Savings :</span>
                                <p class="">Home Taste Food has seen a xx% reduction in monthly energy costs,
                                    allowing the business to reinvest savings into operations and growth.
                                    Reduced reliance on grid electricity and elimination of diesel generator usage have
                                    further minimized operational expenses.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Operational Efficiency :</span>
                                <p class="">With reliable solar energy, the facility operates without interruptions,
                                    ensuring the quality and freshness of processed fish products.
                                    Hybrid storage provides backup power during outages, securing vital refrigeration and
                                    processing activities.
                                </p>
                            </li>
                        </ol>

                        <p class="font-[600] mt-1">Conclusion</p>
                        <p class="">This project showcases EGE Cambodia’s commitment to delivering innovative and
                            impactful solar solutions tailored to the needs of local businesses. By addressing both
                            environmental and financial challenges, the installation at Home Taste Food demonstrates the
                            potential of solar power to drive sustainable growth in Cambodia’s fisheries sector.</p>
                        <p class="font-[600] mt-1">Testimonial </p>
                        <p>“With this system, we’ve achieved more than cost savings—we’ve secured a reliable energy source
                            that supports our operations and contributes to sustainability,” says a representative from Home
                            Taste Food</p>
                    </div>
                </div>
            </div>
            <!-- Info 16-->
            <div id="infoPanel16"
                class="infoPanel fixed top-0 right-[-100%] w-[90%] md:w-[500px] h-full bg-[#A4CA62] text-black p-4 shadow-lg transition-all duration-500 z-[999] overflow-y-auto">
                <but8n
                    class="closeBtn absolute top-4 right-4 text-black w-4 h-4 md:w-6 md:h-6 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </but8n>
                <div class="pt-8">
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Project :</span> Oral District
                        Resort
                    </p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Scope of Work :</span> 200 Solar
                        Light</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Location :</span> Kampong Speu
                        Province</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Year :</span> 2022</p>

                    <div class="text-[10px] md:text-[12px]">
                        <p class="font-[600] mt-1">Overview</p>
                        <p class="">In April 2023, EGE Cambodia partnered with the Capfish Capture Programme to
                            support sustainable practices in the fisheries sector by installing a 5KWP Hybrid Photovoltaic
                            System at Home Taste Food in Siem Reap Province. This system was designed to provide reliable
                            and eco-friendly energy, reducing reliance on traditional electricity sources while enhancing
                            operational efficiency.</p>
                        <p class="font-[600] mt-1">Challenges</p>
                        <p class="">The fisheries sector faces increasing energy demands for refrigeration,
                            processing, and storage. High electricity costs and intermittent grid supply posed significant
                            challenges for Home Taste Food, a local fish processing facility. The need for a cost-effective,
                            sustainable energy solution was paramount.</p>
                        <p class="font-[600] mt-1">Solution</p>
                        <p class="">yGE Cambodia supplied and installed a 5KWP Hybrid PV System, combining solar
                            power with hybrid storage capabilities. This setup ensured continuous energy availability, even
                            during grid outages, while optimizing energy consumption for the facility’s operational needs.
                        </p>
                        <p class="font-[600] mt-1">Impact</p>

                        <ol class="max-w-md space-y-1 text-black list-decimal list-inside ">
                            <li>
                                <span class="font-[600]">Environmental Benefits :</span>
                                <p class="">The system reduces carbon emissions by an estimated x tons annually,
                                    contributing to cleaner air and a healthier environment in the region.
                                    By shifting from traditional energy sources to solar, the project promotes sustainable
                                    energy adoption in Cambodia’s fisheries sector.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Cost Savings :</span>
                                <p class="">Home Taste Food has seen a xx% reduction in monthly energy costs,
                                    allowing the business to reinvest savings into operations and growth.
                                    Reduced reliance on grid electricity and elimination of diesel generator usage have
                                    further minimized operational expenses.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Operational Efficiency :</span>
                                <p class="">With reliable solar energy, the facility operates without interruptions,
                                    ensuring the quality and freshness of processed fish products.
                                    Hybrid storage provides backup power during outages, securing vital refrigeration and
                                    processing activities.
                                </p>
                            </li>
                        </ol>

                        <p class="font-[600] mt-1">Conclusion</p>
                        <p class="">This project showcases EGE Cambodia’s commitment to delivering innovative and
                            impactful solar solutions tailored to the needs of local businesses. By addressing both
                            environmental and financial challenges, the installation at Home Taste Food demonstrates the
                            potential of solar power to drive sustainable growth in Cambodia’s fisheries sector.</p>
                        <p class="font-[600] mt-1">Testimonial </p>
                        <p>“With this system, we’ve achieved more than cost savings—we’ve secured a reliable energy source
                            that supports our operations and contributes to sustainability,” says a representative from Home
                            Taste Food</p>
                    </div>
                </div>
            </div>
            <!-- Info 17-->
            <div id="infoPanel17"
                class="infoPanel fixed top-0 right-[-100%] w-[90%] md:w-[500px] h-full bg-[#A4CA62] text-black p-4 shadow-lg transition-all duration-500 z-[999] overflow-y-auto">
                <but8n
                    class="closeBtn absolute top-4 right-4 text-black w-4 h-4 md:w-6 md:h-6 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </but8n>
                <div class="pt-8">
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Project :</span> Solar Irrigation
                        2022</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Scope of Work :</span> 5Hp of
                        Solar
                        Water Pump System for Fish Farm</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Location :</span> Kampong Cham
                        Province</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Year :</span> 2022</p>

                    <div class="text-[10px] md:text-[12px]">
                        <p class="font-[600] mt-1">Overview</p>
                        <p class="">In April 2023, EGE Cambodia partnered with the Capfish Capture Programme to
                            support sustainable practices in the fisheries sector by installing a 5KWP Hybrid Photovoltaic
                            System at Home Taste Food in Siem Reap Province. This system was designed to provide reliable
                            and eco-friendly energy, reducing reliance on traditional electricity sources while enhancing
                            operational efficiency.</p>
                        <p class="font-[600] mt-1">Challenges</p>
                        <p class="">The fisheries sector faces increasing energy demands for refrigeration,
                            processing, and storage. High electricity costs and intermittent grid supply posed significant
                            challenges for Home Taste Food, a local fish processing facility. The need for a cost-effective,
                            sustainable energy solution was paramount.</p>
                        <p class="font-[600] mt-1">Solution</p>
                        <p class="">yGE Cambodia supplied and installed a 5KWP Hybrid PV System, combining solar
                            power with hybrid storage capabilities. This setup ensured continuous energy availability, even
                            during grid outages, while optimizing energy consumption for the facility’s operational needs.
                        </p>
                        <p class="font-[600] mt-1">Impact</p>

                        <ol class="max-w-md space-y-1 text-black list-decimal list-inside ">
                            <li>
                                <span class="font-[600]">Environmental Benefits :</span>
                                <p class="">The system reduces carbon emissions by an estimated x tons annually,
                                    contributing to cleaner air and a healthier environment in the region.
                                    By shifting from traditional energy sources to solar, the project promotes sustainable
                                    energy adoption in Cambodia’s fisheries sector.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Cost Savings :</span>
                                <p class="">Home Taste Food has seen a xx% reduction in monthly energy costs,
                                    allowing the business to reinvest savings into operations and growth.
                                    Reduced reliance on grid electricity and elimination of diesel generator usage have
                                    further minimized operational expenses.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Operational Efficiency :</span>
                                <p class="">With reliable solar energy, the facility operates without interruptions,
                                    ensuring the quality and freshness of processed fish products.
                                    Hybrid storage provides backup power during outages, securing vital refrigeration and
                                    processing activities.
                                </p>
                            </li>
                        </ol>

                        <p class="font-[600] mt-1">Conclusion</p>
                        <p class="">This project showcases EGE Cambodia’s commitment to delivering innovative and
                            impactful solar solutions tailored to the needs of local businesses. By addressing both
                            environmental and financial challenges, the installation at Home Taste Food demonstrates the
                            potential of solar power to drive sustainable growth in Cambodia’s fisheries sector.</p>
                        <p class="font-[600] mt-1">Testimonial </p>
                        <p>“With this system, we’ve achieved more than cost savings—we’ve secured a reliable energy source
                            that supports our operations and contributes to sustainability,” says a representative from Home
                            Taste Food</p>
                    </div>
                </div>
            </div>
            <!-- Info 18-->
            <div id="infoPanel18"
                class="infoPanel fixed top-0 right-[-100%] w-[90%] md:w-[500px] h-full bg-[#A4CA62] text-black p-4 shadow-lg transition-all duration-500 z-[999] overflow-y-auto">
                <but8n
                    class="closeBtn absolute top-4 right-4 text-black w-4 h-4 md:w-6 md:h-6 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </but8n>
                <div class="pt-8">
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Project :</span> Solar Irrigation
                        2023</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Scope of Work :</span> 5Hp of
                        Solar
                        Irrigation System</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Location :</span> Banteay
                        Meanchey
                        Province</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Year :</span> 2023</p>

                    <div class="text-[10px] md:text-[12px]">
                        <p class="font-[600] mt-1">Overview</p>
                        <p class="">In April 2023, EGE Cambodia partnered with the Capfish Capture Programme to
                            support sustainable practices in the fisheries sector by installing a 5KWP Hybrid Photovoltaic
                            System at Home Taste Food in Siem Reap Province. This system was designed to provide reliable
                            and eco-friendly energy, reducing reliance on traditional electricity sources while enhancing
                            operational efficiency.</p>
                        <p class="font-[600] mt-1">Challenges</p>
                        <p class="">The fisheries sector faces increasing energy demands for refrigeration,
                            processing, and storage. High electricity costs and intermittent grid supply posed significant
                            challenges for Home Taste Food, a local fish processing facility. The need for a cost-effective,
                            sustainable energy solution was paramount.</p>
                        <p class="font-[600] mt-1">Solution</p>
                        <p class="">yGE Cambodia supplied and installed a 5KWP Hybrid PV System, combining solar
                            power with hybrid storage capabilities. This setup ensured continuous energy availability, even
                            during grid outages, while optimizing energy consumption for the facility’s operational needs.
                        </p>
                        <p class="font-[600] mt-1">Impact</p>

                        <ol class="max-w-md space-y-1 text-black list-decimal list-inside ">
                            <li>
                                <span class="font-[600]">Environmental Benefits :</span>
                                <p class="">The system reduces carbon emissions by an estimated x tons annually,
                                    contributing to cleaner air and a healthier environment in the region.
                                    By shifting from traditional energy sources to solar, the project promotes sustainable
                                    energy adoption in Cambodia’s fisheries sector.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Cost Savings :</span>
                                <p class="">Home Taste Food has seen a xx% reduction in monthly energy costs,
                                    allowing the business to reinvest savings into operations and growth.
                                    Reduced reliance on grid electricity and elimination of diesel generator usage have
                                    further minimized operational expenses.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Operational Efficiency :</span>
                                <p class="">With reliable solar energy, the facility operates without interruptions,
                                    ensuring the quality and freshness of processed fish products.
                                    Hybrid storage provides backup power during outages, securing vital refrigeration and
                                    processing activities.
                                </p>
                            </li>
                        </ol>

                        <p class="font-[600] mt-1">Conclusion</p>
                        <p class="">This project showcases EGE Cambodia’s commitment to delivering innovative and
                            impactful solar solutions tailored to the needs of local businesses. By addressing both
                            environmental and financial challenges, the installation at Home Taste Food demonstrates the
                            potential of solar power to drive sustainable growth in Cambodia’s fisheries sector.</p>
                        <p class="font-[600] mt-1">Testimonial </p>
                        <p>“With this system, we’ve achieved more than cost savings—we’ve secured a reliable energy source
                            that supports our operations and contributes to sustainability,” says a representative from Home
                            Taste Food</p>
                    </div>
                </div>
            </div>
            <!-- Info 19-->
            <div id="infoPanel19"
                class="infoPanel fixed top-0 right-[-100%] w-[90%] md:w-[500px] h-full bg-[#A4CA62] text-black p-4 shadow-lg transition-all duration-500 z-[999] overflow-y-auto">
                <but8n
                    class="closeBtn absolute top-4 right-4 text-black w-4 h-4 md:w-6 md:h-6 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </but8n>
                <div class="pt-8">
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Project :</span> Sahmakum Teang
                        Tnaut Organizational (STT)</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Scope of Work :</span> 35 Sets of
                        Solar Street Light Supply & Installation for Community</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Location :</span> Kandal Province
                    </p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Year :</span> August 2024</p>

                    <div class="text-[10px] md:text-[12px]">
                        <p class="font-[600] mt-1">Overview</p>
                        <p class="">In April 2023, EGE Cambodia partnered with the Capfish Capture Programme to
                            support sustainable practices in the fisheries sector by installing a 5KWP Hybrid Photovoltaic
                            System at Home Taste Food in Siem Reap Province. This system was designed to provide reliable
                            and eco-friendly energy, reducing reliance on traditional electricity sources while enhancing
                            operational efficiency.</p>
                        <p class="font-[600] mt-1">Challenges</p>
                        <p class="">The fisheries sector faces increasing energy demands for refrigeration,
                            processing, and storage. High electricity costs and intermittent grid supply posed significant
                            challenges for Home Taste Food, a local fish processing facility. The need for a cost-effective,
                            sustainable energy solution was paramount.</p>
                        <p class="font-[600] mt-1">Solution</p>
                        <p class="">yGE Cambodia supplied and installed a 5KWP Hybrid PV System, combining solar
                            power with hybrid storage capabilities. This setup ensured continuous energy availability, even
                            during grid outages, while optimizing energy consumption for the facility’s operational needs.
                        </p>
                        <p class="font-[600] mt-1">Impact</p>

                        <ol class="max-w-md space-y-1 text-black list-decimal list-inside ">
                            <li>
                                <span class="font-[600]">Environmental Benefits :</span>
                                <p class="">The system reduces carbon emissions by an estimated x tons annually,
                                    contributing to cleaner air and a healthier environment in the region.
                                    By shifting from traditional energy sources to solar, the project promotes sustainable
                                    energy adoption in Cambodia’s fisheries sector.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Cost Savings :</span>
                                <p class="">Home Taste Food has seen a xx% reduction in monthly energy costs,
                                    allowing the business to reinvest savings into operations and growth.
                                    Reduced reliance on grid electricity and elimination of diesel generator usage have
                                    further minimized operational expenses.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Operational Efficiency :</span>
                                <p class="">With reliable solar energy, the facility operates without interruptions,
                                    ensuring the quality and freshness of processed fish products.
                                    Hybrid storage provides backup power during outages, securing vital refrigeration and
                                    processing activities.
                                </p>
                            </li>
                        </ol>

                        <p class="font-[600] mt-1">Conclusion</p>
                        <p class="">This project showcases EGE Cambodia’s commitment to delivering innovative and
                            impactful solar solutions tailored to the needs of local businesses. By addressing both
                            environmental and financial challenges, the installation at Home Taste Food demonstrates the
                            potential of solar power to drive sustainable growth in Cambodia’s fisheries sector.</p>
                        <p class="font-[600] mt-1">Testimonial </p>
                        <p>“With this system, we’ve achieved more than cost savings—we’ve secured a reliable energy source
                            that supports our operations and contributes to sustainability,” says a representative from Home
                            Taste Food</p>
                    </div>
                </div>
            </div>
            <!-- Info 20-->
            <div id="infoPanel20"
                class="infoPanel fixed top-0 right-[-100%] w-[90%] md:w-[500px] h-full bg-[#A4CA62] text-black p-4 shadow-lg transition-all duration-500 z-[999] overflow-y-auto">
                <but8n
                    class="closeBtn absolute top-4 right-4 text-black w-4 h-4 md:w-6 md:h-6 rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </but8n>
                <div class="pt-8">
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Project :</span> Cambodia Climate
                        Change Alliance - Phase3 (CCCA-lll)</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Scope of Work :</span> 340W
                        Polycrystalline Solar Panels</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Location :</span> 20 Health
                        Centers &
                        Water Stations in 3 Provinces, Cambodia</p>
                    <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Year :</span> 2022</p>

                    <div class="text-[10px] md:text-[12px]">
                        <p class="font-[600] mt-1">Overview</p>
                        <p class="">In April 2023, EGE Cambodia partnered with the Capfish Capture Programme to
                            support sustainable practices in the fisheries sector by installing a 5KWP Hybrid Photovoltaic
                            System at Home Taste Food in Siem Reap Province. This system was designed to provide reliable
                            and eco-friendly energy, reducing reliance on traditional electricity sources while enhancing
                            operational efficiency.</p>
                        <p class="font-[600] mt-1">Challenges</p>
                        <p class="">The fisheries sector faces increasing energy demands for refrigeration,
                            processing, and storage. High electricity costs and intermittent grid supply posed significant
                            challenges for Home Taste Food, a local fish processing facility. The need for a cost-effective,
                            sustainable energy solution was paramount.</p>
                        <p class="font-[600] mt-1">Solution</p>
                        <p class="">yGE Cambodia supplied and installed a 5KWP Hybrid PV System, combining solar
                            power with hybrid storage capabilities. This setup ensured continuous energy availability, even
                            during grid outages, while optimizing energy consumption for the facility’s operational needs.
                        </p>
                        <p class="font-[600] mt-1">Impact</p>

                        <ol class="max-w-md space-y-1 text-black list-decimal list-inside ">
                            <li>
                                <span class="font-[600]">Environmental Benefits :</span>
                                <p class="">The system reduces carbon emissions by an estimated x tons annually,
                                    contributing to cleaner air and a healthier environment in the region.
                                    By shifting from traditional energy sources to solar, the project promotes sustainable
                                    energy adoption in Cambodia’s fisheries sector.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Cost Savings :</span>
                                <p class="">Home Taste Food has seen a xx% reduction in monthly energy costs,
                                    allowing the business to reinvest savings into operations and growth.
                                    Reduced reliance on grid electricity and elimination of diesel generator usage have
                                    further minimized operational expenses.
                                </p>
                            </li>
                            <li>
                                <span class="font-[600]">Operational Efficiency :</span>
                                <p class="">With reliable solar energy, the facility operates without interruptions,
                                    ensuring the quality and freshness of processed fish products.
                                    Hybrid storage provides backup power during outages, securing vital refrigeration and
                                    processing activities.
                                </p>
                            </li>
                        </ol>

                        <p class="font-[600] mt-1">Conclusion</p>
                        <p class="">This project showcases EGE Cambodia’s commitment to delivering innovative and
                            impactful solar solutions tailored to the needs of local businesses. By addressing both
                            environmental and financial challenges, the installation at Home Taste Food demonstrates the
                            potential of solar power to drive sustainable growth in Cambodia’s fisheries sector.</p>
                        <p class="font-[600] mt-1">Testimonial </p>
                        <p>“With this system, we’ve achieved more than cost savings—we’ve secured a reliable energy source
                            that supports our operations and contributes to sustainability,” says a representative from Home
                            Taste Food</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- activity --}}
    <div id='activities'>
        <div class="max-w-7xl mx-auto px-4">
            <div class='py-10 md:py-20'>
                <h1 data-aos='fade-right' data-aos-duration='1000'
                    class='text-[30px] md:text-[40px] lg:text-[50px] text-[#415464] font-[700] leading-none md:mb-4'>Case
                    <br /> Studies/Activities
                </h1>
                {{-- laptop --}}
                <div class="hidden md:grid grid-cols-3 xl:grid-cols-4 gap-4">
                    <div data-aos='flip-up' data-aos-duration='1200' class="relative group overflow-hidden">
                        <hr class='h-2 bg-[#A4CA62] border-none' />
                        <img src={{ asset('assets/images/projects/activity/activity-1.png') }} alt=""
                            class='w-full h-[300px] object-cover' />
                        <div
                            class='absolute bottom-0 left-0 pt-2 pb-4 px-2 w-full h-[80%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                            <h1 class="text-[15px] text-[#A4CA62] font-[600]">Training Activities</h1>
                            <p class='text-[12px] text-[#ffffff]'>Conduct solar training to the communities</p>
                        </div>
                    </div>
                    <div data-aos='flip-up' data-aos-duration='1200' class="relative group overflow-hidden">
                        <hr class='h-2 bg-[#A4CA62] border-none' />
                        <img src={{ asset('assets/images/projects/activity/activity-2.png') }} alt=""
                            class='w-full h-[300px] object-cover' />
                        <div
                            class='absolute bottom-0 left-0 pt-2 pb-4 px-2 w-full h-[80%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                            <h1 class="text-[15px] text-[#A4CA62] font-[600]">Business Activities</h1>
                            <p class='text-[12px] font-[600] text-[#ffffff]'>EGE Cambodia Attended Cambuild</p>
                            <p class='text-[12px] text-[#ffffff]'>The biggest exhibition for the building and construction
                                industry in Cambodia.We were showcasing our supplier, Eco Green Energy's, solar solutions
                                available here in Cambodia.Our team enjoyed meeting both national and international guests
                                and were extremely happy to share our experiences within the solar industry</p>
                        </div>
                    </div>
                    <div data-aos='flip-up' data-aos-duration='1200' class="relative group overflow-hidden">
                        <hr class='h-2 bg-[#A4CA62] border-none' />
                        <img src={{ asset('assets/images/projects/activity/activity-3.png') }} alt=""
                            class='w-full h-[300px] object-cover' />
                        <div
                            class='absolute bottom-0 left-0 pt-2 pb-4 px-2 w-full h-[80%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                            <h1 class="text-[15px] text-[#A4CA62] font-[600]">Business Activities</h1>
                            <p class='text-[12px] font-[600] text-[#ffffff]'>Site Installation</p>
                            <p class='text-[12px] text-[#ffffff]'>We offer quick installation within any region of
                                Cambodia.
                            </p>
                        </div>
                    </div>
                    <div data-aos='flip-up' data-aos-duration='1200' class="relative group overflow-hidden">
                        <hr class='h-2 bg-[#A4CA62] border-none' />
                        <img src={{ asset('assets/images/projects/activity/activity-4.png') }} alt=""
                            class='w-full h-[300px] object-cover' />
                        <div
                            class='absolute bottom-0 left-0 pt-2 pb-4 px-2 w-full h-[80%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                            <h1 class="text-[15px] text-[#A4CA62] font-[600]">Installation Project</h1>
                            <p class='text-[12px] text-[#ffffff]'><span class="font-[600]">Project :</span> Feasibility
                                Study-Mondulkiri Province. In June 2022, EGE Cambodia has selected as consult and service
                                supplier on site survey and feasibility reports for Cambodian Rural Development Team (CRDT).
                            </p>
                            <p class='text-[12px] text-[#ffffff]'><span class="font-[600]">Scope of work :</span> Supply
                                and
                                Install solar street light 35 sets for community.</p>
                            <p class='text-[12px] text-[#ffffff]'><span class="font-[600]">Project Feasibility Study
                                    :</span> Implementation of Solar Energy Water Pump System in Mondulkiri Province.</p>
                        </div>
                    </div>
                    <div data-aos='flip-up' data-aos-duration='1200' class="relative group overflow-hidden">
                        <hr class='h-2 bg-[#A4CA62] border-none' />
                        <img src={{ asset('assets/images/projects/activity/activity-5.png') }} alt=""
                            class='w-full h-[300px] object-cover' />
                        <div
                            class='absolute bottom-0 left-0 pt-2 pb-4 px-2 w-full h-[80%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                            <h1 class="text-[15px] text-[#A4CA62] font-[600]">Feasibility Study-Mondulkiri Province</h1>
                            <p class='text-[12px] text-[#ffffff]'><span class="font-[600]">Project :</span> Live Learn
                                Cambodia</p>
                            <p class='text-[12px] text-[#ffffff]'><span class="font-[600]">Scope of work :</span> Solar
                                Water Pump System Upgrade & Supply</p>
                            <p class='text-[12px] text-[#ffffff]'><span class="font-[600]">Location :</span> Steung
                                Trent
                                Province</p>
                            <p class='text-[12px] text-[#ffffff]'><span class="font-[600]">Year :</span> 2022 & 2023</p>
                        </div>
                    </div>
                    <div data-aos='flip-up' data-aos-duration='1200' class="relative group overflow-hidden">
                        <hr class='h-2 bg-[#A4CA62] border-none' />
                        <img src={{ asset('assets/images/projects/activity/activity-6.png') }} alt=""
                            class='w-full h-[300px] object-cover' />
                        <div
                            class='absolute bottom-0 left-0 pt-2 pb-4 px-2 w-full h-[80%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                            <h1 class="text-[15px] text-[#A4CA62] font-[600]">Feasibility Study-Siem Reap Province</h1>
                            <p class='text-[12px] text-[#ffffff]'>Report assessment of Design and Installation of Solar
                                Pump
                                Irrigation System.</p>
                            <p class='text-[12px] text-[#ffffff]'><span class="font-[600]">Location of the assignment
                                    :</span> Sambour commune of Kralanh district in Siem Reap province.</p>
                            <p class='text-[12px] text-[#ffffff]'><span class="font-[600]">Supply to :</span> Live and
                                Learn Cambodia</p>
                        </div>
                    </div>

                    <div data-aos='flip-up' data-aos-duration='1200' class="relative group overflow-hidden">
                        <hr class='h-2 bg-[#A4CA62] border-none' />
                        <img src={{ asset('assets/images/projects/activity/activity-9.png') }} alt=""
                            class='w-full h-[300px] object-cover' />
                        <div
                            class='absolute bottom-0 left-0 pt-2 pb-4 px-2 w-full h-[80%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                            <h1 class="text-[15px] text-[#A4CA62] font-[600]">Installation Project</h1>
                            <p class='text-[12px] text-[#ffffff]'><span class="font-[600]">Project :</span>Sahmakum
                                Teang
                                Tnaut Organization (STT)</p>
                            <p class='text-[12px] text-[#ffffff]'><span class="font-[600]">Scope of work :</span> Supply
                                and Install solar street light 35 sets for community</p>
                            <p class='text-[12px] text-[#ffffff]'><span class="font-[600]">Date :</span> August 2024</p>
                            <p class='text-[12px] text-[#ffffff]'><span class="font-[600]">Location :</span> Kandal
                                Province</p>
                        </div>
                    </div>
                    <div data-aos='flip-up' data-aos-duration='1200' class="relative group overflow-hidden">
                        <hr class='h-2 bg-[#A4CA62] border-none' />
                        <img src={{ asset('assets/images/projects/activity/activity-7.png') }} alt=""
                            class='w-full h-[300px] object-cover' />
                        <div
                            class='absolute bottom-0 left-0 pt-2 pb-4 px-2 w-full h-[80%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                            <h1 class="text-[15px] text-[#A4CA62] font-[600]">Installation Activities / team</h1>
                            <p class='text-[12px] text-[#ffffff]'>We offer quick installation with professional team
                                within
                                any regions of Cambodia.</p>
                        </div>
                    </div>
                    <div data-aos='flip-up' data-aos-duration='1200' class="relative group overflow-hidden">
                        <hr class='h-2 bg-[#A4CA62] border-none' />
                        <img src={{ asset('assets/images/projects/activity/activity-8.png') }} alt=""
                            class='w-full h-[300px] object-cover' />
                        <div
                            class='absolute bottom-0 left-0 pt-2 pb-4 px-2 w-full h-[80%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                            <h1 class="text-[15px] text-[#A4CA62] font-[600]">Some of Technical of Training, Operation,
                                Maintenance</h1>
                            <p class='text-[12px] text-[#ffffff]'>Technical Training of Solar Water Pump for fish farm,
                                Kampong Thom Province in 2022</p>
                        </div>
                    </div>
                    <div data-aos='flip-up' data-aos-duration='1200' class="relative group overflow-hidden">
                        <hr class='h-2 bg-[#A4CA62] border-none' />
                        <img src={{ asset('assets/images/projects/activity/activity-10.png') }} alt=""
                            class='w-full h-[300px] object-cover' />
                        <div
                            class='absolute bottom-0 left-0 pt-2 pb-4 px-2 w-full h-[80%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                            <h1 class="text-[15px] text-[#A4CA62] font-[600]">Some of Technical of Training, Operation,
                                Maintenance</h1>
                            <p class='text-[12px] text-[#ffffff]'>Technical Training of Off-grid and water pump for
                                farmers
                                in Takeo Province in 2023</p>
                        </div>
                    </div>
                    <div data-aos='flip-up' data-aos-duration='1200' class="relative group overflow-hidden">
                        <hr class='h-2 bg-[#A4CA62] border-none' />
                        <img src={{ asset('assets/images/projects/activity/activity-11.png') }} alt=""
                            class='w-full h-[300px] object-cover' />
                        <div
                            class='absolute bottom-0 left-0 pt-2 pb-4 px-2 w-full h-[80%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                            <h1 class="text-[15px] text-[#A4CA62] font-[600]">Some of Technical of Training, Operation,
                                Maintenance</h1>
                            <p class='text-[12px] text-[#ffffff]'>Training community at Preah Vihear Province in 2024</p>
                        </div>
                    </div>
                </div>

                {{-- mobile --}}
                <div class='swiper-activity md:hidden'>
                    <div class="swiper activitySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide ">
                                <div class="relative group overflow-hidden">
                                    <hr class='h-2 bg-[#A4CA62] border-none' />
                                    <img src={{ asset('assets/images/projects/activity/activity-1.png') }} alt=""
                                        class='w-full h-[300px] object-cover' />
                                    <div
                                        class='absolute bottom-0 left-0 pt-2 pb-4 px-4 w-full h-[70%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                                        <h1 class="text-[14px] text-[#A4CA62] font-[600]">Training Activities</h1>
                                        <p class='text-[11px] text-[#ffffff]'>Conduct solar training to the communities
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="relative group overflow-hidden">
                                    <hr class='h-2 bg-[#A4CA62] border-none' />
                                    <img src={{ asset('assets/images/projects/activity/activity-2.png') }} alt=""
                                        class='w-full h-[300px] object-cover' />
                                    <div
                                        class='absolute bottom-0 left-0 pt-2 pb-4 px-4 w-full h-[70%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                                        <h1 class="text-[14px] text-[#A4CA62] font-[600]">Business Activities</h1>
                                        <p class='text-[11px] font-[600] text-[#ffffff]'>EGE Cambodia Attended Cambuild
                                        </p>
                                        <p class='text-[11px] text-[#ffffff]'>The biggest exhibition for the building and
                                            construction industry in Cambodia.We were showcasing our supplier, Eco Green
                                            Energy's, solar solutions available here in Cambodia.Our team enjoyed meeting
                                            both national and international guests and were extremely happy to share our
                                            experiences within the solar industry</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="relative group overflow-hidden">
                                    <hr class='h-2 bg-[#A4CA62] border-none' />
                                    <img src={{ asset('assets/images/projects/activity/activity-1.png') }} alt=""
                                        class='w-full h-[300px] object-cover' />
                                    <div
                                        class='absolute bottom-0 left-0 pt-2 pb-4 px-4 w-full h-[70%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                                        <h1 class="text-[14px] text-[#A4CA62] font-[600]">Business Activities</h1>
                                        <p class='text-[11px] font-[600] text-[#ffffff]'>Site Installation</p>
                                        <p class='text-[11px] text-[#ffffff]'>We offer quick installation within any
                                            region
                                            of Cambodia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="relative group overflow-hidden">
                                    <hr class='h-2 bg-[#A4CA62] border-none' />
                                    <img src={{ asset('assets/images/projects/activity/activity-3.png') }} alt=""
                                        class='w-full h-[300px] object-cover' />
                                    <div
                                        class='absolute bottom-0 left-0 pt-2 pb-4 px-4 w-full h-[70%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                                        <h1 class="text-[14px] text-[#A4CA62] font-[600]">Business Activities</h1>
                                        <p class='text-[11px] font-[600] text-[#ffffff]'>Site Installation</p>
                                        <p class='text-[11px] text-[#ffffff]'>We offer quick installation within any
                                            region
                                            of Cambodia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="relative group overflow-hidden">
                                    <hr class='h-2 bg-[#A4CA62] border-none' />
                                    <img src={{ asset('assets/images/projects/activity/activity-4.png') }} alt=""
                                        class='w-full h-[300px] object-cover' />
                                    <div
                                        class='absolute bottom-0 left-0 pt-2 pb-4 px-4 w-full h-[70%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                                        <h1 class="text-[14px] text-[#A4CA62] font-[600]">Installation Project</h1>
                                        <p class='text-[11px] text-[#ffffff]'><span class="font-[600]">Project :</span>
                                            Feasibility Study-Mondulkiri Province. In June 2022, EGE Cambodia has selected
                                            as consult and service supplier on site survey and feasibility reports for
                                            Cambodian Rural Development Team (CRDT).</p>
                                        <p class='text-[11px] text-[#ffffff]'><span class="font-[600]">Scope of work
                                                :</span> Supply and Install solar street light 35 sets for community.</p>
                                        <p class='text-[11px] text-[#ffffff]'><span class="font-[600]">Project
                                                Feasibility
                                                Study :</span> Implementation of Solar Energy Water Pump System in
                                            Mondulkiri Province.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="relative group overflow-hidden">
                                    <hr class='h-2 bg-[#A4CA62] border-none' />
                                    <img src={{ asset('assets/images/projects/activity/activity-5.png') }} alt=""
                                        class='w-full h-[300px] object-cover' />
                                    <div
                                        class='absolute bottom-0 left-0 pt-2 pb-4 px-4 w-full h-[70%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                                        <h1 class="text-[14px] text-[#A4CA62] font-[600]">Feasibility Study-Mondulkiri
                                            Province</h1>
                                        <p class='text-[11px] text-[#ffffff]'><span class="font-[600]">Project :</span>
                                            Live Learn Cambodia</p>
                                        <p class='text-[11px] text-[#ffffff]'><span class="font-[600]">Scope of work
                                                :</span> Solar Water Pump System Upgrade & Supply</p>
                                        <p class='text-[11px] text-[#ffffff]'><span class="font-[600]">Location :</span>
                                            Steung Trent Province</p>
                                        <p class='text-[11px] text-[#ffffff]'><span class="font-[600]">Year :</span>
                                            2022
                                            & 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="relative group overflow-hidden">
                                    <hr class='h-2 bg-[#A4CA62] border-none' />
                                    <img src={{ asset('assets/images/projects/activity/activity-6.png') }} alt=""
                                        class='w-full h-[300px] object-cover' />
                                    <div
                                        class='absolute bottom-0 left-0 pt-2 pb-4 px-4 w-full h-[70%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                                        <h1 class="text-[14px] text-[#A4CA62] font-[600]">Feasibility Study-Siem Reap
                                            Province</h1>
                                        <p class='text-[11px] text-[#ffffff]'>Report assessment of Design and Installation
                                            of Solar Pump Irrigation System.</p>
                                        <p class='text-[11px] text-[#ffffff]'><span class="font-[600]">Location of the
                                                assignment :</span> Sambour commune of Kralanh district in Siem Reap
                                            province.</p>
                                        <p class='text-[11px] text-[#ffffff]'><span class="font-[600]">Supply to
                                                :</span>
                                            Live and Learn Cambodia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="relative group overflow-hidden">
                                    <hr class='h-2 bg-[#A4CA62] border-none' />
                                    <img src={{ asset('assets/images/projects/activity/activity-9.png') }} alt=""
                                        class='w-full h-[300px] object-cover' />
                                    <div
                                        class='absolute bottom-0 left-0 pt-2 pb-4 px-4 w-full h-[70%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                                        <h1 class="text-[14px] text-[#A4CA62] font-[600]">Installation Project</h1>
                                        <p class='text-[11px] text-[#ffffff]'><span class="font-[600]">Project
                                                :</span>Sahmakum Teang Tnaut Organization (STT)</p>
                                        <p class='text-[11px] text-[#ffffff]'><span class="font-[600]">Scope of work
                                                :</span> Supply and Install solar street light 35 sets for community</p>
                                        <p class='text-[11px] text-[#ffffff]'><span class="font-[600]">Date :</span>
                                            August 2024</p>
                                        <p class='text-[11px] text-[#ffffff]'><span class="font-[600]">Location :</span>
                                            Kandal Province</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="relative group overflow-hidden">
                                    <hr class='h-2 bg-[#A4CA62] border-none' />
                                    <img src={{ asset('assets/images/projects/activity/activity-7.png') }} alt=""
                                        class='w-full h-[300px] object-cover' />
                                    <div
                                        class='absolute bottom-0 left-0 pt-2 pb-4 px-4 w-full h-[70%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                                        <h1 class="text-[14px] text-[#A4CA62] font-[600]">Installation Activities / team
                                        </h1>
                                        <p class='text-[11px] text-[#ffffff]'>We offer quick installation with
                                            professional
                                            team within any regions of Cambodia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="relative group overflow-hidden">
                                    <hr class='h-2 bg-[#A4CA62] border-none' />
                                    <img src={{ asset('assets/images/projects/activity/activity-8.png') }} alt=""
                                        class='w-full h-[300px] object-cover' />
                                    <div
                                        class='absolute bottom-0 left-0 pt-2 pb-4 px-4 w-full h-[70%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                                        <h1 class="text-[14px] text-[#A4CA62] font-[600]">Some of Technical of Training,
                                            Operation, Maintenance</h1>
                                        <p class='text-[11px] text-[#ffffff]'>Technical Training of Solar Water Pump for
                                            fish farm, Kampong Thom Province in 2022</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="relative group overflow-hidden">
                                    <hr class='h-2 bg-[#A4CA62] border-none' />
                                    <img src={{ asset('assets/images/projects/activity/activity-10.png') }}
                                        alt="" class='w-full h-[300px] object-cover' />
                                    <div
                                        class='absolute bottom-0 left-0 pt-2 pb-4 px-4 w-full h-[70%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                                        <h1 class="text-[14px] text-[#A4CA62] font-[600]">Some of Technical of Training,
                                            Operation, Maintenance</h1>
                                        <p class='text-[11px] text-[#ffffff]'>Technical Training of Off-grid and water
                                            pump
                                            for farmers in Takeo Province in 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ">
                                <div class="relative group overflow-hidden">
                                    <hr class='h-2 bg-[#A4CA62] border-none' />
                                    <img src={{ asset('assets/images/projects/activity/activity-10.png') }}
                                        alt="" class='w-f relativeull h-[300px] object-cover' />
                                    <div
                                        class='absolute bottom-0 left-0 pt-2 pb-4 px-4 w-full h-[70%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                                        <h1 class="text-[14px] text-[#A4CA62] font-[600]">Some of Technical of Training,
                                            Operation, Maintenance</h1>
                                        <p class='text-[11px] text-[#ffffff]'>Training community at Preah Vihear Province
                                            in 2024</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class='max-w-7xl mx-auto px-4'>
        {{-- clients --}}
        <h1 data-aos='fade-right' data-aos-duration='1200'
            class='text-[25px] md:text-[30px] text-[#415464] font-[700]'>
            Our Clients</h1>
        <div class="h-[200px] w-full max-w-7xl mx-auto relative overflow-hidden">
            <div class='client_item item1 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/client/client-1.png') }} alt="" />
            </div>
            <div class='client_item item2 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/client/client-2.png') }} alt="" />
            </div>
            <div class='client_item item3 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/client/client-3.png') }} alt="" />
            </div>
            <div class='client_item item4 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/client/client-4.png') }} alt="" />
            </div>
            <div class='client_item item5 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/client/client-5.png') }} alt="" />
            </div>
            <div class='client_item item6 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/client/client-6.png') }} alt="" />
            </div>
            <div class='client_item item7 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/client/client-7.png') }} alt="" />
            </div>
            <div class='client_item item8 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/client/client-8.png') }} alt="" />
            </div>
            <div class='client_item item9 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/client/client-9.png') }} alt="" />
            </div>

        </div>

        {{-- network --}}
        <h1 data-aos='fade-right' data-aos-duration='1200'
            class='text-[25px] md:text-[30px] text-[#415464] font-[700]'>
            Our Networks</h1>
        <div class="h-[200px] w-full max-w-7xl mx-auto relative overflow-hidden">
            <div class='network_item item1 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/network/network-1.png') }} alt="" />
            </div>
            <div class='network_item item2 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/network/network-2.png') }} alt="" />
            </div>
            <div class='network_item item3 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/network/network-3.png') }} alt="" />
            </div>
            <div class='network_item item4 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/network/network-4.png') }} alt="" />
            </div>
            <div class='network_item item5 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/network/network-5.png') }} alt="" />
            </div>
            <div class='network_item item6 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/network/network-6.png') }} alt="" />
            </div>
            <div class='network_item item7 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/network/network-7.png') }} alt="" />
            </div>
            <div class='network_item item8 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/network/network-8.png') }} alt="" />
            </div>
            <div class='network_item item9 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/network/network-9.png') }} alt="" />
            </div>
        </div>

        {{-- partner --}}
        <h1 data-aos='fade-right' data-aos-duration='1200'
            class='text-[25px] md:text-[30px] text-[#415464] font-[700]'>
            Our Partner</h1>
        <div class="h-[200px]  w-full max-w-7xl mx-auto relative overflow-hidden">
            <div class='partner_item item1 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/partner/partner-1.png') }} alt="" />
            </div>
            <div class='partner_item item2 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/partner/partner-2.png') }} alt="" />
            </div>
            <div class='partner_item item3 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/partner/partner-3.png') }} alt="" />
            </div>
            <div class='partner_item item4 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/partner/partner-4.png') }} alt="" />
            </div>
            <div class='partner_item item5 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/partner/partner-5.png') }} alt="" />
            </div>
            <div class='partner_item item6 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/partner/partner-6.png') }} alt="" />
            </div>
            <div class='partner_item item7 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/partner/partner-7.png') }} alt="" />
            </div>
            <div class='partner_item item8 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/partner/partner-8.png') }} alt="" />
            </div>
            <div class='partner_item item9 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/partner/partner-9.png') }} alt="" />
            </div>
            <div class='partner_item item10 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/partner/partner-10.png') }} alt="" />
            </div>
            <div class='partner_item item11 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/partner/partner-11.png') }} alt="" />
            </div>
            <div class='partner_item item12 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/partner/partner-12.png') }} alt="" />
            </div>
            <div class='partner_item item13 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/partner/partner-13.png') }} alt="" />
            </div>
            <div class='partner_item item14 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/partner/partner-14.png') }} alt="" />
            </div>
            <div class='partner_item item15 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/partner/partner-15.png') }} alt="" />
            </div>
        </div>

        {{-- supplies --}}
        <h1 data-aos='fade-right' data-aos-duration='1200'
            class='text-[25px] md:text-[30px] text-[#415464] font-[700]'>
            Our Suppliers</h1>
        <div class="h-[200px] w-full max-w-7xl mx-auto relative overflow-hidden">
            <div class='supply_item item1 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/supply/supply-1.png') }} alt="" />
            </div>
            <div class='supply_item item2 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/supply/supply-2.png') }} alt="" />
            </div>
            <div class='supply_item item3 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/supply/supply-3.png') }} alt="" />
            </div>
            <div class='supply_item item4 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/supply/supply-4.png') }} alt="" />
            </div>
            <div class='supply_item item5 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/supply/supply-5.png') }} alt="" />
            </div>
            <div class='supply_item item6 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/supply/supply-6.png') }} alt="" />
            </div>
            <div class='supply_item item7 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/supply/supply-7.png') }} alt="" />
            </div>
            <div class='supply_item item8 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/supply/supply-8.png') }} alt="" />
            </div>
            <div class='supply_item item9 flex items-center justify-center'>
                <img src={{ asset('assets/images/projects/supply/supply-9.png') }} alt="" />
            </div>
        </div>
    </div>

    {{--  --}}
    <div class='w-full bg-[#D9ECEE]'>
        <div class='max-w-7xl mx-auto py-10 md:py-20 px-4'>
            <h2 data-aos='fade-right' data-aos-duration='1000'
                class='text-[20px] md:text-[30px] font-[400] text-[#415464]'>Long-term project sustainability Project
                contributions to Climate <br /> Change Mitigation and SDGs</h2>
            <div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-10 md:gap-y-20 py-10'>
                <div data-aos='fade-right' data-aos-duration='1200'
                    class='flex flex-col sm:flex-row items-start sm:space-x-4'>
                    <img src={{ asset('assets/images/projects/icons/icon-1.png') }} alt="" class='w-32' />
                    <div class='text-[12px] p-2 sm:p-0'>
                        <p>Provided Solar technologies for sustainable agriculture practice</p>
                        <p class='mt-2'>Reduce cost from</p>
                    </div>
                </div>
                <div data-aos='fade-right' data-aos-duration='1400'
                    class='flex flex-col sm:flex-row items-start sm:space-x-4'>
                    <img src={{ asset('assets/images/projects/icons/icon-2.png') }} alt="" class='w-32' />
                    <div class='text-[12px] p-2 sm:p-0'>
                        <p>Convenience for women to access solar water pump</p>
                        <p class='mt-2'>4 +50% of women in agriculture practice</p>
                    </div>
                </div>
                <div data-aos='fade-right' data-aos-duration='1600'
                    class='flex flex-col sm:flex-row items-start sm:space-x-4'>
                    <img src={{ asset('assets/images/projects/icons/icon-3.png') }} alt="" class='w-32' />
                    <div class='text-[12px] p-2 sm:p-0'>
                        <p>Water governance</p>
                        <p class='mt-2'>Increase rice field productions 20% to 25% per hectare</p>
                    </div>
                </div>
                <div data-aos='fade-right' data-aos-duration='1200'
                    class='flex flex-col sm:flex-row items-start sm:space-x-4'>
                    <img src={{ asset('assets/images/projects/icons/icon-4.png') }} alt="" class='w-32' />
                    <div class='text-[12px] p-2 sm:p-0'>
                        <p>Increase job opportunities for communities through farming and cropping</p>
                        <p class='mt-2'>Reduce migration</p>
                        <p class='mt-2'>Become a green community with abundant agriculture and clean energy sources</p>
                    </div>
                </div>
                <div data-aos='fade-right' data-aos-duration='1400'
                    class='flex flex-col sm:flex-row items-start sm:space-x-4'>
                    <img src={{ asset('assets/images/projects/icons/icon-5.png') }} alt="" class='w-32' />
                    <div class='text-[12px] p-2 sm:p-0'>
                        <p>Reduce carbon emission 134 tons/year </p>
                        <p class='mt-2'>SWITCH from diesel engine to solar technologies.</p>
                        <p class='mt-2'>Promote clean energy and environmental friendly</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.banner')
    @include('components.footer')
@endsection


@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const moreInfoBtns = document.querySelectorAll('.moreInfoBtn');
            const closeBtns = document.querySelectorAll('.closeBtn');
            const overlay = document.getElementById('overlay');
            const body = document.body;

            moreInfoBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const targetPanelId = btn.getAttribute('data-target');
                    const targetPanel = document.getElementById(targetPanelId);

                    targetPanel.style.right = '0';
                    overlay.classList.remove('hidden');
                    body.classList.add('overflow-hidden');
                });
            });

            const closePanel = () => {
                const openPanels = document.querySelectorAll('.infoPanel');
                openPanels.forEach(panel => {
                    panel.style.right = '-100%';
                });
                overlay.classList.add('hidden');
                body.classList.remove('overflow-hidden');
            };

            closeBtns.forEach(btn => {
                btn.addEventListener('click', closePanel);
            });

            overlay.addEventListener('click', closePanel);
        });
    </script>
@endsection
