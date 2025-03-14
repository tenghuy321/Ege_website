@extends('layouts.master')

@section('content')
    <x-telegram-btn/>

    <section class="w-full min-h-screen bg-[#D9ECEE] relative">
        <div class="max-w-5xl mx-auto py-10 md:py-20">
            <div class="px-5 2xl:px-0">
                <h1 class="text-[#A4CA62] text-[20px] sm:text-[25px] md:text-[30px] font-[700]">Request for Quote</h1>
                <p class="text-[13px] sm:text-[14px] md:text-[16px] text-gray-400 font-[600]">Please take a moment to fill
                    the form</p>
                <hr class="h-px my-4 border-b-2 border-[#A4CA62]">
            </div>

            <div class="px-5 md:px-0">
                @if (Session::has('success'))
                    <div id="alert-1"
                        class="flex items-center p-2 mb-4 bg-gray-50 text-[#52b355] border border-[#52b355] rounded-sm"
                        role="alert">
                        <div class="p-1">
                            <svg class="w-5" id="Layer_1" viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg"
                                data-name="Layer 1" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:svgjs="http://svgjs.dev/svgjs">
                                <g width="100%" height="100%" transform="matrix(1,0,0,1,0,0)">
                                    <path
                                        d="m64 0a64 64 0 1 0 64 64 64.07239 64.07239 0 0 0 -64-64zm39.23547 51.41266-50.7727 51.74658a6.04937 6.04937 0 0 1 -8.6908 0l-23.00561-23.42645a9.81582 9.81582 0 0 1 0-13.66095v-.00006a9.11176 9.11176 0 0 1 13.09039 0l14.26062 14.51373 42.02771-42.83386a9.16007 9.16007 0 0 1 13.09033 0l.00006.00006a9.82049 9.82049 0 0 1 0 13.66095z"
                                        fill="#52b355" fill-opacity="1" data-original-color="#000000ff" stroke="none"
                                        stroke-opacity="1" />
                                </g>
                            </svg>
                        </div>
                        <div class="ms-3 text-sm font-medium">
                            {{ Session::get('success') }}
                        </div>
                        <button type="button"
                            class="ms-auto -mx-1.5 -my-1.5 text-[#52b355] p-1.5 inline-flex items-center justify-center h-8 w-8"
                            data-dismiss-target="#alert-1" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @elseif (Session::has('error'))
                    <div id="alert-2"
                        class="flex items-center p-4 mb-4 bg-red-200 text-[#bd282a] border border-[#bd282a] rounded-sm"
                        role="alert">
                        <div class="p-1 w-6 h-6">
                            <svg class="w-5" id="Layer_1" enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                                xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:svgjs="http://svgjs.dev/svgjs">
                                <g width="100%" height="100%" transform="matrix(1,0,0,1,0,0)">
                                    <g>
                                        <path
                                            d="m256 0c-141.2 0-256 114.8-256 256s114.8 256 256 256 256-114.8 256-256-114.8-256-256-256zm90.9 187.8-68.3 68.2 68.2 68.2c6.2 6.2 6.2 16.4 0 22.6-3.1 3.1-7.2 4.7-11.3 4.7s-8.2-1.6-11.3-4.7l-68.2-68.2-68.2 68.2c-3.1 3.1-7.2 4.7-11.3 4.7s-8.2-1.6-11.3-4.7c-6.2-6.2-6.2-16.4 0-22.6l68.2-68.2-68.2-68.2c-6.2-6.2-6.2-16.4 0-22.6s16.4-6.2 22.6 0l68.2 68.2 68.2-68.2c6.2-6.2 16.4-6.2 22.6 0 6.3 6.2 6.3 16.3.1 22.6z"
                                            fill="#ff1e1e" fill-opacity="1" data-original-color="#000000ff" stroke="none"
                                            stroke-opacity="1" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="ms-3 text-sm font-medium">
                            {{ Session::get('error') }}
                        </div>
                        <button type="button"
                            class="ms-auto -mx-1.5 -my-1.5 text-[#bd282a] p-1.5 inline-flex items-center justify-center h-8 w-8"
                            data-dismiss-target="#alert-2" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif
            </div>

            <form action="{{ route('send.quote') }}" method="POST"
                class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-5 px-5 2xl:px-0">
                @csrf

                <div class="w-full">
                    <label for="name" class="text-[14px] font-[600]">Name <span class="text-red-800">*</span></label>
                    <input type="text" name="name" id="name"
                        class="w-full block focus:ring-[#A4CA62] focus:border-[#A4CA62] hover:border-[#A4CA62] p-1 rounded text-[13px]"
                        placeholder="Your Name" value={{ old('name') }}>
                    @error('name')
                        <div id="alert-3" class="flex items-center px-3 py-2 mt-1 mb-4 text-red-800 bg-white" role="alert">
                            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs">
                                <g width="100%" height="100%" transform="matrix(1,0,0,1,0,0)">
                                    <path
                                        d="m12.038.02C5.421.02.038,5.402.038,12.02s5.383,12,12,12,12-5.383,12-12S18.655.02,12.038.02Zm0,22c-5.514,0-10-4.486-10-10S6.524,2.02,12.038,2.02s10,4.486,10,10-4.486,10-10,10Zm4.765-14.105l-3.457,4.105,3.457,4.105c.356.423.302,1.054-.12,1.409-.188.158-.417.235-.644.235-.285,0-.568-.121-.766-.355l-3.235-3.842-3.235,3.842c-.197.234-.48.355-.766.355-.227,0-.456-.077-.644-.235-.422-.355-.477-.986-.12-1.409l3.457-4.105-3.457-4.105c-.356-.423-.302-1.054.12-1.409.423-.358,1.055-.301,1.409.12l3.235,3.842,3.235-3.842c.354-.42.986-.478,1.409-.12.422.355.477.986.12,1.409Z"
                                        fill="#9b1c1c" fill-opacity="1" data-original-color="#000000ff" stroke="none"
                                        stroke-opacity="1" />
                                </g>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div class="ms-3 text-sm font-medium">
                                <span class="font-medium">Error !</span> {{ $message }}
                            </div>
                            <button type="button"
                                class="ms-auto -mx-1.5 -my-1.5 bg-white text-red-500 p-1.5 inline-flex items-center justify-center h-8 w-8"
                                data-dismiss-target="#alert-3" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                    @enderror
                </div>

                <div class="w-full">
                    <label for="phone_number" class="text-[14px] font-[600]">Phone Number<span
                            class="text-red-800">*</span></label>
                    <input type="text" name="phone_number" id="phone_number"
                        class="w-full block focus:ring-[#A4CA62] focus:border-[#A4CA62] hover:border-[#A4CA62] p-1 rounded text-[13px]"
                        placeholder="012 345 6789" value={{ old('phone_number') }}>
                    @error('phone_number')
                        <div id="alert-5" class="flex items-center px-3 py-2 mt-1 mb-4 text-red-800 bg-white"
                            role="alert">
                            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs">
                                <g width="100%" height="100%" transform="matrix(1,0,0,1,0,0)">
                                    <path
                                        d="m12.038.02C5.421.02.038,5.402.038,12.02s5.383,12,12,12,12-5.383,12-12S18.655.02,12.038.02Zm0,22c-5.514,0-10-4.486-10-10S6.524,2.02,12.038,2.02s10,4.486,10,10-4.486,10-10,10Zm4.765-14.105l-3.457,4.105,3.457,4.105c.356.423.302,1.054-.12,1.409-.188.158-.417.235-.644.235-.285,0-.568-.121-.766-.355l-3.235-3.842-3.235,3.842c-.197.234-.48.355-.766.355-.227,0-.456-.077-.644-.235-.422-.355-.477-.986-.12-1.409l3.457-4.105-3.457-4.105c-.356-.423-.302-1.054.12-1.409.423-.358,1.055-.301,1.409.12l3.235,3.842,3.235-3.842c.354-.42.986-.478,1.409-.12.422.355.477.986.12,1.409Z"
                                        fill="#9b1c1c" fill-opacity="1" data-original-color="#000000ff" stroke="none"
                                        stroke-opacity="1" />
                                </g>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div class="ms-3 text-sm font-medium">
                                <span class="font-medium">Error !</span> {{ $message }}
                            </div>
                            <button type="button"
                                class="ms-auto -mx-1.5 -my-1.5 bg-white text-red-500 p-1.5 inline-flex items-center justify-center h-8 w-8"
                                data-dismiss-target="#alert-5" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                    @enderror
                </div>
                <div class="w-full">
                    <label for="email" class="text-[14px] font-[600]">Email <span
                            class="text-red-800">*</span></label>
                    <input type="email" name="email" id="email"
                        class="w-full block focus:ring-[#A4CA62] focus:border-[#A4CA62] hover:border-[#A4CA62] p-1 rounded text-[13px]"
                        placeholder="eg: name@example.com" value={{ old('email') }}>
                    @error('email')
                        <div id="alert-6" class="flex items-center px-3 py-2 mt-1 mb-4 text-red-800 bg-white"
                            role="alert">
                            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs">
                                <g width="100%" height="100%" transform="matrix(1,0,0,1,0,0)">
                                    <path
                                        d="m12.038.02C5.421.02.038,5.402.038,12.02s5.383,12,12,12,12-5.383,12-12S18.655.02,12.038.02Zm0,22c-5.514,0-10-4.486-10-10S6.524,2.02,12.038,2.02s10,4.486,10,10-4.486,10-10,10Zm4.765-14.105l-3.457,4.105,3.457,4.105c.356.423.302,1.054-.12,1.409-.188.158-.417.235-.644.235-.285,0-.568-.121-.766-.355l-3.235-3.842-3.235,3.842c-.197.234-.48.355-.766.355-.227,0-.456-.077-.644-.235-.422-.355-.477-.986-.12-1.409l3.457-4.105-3.457-4.105c-.356-.423-.302-1.054.12-1.409.423-.358,1.055-.301,1.409.12l3.235,3.842,3.235-3.842c.354-.42.986-.478,1.409-.12.422.355.477.986.12,1.409Z"
                                        fill="#9b1c1c" fill-opacity="1" data-original-color="#000000ff" stroke="none"
                                        stroke-opacity="1" />
                                </g>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div class="ms-3 text-sm font-medium">
                                <span class="font-medium">Error !</span> {{ $message }}
                            </div>
                            <button type="button"
                                class="ms-auto -mx-1.5 -my-1.5 bg-white text-red-500 p-1.5 inline-flex items-center justify-center h-8 w-8"
                                data-dismiss-target="#alert-6" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                    @enderror
                </div>

                <!-- Select Dropdown -->
                <div class="flex flex-col">
                    <label for="service_type" class="text-[14px] font-[600]">Service Type <span
                            class="text-red-800">*</span></label>
                    <select name="service_type"
                        class="block focus:ring-[#A4CA62] focus:border-[#A4CA62] hover:border-[#A4CA62] p-1 rounded text-[13px]">
                        <option value="">Select an option</option>
                        <option value="Feasibility-Studies-and-Site-Survey"
                            {{ old('service_type') == 'Feasibility-Studies-and-Site-Survey' ? 'selected' : '' }}>Feasibility
                            Studies & Site Survey</option>
                        <option value="Project-Management"
                            {{ old('service_type') == 'Project-Management' ? 'selected' : '' }}>Project Management</option>
                        <option value="Installation-and-Maintenance"
                            {{ old('service_type') == 'Installation-and-Maintenance' ? 'selected' : '' }}>Installation and
                            Maintenance</option>
                        <option value="Cleaning-and-Maintenance"
                            {{ old('service_type') == 'Cleaning-and-Maintenance' ? 'selected' : '' }}>Cleaning and
                            Maintenance</option>
                    </select>
                    @error('service_type')
                        <div id="alert-8" class="flex items-center px-3 py-2 mt-1 mb-4 text-red-800 bg-white"
                            role="alert">
                            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs">
                                <g width="100%" height="100%" transform="matrix(1,0,0,1,0,0)">
                                    <path
                                        d="m12.038.02C5.421.02.038,5.402.038,12.02s5.383,12,12,12,12-5.383,12-12S18.655.02,12.038.02Zm0,22c-5.514,0-10-4.486-10-10S6.524,2.02,12.038,2.02s10,4.486,10,10-4.486,10-10,10Zm4.765-14.105l-3.457,4.105,3.457,4.105c.356.423.302,1.054-.12,1.409-.188.158-.417.235-.644.235-.285,0-.568-.121-.766-.355l-3.235-3.842-3.235,3.842c-.197.234-.48.355-.766.355-.227,0-.456-.077-.644-.235-.422-.355-.477-.986-.12-1.409l3.457-4.105-3.457-4.105c-.356-.423-.302-1.054.12-1.409.423-.358,1.055-.301,1.409.12l3.235,3.842,3.235-3.842c.354-.42.986-.478,1.409-.12.422.355.477.986.12,1.409Z"
                                        fill="#9b1c1c" fill-opacity="1" data-original-color="#000000ff" stroke="none"
                                        stroke-opacity="1" />
                                </g>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div class="ms-3 text-sm font-medium">
                                <span class="font-medium">Error !</span> {{ $message }}
                            </div>
                            <button type="button"
                                class="ms-auto -mx-1.5 -my-1.5 bg-white text-red-500 p-1.5 inline-flex items-center justify-center h-8 w-8"
                                data-dismiss-target="#alert-8" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-2 h-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                    @enderror
                </div>

                <div class="w-full col-span-1 md:col-span-2">
                    <label for="messages" class="text-[14px] font-[600]">Message</label>
                    <textarea id="messages" name="messages" rows="4"
                        class="w-full block focus:ring-[#A4CA62] focus:border-[#A4CA62] hover:border-[#A4CA62] p-1 rounded text-[13px]"
                        placeholder="Message ...">{{ old('messages') }}</textarea>
                </div>

                <div class="col-span-1 md:col-span-2 text-center mt-5">
                    <button type="submit"
                        class="border-2 border-[#A4CA62] text-[#A4CA62] py-2 px-5 text-[14px] tracking-[1px] rounded-[5px] hover:bg-[#A4CA62] hover:text-[#ffffff] font-[500]">
                        Submit
                    </button>
                </div>
            </form>

        </div>

        <div class="hidden lg:block absolute top-3 right-2 xl:right-28 px-3">
            <div class="flex items-center">
                <a href="{{ route('scheduleConsultation') }}" class="px-4 hover:text-[#A4CA62]">Schedule a Consultation</a>
                <hr class="h-[25px] w-[3px] bg-[#415464]">
                <a href="{{ route('getQuote') }}" class="px-4 hover:text-[#A4CA62]">Get Quote</a>
            </div>
        </div>
    </section>

    <x-footer />
@endsection
