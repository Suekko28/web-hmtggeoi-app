@extends('layouts.navbar')

@section('navbar')
    <!-- Carousel -->
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-[720px] overflow-hidden">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/images/visual-1.png"
                    class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/images/visual-1.png"
                    class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/images/visual-1.png"
                    class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/images/visual-1.png"
                    class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/images/visual-1.png"
                    class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <!-- Carousel End -->

    <!-- Visi & Misi -->
    <div class="container mx-auto mt-32 lg:px-32 sm:px-6">
        <div class="title">
            <h1 class="font-bold text-center text-3xl text-orange-primary">HMTGGEOI</h1>
        </div>
        <!-- VISI -->
        <div class="flex flex-row lg:flex-nowrap sm:flex-wrap gap-12 mt-12 content">
            <div class="w-full">
                <img src="{{ asset('/images/visual-1.png') }}" alt="" class="w-full shadow-md object-cover h-full">
            </div>
            <div class="w-full">
                <h1 class="font-bold text-2xl mb-4"><i class="fa-solid fa-quote-left"></i> Visi</h1>
                <p class="italic text-xl text-gray-600">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet rem inventore at
                    maiores dolorem quo, veniam quasi delectus? Quam, ut soluta. Odit voluptatibus dolorum
                    ad doloribus nisi voluptate, placeat quas?
                </p>
            </div>
        </div>

        <!-- MISI -->
        <div class="flex flex-row-reverse lg:flex-nowrap sm:flex-wrap gap-12 mt-12 content">
            <div class="w-full">
                <img src="{{ asset('/images/visual-1.png') }}" alt="" class="w-full shadow-md object-cover h-full">
            </div>
            <div class="w-full">
                <h1 class="font-bold text-2xl mb-4">Misi <i class="fa-solid fa-quote-right"></i></h1>
                <p class="italic text-xl text-gray-600">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet rem inventore at
                    maiores dolorem quo, veniam quasi delectus? Quam, ut soluta. Odit voluptatibus dolorum
                    ad doloribus nisi voluptate, placeat quas?
                </p>
            </div>
        </div>

    </div>


    <div class="container mx-auto mt-32 lg:px-32 sm:px-6">
        <div class="title mb-12">
            <h1 class="font-bold text-3xl text-orange-primary">GEOI Store</h1>
            <hr class="w-52 border-t-4 rounded">
        </div>
        <div class="content p-5 bg-orange-50 rounded-xl">
            <div class="flex md:flex-nowrap sm:flex-wrap gap-6 content">
                <div class="flex flex-col sm:w-full xl:w-full 2xl:w-1/2 gap-3 justify-center items-center">
                    <div class="logo-shopee">
                        <img src="{{ asset('/images/logo-shopee.png') }}" alt="" class="object-cover w-18 h-18">
                    </div>
                    <div class="title font-bold">
                        <h1>GEOI Store Offical</h1>
                    </div>
                    <div class="description text-center">
                        <p> GEOI Store adalah toko online terpercaya yang menyediakan berbagai kebutuhan teknologi dan gaya
                            hidup masa kini dengan harga kompetitif dan pelayanan terbaik.
                        </p>
                    </div>
                </div>
                <div class="overflow-x-auto scroll-container scroll-smooth snap-x snap-mandatory">
                    <div class="flex gap-4 w-max px-4">
                        <!-- Ulangi card di bawah ini sesuai kebutuhan -->
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 shrink-0">
                            <a href="#">
                                <img class="rounded-t-lg" src="{{ asset('/images/visual-1.png') }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Noteworthy technology acquisitions 2021
                                    </h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse
                                    chronological order.
                                </p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-orange-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-orange-primary dark:focus:ring-blue-800">
                                    Beli Sekarang
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 shrink-0">
                            <a href="#">
                                <img class="rounded-t-lg" src="{{ asset('/images/visual-1.png') }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Noteworthy technology acquisitions 2021
                                    </h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse
                                    chronological order.
                                </p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-orange-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-orange-primary dark:focus:ring-blue-800">
                                    Beli Sekarang
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 shrink-0">
                            <a href="#">
                                <img class="rounded-t-lg" src="{{ asset('/images/visual-1.png') }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Noteworthy technology acquisitions 2021
                                    </h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse
                                    chronological order.
                                </p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-orange-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-orange-primary dark:focus:ring-blue-800">
                                    Beli Sekarang
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 shrink-0">
                            <a href="#">
                                <img class="rounded-t-lg" src="{{ asset('/images/visual-1.png') }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Noteworthy technology acquisitions 2021
                                    </h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse
                                    chronological order.
                                </p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-orange-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-orange-primary dark:focus:ring-blue-800">
                                    Beli Sekarang
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 shrink-0">
                            <a href="#">
                                <img class="rounded-t-lg" src="{{ asset('/images/visual-1.png') }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Noteworthy technology acquisitions 2021
                                    </h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse
                                    chronological order.
                                </p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-orange-primary rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-orange-primary dark:focus:ring-blue-800">
                                    Beli Sekarang
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <!-- Tambahkan kartu lainnya di sini -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')

    <!-- Visi & Misi End-->
@endsection
