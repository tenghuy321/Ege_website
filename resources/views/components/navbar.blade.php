<style>
    nav a{
        position: relative;
        width: 100%;
        height: 100%;
    }
    nav .active::after{
        content: "";
        position: absolute;
        top: -1px;
        left: 0;
        width: 100%;
        height: 4px;
        background-color: #A4CA62;
    }

    nav .nav_link::before{
        content: '';
        position: absolute;
        top: -1px;
        left: 0;
        width: 0;
        height: 4px;
        background-color: #A4CA62;
        transition: all 0.5s ease;
    }

    nav .nav_link:hover::before{
        width: 100%;
    }
</style>
<nav class="w-full bg-[#D9ECEE] hidden lg:flex">
    <div class="container xl:max-w-7xl mx-auto flex items-center space-x-1 py-2">
        <img src="{{ asset('assets/images/logo.png') }}" alt="" class="w-32">
        <ul class="flex items-center bg-[#ffffff] space-x-1 px-5 xl:px-10 py-3">
            <li class="relative group">
                <a href="{{ route('home') }}" class="px-5 xl:px-7 py-4 xl:py-4 text-[16px] xl:text-[19px] nav_link {{ Route::is('home') ? 'active font-[600]' : '' }}">Home</a>
            </li>
            <li class="relative group">
                <a href="{{ route('about') }}" class="px-5 xl:px-7 py-4 xl:py-4 text-[16px] xl:text-[19px] nav_link {{ Route::is('about') ? 'active font-[600]' : '' }}">About Us</a>
                <ul class="absolute left-1/2 transform -translate-x-1/2 hidden mt-3 py-2 space-y-2 w-44 bg-[#415464] shadow-lg group-hover:block z-50">
                    <li class="hover:bg-[#2E4354]"><a href="/about#vision" class="block px-2 text-[14px] text-[#ffffff]">Vision</a></li>
                    <li class="hover:bg-[#2E4354]"><a href="/about#mission" class="block px-2 text-[14px] text-[#ffffff]">Mission</a></li>
                    <li class="hover:bg-[#2E4354]"><a href="/about#core_values" class="block px-2 text-[14px] text-[#ffffff]">Core Values</a></li>
                    <li class="hover:bg-[#2E4354]"><a href="/about#history" class="block px-2 text-[14px] text-[#ffffff]">Our History</a></li>
                    <li class="hover:bg-[#2E4354]"><a href="/about#management_team" class="block px-2 text-[14px] text-[#ffffff]">Management Team</a></li>
                    <li class="hover:bg-[#2E4354]"><a href="/about#registration_docs" class="block px-2 text-[14px] text-[#ffffff]">Registration Docs</a></li>
                    <li class="hover:bg-[#2E4354]"><a href="/about#certificate" class="block px-2 text-[14px] text-[#ffffff]">Certificate of Auth</a></li>
                </ul>
            </li>
            <li class="relative group">
                <a href="{{ route('products') }}" class="px-5 xl:px-7 py-4 xl:py-4 text-[16px] xl:text-[19px] nav_link {{ Route::is('products') ? 'active font-[600]' : '' }}">Products</a>
                <ul class="absolute left-1/2 transform -translate-x-1/2 hidden mt-3 py-2 space-y-2 w-44 bg-[#415464] shadow-lg group-hover:block z-50">
                    <li class="hover:bg-[#2E4354]"><a href="/products#product" class="block px-2 text-[14px] text-[#ffffff]">Products</a></li>
                    <li class="hover:bg-[#2E4354]"><a href="/products#reason" class="block px-2 text-[14px] text-[#ffffff]">6 Reason to choose us</a></li>
                </ul>
            </li>
            <li class="relative group">
                <a href="{{ route('services') }}" class="px-5 xl:px-7 py-4 xl:py-4 text-[16px] xl:text-[19px] nav_link {{ Route::is('services') ? 'active font-[600]' : '' }}">Services</a>
                <ul class="absolute left-1/2 transform -translate-x-1/2 hidden mt-3 w-44 py-2 space-y-2 bg-[#415464] shadow-lg group-hover:block z-50">
                    <li class="hover:bg-[#2E4354]"><a href="/services#feasibility" class="block px-2 text-[14px] text-[#ffffff]">Feasibility Studies & Site Survey</a></li>
                    <li class="hover:bg-[#2E4354]"><a href="/services#project_management" class="block px-2 text-[14px] text-[#ffffff]">Project Management</a></li>
                    <li class="hover:bg-[#2E4354]"><a href="/services#installation" class="block px-2 text-[14px] text-[#ffffff]">Installation & Maintenance</a></li>
                    <li class="hover:bg-[#2E4354]"><a href="/services#cleaning" class="block px-2 text-[14px] text-[#ffffff]">Cleaning & Optimization</a></li>
                </ul>
            </li>
            <li class="relative group">
                <a href="{{ route('careers') }}" class="px-5 xl:px-7 py-4 xl:py-4 text-[16px] xl:text-[19px] nav_link {{ Route::is('careers') ? 'active font-[600]' : '' }}">Careers</a>
                <ul class="absolute left-1/2 transform -translate-x-1/2 hidden mt-3 py-2 space-y-2 w-44 bg-[#415464] shadow-lg group-hover:block z-50">
                    <li class="hover:bg-[#2E4354]"><a href="/careers#career" class="block px-2 text-[14px] text-[#ffffff]">Careers</a></li>
                </ul>
            </li>
            <li class="relative">
                <a href="{{ route('events') }}" class="px-5 xl:px-7 py-4 xl:py-4 text-[16px] xl:text-[19px] nav_link {{ Route::is('events') ? 'active font-[600]' : '' }}">Events</a>
            </li>
            <li class="relative group">
                <a href="{{ route('projects') }}" class="px-5 xl:px-7 py-4 xl:py-4 text-[16px] xl:text-[19px] nav_link {{ Route::is('projects') ? 'active font-[600]' : '' }}">Projects</a>
                <ul class="absolute left-1/2 transform -translate-x-1/2 hidden mt-3 py-2 space-y-2 w-44 bg-[#415464] shadow-lg group-hover:block z-50">
                    <li class="hover:bg-[#2E4354]"><a href="/projects#project" class="block px-2 text-[14px] text-[#ffffff]">Project Credentials</a></li>
                    <li class="hover:bg-[#2E4354]"><a href="/projects#activities" class="block px-2 text-[14px] text-[#ffffff]">Activities</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="px-5 xl:px-7 py-4 xl:py-4 text-[16px] xl:text-[19px] nav_link {{ Route::is('contact') ? 'active font-[600]' : '' }}">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>
