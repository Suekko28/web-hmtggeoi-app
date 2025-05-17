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

    <!-- Hero -->
    <section id="Hero">
        <div class="container mx-auto mt-32 px-32 px-32 sm:px-6 lg:px-16 xl:px-32">
            <div class="flex sm:flex-wrap lg:flex-nowrap justify-center items-center gap-16 p-6 rounded-xl h-150">
                <div class="title w-full">
                    <h1 class="text-3xl font-extrabold text-orange-primary antialiased">Profile HMTG GEOI</h1>
                    <p class="mt-4 text-gray-700">
                        Memperkenalkan organisasi himpunan mahasiswa teknik geologi & jurusan teknik geologi
                    </p>

                </div>
                <div class="visual-image w-full h-full rounded-full bg-orange-50">
                    <img src="{{ asset('/images/visual-1.png') }}" alt="" class="object-contain h-120 w-200">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- Sejarah HMTGGEOI -->
    <section id="userProfile">
        <div class="container mx-auto mt-32 px-32 px-32 sm:px-6 lg:px-16 xl:px-32">
            <div class="title">
                <h1 class="text-orange-primary font-extrabold text-3xl antialiased">Sejarah HMTG "GEOI"</h1>
            </div>
            <div class="description leading-8">
                <p class="text-gray-700">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione vel doloribus
                    illo
                    iusto ea error. Corrupti
                    iusto obcaecati perferendis, eaque doloremque dicta? Reprehenderit facere dolore culpa ullam porro
                    molestias
                    voluptatem. </p>
            </div>
        </div>
    </section>
    <!-- Sejarah HMTGGEOI End -->

    <!-- Visi & Misi -->
    <section id="VisiMisi">
        <div class="container mx-auto mt-12 px-32 px-32 sm:px-6 lg:px-16 xl:px-32">
            <div class="title">
                <h1 class="font-extrabold text-3xl text-orange-primary">HMTGGEOI</h1>
            </div>
            <p class="leading-8 ">Program ini bertekad untuk turut serta dalam mencerdaskan kehidupan bangsa
                dan membangun insan pendidik profesional yang unggul mandiri dan berkarakter.
                Program Studi Teknik Geologi berperan dalam menciptakan guru profesional yang menguasai dan mampu
                mengimplementasikan kompetensi profesional, kepribadian dan sosial sehingga mampu bersaing dalam
                menghadapi
                berbagai tantangan pendidikan yang terus berkembang.</p>
            <!-- VISI -->
            <div class="flex sm:flex-wrap lg:flex-nowrap gap-12 mt-12 content">
                <div class="w-full">
                    <img src="{{ asset('/images/visual-1.png') }}" alt=""
                        class="w-full shadow-md object-cover h-full">
                </div>
                <div class="w-full">
                    <h1 class="font-bold text-2xl mb-4"><i class="fa-solid fa-quote-left"></i> Visi</h1>
                    <p class=" text-base text-gray-700 leading-8">
                        Himpunan Mahasiswa Teknik Geologi "GEOI" Organisasi Mahasiswa yang adaptif dalam memberikan
                        kebermanfaatan bagi Anggota HMTG "GEOI", Universitas Pakuan, dan masyarakat di sekitarnya.
                    </p>
                </div>
            </div>

            <!-- MISI -->
            <div class="flex flex-row-reverse lg:flex-nowrap sm:flex-wrap gap-12 mt-12 content">
                <div class="w-full">
                    <img src="{{ asset('/images/visual-1.png') }}" alt=""
                        class="w-full shadow-md object-cover h-full">
                </div>
                <div class="w-full">
                    <h1 class="font-bold text-2xl mb-4"><i class="fa-solid fa-quote-left"></i> Misi</h1>
                    <p class="text-base text-gray-700 leading-8">
                        1. Membangun lingkungan internal yang solid dan apresiatif sebagai upaya meningkatkan peran
                        serta
                        fungsi
                        sumber daya organisasi. <br> <br>
                        2. Menjadikan HMTG "GEOI" sebagai wadah yang nyaman dan harmonis bagi anggota untuk berkembang
                        dan
                        berkarya dalam suasana kekeluargaan. <br> <br>
                        3. Menjalin relasi yang berkelanjutan dengan seluruh elemen demi mewujudkan HMTG "GEOI" yang
                        sinergis.
                    </p>

                </div>
            </div>
        </div>
    </section>
    <!-- Visi & Misi End-->


    @include('layouts.footer')
@endsection
