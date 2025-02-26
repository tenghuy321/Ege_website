<section class="w-full h-full">
    <div class="max-w-7xl mx-auto px-4">
      <hr class="h-[10px] sm:h-[20px] bg-[#A4CA62] border-none" />
      <div class="grid grid-cols-1 sm:grid-cols-12 items-start gap-10 py-10">
        <div class="sm:col-span-6 md:col-span-4 lg:col-span-2">
          <img src={{ asset('assets/images/logo.png') }} alt="" class='w-32 sm:w-full sm:h-full' />
        </div>
        <div class='sm:col-span-6 md:col-span-4 lg:col-span-3 text-[13px] text-[#415464]'>
          <h1 class='text-[#A4CA62] text-[18px] font-[700] leading-none'>EGE (Cambodia) Energy Solutions Co., Ltd</h1>
          <p>Our commitment goes beyond mere products; we actively engage in studying
            projects, providing expert consultancy, and offering efficient project management solutions.</p>
          <h2 class='text-[25px] font-[700] italic leading-none pt-6'>Innovation meets <br />
            sustainability. </h2>
        </div>
        <div class="sm:col-span-4 md:col-span-4 lg:col-span-2">
          <h1 class='text-[#A4CA62] text-[18px] font-[700]'>Infomation</h1>
          <ul class='text-[14px] text-[#415464] flex flex-col space-y-1'>
            <li>
                <a href="{{ route('home') }}" class="{{ Route::is('home') ? 'text-[#415464] font-bold' : 'text-[#415464]' }}">Home</a>
            </li>
            <li>
                <a href="{{ route('about') }}" class="{{ Route::is('about') ? 'text-[#415464] font-bold' : 'text-[#415464]' }}">About Us</a>
            </li>
            <li>
                <a href="{{ route('products') }}" class="{{ Route::is('products') ? 'text-[#415464] font-bold' : 'text-[#415464]' }}">Products</a>
            </li>
            <li>
                <a href="{{ route('services') }}" class="{{ Route::is('services') ? 'text-[#415464] font-bold' : 'text-[#415464]' }}">Services</a>
            </li>
            <li>
                <a href="{{ route('careers') }}" class="{{ Route::is('careers') ? 'text-[#415464] font-bold' : 'text-[#415464]' }}">Careers</a>
            </li>
            <li class="relative">
                <a href="{{ route('events') }}" class="{{ Route::is('events') ? 'text-[#415464] font-bold' : 'text-[#415464]' }}">Events</a>
            </li>
            <li>
                <a href="{{ route('projects') }}" class="{{ Route::is('projects') ? 'text-[#415464] font-bold' : 'text-[#415464]' }}">Projects</a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="{{ Route::is('contact') ? 'text-[#415464] font-bold' : 'text-[#415464]' }}">Contact Us</a>
            </li>
          </ul>
        </div>

        <div class='sm:col-span-4 md:col-span-4 lg:col-span-3'>
          <h1 class='text-[#A4CA62] text-[18px] font-[700]'>Keep In Touch</h1>
          <div class='flex flex-col space-y-4 text-[14px] text-[#415464]'>
            <div class='flex items-start space-x-1'>
              <div>
                <svg class="w-6 h-6 text-[#415464]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.5" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                  <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.5" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z" />
                </svg>
              </div>
              <p class='p-[2px]'>Borey Chip Mong 271, #117, St Commercial, Sangkat Chak Agre Leu,Khan Mean Chey, Phnom Penh, Cambodia</p>
            </div>
            <div class='flex items-start space-x-1'>
              <div>
                <svg class="w-6 h-6 text-[#415464]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" strokeLinecap="round" strokeWidth="1.5" d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                </svg>
              </div>
              <a href='mailto:info@egecambodia.com' class='p-[2px]'>info@egecambodia.com</a>
            </div>
            <div class='flex items-start space-x-1'>
              <div>
                <svg class="w-6 h-6 text-[#415464]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.5" d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z" />
                </svg>
              </div>
              <a href='#' class='p-[2px]'>(+855) 078 256 088</a>
            </div>
          </div>
        </div>

        <div class='sm:col-span-4 md:col-span-4 lg:col-span-2'>
          <h1 class='text-[#A4CA62] text-[18px] font-[700]'>Follow Us</h1>
          <div class='flex space-x-2 pt-4'>
            <a href="https://www.facebook.com/share/1By1qNP5MY/?mibextid=wwXIfr" class='transition-all hover:scale-110 duration-200'>
              <svg width="28" height="28" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M30 15C30 22.4871 24.5145 28.6928 17.3438 29.8178V19.3359H20.8389L21.5039 15H17.3438V12.1863C17.3438 10.9998 17.925 9.84375 19.7883 9.84375H21.6797V6.15234C21.6797 6.15234 19.9629 5.85938 18.3217 5.85938C14.8957 5.85938 12.6562 7.93594 12.6562 11.6953V15H8.84766V19.3359H12.6562V29.8178C5.48555 28.6928 0 22.4871 0 15C0 6.71602 6.71602 0 15 0C23.284 0 30 6.71602 30 15Z" fill="#415464" />
                <path d="M20.8389 19.3359L21.5039 15H17.3438V12.1863C17.3438 11 17.9249 9.84375 19.7882 9.84375H21.6797V6.15234C21.6797 6.15234 19.9631 5.85938 18.322 5.85938C14.8956 5.85938 12.6562 7.93594 12.6562 11.6953V15H8.84766V19.3359H12.6562V29.8177C13.42 29.9375 14.2027 30 15 30C15.7973 30 16.58 29.9375 17.3438 29.8177V19.3359H20.8389Z" fill="white" />
              </svg>
            </a>

            <a href="https://t.me/JAnRW9JVrnBiZTc9" class='transition-all hover:scale-110 duration-200'>
              <svg width="28" height="28" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 30C23.2863 30 30 23.2863 30 15C30 6.71375 23.2863 0 15 0C6.71375 0 0 6.71375 0 15C0 23.2863 6.71375 30 15 30ZM6.86375 14.675L21.3263 9.09875C21.9975 8.85625 22.5837 9.2625 22.3662 10.2775L22.3675 10.2762L19.905 21.8775C19.7225 22.7 19.2337 22.9 18.55 22.5125L14.8 19.7487L12.9912 21.4913C12.7912 21.6913 12.6225 21.86 12.235 21.86L12.5013 18.0438L19.4513 11.765C19.7537 11.4987 19.3837 11.3488 18.985 11.6138L10.3963 17.0212L6.69375 15.8663C5.89 15.6112 5.8725 15.0625 6.86375 14.675Z" fill="#415464" />
              </svg>
            </a>

            <a href="https://www.linkedin.com/company/ege-cambodia-energy-solutions-co-ltd/" class='transition-all hover:scale-110 duration-200'>
              <svg width="28" height="28" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30Z" fill="#415464" />
                <path d="M23.9629 16.2069V22.391H20.3775V16.6213C20.3775 15.1726 19.8599 14.1833 18.5617 14.1833C17.571 14.1833 16.9825 14.8493 16.7226 15.4943C16.6282 15.7248 16.6039 16.0448 16.6039 16.3681V22.3908H13.0182C13.0182 22.3908 13.0663 12.6188 13.0182 11.6072H16.6041V13.1354C16.5969 13.1474 16.5867 13.1592 16.5803 13.1707H16.6041V13.1354C17.0806 12.4022 17.9304 11.354 19.8355 11.354C22.1944 11.354 23.9629 12.8952 23.9629 16.2069ZM9.26723 6.40918C8.04072 6.40918 7.23828 7.21429 7.23828 8.27208C7.23828 9.30741 8.01745 10.1358 9.22017 10.1358H9.24343C10.494 10.1358 11.2716 9.30741 11.2716 8.27208C11.2478 7.21429 10.494 6.40918 9.26723 6.40918ZM7.45139 22.391H11.0357V11.6072H7.45139V22.391Z" fill="white" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class='bg-[#415464] text-[#A4CA62] text-center py-2 text-[12px] md:text-[15px]'>
      <h1>EGE (Cambodia) Energy Solutions Co., Ltd <br />
        All Right Reserved 2024</h1>
    </div>
  </section>
