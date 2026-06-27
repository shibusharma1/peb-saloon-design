<?php
include './includes/header.php'
?>
<section class="pt-42 relative h-[280px] lg:h-[340px] overflow-hidden mb-8">
    <!-- Background Image -->
    <img
        src="./assets/img/services-banner.png"
        alt="Service Banner"
        class="absolute inset-0 w-full h-full object-cover">
    <!-- Overlay -->
    <div
        class="hero-overlay absolute inset-0">
    </div>
    <!-- Decorative Blur -->
    <div
        class="absolute top-0 right-0 w-[500px] h-[500px] rounded-full bg-white/10 blur-3xl">
    </div>
    <!-- Content -->
    <div
        class="relative z-10 h-full flex items-center">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div
                class="max-w-3xl">
                <!-- Badge -->
                <span
                    class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-white/10 backdrop-blur-md text-white text-sm uppercase tracking-[2px]">
                    <i class="ri-price-tag-3-line"></i>
                    Exclusive Offers
                </span>
                <!-- Title -->
                <h1 class="heading-font text-white text-5xl md:text-6xl lg:text-7xl mt-6 leading-tight">
                    Beauty Promotions You'll Love
                </h1>
                <!-- Description -->
                <p class="hidden lg:block text-white/80 text-lg lg:text-xl mt-6 max-w-2xl leading-8">
                    Discover premium beauty and wellness treatments tailored
                    to enhance your natural elegance.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Featured Offer -->
        <div class="featured-offer-slider mt-12 relative">

            <div class="swiper featuredSwiper">

                <div class="swiper-wrapper">

                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="bg-white rounded-[40px] overflow-hidden shadow-xl">
                            <div class="grid lg:grid-cols-2 items-center">

                                <div class="order-2 lg:order-1 p-8 lg:p-16">

                                    <span class="inline-flex px-4 py-2 rounded-full bg-[#7B234B]/10 text-primary font-semibold text-sm">
                                        FEATURED OFFER
                                    </span>

                                    <h2 class="mt-6 text-4xl lg:text-5xl font-semibold text-gray-900">
                                        Hot Stone Massage
                                    </h2>

                                    <p class="mt-6 text-lg text-gray-600 leading-8">
                                        Experience deep relaxation with our luxurious
                                        Hot Stone Massage.
                                    </p>

                                    <div class="hidden sm:grid sm:grid-cols-2 gap-4 mt-8">
                                        <div class="flex items-center gap-3">
                                            <i class="ri-check-line text-primary text-xl"></i>
                                            <span>90 Minute Session</span>
                                        </div>

                                        <div class="flex items-center gap-3">
                                            <i class="ri-check-line text-primary text-xl"></i>
                                            <span>Premium Oils</span>
                                        </div>

                                        <div class="flex items-center gap-3">
                                            <i class="ri-check-line text-primary text-xl"></i>
                                            <span>Relaxing Atmosphere</span>
                                        </div>

                                        <div class="flex items-center gap-3">
                                            <i class="ri-check-line text-primary text-xl"></i>
                                            <span>Expert Therapists</span>
                                        </div>
                                    </div>

                                    <div class="mt-10 flex flex-wrap gap-4">
                                        <a href="bookappointment.php"
                                            class="inline-flex items-center gap-2 px-8 py-4 rounded-full btn-primary btn-luxury text-white font-semibold">
                                            Book Now
                                            <i class="ri-arrow-right-line"></i>
                                        </a>

                                        <a href="offer-detail.php"
                                            class="inline-flex items-center gap-2 px-8 py-4 rounded-full border border-[#7B234B] text-primary font-semibold">
                                            Learn More
                                        </a>
                                    </div>

                                </div>

                                <div class="order-1 lg:order-2 relative h-full">
                                    <img
                                        src="./assets/img/background/bg2.jpg"
                                        alt=""
                                        class="w-full h-[280px] sm:h-[350px] lg:h-full object-cover">
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="bg-white rounded-[40px] overflow-hidden shadow-xl">
                            <div class="grid lg:grid-cols-2 items-center">

                                <div class="order-2 lg:order-1 p-8 lg:p-16">

                                    <span class="inline-flex px-4 py-2 rounded-full bg-[#7B234B]/10 text-primary font-semibold text-sm">
                                        FEATURED OFFER
                                    </span>

                                    <h2 class="mt-6 text-4xl lg:text-5xl font-semibold text-gray-900">
                                        Luxury Facial
                                    </h2>

                                    <p class="mt-6 text-lg text-gray-600 leading-8">
                                        Rejuvenate your skin with our signature
                                        luxury facial treatment.
                                    </p>
                                    <div class="hidden sm:grid sm:grid-cols-2 gap-4 mt-8">
                                        <div class="flex items-center gap-3">
                                            <i class="ri-check-line text-primary text-xl"></i>
                                            <span>90 Minute Session</span>
                                        </div>

                                        <div class="flex items-center gap-3">
                                            <i class="ri-check-line text-primary text-xl"></i>
                                            <span>Premium Oils</span>
                                        </div>

                                        <div class="flex items-center gap-3">
                                            <i class="ri-check-line text-primary text-xl"></i>
                                            <span>Relaxing Atmosphere</span>
                                        </div>

                                        <div class="flex items-center gap-3">
                                            <i class="ri-check-line text-primary text-xl"></i>
                                            <span>Expert Therapists</span>
                                        </div>
                                    </div>

                                    <div class="mt-10">
                                        <a href="bookappointment.php"
                                            class="inline-flex items-center gap-2 px-8 py-4 rounded-full btn-primary btn-luxury text-white font-semibold">
                                            Book Now
                                        </a>
                                    </div>

                                </div>

                                <div class="order-1 lg:order-2 relative h-full">
                                    <img
                                        src="./assets/img/background/bg1.jpg"
                                        alt=""
                                        class="w-full h-[280px] sm:h-[350px] lg:h-full object-cover">
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Left Arrow -->
            <button class="featured-prev">
                <i class="ri-arrow-left-s-line"></i>
            </button>

            <!-- Right Arrow -->
            <button class="featured-next">
                <i class="ri-arrow-right-s-line"></i>
            </button>
            <div class="swiper-pagination mt-4px"></div>
        </div>

        <!-- Section Heading -->
        <div class="text-center mt-12">
            <span
                class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-primary/10 text-primary text-sm uppercase tracking-[2px]">
                <i class="ri-gift-line"></i>
                More Offers
            </span>

            <h2 class="heading-font text-4xl lg:text-5xl text-gray-900 mt-5">
                Our Other Offers
            </h2>

            <p class="text-gray-600 mt-4 max-w-2xl mx-auto leading-8">
                Explore more exclusive beauty and wellness packages carefully designed
                to elevate your self-care experience with luxury treatments and
                professional care.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
            <div
                class="group bg-white rounded-[32px] overflow-hidden shadow-lg hover:shadow-2xl transition duration-500">
                <div class="overflow-hidden">
                    <img
                        src="./assets/img/our-services/pic4.jpg"
                        class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">
                </div>
                <div class="p-8">
                    <h4
                        class="text-2xl font-semibold" data-aos="fade-up">
                        Facial Treatment
                    </h4>
                    <p
                        class="mt-4 text-gray-600">
                        Refresh and brighten your skin with our signature facial.
                    </p>
                    <a href="offer-detail.php"
                        class="inline-flex items-center gap-2 mt-6 text-primary font-semibold">
                        Learn More
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
            <div
                class="group bg-white rounded-[32px] overflow-hidden shadow-lg hover:shadow-2xl transition duration-500">
                <div class="overflow-hidden">
                    <img
                        src="./assets/img/our-services/pic4.jpg"
                        class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">
                </div>
                <div class="p-8">
                    <h4
                        class="text-2xl font-semibold" data-aos="fade-up">
                        Facial Treatment
                    </h4>
                    <p
                        class="mt-4 text-gray-600">
                        Refresh and brighten your skin with our signature facial.
                    </p>
                    <a href="offer-detail.php"
                        class="inline-flex items-center gap-2 mt-6 text-primary font-semibold">
                        Learn More
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
            <div
                class="group bg-white rounded-[32px] overflow-hidden shadow-lg hover:shadow-2xl transition duration-500">
                <div class="overflow-hidden">
                    <img
                        src="./assets/img/our-services/pic4.jpg"
                        class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">
                </div>
                <div class="p-8">
                    <h4
                        class="text-2xl font-semibold" data-aos="fade-up">
                        Facial Treatment
                    </h4>
                    <p
                        class="mt-4 text-gray-600">
                        Refresh and brighten your skin with our signature facial.
                    </p>
                    <a href="offer-detail.php"
                        class="inline-flex items-center gap-2 mt-6 text-primary font-semibold">
                        Learn More
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Section Heading -->
        <div class="text-center mt-8">

            <!-- View All Button -->
            <a href="#"
                class="inline-flex items-center gap-2 mt-6 px-8 py-4 rounded-full btn-primary btn-luxury text-white font-semibold shadow-lg hover:scale-105 transition">
                View All Offers
                <i class="ri-arrow-right-line"></i>
            </a>
        </div>
    </div>
</section>

<?php
include './includes/footer.php'
?>