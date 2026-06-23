<?php
include './includes/header.php'
?>
<section class="pt-32 pb-24 bg-light overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Heading -->
        <div class="text-center max-w-3xl mx-auto">
            <span class="text-primary uppercase tracking-[4px] font-semibold">
                About Us
            </span>
            <h1 class="heading-font text-5xl lg:text-6xl text-dark mt-4" data-aos="fade-up" data-aos-delay="100">
                Beauty With Passion,
                Elegance With Purpose
            </h1>
            <div class="mt-6">
                <div class="dlab-separator text-primary style-icon">
                    <i class="flaticon-spa text-primary"></i>
                </div>
            </div>
        </div>
        <!-- Founder -->
        <div class="grid lg:grid-cols-2 gap-20 items-center mt-20">
            <!-- Image -->
            <div class="relative">
                <div
                    class="absolute -top-6 -left-6 w-full h-full rounded-[40px] border-2 border-primary">
                </div>
                <img
                    src="./assets/img/founder.jpg"
                    alt=""
                    class="relative z-10 rounded-[40px] shadow-2xl w-full" data-aos="fade-right" data-aos-delay="100">
                <!-- Floating Card -->
                <div
                    class="absolute bottom-8 right-8 bg-white p-6 rounded-3xl shadow-xl">
                    <h3 class="text-primary text-3xl font-bold">
                        10+
                    </h3>
                    <p class="text-muted">
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
                    class="heading-font text-4xl lg:text-5xl mt-6 text-dark">
                    Sabita Bhari
                </h2>
                <p class="mt-8 text-muted leading-8">
                    Qualified beauty therapist with NVQ Level 3 and
                    more than 10 years of experience in beauty,
                    skincare and professional salon treatments.
                </p>
                <p class="mt-6 text-muted leading-8">
                    Professional Elegance Beauty was established in 2012
                    with a vision to provide premium beauty services,
                    exceptional customer satisfaction and professional
                    treatment standards.
                </p>
                <p class="mt-6 text-muted leading-8">
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
                <h3 class="text-primary text-5xl font-bold">
                    10+
                </h3>
                <p class="mt-4">
                    Years Experience
                </p>
            </div>
            <div class="luxury-card p-8 text-center">
                <h3 class="text-primary text-5xl font-bold">
                    5000+
                </h3>
                <p class="mt-4">
                    Happy Clients
                </p>
            </div>
            <div class="luxury-card p-8 text-center">
                <h3 class="text-primary text-5xl font-bold">
                    NVQ
                </h3>
                <p class="mt-4">
                    Qualified Therapist
                </p>
            </div>
            <div class="luxury-card p-8 text-center">
                <h3 class="text-primary text-5xl font-bold">
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
        <h2 class="heading-font text-4xl text-dark" data-aos="fade-up">
            Connect With Us
        </h2>
        <p class="mt-6 text-muted">
            Follow our latest beauty transformations,
            offers and updates.
        </p>
        <div class="flex justify-center flex-wrap gap-6 mt-10">
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

        <div class="flex flex-wrap justify-center gap-4 my-12">
            <a href="#" class="btn-primary">
                Book Appointment
            </a>
            <a href="#" class="btn-outline">
                View Location
            </a>
            <a href="#" class="btn-outline">
                Terms & Conditions
            </a>
        </div>
    </div>
</section>

<?php
include './includes/footer.php'
?>