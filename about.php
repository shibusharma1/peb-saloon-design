<?php
include './includes/header.php'
?>
<section class="pt-42 relative h-[280px] lg:h-[340px] overflow-hidden mb-8">
    <!-- Background Image -->
    <img
        src="./assets/img/about-banner.png"
        alt="Price List"
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
                    About Professional Beauty Treatments
                </span>
                <!-- Title -->
                <h1
                    class="heading-font text-white text-4xl md:text-5xl lg:text-6xl mt-6 leading-tight">
                    About Us
                </h1>
                <!-- Description -->
                <p class="hidden lg:block text-white/80 text-base lg:text-[17px] mt-6 max-w-2xl leading-8">
                    Beauty With Passion,
                    Elegance With Purpose
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Founder -->
        <div class="grid lg:grid-cols-2 gap-20 items-center">
            <!-- Image -->
            <div class="relative">
                <div class="absolute -bottom-8 -left-8 w-52 h-52 bg-primary/10 rounded-full blur-3xl">
                </div>
                <div class="absolute top-6 left-6 z-20 bg-primary text-white px-5 py-3 rounded-full shadow-lg">
                    NVQ Level 3
                </div>
                <img
                    src="./assets/img/founder.png"
                    alt="Founder"
                    class="relative z-10 rounded-[40px] shadow-[0_30px_70px_rgba(0,0,0,0.18)] w-full h-[560px] object-cover transition duration-500 hover:scale-[1.01]" data-aos="fade-right" data-aos-delay="100">
                <div class="absolute bottom-8 right-8 z-20 bg-white/90 backdrop-blur-xl rounded-3xl px-6 py-5 shadow-xl border border-white/50">
                    <h4 class="text-3xl font-bold text-primary">10+</h4>
                    <p class="text-sm text-muted uppercase tracking-wide">
                        Years Experience
                    </p>
                </div>
            </div>
            <!-- Content -->
            <div data-aos="fade-left" data-aos-delay="100">
                <span
                    class="inline-flex px-4 py-2 rounded-full bg-primary/10 text-primary font-semibold">
                    Founder & Beauty Therapist
                </span>
                <h2
                    class="heading-font text-3xl md:text-4xl lg:text-[42px] mt-6 text-dark">
                    Sabita Bhari
                </h2>
                <p class="mt-8 text-muted leading-8 text-[16.5px]">
                    Qualified beauty therapist with NVQ Level 3 and
                    more than 10 years of experience in beauty,
                    skincare and professional salon treatments.
                </p>
                <div class="grid grid-cols-2 gap-4 mt-8">
                    <div class="founder-stat-box">
                        <h4>2012</h4>
                        <span>Founded Salon</span>
                    </div>

                    <div class="founder-stat-box">
                        <h4>NVQ 3</h4>
                        <span>Certified Expert</span>
                    </div>
                </div>
                <p class="mt-6 text-muted leading-8 text-[16.5px]">
                    Professional Elegance Beauty was established in 2012
                    with a vision to provide premium beauty services,
                    exceptional customer satisfaction and professional
                    treatment standards.
                </p>
                <p class="mt-6 text-muted leading-8 text-[16.5px]">
                    Today, the salon proudly serves clients with
                    personalized beauty treatments while maintaining
                    internationally recognized professional standards.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="luxury-card p-8 text-center">
                <h3 class="text-primary text-4xl font-bold" data-aos="fade-up" data-aos-delay="0">
                    10+
                </h3>
                <p class="mt-4">
                    Years Experience
                </p>
            </div>
            <div class="luxury-card p-8 text-center">
                <h3 class="text-primary text-4xl font-bold" data-aos="fade-up" data-aos-delay="100">
                    5000+
                </h3>
                <p class="mt-4">
                    Happy Clients
                </p>
            </div>
            <div class="luxury-card p-8 text-center">
                <h3 class="text-primary text-4xl font-bold" data-aos="fade-up" data-aos-delay="300">
                    NVQ
                </h3>
                <p class="mt-4">
                    Qualified Therapist
                </p>
            </div>
            <div class="luxury-card p-8 text-center">
                <h3 class="text-primary text-4xl font-bold" data-aos="fade-up" data-aos-delay="400">
                    BABTAC
                </h3>
                <p class="mt-4">
                    Accredited Member
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section-light">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="heading-font text-4xl text-dark" data-aos="fade-up" data-aos-delay="100">
            Connect With Us
        </h2>
        <p class="mt-6 text-muted">
            Follow our latest beauty transformations,
            offers and updates.
        </p>
        <div class="flex justify-center flex-wrap gap-6 mt-8">
            <a href="#"
                class="w-16 h-16 rounded-full bg-white shadow-lg flex items-center justify-center hover:bg-[#4a1d38] hover:text-white transition">
                <i class="ri-facebook-fill text-2xl"></i>
            </a>
            <a href="#"
                class="w-16 h-16 rounded-full bg-white shadow-lg flex items-center justify-center hover:bg-[#4a1d38] hover:text-white transition">
                <i class="ri-instagram-line text-2xl"></i>
            </a>
            <a href="#"
                class="w-16 h-16 rounded-full bg-white shadow-lg flex items-center justify-center hover:bg-[#4a1d38] hover:text-white transition">
                <i class="ri-tiktok-fill text-2xl"></i>
            </a>
            <a href="#"
                class="w-16 h-16 rounded-full bg-white shadow-lg flex items-center justify-center hover:bg-[#4a1d38] hover:text-white transition">
                <i class="ri-youtube-fill text-2xl"></i>
            </a>
        </div>

        <div class="flex flex-wrap justify-center gap-4 my-8">
            <a href="bookappointment.php" class="btn-primary">
                Book Appointment
            </a>
            <a href="contact.php#location" class="btn-outline">
                View Location
            </a>
            <a href="terms-and-conditions.php" class="btn-outline">
                Terms & Conditions
            </a>
        </div>
    </div>
</section>

<?php
include './includes/footer.php'
?>