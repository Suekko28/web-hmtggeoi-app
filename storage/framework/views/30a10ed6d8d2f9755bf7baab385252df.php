

<?php $__env->startSection('navbar'); ?>
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
    <div class="container mx-auto px-6 py-6 sm:px-32 sm:py-32">
        <div class="visi-misi-hmtggeoi">
            <h1 class="font-bold text-center text-3xl text-orange-primary">HMTGGEOI</h1>
        </div>

        <!-- VISI -->
        <div class="flex lg:flex-nowrap sm:flex-wrap gap-12 mt-12 content">
            <div class="w-full md:w-1/2">
                <img src="<?php echo e(asset('/images/visual-1.png')); ?>" alt="" class="w-full shadow-md object-cover">
            </div>
            <div class="w-full md:w-1/2">
                <h1 class="font-bold text-2xl mb-4">Visi</h1>
                <p class="italic text-xl text-gray-600">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet rem inventore at
                    maiores dolorem quo, veniam quasi delectus? Quam, ut soluta. Odit voluptatibus dolorum
                    ad doloribus nisi voluptate, placeat quas?
                </p>
            </div>
        </div>

        <!-- MISI -->
        <div class="flex lg:flex-nowrap sm:flex-wrap items-center gap-12 mt-12 flex-row-reverse content">
            <div class="w-full md:w-1/2">
                <img src="<?php echo e(asset('/images/visual-1.png')); ?>" alt="" class="w-full shadow-md">
            </div>
            <div class="w-full md:w-1/2">
                <h1 class="font-bold text-2xl mb-4">Misi</h1>
                <p class="italic text-xl text-gray-600">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet rem inventore at
                    maiores dolorem quo, veniam quasi delectus? Quam, ut soluta. Odit voluptatibus dolorum
                    ad doloribus nisi voluptate, placeat quas?
                </p>
            </div>
        </div>
    </div>
    <!-- Visi & Misi End-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\USER\OneDrive\Documents\GitHub\web-hmtggeoi-app\resources\views\user-landing\index.blade.php ENDPATH**/ ?>