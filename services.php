<?php
include './includes/header.php'
?>
<!-- <section class="relative h-[450px]">

    <img
        src="./assets/img/services-banner.jpg"
        class="absolute inset-0 w-full h-full object-cover">

    <div
        class="absolute inset-0 bg-gradient-to-r from-[#4A1D38]/90 via-[#4A1D38]/60 to-transparent">
    </div>

    <div
        class="relative z-10 h-full flex items-center">

        <div class="max-w-7xl mx-auto px-4">

            <span
                class="uppercase tracking-[4px] text-white/80">

                Professional Beauty Treatments

            </span>

            <h1
                class="heading-font text-6xl text-white mt-4">

                Our Services

            </h1>

            <p
                class="text-white/80 mt-6 max-w-xl">

                Discover luxury beauty, skincare and wellness
                treatments tailored for your individual needs.

            </p>

        </div>

    </div>

</section> -->
<section class="pt-32 section-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Heading -->
        <div class="text-center max-w-3xl mx-auto">
            <span
                class="uppercase tracking-[4px] text-primary-dark font-semibold text-sm">
                Our Expertise
            </span>
            <h2
                class="mt-4 text-4xl lg:text-5xl font-semibold text-gray-900" data-aos="fade-up">
                Luxury Beauty Services
            </h2>
            <div class="mt-5">
                <div class="dlab-separator text-primary style-icon">
                    <i class="flaticon-spa text-primary"></i>
                </div>
            </div>
            <p
                class="mt-6 text-gray-600 text-lg">
                Discover premium beauty and wellness treatments tailored
                to enhance your natural elegance.
            </p>
        </div>
        <!-- Services -->
        <div
            class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">
            <!-- Card -->
            <div
                class="group bg-white rounded-[32px] overflow-hidden shadow-lg hover:shadow-2xl transition duration-500">
                <div class="overflow-hidden">
                    <img
                        src="./assets/img/our-services/pic1.jpg"
                        alt=""
                        class="w-full h-80 object-cover group-hover:scale-110 transition duration-700" data-aos="zoom-in-up" data-aos-delay="100">
                </div>
                <div class="p-8">
                    <span
                        class="text-primary text-sm uppercase tracking-[3px]">
                        Beauty Care
                    </span>
                    <h4
                        class="mt-3 text-2xl font-semibold text-gray-900" data-aos="fade-up">
                        Hair Styling
                    </h4>
                    <p
                        class="mt-4 text-gray-600 leading-7">
                        Professional styling, coloring and hair treatment
                        services designed for your unique look.
                    </p>
                    <a href="#"
                        class="inline-flex items-center gap-2 mt-6 font-semibold text-primary">
                        Explore Service
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
            <!-- Repeat cards -->
        </div>
        <!-- CTA -->
        <div class="text-center mt-16">
            <a href="#"
                class="inline-flex items-center gap-3 px-8 py-4 rounded-full btn-primary text-white font-semibold shadow-lg hover:scale-105 transition">
                View All Services
                <i class="ri-arrow-right-line"></i>
            </a>
        </div>
    </div>
</section>
<?php
include './includes/footer.php'
?>