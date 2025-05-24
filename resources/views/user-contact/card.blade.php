<section id="userContactUs">
    <script src="https://unpkg.com/lottie-web/build/player/lottie.min.js"></script>
    <!-- Hero -->
    <div class="container mx-auto mt-32 lg:px-32 sm:px-6">
        <div class="flex md:flex-nowrap sm:flex-wrap-reverse justify-center items-center gap-16 p-6 rounded-xl md:h-150 sm:h-190 content-contact">
            <div class="title w-full">
                <h1 class="text-4xl font-extrabold text-orange-primary">Contact Us</h1>
                <p class="mt-4 text-gray-700 leading-8">
                    Jika Anda memiliki pertanyaan, saran, atau ingin mengetahui lebih lanjut tentang Himpunan Mahasiswa
                    Teknik Geologi (HMTG GEOI), jangan ragu untuk menghubungi kami.
                <div class="flex flex-wrap gap-6 items-center mt-6 content-card">
                    <div class="instagram">
                        <div
                            class="card p-6 bg-white border border-gray-200 shadow-lg w-64 rounded-xl transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl">
                            <div class="title">
                                <div class="flex flex-row items-center gap-2">
                                    <img src="{{ asset('/images/logo-instagram-color.png') }}" alt=""
                                        class="object cover w-6 h-6">
                                    <h1 class="font-bold text-orange-primary text-xl">Instagram</h1>
                                </div>
                                <p>@hmttgeoi</p>
                            </div>
                        </div>
                    </div>
                    <div class="email">
                        <a href="mailto:hmtggeoi@gmail.com">
                            <div
                                class="card p-6 bg-white border border-gray-200 shadow-lg w-64 rounded-xl transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl">
                                <div class="flex flex-row items-center gap-2">
                                    <img src="{{ asset('/images/logo-gmail.png') }}" alt=""
                                        class="object cover w-6 h-6">
                                    <h1 class="font-bold text-orange-primary text-xl">Email</h1>
                                </div>
                                <p>hmtggeoi84@gmail.com</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="visual-image w-full">
                <div id="lottie-animation" style="width: 300px; height: 300px;"
                    class=" mx-auto rounded-full bg-orange-50 mb-12">
                </div>
            </div>
        </div>
    </div>

    <script>
        lottie.loadAnimation({
            container: document.getElementById('lottie-animation'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: "{{ asset('json/male-call-center-operator.json') }}"
        });
    </script>
