<?php
include './includes/header.php'
?>
    
<section class="section-light">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-10">
            <div class="lg:hidden mb-6">
                <h2 class="heading-font text-3xl text-primary">
                    Beauty Spotlight
                </h2>

                <p class="text-light mt-2">
                    Discover our featured treatment and exclusive offers.
                </p>
            </div>
            <!-- LEFT SIDEBAR -->
            <aside class="lg:col-span-4 order-2 lg:order-1">
                <div class="bg-white rounded-[32px] shadow-lg p-8 mb-8">
                    <h3
                        class="heading-font text-3xl text-primary mb-8">
                        Our Services
                    </h3>
                    <div class="space-y-3">
                        <a href="#"
                            class="group flex items-center justify-between px-5 py-4 rounded-2xl bg-primary text-white">
                            Nail Extension
                            <i class="ri-arrow-right-line"></i>
                        </a>
                        <a href="#"
                            class="group flex items-center justify-between px-5 py-4 rounded-2xl hover:bg-light transition">
                            Threading
                            <i class="ri-arrow-right-line"></i>
                        </a>
                        <a href="#"
                            class="group flex items-center justify-between px-5 py-4 rounded-2xl hover:bg-light transition">
                            Waxing
                            <i class="ri-arrow-right-line"></i>
                        </a>
                        <a href="#"
                            class="group flex items-center justify-between px-5 py-4 rounded-2xl hover:bg-light transition">
                            Facial
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>

                <!-- now offers here -->
                <div class="mt-8 overflow-hidden rounded-[32px] shadow-xl bg-white sticky top-28">
                    <div class="relative">
                        <img
                            src="./assets/img/nail-extension-offer.png"
                            class="h-64 w-full object-cover">
                        <div
                            class="absolute top-4 left-4 bg-primary text-white px-4 py-2 rounded-full text-sm">
                            Featured Offer
                        </div>
                    </div>
                    <div class="p-8">
                        <h3
                            class="heading-font text-3xl">
                            20% Off
                            Nail Extension
                        </h3>
                        <p
                            class="text-muted mt-4">
                            Limited-time luxury nail extension package
                            including consultation and finishing.
                        </p>
                        <a href="bookappointment.php"
                            class="btn-primary mt-6">
                            Claim Offer
                        </a>
                    </div>
                </div>
            </aside>
            <!-- RIGHT CONTENT -->
            <div class="lg:col-span-8 order-1 lg:order-2">
                <div
                    class="bg-white rounded-[40px] overflow-hidden shadow-xl">
                    <img
                        src="./assets/img/nailextension.png"
                        class="w-full h-[380px] object-cover">
                    <div class="p-6 lg:p-8">
                        <span
                            class="inline-flex px-4 py-2 rounded-full bg-primary/10 text-primary">
                            Premium Beauty Treatment
                        </span>
                        <h1
                            class="heading-font px-4 text-4xl">
                            Nail Extension
                        </h1>
                        <p
                            class="text-muted px-4 mt-4 leading-8">
                            Transform your nails with our premium nail extension services, designed to enhance both beauty and confidence.
                            Our expert nail technicians carefully craft flawless extensions that add length, strength, and elegance while
                            maintaining a natural and comfortable feel. Whether you prefer a classic, sophisticated style or trendy nail art,
                            we offer customized solutions tailored to your preferences. Using high-quality products and precise techniques,
                            we ensure long-lasting durability, smooth finishing, and a luxurious look that complements your personal style.

                        </p>
                    </div>
                </div>
                <div class="bg-white rounded-[40px] shadow-xl p-10 mt-8">
                    <h3
                        class="heading-font text-3xl mb-6">
                        Pricing
                    </h3>
                    <div class="space-y-4">
                        <div
                            class="flex justify-between items-center p-5 rounded-2xl bg-light hover:bg-white hover:border hover:border-primary/40 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 cursor-pointer">
                            <span>Basic Nail Extension</span>
                            <strong class="text-primary">
                                £35
                            </strong>
                        </div>

                        <div
                            class="flex justify-between items-center p-5 rounded-2xl bg-light hover:bg-white hover:border hover:border-primary/40 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 cursor-pointer">
                            <span>Luxury Nail Extension</span>
                            <strong class="text-primary">
                                £50
                            </strong>
                        </div>

                    </div>
                    <!-- Add button here -->
                    <div class="mt-6 text-center">
                        <a href="bookappointment.php"
                            class="btn-primary inline-flex items-center gap-2">
                            <i class="ri-calendar-line"></i>
                            Book Appointment Now
                        </a>

                    </div>

                </div>
                <div
                    class="bg-white rounded-[40px] shadow-xl p-10 mt-10">
                    <h3
                        class="heading-font text-3xl">
                        Love This Service?
                    </h3>
                    <p
                        class="text-muted mt-3">
                        Share it with your friends and family.
                    </p>

                    <!-- Share -->
                    <?php
                    $shareUrl = "http://localhost/peb-saloon/service-detail.php";
                    $shareText = "Nail extension";
                    ?>
                    <!-- Share Buttons -->
                    <div class="flex flex-wrap items-center gap-3 mt-5">
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($shareUrl) }}"
                            target="_blank"
                            class="flex items-center gap-2 px-4 py-2 rounded-xl bg-[#1877F2] text-white text-sm hover:opacity-90 transition">
                            <i class="fab fa-facebook-f"></i> Facebook
                        </a>
                        <!-- X (Twitter) -->
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode($shareUrl) }}&text={{ urlencode($shareText) }}"
                            target="_blank"
                            class="flex items-center gap-2 px-4 py-2 rounded-xl bg-black text-white text-sm hover:opacity-90 transition">
                            <i class="fab fa-x-twitter"></i> X
                        </a>
                        <!-- WhatsApp -->
                        <a href="https://wa.me/?text={{ urlencode($shareText . ' ' . $shareUrl) }}" target="_blank"
                            class="flex items-center gap-2 px-4 py-2 rounded-xl bg-green-500 text-white text-sm hover:opacity-90 transition">
                            <i class="fab fa-whatsapp"></i> WhatsApp
                        </a>
                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode($shareUrl) }}"
                            target="_blank"
                            class="flex items-center gap-2 px-4 py-2 rounded-xl bg-[#0A66C2] text-white text-sm hover:opacity-90 transition">
                            <i class="fab fa-linkedin-in"></i> LinkedIn
                        </a>
                        <!-- Copy Link -->
                        <button onclick="copyBlogLink()"
                            class="flex items-center gap-2 px-4 py-2 rounded-xl bg-gray-100 text-gray-700 text-sm hover:bg-gray-200 transition">
                            <i class="fa fa-link"></i> Copy Link
                        </button>
                    </div>
                </div>
                <!-- Copy Script -->
                <script>
                    function copyBlogLink() {
                        const url = "{{ url()->current() }}";
                        navigator.clipboard.writeText(url).then(() => {
                            alert("Blog link copied to clipboard!");
                        });
                    }
                </script>
            </div>
        </div>
    </div>
    <!-- </div> -->
</section>
<section class="section-light" style="padding-top: 0px !important;">
    <div class="max-w-7xl mx-auto px-4">
        <div
            class="rounded-[40px]
            bg-gradient-to-r
            from-[var(--primary)]
            to-[var(--primary-light)]
            p-10 text-white">
            <div
                class="flex flex-col lg:flex-row justify-between items-center gap-8">
                <div>
                    <h3
                        class="heading-font text-4xl">
                        Any Questions?
                    </h3>
                    <p
                        class="mt-3 text-white/80">
                        Need help choosing the right treatment?
                        Our beauty specialists are here to help.
                    </p>
                </div>
                <a
                    href="tel:+441234567890"
                    class="group bg-white text-primary px-8 py-4 rounded-full font-semibold inline-flex items-center">
                    <i class="ri-phone-line mr-2 call-icon"></i>
                    Call Us Now
                </a>
            </div>
        </div>
    </div>
</section>
<?php
include './includes/footer.php'
?>