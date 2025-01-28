@extends('layouts.master')
@section('css')
    <style>
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
@endsection
@section('content')
    <x-home/>
    <x-scroll-top-button />

    <div class="max-w-7xl mx-auto px-4">
        <hr class="h-4 bg-[#A4CA62] border-none" />
        <div class="px-0 py-4 md:p-5">
            <h1 data-aos='fade-right' data-aos-duration='1000'
                class="text-[30px] md:text-[40px] lg:text-[50px] text-[#415464] font-[700]">Our Services</h1>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                <div id="feasibility" class='' data-aos='fade-right' data-aos-duration='1200'>
                    <img src="{{ asset('assets/images/services/service-1.png') }}" alt="Service 1"
                        class="w-full h-[200px] lg:h-[300px] object-cover" />
                    <div class="flex flex-col items-start bg-[#415464] py-2 px-2 md:px-6 leading-none">
                        <h1
                            class="text-[50px] lg:text-[70px] font-[700] text-[#ffffff] p-0 m-0 leading-none tracking-tight">
                            01</h1>
                        <div class="flex flex-col items-start text-[#ffffff] text-[12px]">
                            <h1 class="text-[14px] md:text-[16px] xl:text-[20px] font-[700] leading-none h-[30px]">
                                Feasibility Studies & Site Survey
                            </h1>
                            <p class="text-white text-[10px] md:text-[13px] font-[300] leading-5 line-clamp-1">
                                We begin every project with a thorough feasibility study and site survey to ensure optimal
                                results.
                                Our team evaluates the technical, environmental, and financial aspects of implementing solar
                                solutions. By analyzing factors such as sunlight availability, site conditions, and energy
                                requirements, we design a customized plan to maximize ensures that your solar investment is
                                practical, sustainable, and impactful.
                            </p>
                            <button
                                class="read-more-btn mt-4 px-4 py-2 bg-[#ffffff] text-[#415464] font-[700] rounded-sm transition-all duration-300 shadow-[2px_2px_2px_0px_rgba(0,0,0,0.5)] hover:shadow-transparent">
                                Read More
                            </button>
                        </div>
                    </div>
                </div>


                <div id="project_management" class='' data-aos='fade-right' data-aos-duration='1200'>
                    <img src="{{ asset('assets/images/services/service-2.png') }}" alt="Service 2"
                        class="w-full h-[200px] lg:h-[300px] object-cover" />
                    <div class="flex flex-col items-start bg-[#415464] py-2 px-2 md:px-6 leading-none">
                        <h1
                            class="text-[50px] lg:text-[70px] font-[700] text-[#ffffff] p-0 m-0 leading-none tracking-tight">
                            02</h1>
                        <div class="flex flex-col items-start text-[#ffffff] text-[12px]">
                            <h1 class="text-[14px] md:text-[16px] xl:text-[20px] font-[700] leading-none h-[30px]">
                                Project Management
                            </h1>
                            <p class="text-white text-[10px] md:text-[13px] font-[300] leading-5 line-clamp-1">
                                Effective project management is at the core of our operations. From planning to execution,
                                our experienced project managers oversee every phase of your solar project. We coordinate
                                with all stakeholders, manage timelines, and ensure compliance with industry standards and
                                regulations. Our goal is to deliver a seamless process, on time and within budget, while
                                maintaining the highest levels of quality and professionalism.
                            </p>
                            <button
                                class="read-more-btn mt-4 px-4 py-2 bg-[#ffffff] text-[#415464] font-[700] rounded-sm transition-all duration-300 shadow-[2px_2px_2px_0px_rgba(0,0,0,0.5)] hover:shadow-transparent">
                                Read More
                            </button>
                        </div>
                    </div>
                </div>

                <div id="installation" class='' data-aos='fade-right' data-aos-duration='1200'>
                    <img src="{{ asset('assets/images/services/service-3.png') }}" alt="Service 2"
                        class="w-full h-[200px] lg:h-[300px] object-cover" />
                    <div class="flex flex-col items-start bg-[#415464] py-2 px-2 md:px-6 leading-none">
                        <h1
                            class="text-[50px] lg:text-[70px] font-[700] text-[#ffffff] p-0 m-0 leading-none tracking-tight">
                            03</h1>
                        <div class="flex flex-col items-start text-[#ffffff] text-[12px]">
                            <h1 class="text-[14px] md:text-[16px] xl:text-[20px] font-[700] leading-none h-[30px]">
                                Installation and Maintenance
                            </h1>
                            <p class="text-white text-[10px] md:text-[13px] font-[300] leading-5 line-clamp-1">
                                Our installation services are designed to provide hassle-free and precise implementation of
                                solar energy systems. Using state-of-the-art equipment and industry best practices, our
                                skilled technicians ensure that your solar panels, inverters, and other components are
                                installed efficiently and securely. Beyond installation, we offer reliable maintenance
                                services to ensure your system performs optimally over its lifespan, minimizing downtime and
                                maximizing energy output.
                            </p>
                            <button
                                class="read-more-btn mt-4 px-4 py-2 bg-[#ffffff] text-[#415464] font-[700] rounded-sm transition-all duration-300 shadow-[2px_2px_2px_0px_rgba(0,0,0,0.5)] hover:shadow-transparent">
                                Read More
                            </button>
                        </div>
                    </div>
                </div>

                <div id="cleaning" class='lg:col-span-3' data-aos='fade-right' data-aos-duration='1200'>
                    <img src="{{ asset('assets/images/services/service-3.png') }}" alt="Service 2"
                        class="w-full h-[200px] lg:h-[300px] object-cover" />
                    <div class="flex flex-col items-start bg-[#415464] py-2 px-2 md:px-6 leading-none">
                        <h1 class="text-[50px] lg:text-[70px] font-[700] text-[#ffffff] p-0 m-0 leading-none tracking-tight">
                            04</h1>
                        <div class="flex flex-col items-start text-[#ffffff] text-[12px]">
                            <h1 class="text-[14px] md:text-[16px] xl:text-[20px] font-[700] leading-none h-[30px]">
                                Cleaning and Optimization
                            </h1>
                            <p class="text-white text-[10px] md:text-[13px] font-[300] leading-5 line-clamp-1">
                                Keep your solar panels performing at their best with our professional cleaning service. Regular cleaning removes dirt, debris, and other buildup, ensuring maximum efficiency, reducing energy costs, and extending the lifespan of your system.
                            </p>
                            <button
                                class="read-more-btn mt-4 px-4 py-2 bg-[#ffffff] text-[#415464] font-[700] rounded-sm transition-all duration-300 shadow-[2px_2px_2px_0px_rgba(0,0,0,0.5)] hover:shadow-transparent">
                                Read More
                            </button>
                        </div>
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
            const buttons = document.querySelectorAll('.read-more-btn');

            buttons.forEach((button) => {
                button.addEventListener('click', (e) => {
                    const textElement = e.target.previousElementSibling;
                    const isClamped = textElement.classList.contains('line-clamp-1');

                    if (isClamped) {
                        textElement.classList.remove('line-clamp-1');
                        e.target.textContent = 'Show Less';
                    } else {
                        textElement.classList.add('line-clamp-1');
                        e.target.textContent = 'Read More';
                    }
                });
            });
        });
    </script>
@endsection
