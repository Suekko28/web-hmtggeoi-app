<footer class="bg-black-footer dark:bg-gray-900 mt-32">
    <div class="mx-auto w-full p-4 py-6 lg:py-8">
        <div class="md:flex md:flex-nowrap sm:flex-wrap gap-24">
            <div class="mb-6 md:mb-0 md:w-1/2 sm:w-full">
                <div class="flex flex-col items-center md:flex-wrap lg:flex-nowrap justify-center gap-3">
                    <img src="{{ asset('/images/logo-hmtggeoi.png') }}" class="h-32 w-32 object-cover"
                        alt="HMTGGEOI Logo" />
                    <div class="flex text-white hidden sm:block md:text-center w-full space-y-3">
                        <span class="text-2xl font-bold whitespace-nowrap">HMTGGEOI</span>
                        <h6 class="font-bold">Himpunan Mahasiswa Teknik Geologi</h6>
                        <p class="font-light">Program ini bertekad untuk turut serta dalam mencerdaskan kehidupan bangsa
                            dan membangun insan pendidik profesional yang unggul mandiri dan berkarakter. Program Studi
                            Teknik Geologi berperan dalam menciptakan guru profesional yang menguasai dan mampu
                            mengimplementasikan kompetensi profesional, kepribadian dan sosial sehingga mampu bersaing
                            dalam menghadapi berbagai tantangan pendidikan yang terus berkembang.</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-8 sm:gap-6 sm:grid-cols-4">
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-orange-primary">Beranda</h2>
                    <ul class="text-white dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="/" class="hover:underline">Home</a>
                        </li>
                        <li class="mb-4">
                            <a href="/profile" class="hover:underline">Profile</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{ route('alumni-hmtg.index') }}" class="hover:underline">Alumni</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-orange-primary uppercase dark:text-white">Program Kerja
                    </h2>
                    <ul class="text-white dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="{{ route('program-kerja.p-pam.index') }}" class="hover:underline">P-PAM</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{ route('program-kerja.orienteering.index') }}"
                                class="hover:underline">Orienteering Nasional</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{ route('program-kerja.geoi.index') }}" class="hover:underline">GEOI Fair</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{ route('program-kerja.hut.index') }}" class="hover:underline">HUT HMTG "GEOI"</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-orange-primary">Social Media</h2>
                    <div class="flex flex-row gap-4 items-center justify-start rounded-md">
                        <a href="https://www.instagram.com/hmtggeoi?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                            target="_blank">
                            <img class="w-6 h-6 object-contain transition duration-300 ease-in-out transform hover:opacity-75"
                                src="{{ asset('/images/logo-instagram.png') }}" alt="Instagram">
                        </a>
                        <a href="https://youtube.com/@hmtggeoi1896?si=PFA5iutp13FzelAo" target="_blank">
                            <img class="w-6 h-6 object-contain transition duration-300 ease-in-out transform hover:opacity-75"
                                src="{{ asset('/images/logo-youtube.png') }}" alt="YouTube">
                        </a>
                        {{-- <img class="w-6 h-6 object-contain" src="{{ asset('/images/logo-search.png') }}" alt="Search"> --}}
                    </div>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-orange-primary">Contact</h2>
                    <ul class="text-white font-medium">
                        <div class="flex flex-row gap-2">
                            <li>
                                <a href="mailto:hmtggeoi@gmail.com">
                                    <img class="w-6 h-6 object-contain sm:inline"
                                        src="{{ asset('/images/logo-email.png') }}" alt="Email">
                                </a>
                            </li>
                            <li class="lg:block hidden">
                                <a href="mailto:hmtggeoi@gmail.com" class="hover:underline">hmtggeoi@gmail.com</a>
                            </li>
                        </div>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-orange-primary uppercase dark:text-white">Lokasi</h2>
                    <ul class="text-white dark:text-gray-400 font-medium mb-4">
                        <li class="mb-4">
                            <a href="https://maps.app.goo.gl/xAhyRQVsX8zpJryU9" target="_blank" class="hover:underline">
                                Universitas Pakuan Bogor
                            </a>
                        </li>
                    </ul>
                    <div class="rounded-lg overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.381673983951!2d106.80979187499358!3d-6.599398393394423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5d97d3764c3%3A0xd56ba6305181755c!2sUniversitas%20Pakuan!5e0!3m2!1sid!2sid!4v1755871308612!5m2!1sid!2sid"
                            width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>  
                {{-- <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Follow us</h2>
                    <ul class="text-white dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                        </li>
                    </ul>
                </div> --}}
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="text-center">
            <span class="text-sm text-white sm:text-center dark:text-gray-400">© 2025 <a href="#"
                    class="hover:text-orange-primary">HMTGGEOI</a> | Suekko Development.</span>\
        </div>
    </div>
</footer>

@yield('footer')
