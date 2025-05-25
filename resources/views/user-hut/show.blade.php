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

        .description img {
            display: none;
        }

        nav a.text-orange-primary {
            color: var(--color-orange-primary) !important;
        }
    </style>

    <section id="userPPAM">
        <div class="hero w-full">
            <img src="{{ Storage::url('hut/' . $data->image) }}" alt=""
                class="object-cover h-[600px] max-w-full w-full">
        </div>
        <div class="container mx-auto mt-16 px-32 sm:px-6 lg:px-16 xl:px-32">
            <div class="flex flex-col gap-3 mb-32">
                <div class="date">
                    <span class="text-sm font-semibold">{{ $data->created_at->translatedFormat('l, d F Y') }}</span>
                </div>

                <div class="title">
                    <h1 class="text-orange-primary text-2xl font-extrabold leading-snug">
                        {{ $data->title }} </h1>
                </div>
                <div class="">
                    <p class="leading-8 text-gray-700">{!! $data->description !!} </p>
                </div>
            </div>

            <!-- Latest Card Kegiatan -->
            <hr class="mb-6" style="color: oklch(87.2% 0.01 258.338)">
            <div class="title">
                <h1 class="text-orange-primary text-3xl font-extrabold leading-snug">
                    Postingan Terbaru </h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 content mt-6">
                @foreach ($lastUpdate as $item)
                    <div class="sm:max-w-sm md:max-w-sm bg-white rounded-lg h-[400px]">
                        <a href="{{ route('program-kerja.hut.show', $item->slug) }}" class="flex-shrink-0">
                            <img class="rounded-xl object-cover w-full h-64" src="{{ Storage::url('hut/' . $item->image) }}"
                                alt="" />
                        </a>
                        <div class="flex flex-col flex-grow justify-between mt-4">
                            <div>
                                <a href="{{ route('program-kerja.hut.show', $item->slug) }}">
                                    <h5
                                        class="mb-2 text-2xl font-bold tracking-tight text-orange-primary line-clamp-2 dark:text-white ">
                                        {{ $item->title }}
                                    </h5>
                                </a>
                                <div class="description font-normal text-gray-700 dark:text-gray-700 line-clamp-3">
                                    {!! $item->description !!}
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mt-4">
                                <span class=""><i class="fa-solid fa-calendar-days"></i></span>
                                <span
                                    class="text-sm font-semibold">{{ $item->created_at->translatedFormat('l, d F Y') }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Card Kegiatan End -->



            </div>

    </section>

    @include('layouts.footer')
@endsection
