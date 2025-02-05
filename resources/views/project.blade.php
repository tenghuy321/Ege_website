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
                @foreach ($project_des as $index => $project)
                    <div data-aos='fade-right' data-aos-duration='1200' class="relative">
                        <img src={{ asset($project->image) }} alt="" class='w-full h-[200px] object-cover' />
                        <hr class='h-2 bg-[#A4CA62] border-none' />
                        <div class='bg-[#415464] text-[#ffffff] p-3 h-[170px] xl:h-[150px]'>
                            <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Project:</span>
                                {{ $project->project_name }}</p>
                            @if (!empty($project->scope_of_work))
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope of
                                        Work:</span> {{ $project->scope_of_work }}</p>
                            @endif
                            @if (!empty($project->location))
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span
                                        class="font-[600]">Location:</span> {{ $project->location }}</p>
                            @endif
                            @if (!empty($project->year))
                                <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Year:</span>
                                    {{ $project->year }}</p>
                            @endif

                            <button data-target="infoPanel{{ $index + 1 }}"
                                class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-2 py-[2px]  rounded absolute bottom-2 left-2">Details</button>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- mobile --}}
            <div class='swiper-project md:hidden'>
                <div class="swiper projectSwiper">
                    <div class="swiper-wrapper">
                        @foreach ($project_des as $index => $project)
                            <div class="swiper-slide ">
                                <img src={{ asset($project->image) }} alt="" class='w-full h-[200px] object-cover' />
                                <hr class='h-2 bg-[#A4CA62] border-none' />
                                <div class='bg-[#415464] relative text-[#ffffff] p-3 h-[150px] space-y-1'>
                                    <p class="mb-1 leading-none text-[12px] line-clamp-1"><span
                                            class="font-[600]">Project:</span> {{ $project->project_name }}</p>

                                    @if (!empty($project->scope_of_work))
                                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span class="font-[600]">Scope
                                                of Work:</span> {{ $project->scope_of_work }}</p>
                                    @endif
                                    @if (!empty($project->location))
                                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span
                                                class="font-[600]">Location:</span> {{ $project->location }}</p>
                                    @endif
                                    @if (!empty($project->year))
                                        <p class="mb-1 leading-none text-[12px] line-clamp-1"><span
                                                class="font-[600]">Year:</span> {{ $project->year }}</p>
                                    @endif

                                    <button data-target="infoPanel{{ $index + 1 }}"
                                        class="moreInfoBtn  bg-[#A4CA62] text-[10px] md:text-[12px] text-black px-3 py-1  rounded absolute bottom-2 left-2">Details</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Overlay -->
            <div id="overlay" class="fixed inset-0 bg-black/50 z-[998] hidden"></div>
                @foreach ($project_des as $index => $project)
                    <div id="infoPanel{{ $index + 1 }}"
                        class="infoPanel fixed top-0 right-[-100%] w-[90%] md:w-[500px] h-full bg-[#A4CA62] text-black p-4 shadow-lg transition-all duration-500 z-[999] overflow-y-auto">
                        <button
                            class="closeBtn absolute top-4 right-4 text-black w-4 h-4 md:w-6 md:h-6 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 md:w-6 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            <span class="sr-only">Close menu</span>
                        </button>
                        <div class="pt-8">
                            <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Project :</span>  {{ $project->project_name }}</p>

                            @if (!empty($project->scope_of_work))
                                <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Scope of
                                        Work:</span> {{ $project->scope_of_work }}</p>
                            @endif
                            @if (!empty($project->location))
                                <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Location:</span>
                                    {{ $project->location }}</p>
                            @endif
                            @if (!empty($project->year))
                                <p class="mb-1 text-[10px] md:text-[12px]"><span class="font-[600]">Year:</span>
                                    {{ $project->year }}</p>
                            @endif

                            <div class="text-[10px] md:text-[12px]">
                                @if (!empty($project->overview))
                                    <p class="font-[600] mt-1">Overview</p>
                                    <p class="">{{ $project->overview }}</p>
                                @endif
                                @if (!empty($project->challenges))
                                    <p class="font-[600] mt-1">Challenges</p>
                                    <p class="">{{ $project->challenges }}</p>
                                @endif
                                @if (!empty($project->solution))
                                    <p class="font-[600] mt-1">Solution</p>
                                    <p class="">{{ $project->solution }}</p>
                                @endif

                                @if (!empty($project->impact))
                                    <p class="font-[600] my-1">Impact</p>
                                    <ol class="max-w-md space-y-1 text-black list-decimal list-inside">
                                        @foreach (json_decode($project->impact, true) as $impacts)
                                            @if (is_array($impacts) &&
                                                    isset($impacts['title'], $impacts['body']) &&
                                                    !empty($impacts['title']) &&
                                                    !empty($impacts['body']))
                                                <li>
                                                    <span class="font-[600]">{{ $impacts['title'] }} :</span>
                                                    <p>{{ $impacts['body'] }}</p>
                                                </li>
                                            @elseif (isset($impacts['body']) && empty($impacts['title']))
                                                <!-- If there is no title, just display the body -->
                                                <li>{{ $impacts['body'] }}</li>
                                            @endif
                                        @endforeach
                                    </ol>
                                @endif

                                @if (!empty($project->conclusion))
                                    <p class="font-[600] mt-1">Conclusion</p>
                                    <p class="">{{ $project->conclusion }}</p>
                                @endif

                                @if (!empty($project->testimonial))
                                    <p class="font-[600] mt-1">Testimonial</p>
                                    <p class="">{{ $project->testimonial }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
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
                                    <img src={{ asset('assets/images/projects/activity/activity-10.png') }} alt=""
                                        class='w-full h-[300px] object-cover' />
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
                                    <img src={{ asset('assets/images/projects/activity/activity-11.png') }} alt=""
                                        class='w-full h-[300px] object-cover' />
                                    <div
                                        class='absolute bottom-0 left-0 pt-2 pb-4 px-4 w-full h-[70%] translate-y-full bg-black/80 group-hover:translate-y-0 duration-300 ease-in-out'>
                                        <h1 class="text-[14px] text-[#A4CA62] font-[600]">Some of Technical of Training,
                                            Operation, Maintenance</h1>
                                        <p class='text-[11px] text-[#ffffff]'>Training community at Preah Vihear Province in 2024</p>
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
        <h1 data-aos='fade-right' data-aos-duration='1200' class='text-[25px] md:text-[30px] text-[#415464] font-[700]'>
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
        <h1 data-aos='fade-right' data-aos-duration='1200' class='text-[25px] md:text-[30px] text-[#415464] font-[700]'>
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
        <h1 data-aos='fade-right' data-aos-duration='1200' class='text-[25px] md:text-[30px] text-[#415464] font-[700]'>
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
        <h1 data-aos='fade-right' data-aos-duration='1200' class='text-[25px] md:text-[30px] text-[#415464] font-[700]'>
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
