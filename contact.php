<?php
include './includes/header.php'
?>
<style>
    #location iframe {
        transition: transform .8s ease;
    }

    #location:hover iframe {
        transform: scale(1.03);
    }
</style>

<section class="pt-42 relative h-[280px] lg:h-[340px] overflow-hidden mb-8">
    <!-- Background Image -->
    <img
        src="./assets/img/nailextension.png"
        alt="Contact page"
        class="absolute inset-0 w-full h-full object-cover" data-aos="fade-down"
        data-aos-duration="700">
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
                    class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-white/10 backdrop-blur-md text-white text-sm uppercase tracking-[2px]" data-aos="fade-down"
                    data-aos-duration="700">
                    <i class="ri-price-tag-3-line"></i>
                    Professional Elegance Beauty
                </span>
                <!-- Title -->
                <h1
                    class="heading-font text-white text-4xl md:text-5xl lg:text-6xl mt-6 leading-tight" data-aos="fade-up"
                    data-aos-delay="100"
                    data-aos-duration="900">
                    Let's Connect
                </h1>
                <!-- Description -->
                <p class="hidden lg:block text-white/80 text-base lg:text-[17px] mt-6 max-w-2xl leading-8" data-aos="fade-up"
                    data-aos-delay="250"
                    data-aos-duration="900">
                    Whether you're booking your next beauty treatment,
                    looking for professional advice, or simply have a question,
                    our team would love to hear from you.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section-white">
    <div class="max-w-7xl mx-auto px-4">
        <div
            class="grid lg:grid-cols-12 gap-8 items-stretch">
            <!-- Map -->
            <div
                class="lg:col-span-8">
                <div id="location" class="overflow-hidden rounded-[40px] shadow-xl h-full" data-aos="fade-right"
                    data-aos-duration="1000">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2010.5843009171663!2d-0.8917553!3d52.2389937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48770edb14239eb7%3A0x3a32e6077f65f3a3!2sProfessional%20Elegance%20Beauty!5e1!3m2!1sen!2snp!4v1782324074755!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="w-full h-[650px]" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                </div>
            </div>
            <!-- Contact Card -->
            <div
                class="lg:col-span-4">
                <div
                    class="bg-white rounded-[40px] shadow-xl p-8 h-full flex flex-col" data-aos="fade-left"
                    data-aos-duration="1000">
                    <h2
                        class="heading-font text-4xl text-primary">
                        Visit Us
                    </h2>
                    <p
                        class="text-muted mt-3">
                        We'd love to welcome you
                        to our salon.
                    </p>
                    <div
                        class="space-y-8 mt-10">
                        <div class="flex gap-4" data-aos="fade-up"
                            data-aos-delay="100">
                            <div
                                class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center">
                                <i class="ri-map-pin-line text-primary text-2xl"></i>
                            </div>
                            <div>
                                <h5 class="font-semibold">
                                    Address
                                </h5>
                                <p class="text-muted mt-2">
                                    63A Abington Street,
                                    Northampton NN1 2BH
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-4" data-aos="fade-up"
                            data-aos-delay="200">
                            <div
                                class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center">
                                <i class="ri-phone-line text-primary text-2xl"></i>
                            </div>
                            <div>
                                <h5 class="font-semibold">
                                    Phone
                                </h5>
                                <a
                                    href="tel:01604315484"
                                    class="text-muted mt-2 block hover:text-primary transition-colors">
                                    01604 315 484
                                </a>
                            </div>
                        </div>
                        <div class="flex gap-4" data-aos="fade-up"
                            data-aos-delay="300">
                            <div
                                class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center">
                                <i class="ri-mail-line text-primary text-2xl"></i>
                            </div>
                            <div>
                                <h5 class="font-semibold">
                                    Email
                                </h5>
                                <a
                                    href="mailto:pebsalon@gmail.com"
                                    class="text-muted mt-2 block hover:text-primary transition-colors">
                                    pebsalon@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="border-t mt-10 pt-8">
                        <h5
                            class="font-semibold mb-4">
                            Follow Us
                        </h5>
                        <div
                            class="flex gap-3">
                            <a href="#" class="social-circle">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="#" class="social-circle">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="#" class="social-circle">
                                <i class="ri-tiktok-fill"></i>
                            </a>
                            <a href="#" class="social-circle">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-light">
    <div class="max-w-7xl mx-auto px-4">
        <div
            class="bg-white rounded-[40px] shadow-xl overflow-hidden" data-aos="fade-up"
            data-aos-duration="1000">
            <div
                class="grid lg:grid-cols-2">
                <!-- Directions -->
                <div
                    class="p-10 lg:p-14">
                    <span
                        class="inline-flex px-4 py-2 rounded-full bg-primary/10 text-primary">
                        Find Us Easily
                    </span>
                    <h2
                        class="heading-font text-4xl mt-6">
                        Directions To Our Salon
                    </h2>
                    <div
                        class="mt-10 space-y-8">
                        <div class="flex gap-4" data-aos="fade-right"
                            data-aos-delay="100">
                            <div
                                class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center">
                                1
                            </div>
                            <p>
                                From North - Wellington Street Car Park
                            </p>
                        </div>
                        <div class="flex gap-4" data-aos="fade-right"
                            data-aos-delay="200">
                            <div
                                class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center">
                                2
                            </div>
                            <p>
                                From South - Riding Car Park
                            </p>
                        </div>
                        <div class="flex gap-4" data-aos="fade-right"
                            data-aos-delay="300">
                            <div
                                class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center">
                                3
                            </div>
                            <p>
                                From East - St Michael's Car Park
                            </p>
                        </div>
                    </div>
                </div>
                <!-- CTA -->
                <div
                    class="bg-gradient-to-br from-primary to-primary-light p-10 lg:p-14 flex flex-col justify-center" data-aos="fade-up"
                    data-aos-delay="300">
                    <h2
                        class="heading-font text-primary text-5xl">
                        Ready To Book?
                    </h2>
                    <p
                        class="mt-6">
                        Contact us today and let our beauty specialists
                        help you look and feel your absolute best.
                    </p>
                    <div
                        class="flex flex-wrap gap-4 mt-10">
                        <a href="./bookappointment.php"
                            class="btn-primary">
                            <i class="ri-calendar-line"></i>
                            Book Appointment
                        </a>
                        <a href="tel:01604315484"
                            class="btn-outline">
                            <i class="ri-phone-line mx-2"></i>

                            Call Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include './includes/footer.php'
?>