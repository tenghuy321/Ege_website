@extends('layouts.master')
@section('content')
    <x-home/>
    <x-scroll-top-button />

    <div class="max-w-7xl mx-auto px-4">
        <hr class="h-4 bg-[#A4CA62] border-none max-w-7xl mx-auto" />
        <div class="grid grid-cols-1 md:grid-cols-2">
            <img data-aos='fade-right' data-aos-duration='1500' src={{ asset('assets/images/events/events.png') }} alt="" class="w-full h-full" />
            <div data-aos='fade-left' data-aos-duration='1500' class="bg-[#374E5D] p-3 md:p-5">
                <div class="flex items-center space-x-3 text-[20px] text-[#ffffff]">
                    <img src={{ asset('assets/images/events/events_icon.png') }} alt="" class="w-10" />
                    <p class="underline">អាជ្ញាធរអគ្គិសនីកម្ពុជា</p>
                </div>
                <div class="text-[10px] md:text-[11px] lg:text-[13px] text-[#ffffff]">
                    <h2 class="pt-4">នាថ្ងៃព្រហស្បតិ៍ ១១រោច ខែមិគសិរ ឆ្នាំរោង ឆស័ក ព.ស.២៥៦៨ ត្រូវនឹងថ្ងៃទី២៦ ខែធ្នូ
                        ឆ្នាំ២០២៤ អាជ្ញាធរអគ្គិសនីកម្ពុជាបានរៀបចំសម័យប្រជុំលើកទី៤២៨ ដោយមានការចូលរួមពីតំណាងក្រសួងរ៉ែ
                        និងថាមពល, តំណាងអគ្គិសនីកម្ពុជា និងអ្នកកាន់អាជ្ញាបណ្ណពាក់ព័ន្ធ ដើម្បីពិនិត្យ
                        និងអនុម័តលើរបៀបវារៈដូចខាងក្រោម ៖</h2>
                    <ul class="pl-6 text-lg lg:space-y-1">
                        <li
                            class="relative before:content-['ក)'] before:absolute before:-left-6 text-[10px] md:text-[11px] lg:text-[13px]">
                            <p>ការចេញអាជ្ញាបណ្ណឱ្យ ៖</p>
                            <ul class="pl-6 text-lg lg:space-y-1">
                                <li
                                    class="relative before:content-['១-'] leading-5 before:absolute before:-left-6 text-[10px] md:text-[11px] lg:text-[13px]">
                                    ក្រុមហ៊ុន អុីជីអុី (ខេមបូឌា) អេនើជី សឹលូសិន ឯ.ក
                                    សម្រាប់សេវាកម្មដំឡើងប្រព័ន្ធថាមពលពន្លឺព្រះអាទិត្យលើដំបូល។</li>
                                <li
                                    class="relative before:content-['២-'] leading-5 before:absolute before:-left-6 text-[10px] md:text-[11px] lg:text-[13px]">
                                    ក្រុមហ៊ុន ស្នេថេក ហ្សៀលឡឹស ឯ.ក
                                    សម្រាប់ធ្វើសេវាកម្មផលិតអគ្គិសនីដើរដោយថាមពលពន្លឺព្រះអាទិត្យ អានុភាព ១០មេហ្កាវ៉ាត់
                                    មានទីតាំងនៅភូមិអន្សក្តាម ឃុំស្នាអន្សា ស្រុកក្រគរ ខេត្តពោធិ៍សាត់។</li>
                            </ul>
                        </li>
                        <li
                            class="relative before:content-['ខ)'] leading-5 before:absolute before:-left-6 text-[10px] md:text-[11px] lg:text-[13px]">
                            ការកែសម្រួលម្ចាស់កម្មសិទ្ធិនៃអ្នកកាន់អាជ្ញាបណ្ណរបស់ក្រុមហ៊ុន រ៉ាយសិន អេនើជី (ខេមបូឌា) បាត់ដំបង
                            ឯ.ក សម្រាប់ធ្វើសេវាកម្មផលិតអគ្គិសនីដើរដោយថាមពលពន្លឺព្រះអាទិត្យ ដែលមានទីតាំងនៅភូមិសូភី
                            ឃុំអន្លង់រុន ស្រុកថ្មគោល ខេត្តបាត់ដំបង។</li>
                        <li
                            class="relative before:content-['គ)'] leading-5 before:absolute before:-left-6 text-[10px] md:text-[11px] lg:text-[13px]">
                            ការកែសម្រួលលើកទីមួយលើបទប្បញ្ញត្តិស្តីពីការដំឡើង
                            និងការប្រើប្រាស់ប្រព័ន្ធថាមពលពន្លឺព្រះអាទិត្យលើដំបូលនៅកម្ពុជានៃសម័យប្រជុំវិសាមញ្ញ៕</li>
                    </ul>

                    <h2 class="text-[14px] lg:text-[20px] font-[700] text-[#A4CA62] mt-5">Facebook Link</h2>
                    <a class="text-[14px] lg:text-[20px] font-[700] underline"
                        href="https://www.facebook.com/story.php?story_fbid=983226160505262&id=100064536617670&mibextid=wwXIfr&rdid=FL4RvPVMX1O4bHsX">
                        នាថ្ងៃព្រហស្បតិ៍ ១១រោច ខែមិគសិរ ឆ្នាំរោង... - អាជ្ញាធរអគ្គិសនីកម្ពុជា | Facebook
                    </a>
                </div>
            </div>
        </div>
    </div>

    @include('components.banner')
    @include('components.footer')
@endsection
