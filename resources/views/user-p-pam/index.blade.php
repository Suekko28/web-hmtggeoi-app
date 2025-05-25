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
                        <div id="noDataMessage"
                            class="absolute top-full left-0 w-full mt-2 bg-yellow-100 text-yellow-800 text-sm font-medium p-2 rounded-lg shadow z-10 hidden">
                            Data tidak ditemukan.
                        </div>
                    </div>

                </div>
            </div>
            <!-- Header End -->

            <!-- Card Kegiatan -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 content">
                @if ($data->isEmpty())
                    <div class="col-span-full text-center py-16">
                        <h2 class="text-2xl font-bold text-gray-500">Data tidak tersedia</h2>
                    </div>
                @else
                    @foreach ($data as $item)
                        <div class="sm:max-w-sm md:max-w-sm bg-white rounded-lg h-[400px]">
                            <a href="{{ route('program-kerja.p-pam.show', $item->slug) }}" class="flex-shrink-0">
                                <img class="rounded-xl object-cover w-full h-64"
                                    src="{{ Storage::url('p-pam/' . $item->image) }}" alt="" />
                            </a>
                            <div class="flex flex-col flex-grow justify-between mt-4">
                                <div>
                                    <a href="{{ route('program-kerja.p-pam.show', $item->slug) }}">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-orange-primary dark:text-white line-clamp-2">
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
                @endif
            </div>
            <!-- Card Kegiatan End -->
            <div class="p-2 mt-6">{{ $data->links('pagination::tailwind') }}</div>
        </div>

    </section>

    @include('layouts.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const cards = document.querySelectorAll('.grid .sm\\:max-w-sm, .grid .md\\:max-w-sm');
            const noDataMessage = document.getElementById('noDataMessage');

            searchInput.addEventListener('input', function() {
                const searchText = this.value.toLowerCase();
                let found = false;

                cards.forEach(function(card) {
                    const cardText = card.innerText.toLowerCase();
                    if (cardText.includes(searchText)) {
                        card.style.display = '';
                        found = true;
                    } else {
                        card.style.display = 'none';
                    }
                });

                if (found) {
                    noDataMessage.classList.add('hidden');
                } else {
                    noDataMessage.classList.remove('hidden');
                }
            });
        });
    </script>
@endsection
