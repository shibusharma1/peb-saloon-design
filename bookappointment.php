<?php
include './includes/header.php'
?>
<style>
    .booking-input {
        transition: all .35s ease;
    }

    .booking-input:hover {
        transform: translateY(-2px);
    }

    .booking-input:focus {
        transform: translateY(-3px);
    }

    .sidebar-item {
        transition: all .35s ease;
    }

    .sidebar-item:hover {
        transform: translateX(8px);
    }

    .booking-feature {
        transition: all .4s ease;
    }

    .booking-feature:hover {
        transform: translateY(-10px);
    }

    .booking-icon {
        transition: all .4s ease;
    }

    .booking-feature:hover .booking-icon {
        transform: scale(1.12) rotate(6deg);
    }
</style>
<section class="pt-42 relative h-[280px] lg:h-[340px] overflow-hidden mb-8">
    <!-- Background Image -->
    <img
        src="./assets/img/nailextension.png"
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
                    class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-white/10 backdrop-blur-md text-white text-sm uppercase tracking-[2px]" data-aos="fade-down"
                    data-aos-duration="700">
                    <i class="ri-price-tag-3-line"></i>
                    Professional Elegance Beauty
                </span>
                <!-- Title -->
                <h1
                    class="heading-font text-white text-5xl md:text-6xl lg:text-7xl mt-6 leading-tight" data-aos="fade-up"
                    data-aos-delay="100"
                    data-aos-duration="900">
                    Let's Connect
                </h1>
                <!-- Description -->
                <p class="hidden md:block lg:block text-white/80 text-lg lg:text-xl mt-6 max-w-2xl leading-8" data-aos="fade-up"
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
<section id="booking-form" class="section-light" style="padding-top:1rem !important;">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-10 items-start">

            <div class="lg:col-span-8">
                <div class="bg-white rounded-[36px] shadow-xl p-8 lg:p-12" data-aos="fade-right"
                    data-aos-duration="1000">
                    <span class="inline-flex px-5 py-2 rounded-full bg-primary/10 text-primary">
                        Appointment Form
                    </span>
                    <h2 class="heading-font text-5xl mt-6">
                        Reserve Your Visit
                    </h2>
                    <p class="text-light mt-4">
                        Complete the form below and we'll confirm your appointment shortly.
                    </p>
                    <form class="mt-10">
                        <div class="grid md:grid-cols-2 gap-6" data-aos="fade-up"
                            data-aos-delay="100">
                            <div>
                                <label class="booking-label">
                                    Full Name
                                </label>
                                <input
                                    type="text"
                                    class="booking-input"
                                    placeholder="Enter your name">
                            </div>
                            <div>
                                <label class="booking-label">
                                    Email Address
                                </label>
                                <input
                                    type="email"
                                    class="booking-input"
                                    placeholder="Enter your email">
                            </div>
                            <div>
                                <label class="booking-label">
                                    Phone Number
                                </label>
                                <input
                                    type="tel"
                                    class="booking-input"
                                    placeholder="+44...">
                            </div>
                            <div>
                                <label class="booking-label">
                                    Select Service
                                </label>
                                <select class="booking-input">
                                    <option>Select Service</option>
                                    <option>Threading</option>
                                    <option>Waxing</option>
                                    <option>Facial</option>
                                    <option>Nails</option>
                                    <option>Massage</option>
                                </select>
                            </div>
                            <div>
                                <label class="booking-label">
                                    Preferred Date
                                </label>
                                <input
                                    type="date"
                                    class="booking-input">
                            </div>
                            <div>
                                <label class="booking-label">
                                    Preferred Time
                                </label>
                                <input
                                    type="time"
                                    class="booking-input">
                            </div>
                        </div>
                        <div class="mt-6" data-aos="fade-up"
                            data-aos-delay="200">
                            <label class="booking-label">
                                Additional Notes
                            </label>
                            <textarea
                                rows="6"
                                class="booking-input resize-none"
                                placeholder="Tell us anything we should know..."></textarea>
                        </div>
                        <!-- Terms & Conditions Checkbox -->
                        <div class="mt-6 flex items-start gap-3" data-aos="fade-up" data-aos-delay="250">
                            <input
                                id="terms"
                                type="checkbox"
                                required
                                class="mt-1 h-5 w-5 accent-[var(--primary)] cursor-pointer">

                            <label for="terms" class="text-sm text-light leading-6 cursor-pointer">
                                I accept the
                                <a href="./terms-and-conditions.php"
                                    class="text-primary font-medium hover:underline">
                                    Terms & Conditions
                                </a>
                            </label>
                        </div>
                        <button
                            class="btn-primary btn-luxury mt-6" data-aos="zoom-in"
                            data-aos-delay="300">
                            <i class="ri-calendar-check-line"></i>
                            Book Appointment
                        </button>
                    </form>
                </div>
            </div>
            <!-- ===================== -->
            <!-- Right Sidebar -->
            <!-- ===================== -->
            <div class="lg:col-span-4">
                <div class="sticky top-32 space-y-6" data-aos="fade-left"
                    data-aos-duration="1000">
                    <!-- Contact -->
                    <div class="booking-sidebar" data-aos="fade-left"
                        data-aos-delay="100">
                        <h3 class="heading-font text-3xl">
                            Need Help?
                        </h3>
                        <div class="space-y-5 mt-8">
                            <div class="sidebar-item" data-aos="fade-up"
                                data-aos-delay="150">
                                <i class="ri-phone-line"></i>
                                <div>
                                    <strong>Call Us</strong>
                                    <p>+44 1604 315484</p>
                                </div>
                            </div>
                            <div class="sidebar-item" data-aos="fade-up"
                                data-aos-delay="200">
                                <i class="ri-map-pin-line"></i>
                                <div>
                                    <strong>Visit Us</strong>
                                    <p>
                                        63A Abington Street,<br>
                                        Northampton NN1 2BH
                                    </p>
                                </div>
                            </div>
                            <div class="sidebar-item" data-aos="fade-up"
                                data-aos-delay="250">
                                <i class="ri-time-line"></i>
                                <div>
                                    <strong>Opening Hours</strong>
                                    <p>
                                        Mon - Sat<br>
                                        9:00 AM - 7:00 PM
                                    </p>
                                </div>
                            </div>
                            <div class="sidebar-item" data-aos="fade-up"
                                data-aos-delay="300">
                                <i class="ri-mail-line"></i>
                                <div>
                                    <strong>Email</strong>
                                    <p>
                                        info@pebsalon.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Social -->
                    <div class="booking-sidebar" data-aos="fade-left"
                        data-aos-delay="200">
                        <h4 class="font-semibold text-xl">
                            Follow Us
                        </h4>
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
<!-- ==========================================
   WHY BOOK WITH US
   ========================================== -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Heading -->
        <div class="text-center max-w-3xl mx-auto" data-aos="fade-up">
            <span class="inline-block px-5 py-2 rounded-full bg-primary/10 text-primary font-medium">
                Why Choose Us
            </span>
            <h2 class="heading-font text-5xl mt-6">
                Beauty Care You Can Trust
            </h2>
            <p class="text-light mt-6 leading-8">
                Every appointment is delivered by experienced beauty
                professionals using premium products in a clean,
                relaxing and welcoming environment.
            </p>
        </div>
        <!-- Cards -->
        <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-8 mt-16">
            <!-- Card 1 -->
            <div class="booking-feature" data-aos="fade-up" data-aos-delay="0">
                <div class="booking-icon">
                    <i class="ri-award-line"></i>
                </div>
                <h3>
                    Certified Experts
                </h3>
                <p>
                    Qualified therapists providing safe and professional treatments.
                </p>
            </div>
            <!-- Card 2 -->
            <div class="booking-feature" data-aos="fade-up" data-aos-delay="100">
                <div class="booking-icon">
                    <i class="ri-heart-pulse-line"></i>
                </div>
                <h3>
                    Premium Products
                </h3>
                <p>
                    We use trusted beauty brands for exceptional and lasting results.
                </p>
            </div>
            <!-- Card 3 -->
            <div class="booking-feature" data-aos="fade-up" data-aos-delay="200">
                <div class="booking-icon">
                    <i class="ri-time-line"></i>
                </div>
                <h3>
                    Flexible Booking
                </h3>
                <p>
                    Choose your preferred date and time that fits your schedule.
                </p>
            </div>
            <!-- Card 4 -->
            <div class="booking-feature" data-aos="fade-up" data-aos-delay="300">
                <div class="booking-icon">
                    <i class="ri-star-smile-line"></i>
                </div>
                <h3>
                    Luxury Experience
                </h3>
                <p>
                    Relax in a comfortable salon designed for your complete beauty journey.
                </p>
            </div>
        </div>
    </div>
</section>
<?php
include './includes/footer.php'
?>