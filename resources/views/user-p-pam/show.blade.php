@extends('layouts.navbar')

@section('navbar')
    <style>
        nav {
            background-color: white !important;
            color: black !important;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        nav a {
            color: black !important;
        }

        nav a:hover {
            color: #ea580c !important;
        }

        nav .text-white {
            color: black !important;
        }

        nav h6,
        nav span {
            color: black !important;
        }

        #socialIcons {
            background-color: var(--color-orange-primary)
        }

        .social-media {
            background-color: none !important;
        }
    </style>

    <section id="userPPAM">
        <div class="container mx-auto mt-32 px-32 sm:px-6 lg:px-16 xl:px-32">
            <!-- Header -->
            <div class="flex flex-wrap justify-between items-center mb-12">
                <h1 class="text-orange-primary text-3xl font-extrabold">P-PAM</h1>
                <div class="search-bar">
                    <div class="relative lg:w-1/2 w-full mx-auto">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="searchInput"
                            class="block w-full p-3 ps-10 text-sm font-base text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-orange-primary"
                            placeholder="Mencari Kegiatan" required />
                        <div id="noDataMessage" class="alert alert-warning" style="display: none;">
                            Data tidak ditemukan.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->

            <!-- Card Kegiatan -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 content">
                <div class="md:max-w-[480px] sm:max-w-full bg-white rounded-lg">
                    <a href="#">
                        <img class="rounded-xl" src="{{ asset('/images/visual-1.png') }}" alt="" />
                    </a>
                    <div class="py-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-orange-primary dark:text-white">
                                Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="font-normal text-gray-700 dark:text-gray-700 line-clamp-3">Lorem ipsum dolor sit amet,
                            consectetur
                            adipisicing elit. Deleniti qui voluptas eaque laborum, aliquam a ipsa, soluta deserunt in
                            aspernatur, eos ut eius incidunt excepturi et? Architecto sint dolor distinctio!</p>
                    </div>
                    <div class="flex flex-row gap-2">
                        <span class=""><i class="fa-solid fa-calendar-days"></i></span>
                        <span class="text-sm font-semibold">Sabtu, 11 Oktober 2024</span>
                    </div>
                </div>
                <div class="md:max-w-[480px] sm:max-w-full bg-white rounded-lg">
                    <a href="#">
                        <img class="rounded-xl" src="{{ asset('/images/visual-1.png') }}" alt="" />
                    </a>
                    <div class="py-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-orange-primary dark:text-white">
                                Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="font-normal text-gray-700 dark:text-gray-700 line-clamp-3">Lorem ipsum dolor sit amet,
                            consectetur
                            adipisicing elit. Deleniti qui voluptas eaque laborum, aliquam a ipsa, soluta deserunt in
                            aspernatur, eos ut eius incidunt excepturi et? Architecto sint dolor distinctio!</p>
                    </div>
                    <div class="flex flex-row gap-2">
                        <span class=""><i class="fa-solid fa-calendar-days"></i></span>
                        <span class="text-sm font-semibold">Sabtu, 11 Oktober 2024</span>
                    </div>
                </div>
                <div class="md:max-w-[480px] sm:max-w-full bg-white rounded-lg">
                    <a href="#">
                        <img class="rounded-xl" src="{{ asset('/images/visual-1.png') }}" alt="" />
                    </a>
                    <div class="py-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-orange-primary dark:text-white">
                                Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="font-normal text-gray-700 dark:text-gray-700 line-clamp-3">Lorem ipsum dolor sit amet,
                            consectetur
                            adipisicing elit. Deleniti qui voluptas eaque laborum, aliquam a ipsa, soluta deserunt in
                            aspernatur, eos ut eius incidunt excepturi et? Architecto sint dolor distinctio!</p>
                    </div>
                    <div class="flex flex-row gap-2">
                        <span class=""><i class="fa-solid fa-calendar-days"></i></span>
                        <span class="text-sm font-semibold">Sabtu, 11 Oktober 2024</span>
                    </div>
                </div>
                <div class="sm:max-w-sm md:max-w-sm bg-white rounded-lg">
                    <a href="#">
                        <img class="rounded-xl" src="{{ asset('/images/visual-1.png') }}" alt="" />
                    </a>
                    <div class="py-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-orange-primary dark:text-white">
                                Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="font-normal text-gray-700 dark:text-gray-700 line-clamp-3">Lorem ipsum dolor sit amet,
                            consectetur
                            adipisicing elit. Deleniti qui voluptas eaque laborum, aliquam a ipsa, soluta deserunt in
                            aspernatur, eos ut eius incidunt excepturi et? Architecto sint dolor distinctio!</p>
                    </div>
                    <div class="flex flex-row gap-2">
                        <span class=""><i class="fa-solid fa-calendar-days"></i></span>
                        <span class="text-sm font-semibold">Sabtu, 11 Oktober 2024</span>
                    </div>
                </div>
                <div class="sm:max-w-sm md:max-w-sm bg-white rounded-lg">
                    <a href="#">
                        <img class="rounded-xl" src="{{ asset('/images/visual-1.png') }}" alt="" />
                    </a>
                    <div class="py-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-orange-primary dark:text-white">
                                Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="font-normal text-gray-700 dark:text-gray-700 line-clamp-3">Lorem ipsum dolor sit amet,
                            consectetur
                            adipisicing elit. Deleniti qui voluptas eaque laborum, aliquam a ipsa, soluta deserunt in
                            aspernatur, eos ut eius incidunt excepturi et? Architecto sint dolor distinctio!</p>
                    </div>
                    <div class="flex flex-row gap-2">
                        <span class=""><i class="fa-solid fa-calendar-days"></i></span>
                        <span class="text-sm font-semibold">Sabtu, 11 Oktober 2024</span>
                    </div>
                </div>
            </div>

            <!-- Card Kegiatan End -->



        </div>

    </section>

    @include('layouts.footer')
@endsection
