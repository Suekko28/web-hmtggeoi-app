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
        <div class="hero w-full">
            <img src="{{ asset('/images/visual-6.jpg') }}" alt="" class="object-cover h-[600px] max-w-full w-full">
        </div>
        <div class="container mx-auto mt-16 px-32 sm:px-6 lg:px-16 xl:px-32">
            <div class="flex flex-col gap-3 mb-32">
                <div class="date">
                    <span class="text-sm font-semibold">Sabtu, 11 Oktober 2024</span>
                </div>

                <div class="title">
                    <h1 class="text-orange-primary text-2xl font-extrabold leading-snug">
                        Sistem Informasi Administrasi Kependudukan Terintegrasi Desa Tarikolot (P-PAM)
                    </h1>
                </div>
                <div class="description">
                    <p class="leading-8 text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi
                        esse
                        sapiente pariatur possimus iusto
                        tempora quo magnam non distinctio totam, incidunt nemo cupiditate laborum vel culpa quisquam ab,
                        blanditiis aliquid?Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi esse sapiente
                        pariatur possimus iusto
                        tempora quo magnam non distinctio totam, incidunt nemo cupiditate laborum vel culpa quisquam ab,
                        blanditiis aliquid?Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi esse sapiente
                        pariatur possimus iusto
                        tempora quo magnam non distinctio totam, incidunt nemo cupiditate laborum vel culpa quisquam ab,
                        blanditiis aliquid?Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi esse sapiente
                        pariatur possimus iusto
                        tempora quo magnam non distinctio totam, incidunt nemo cupiditate laborum vel culpa quisquam ab,
                        blanditiis aliquid?Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi esse sapiente
                        pariatur possimus iusto
                        tempora quo magnam non distinctio totam, incidunt nemo cupiditate laborum vel culpa quisquam ab,
                        blanditiis aliquid?Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi esse sapiente
                        pariatur possimus iusto
                        tempora quo magnam non distinctio totam, incidunt nemo cupiditate laborum vel culpa quisquam ab,
                        blanditiis aliquid?Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi esse sapiente
                        pariatur possimus iusto
                        tempora quo magnam non distinctio totam, incidunt nemo cupiditate laborum vel culpa quisquam ab,
                        blanditiis aliquid? </p>
                </div>
            </div>


            <!-- Latest Card Kegiatan -->
            <hr class="mb-6" style="color: oklch(87.2% 0.01 258.338)">
            <div class="title">
                <h1 class="text-orange-primary text-3xl font-extrabold leading-snug">
                    Postingan Terbaru </h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 content mt-6">
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

            </div>

            <!-- Card Kegiatan End -->



        </div>

    </section>

    @include('layouts.footer')
@endsection
