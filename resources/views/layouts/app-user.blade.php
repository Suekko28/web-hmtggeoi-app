<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>HMTG "GEOI" - Himpunan Mahasiswa Teknik Geologi</title>
    <meta name="description"
        content="Website resmi HMTG 'GEOI' - Menyediakan informasi terkini seputar kegiatan, pengurus, dan berita terbaru Himpunan Mahasiswa Teknik Geologi.">
    <meta name="keywords" content="HMTG GEOI, Teknik Geologi, Mahasiswa, Himpunan Mahasiswa, Geologi, Universitas">
    <meta name="author" content="HMTG 'GEOI'">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="HMTG 'GEOI' - Himpunan Mahasiswa Teknik Geologi">
    <meta property="og:description" content="Informasi resmi dan kegiatan HMTG 'GEOI' untuk mahasiswa Teknik Geologi.">
    <meta property="og:image" content="{{ asset('images/logo-hmtggeoi.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="HMTG 'GEOI'">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="HMTG 'GEOI' - Himpunan Mahasiswa Teknik Geologi">
    <meta name="twitter:description"
        content="Website resmi HMTG 'GEOI' - Semua informasi tentang kegiatan, berita, dan pengurus mahasiswa Teknik Geologi.">
    <meta name="twitter:image" content="{{ asset('images/logo-hmtggeoi.png') }}">

    <link rel="shortcut icon" type="image/svg+xml" href="{{ asset('images/logo-hmtggeoi.png') }}">

    <!-- Library CSS & JS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <link rel="stylesheet" href="resources/css/app.css">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/lottie-web@5.7.4/build/player/lottie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>

    <style>
        #loader {
            opacity: 1;
            transition: opacity 0.5s ease;
        }

        #loader.hidden {
            opacity: 0;
            pointer-events: none;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                easing: 'ease-out-in',
                duration: 1000
            });
        });
    </script>
</head>

<body>
    <!-- Lottie Loading Screen -->
    <div id="loader" class="fixed inset-0 bg-white flex items-center justify-center z-[9999]">
        <div id="lottie-loader" class="w-40 h-40"></div>
    </div>

    @yield('app-user')

    <script>
        // Inisialisasi Lottie
        lottie.loadAnimation({
            container: document.getElementById('lottie-loader'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: "{{ asset('json/GEOI1.json') }}"
        });

        // Sembunyikan loader setelah halaman selesai dimuat
        window.addEventListener("load", function() {
            const loader = document.getElementById("loader");
            loader.classList.add("hidden");

            // Benar-benar hilangkan dari tampilan setelah animasi fade-out selesai
            setTimeout(() => loader.style.display = "none", 500);
        });
    </script>
</body>

</html>
