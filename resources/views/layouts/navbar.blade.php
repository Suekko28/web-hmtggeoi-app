@extends('layouts.app-user')

@section('app-user')
    <nav id="mainNavbar" class="absolute top-0 left-0 w-full z-60 bg-transparent fixed">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('/images/logo-hmtggeoi.png') }}" class="h-12" alt="HMTGGEOI Logo" />
                <div class="flex flex-col text-white hidden sm:block">
                    <span class="text-2xl font-bold whitespace-nowrap">HMTG "GEOI"</span>
                    <h6 class="font-bold">Himpunan Mahasiswa Teknik Geologi "GEOI"</h6>
                </div>
            </a>

            <!-- Tombol Hamburger dan Ikon Sosial Media (desktop only) -->
            <div class="flex lg:order-2 items-center space-x-2 rounded-lg">
                <!-- Social Media Icons (visible only on sm and above) -->
                <div id="socialIcons" class="hidden sm:flex flex-row gap-6 py-2 px-6 items-center rounded-md">
                    <a href="">
                        <img class="w-5 h-5 object-contain transition duration-300 ease-in-out transform hover:opacity-75" src="{{ asset('/images/logo-instagram.png') }}" alt="Instagram">
                    </a>
                    <a href="">
                        <img class="w-6 h-6 object-contain transition duration-300 ease-in-out transform hover:opacity-75" src="{{ asset('/images/logo-youtube.png') }}" alt="YouTube">
                    </a>
                    <a href="">
                        <img class="w-5 h-5 object-contain transition duration-300 ease-in-out transform hover:opacity-75" src="{{ asset('/images/logo-email.png') }}" alt="Email">
                    </a>
                    {{-- <img class="w-5 h-5 object-contain" src="{{ asset('/images/logo-search.png') }}" alt="Search"> --}}
                </div>

                <!-- Hamburger Button -->
                <button data-collapse-toggle="navbar-search" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 z-30"
                    aria-controls="navbar-search" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

            <!-- Navigasi Utama -->
            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1 text-white"
                id="navbar-search">
                <ul
                    class="flex flex-col p-4 lg:p-0 mt-4 font-medium rounded-lg lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 font-bold text-white bg-orange-primary rounded-sm lg:bg-transparent lg:text-orange-primary lg:p-0"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 font-bold rounded-sm hover:text-orange-primary hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-orange-primary lg:p-0 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent">Profile</a>
                    </li>
                    <li class="relative">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex items-center justify-between font-bold w-full py-2 px-3 rounded-sm hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-orange-primary lg:p-0 lg:w-auto dark:text-white lg:dark:hover:text-orange-primary dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 lg:dark:hover:bg-transparent">
                            Program Kerja
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdownNavbar"
                            class="hidden absolute z-10 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600 transition-all duration-200">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownNavbarLink">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 hover:text-orange-primary dark:hover:bg-gray-600 dark:hover:text-white">P-PAM</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 hover:text-orange-primary dark:hover:bg-gray-600 dark:hover:text-white">Orienteering
                                        Nasional</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 hover:text-orange-primary dark:hover:bg-gray-600 dark:hover:text-white">GEOI
                                        Fair</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 hover:text-orange-primary dark:hover:bg-gray-600 dark:hover:text-white">HUT
                                        HMTG "GEOI"</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 font-bold rounded-sm hover:text-orange-primary hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-orange-primary lg:p-0 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent">Alumni</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 font-bold rounded-sm hover:text-orange-primary hover:bg-gray-100 lg:hover:bg-transparent lg:hover:text-orange-primary lg:p-0 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent">Contact</a>
                    </li>
                </ul>

                <!-- Social Media Icons for Mobile (will be colored on scroll) -->
                <div id="mobileSocialIcons" class="flex flex-row gap-4 mt-4 sm:hidden justify-center rounded-md p-2">
                    <img class="w-5 h-5 object-contain" src="{{ asset('/images/logo-instagram.png') }}" alt="Instagram">
                    <img class="w-5 h-5 object-contain" src="{{ asset('/images/logo-youtube.png') }}" alt="YouTube">
                    <img class="w-5 h-5 object-contain" src="{{ asset('/images/logo-email.png') }}" alt="Email">
                    {{-- <img class="w-5 h-5 object-contain" src="{{ asset('/images/logo-search.png') }}" alt="Search"> --}}
                </div>
            </div>
        </div>
    </nav>

    <!-- Script Dropdown Program Kerja -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dropdownToggle = document.getElementById("dropdownNavbarLink");
            const dropdownMenu = document.getElementById("dropdownNavbar");

            dropdownToggle.addEventListener("click", function(e) {
                e.preventDefault();
                dropdownMenu.classList.toggle("hidden");
            });
        });
    </script>

    <!-- Script Navbar Scroll Behavior -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navbar = document.getElementById("mainNavbar");
            const heroCarousel = document.getElementById("default-carousel");
            const socialIcons = document.getElementById("socialIcons");
            const mobileSocialIcons = document.getElementById("mobileSocialIcons");

            window.addEventListener("scroll", function() {
                const scrollY = window.scrollY;
                const carouselHeight = heroCarousel ? heroCarousel.offsetHeight : 0;

                if (scrollY > carouselHeight - 0) {
                    navbar.classList.add("navbar-scrolled");
                    socialIcons.classList.add("bg-orange-primary");
                    mobileSocialIcons.classList.add("bg-orange-primary");
                } else {
                    navbar.classList.remove("navbar-scrolled");
                    socialIcons.classList.remove("bg-orange-primary");
                    mobileSocialIcons.classList.remove("bg-orange-primary");
                }
            });
        });
    </script>

    @yield('navbar')
@endsection
