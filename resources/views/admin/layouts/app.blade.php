<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1">
    <title>EGE | Dashboard</title>
    <link rel="stylesheet icon" href="{{ asset('assets/images/logo.svg') }}">
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.1/dist/sweetalert2.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    @yield('css')

    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        .bg-sidebar {
            background: #D9ECEE;
        }

        .active-nav-link {
            background: #A4CA62;
            opacity: 1 !important;
        }

        .nav-item:hover {
            background: #A4CA62;
            color: #415464 !important;
        }

        .account-link:hover {
            background: #addb5e;
            text letter-spacing: 0.5px;
            font-weight: 600;
            transition: all .5s
        }
    </style>
</head>

<body class="bg-gray-100 flex" style=" font-family: 'Poppins', serif;">

    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="{{ route('dashboard') }}" class="flex items-center justify-center">
                <img src="{{ url('assets/images/logo.png') }}" alt="" class="w-20">
            </a>
        </div>
        <nav class="text-base font-semibold pt-3">
            <a href="{{ route('dashboard') }}"
                class="flex items-center opacity-75 hover:opacity-100 text-[14px] text-[#415464] py-4 pl-6 nav-item {{ Route::is('dashboard') ? 'active-nav-link' : '' }}">
                Dashboard
            </a>
            <a href="{{ url('history') }}"
                class="flex items-center opacity-75 hover:opacity-100 text-[14px] text-[#415464] py-4 pl-6 nav-item {{ Request::is('history') ? 'active-nav-link' : '' }}">
                Our History
            </a>
            <a href="{{ url('management') }}"
                class="flex items-center opacity-75 hover:opacity-100 text-[14px] text-[#415464] py-4 pl-6 nav-item {{ Request::is('management') ? 'active-nav-link' : '' }}">
                Management Team
            </a>
            <a href="{{ url('ourproduct') }}"
                class="flex items-center opacity-75 hover:opacity-100 text-[14px] text-[#415464] py-4 pl-6 nav-item {{ Request::is('ourproduct') ? 'active-nav-link' : '' }}">
                Our Product
            </a>
            <a href="{{ url('project') }}"
                class="flex items-center opacity-75 hover:opacity-100 text-[14px] text-[#415464] py-4 pl-6 nav-item {{ Request::is('project') ? 'active-nav-link' : '' }}">
                Our Project
            </a>
        </nav>
    </aside>

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-white py-3 px-6 hidden sm:flex">
            <div class="w-1/2 text-[20px] font-[700] tracking-[1px]">
                @yield('header')
            </div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-3 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.html" class="text-[#415464] text-[20px] font-semibold uppercase hover:text-gray-600">EGE
                    Dashboard</a>
                <button @click="isOpen = !isOpen" class="text-[#415464]  text-[20px] focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex' : 'hidden'" class="flex flex-col space-y-2 pt-4">
                <a href="{{ route('dashboard') }}"
                    class="flex items-center text-[14px] text-[#415464] py-2 pl-4 rounded-md nav-item {{ Route::is('dashboard') ? 'active-nav-link' : '' }}">
                    Dashboard
                </a>
                <a href="{{ url('history') }}"
                    class="flex items-center text-[14px] text-[#415464] py-2 pl-4 rounded-md nav-item {{ Request::is('history') ? 'active-nav-link' : '' }}">
                    Our History
                </a>
                <a href="{{ url('management') }}"
                    class="flex items-center text-[14px] text-[#415464] py-2 pl-4 rounded-md nav-item {{ Request::is('management') ? 'active-nav-link' : '' }}">
                    Management Team
                </a>
                <a href="{{ url('ourproduct') }}"
                    class="flex items-center text-[14px] text-[#415464] py-2 pl-4 rounded-md nav-item {{ Request::is('ourproduct') ? 'active-nav-link' : '' }}">
                    Our Products
                </a>
                <a href="{{ url('project') }}"
                    class="flex items-center text-[14px] text-[#415464] py-2 pl-4 rounded-md nav-item {{ Request::is('project') ? 'active-nav-link' : '' }}">
                    Our Projects
                </a>
                <div x-data="{ isOpen: false }" class="relative flex justify-end">
                    <!-- Settings Dropdown -->
                    <div class="">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-900 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
            </nav>
        </header>

        <div class="w-full overflow-x-hidden border-t flex flex-col">
            @yield('content')
        </div>

    </div>

    @yield('js')

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        // delete message
        function deleteRecord(url) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#A4CA62",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    }).then((result) => {
                        if (result.isConfirmed || result.dismiss === Swal.DismissReason.backdrop) {
                            window.location.href = url;
                        }
                    })
                }
            });
        }
    </script>
</body>

</html>
