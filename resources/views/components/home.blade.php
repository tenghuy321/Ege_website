    <x-loading />

    <section class="w-full bg-[#D9ECEE] min-h-screen 2xl:h-[86.9vh] flex overflow-hidden z-10 relative">
        <div class="container mx-auto px-4 xl:px-10 grid grid-cols-1 md:grid-cols-12 md:gap-4 items-center justify-center">
            <div class="md:col-span-5">
                <div class="flex items-end overflow-hidden">
                    <hr data-aos='fade-left' data-aos-duration='1000'
                        class="w-2 h-20 lg:h-40 mx-auto bg-[#A4CA62] border-none" />
                    <div class="bg-[#415464] w-full px-8 lg:px-10 py-4" data-aos='fade-left' data-aos-duration='1500'>
                        <div data-aos='fade-left' data-aos-duration='2000'>
                            <p class="text-[20px] xl:text-[30px] font-[700] text-[#ffffff]">Welcome to</p>
                            <p class="text-[#ffffff] text-[20px] lg:text-[40px] xl:text-[60px] font-[700] leading-none">
                                EGE Cambodia Energy </p>
                            <p class="text-[#ffffff] text-[40px] xl:text-[60px] font-[700] leading-none">Solutions.</p>
                        </div>
                    </div>
                </div>
                <div data-aos='fade-left' data-aos-duration='2000'
                    class="px-8 lg:px-12 py-2 text-[#415464] text-[25px] lg:text-[30px] xl:text-[40px] font-[400] leading-none">
                    Innovation meets
                    sustainability.
                </div>
            </div>
            <div data-aos='fade-left' data-aos-duration='1500'
                class="mix-blend-darken md:col-span-7 flex items-center justify-center">
                <img src={{ asset('assets/images/banner-1.png') }} alt=""
                    class="mix-blend-darken w-full h-auto 2xl:h-[650px] object-contain object-center flex items-center justify-center" />
            </div>
        </div>

        <div class="hidden lg:block absolute top-3 right-2 xl:right-28 px-3">
            <div class="flex items-center">
                <a href="{{ route('scheduleConsultation') }}" class="px-4 hover:text-[#A4CA62]">Schedule a Consultation</a>
                <hr class="h-[25px] w-[3px] bg-[#415464]">
                <a href="{{ route('getQuote') }}" class="px-4 hover:text-[#A4CA62]">Get Quote</a>
            </div>
        </div>
    </section>
