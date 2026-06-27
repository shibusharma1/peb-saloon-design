<?php
include './includes/header.php'
?>
<style>
    .group img {
        transition: transform .7s ease;
    }

    .group:hover img {
        transform: scale(1.08);
    }

    .group {
        transition: .4s ease;
    }

    .group:hover {
        box-shadow:
            0 20px 60px rgba(177, 50, 122, .18);
        transform: translateY(-10px);
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
                    class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-white/10 backdrop-blur-md text-white text-sm uppercase tracking-[2px]">
                    <i class="ri-price-tag-3-line"></i>
                    Professional Elegance Beauty
                </span>
                <!-- Title -->
                <h1
                    class="heading-font text-white text-5xl md:text-6xl lg:text-7xl mt-6 leading-tight">
                    Let's Connect
                </h1>
                <!-- Description -->
                <p
                    class="hidden lg:block text-white/80 text-lg lg:text-xl mt-6 max-w-2xl leading-8">
                    Whether you're booking your next beauty treatment,
                    looking for professional advice, or simply have a question,
                    our team would love to hear from you.
                </p>
            </div>
        </div>
    </div>
</section>
<section id="offer-detail" class="section-light">
    <div class="max-w-[1400px] mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-12 items-start">
            <!-- ========================================= -->
            <!-- LEFT SIDEBAR -->
            <!-- ========================================= -->
            <aside class="hidden lg:block lg:col-span-3 lg:sticky lg:top-32 self-start h-fit">
                <!-- Sticky Wrapper -->
                <div class="space-y-8">
                    <!-- Offer List -->
                    <div class="bg-white rounded-[36px] shadow-xl overflow-hidden">
                        <div class="p-4 border-b">
                            <span class="text-sm uppercase tracking-[3px] text-primary">
                                Explore
                            </span>
                            <h2 class="heading-font text-2xl mt-2">
                                Beauty Offers
                            </h2>
                        </div>
                        <div class="p-4">
                            <!-- Active -->
                            <a href="#"
                                class="flex items-center justify-between px-4 py-3 rounded-2xl bg-primary text-white font-semibold">
                                <div class="flex items-center gap-4">
                                    <div class="w-11 h-11 rounded-full bg-white/20 flex items-center justify-center">
                                        <i class="ri-gift-line text-white"></i>
                                    </div>
                                    Hot Stone Massage
                                </div>
                                <i class="ri-arrow-right-line text-xl"></i>
                            </a>
                            <!-- Normal -->
                            <a href="#"
                                class="mt-3 flex items-center justify-between px-5 py-4 rounded-2xl hover:bg-light transition">
                                <div class="flex items-center gap-4">
                                    <div class="w-11 h-11 rounded-full bg-primary/10 flex items-center justify-center">
                                        <i class="ri-heart-line text-primary"></i>
                                    </div>
                                    Deep Tissue Massage
                                </div>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                            <a href="#"
                                class="mt-3 flex items-center justify-between px-5 py-4 rounded-2xl hover:bg-light transition">
                                <div class="flex items-center gap-4">
                                    <div class="w-11 h-11 rounded-full bg-primary/10 flex items-center justify-center">
                                        <i class="ri-heart-line text-primary"></i>
                                    </div>
                                    Indian Head Massage
                                </div>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                            <a href="#"
                                class="mt-3 flex items-center justify-between px-5 py-4 rounded-2xl hover:bg-light transition">
                                <div class="flex items-center gap-4">
                                    <div class="w-11 h-11 rounded-full bg-primary/10 flex items-center justify-center">
                                        <i class="ri-gift-line text-primary"></i>
                                    </div>
                                    Luxury Facial Offer
                                </div>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                            <a href="#"
                                class="mt-3 flex items-center justify-between px-5 py-4 rounded-2xl hover:bg-light transition">
                                <div class="flex items-center gap-4">
                                    <div class="w-11 h-11 rounded-full bg-primary/10 flex items-center justify-center">
                                        <i class="ri-heart-line text-primary"></i>
                                    </div>
                                    Nail Package
                                </div>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </aside>

            <div class="lg:col-span-6">
                <div
                    class="bg-white rounded-[40px] shadow-xl overflow-hidden">
                    <!-- Image -->
                    <div class="relative">
                        <img
                            src="./assets/img/background/bg2.jpg"
                            class="w-full h-[250px] md:h-[300px] object-cover">

                        <div
                            class="absolute top-8 left-8">
                            <span
                                class="px-5 py-2 rounded-full bg-primary text-white">
                                20% OFF
                            </span>
                        </div>

                        <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-8 left-8 text-white">
                            Luxury Treatment
                            Hot Stone Massage
                        </div>
                    </div>
                    <!-- Content -->
                    <div class="p-8 lg:p-12">
                        <span
                            class="text-primary uppercase tracking-[3px] text-sm font-semibold">
                            Luxury Treatment
                        </span>
                        <h2
                            class="heading-font text-3xl lg:text-4xl">
                            Hot Stone Massage
                        </h2>
                        <p
                            class="text-muted leading-8 mt-4">
                            Indulge yourself with our luxurious Hot Stone Massage,
                            carefully designed to melt away stress, relieve muscle
                            tension and restore complete body relaxation using
                            premium natural oils and heated volcanic stones.
                        </p>
                    </div>


                    <div>
                        <div class="bg-white rounded-[40px] shadow-xl p-8 lg:px-10 lg:pb-10 lg:pt-0">
                            <span
                                class="inline-flex items-center gap-2 py-2 rounded-full bg-primary/10 text-primary font-semibold">
                                <i class="ri-star-smile-line"></i>
                                What's Included
                            </span>
                            <h3
                                class="heading-font text-4xl">
                                Treatment Highlights
                            </h3>
                            <p
                                class="text-muted mt-4 leading-8">
                                Our Hot Stone Massage combines traditional massage
                                techniques with heated volcanic stones to improve blood
                                circulation, ease muscle tension and promote complete
                                relaxation.
                            </p>
                            <div
                                class="grid md:grid-cols-2 gap-5 mt-10">
                                <div class="flex gap-4">
                                    <div
                                        class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center">
                                        <i class="ri-time-line text-primary text-xl"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold">
                                            90 Minute Session
                                        </h5>
                                        <p class="text-sm text-muted mt-1">
                                            Full body relaxation
                                        </p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div
                                        class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center">
                                        <i class="ri-leaf-line text-primary text-xl"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold">
                                            Premium Oils
                                        </h5>
                                        <p class="text-sm text-muted mt-1">
                                            Natural essential oils
                                        </p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div
                                        class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center">
                                        <i class="ri-heart-pulse-line text-primary text-xl"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold">
                                            Muscle Relief
                                        </h5>
                                        <p class="text-sm text-muted mt-1">
                                            Reduce stress & tension
                                        </p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <div
                                        class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center">
                                        <i class="ri-award-line text-primary text-xl"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold">
                                            Certified Therapist
                                        </h5>
                                        <p class="text-sm text-muted mt-1">
                                            Experienced professionals
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="mt-12">
                                <span
                                    class="inline-flex items-center gap-2 py-2 rounded-full bg-primary/10 text-primary font-semibold">
                                    <i class="ri-information-line"></i>
                                    Offer Information
                                </span>
                                <h3
                                    class="heading-font text-4xl">
                                    Terms & Conditions
                                </h3>
                                <p
                                    class="text-muted mt-4 leading-8">
                                    Please read the following information before
                                    booking this promotional offer.
                                </p>
                                <div class="mt-8 space-y-5">
                                    <div class="flex gap-4">
                                        <i class="ri-checkbox-circle-fill text-primary text-xl mt-1"></i>
                                        <p class="text-muted">
                                            Offer is available for a limited time only.
                                        </p>
                                    </div>
                                    <div class="flex gap-4">
                                        <i class="ri-checkbox-circle-fill text-primary text-xl mt-1"></i>
                                        <p class="text-muted">
                                            Advance booking is highly recommended.
                                        </p>
                                    </div>
                                    <div class="flex gap-4">
                                        <i class="ri-checkbox-circle-fill text-primary text-xl mt-1"></i>
                                        <p class="text-muted">
                                            Offer cannot be combined with any other
                                            promotion or discount.
                                        </p>
                                    </div>
                                    <div class="flex gap-4">
                                        <i class="ri-checkbox-circle-fill text-primary text-xl mt-1"></i>
                                        <p class="text-muted">
                                            Prices may vary depending upon the selected
                                            treatment or consultation.
                                        </p>
                                    </div>
                                    <div class="flex gap-4">
                                        <i class="ri-checkbox-circle-fill text-primary text-xl mt-1"></i>
                                        <p class="text-muted">
                                            Professional Elegance Beauty Salon reserves
                                            the right to modify or withdraw the offer
                                            without prior notice.
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div>
                                <div class="mt-12">
                                    <span
                                        class="inline-flex items-center gap-2 py-2 rounded-full bg-primary/10 text-primary">
                                        <i class="ri-share-forward-line"></i>
                                        Share
                                    </span>
                                    <h3
                                        class="heading-font text-3xl">
                                        Love This Offer?
                                    </h3>
                                    <p
                                        class="text-muted mt-4">
                                        Share this offer with your friends
                                        and family.
                                    </p>
                                    <div
                                        class="grid grid-cols-2 gap-3 mt-8">
                                        <a href="#"
                                            class="rounded-2xl bg-[#1877F2] text-white p-4 flex items-center justify-center gap-2">
                                            <i class="ri-facebook-fill"></i>
                                            Facebook
                                        </a>
                                        <a href="#"
                                            class="rounded-2xl bg-[#25D366] text-white p-4 flex items-center justify-center gap-2">
                                            <i class="ri-whatsapp-fill"></i>
                                            WhatsApp
                                        </a>
                                        <a href="#"
                                            class="rounded-2xl bg-black text-white p-4 flex items-center justify-center gap-2">
                                            <i class="ri-twitter-x-line"></i>
                                            X
                                        </a>
                                        <a href="#"
                                            class="rounded-2xl bg-[#0A66C2] text-white p-4 flex items-center justify-center gap-2">
                                            <i class="ri-linkedin-fill"></i>
                                            LinkedIn
                                        </a>
                                    </div>
                                    <button
                                        class="btn-outline w-full justify-center mt-5">
                                        <i class="ri-link"></i>
                                        Copy Offer Link
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <aside class="lg:col-span-3 lg:sticky lg:top-32 self-start h-fit">
                <!-- Sticky Wrapper -->
                <div class="space-y-8">

                    <div class="bg-white rounded-[36px] shadow-xl overflow-hidden">

                        <div class="p-4">
                            <!-- <div class="rounded-[40px] shadow-xl overflow-hidden"> -->
                            <!-- <div class="bg-gradient-to-r from-primary to-primary-light p-8 text-primary text-center">
                                <h4
                                    class="heading-font text-2xl">
                                    Special Offer
                                </h4>
                                <p class="text-primary mt-2">
                                    Limited Time Only
                                </p>
                            </div> -->
                            <div class="p-4 border-b">
                                <span class="text-sm uppercase tracking-[3px] text-primary">
                                    Special Offer
                                </span>
                                <h2 class="heading-font text-2xl mt-2">
                                    Limited Time Only
                                </h2>
                            </div>
                            <div
                                class="p-8">
                                <div
                                    class="text-center">
                                    <p class="text-muted">
                                        Regular Price
                                    </p>
                                    <h4
                                        class="text-2xl font-bold line-through text-gray-400 mt-2">
                                        £80
                                    </h4>
                                </div>
                                <div
                                    class="text-center mt-4">
                                    <p class="text-primary font-semibold">
                                        Offer Price
                                    </p>
                                    <h2
                                        class="heading-font text-4xl text-primary mt-3">
                                        £60
                                    </h2>
                                </div>
                                <div
                                    class="mt-4 rounded-3xl bg-light p-6 text-center">
                                    <span
                                        class="text-sm uppercase tracking-[3px] text-muted">
                                        You Save
                                    </span>
                                    <h3
                                        class="text-2xl font-bold text-green-600 mt-2">
                                        £20
                                    </h3>
                                </div>
                                <a
                                    href="bookappointment.php"
                                    class="btn-primary btn-luxury w-full justify-center mt-8">
                                    Book Offer
                                    <i class="ri-arrow-right-line"></i>
                                </a>

                            </div>

                        </div>
                        <!-- </div> -->
                    </div>

                </div>
            </aside>

        </div>
    </div>

</section>

<section class="section-light" style="padding-top: 0 !important;">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Heading -->
        <div class="text-center max-w-3xl mx-auto">
            <span
                class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-primary/10 text-primary font-semibold">
                <i class="ri-gift-line"></i>
                More Exclusive Offers
            </span>
            <h2
                class="heading-font text-5xl mt-4">
                You May Also Like
            </h2>
            <p
                class="mt-6 text-muted leading-8">
                Discover more beauty treatments and exclusive offers
                carefully selected to help you look and feel your best.
            </p>
        </div>
        <!-- Cards -->
        <div
            class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 mt-12">
            <!-- Card -->
            <a href="#"
                class="group bg-white rounded-[36px] overflow-hidden shadow-lg hover:shadow-2xl transition duration-500">
                <!-- Image -->
                <div class="relative overflow-hidden">
                    <img
                        src="./assets/img/background/bg2.jpg"
                        class="w-full h-64 object-cover transition duration-700 group-hover:scale-110">
                    <div
                        class="absolute top-5 left-5">
                        <span
                            class="bg-primary text-white px-4 py-2 rounded-full text-sm">
                            20% OFF
                        </span>
                    </div>
                </div>
                <!-- Content -->
                <div class="p-8">
                    <span
                        class="text-primary uppercase tracking-[2px] text-sm font-semibold">
                        Massage
                    </span>
                    <h3
                        class="heading-font text-2xl group-hover:text-primary transition">
                        Deep Tissue Massage
                    </h3>
                    <p
                        class="text-muted mt-5 leading-7">
                        Relieve muscle tension and enjoy complete
                        body relaxation with our professional
                        therapists.
                    </p>
                    <!-- Price -->
                    <div
                        class="flex items-end justify-between mt-4">
                        <div>
                            <span
                                class="text-gray-400 line-through">
                                £80
                            </span>
                            <h4
                                class="text-primary text-2xl font-bold mt-1">
                                £60
                            </h4>
                        </div>
                        <div
                            class="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center group-hover:translate-x-1 transition">
                            <i class="ri-arrow-right-line text-xl"></i>
                        </div>
                    </div>
                </div>
            </a>
            <!-- Card -->
            <a href="#"
                class="group bg-white rounded-[36px] overflow-hidden shadow-lg hover:shadow-2xl transition duration-500">
                <div class="relative overflow-hidden">
                    <img
                        src="./assets/img/background/bg2.jpg"
                        class="w-full h-64 object-cover transition duration-700 group-hover:scale-110">
                    <div
                        class="absolute top-5 left-5">
                        <span
                            class="bg-primary text-white px-4 py-2 rounded-full text-sm">
                            Save £15
                        </span>
                    </div>
                </div>
                <div class="p-8">
                    <span
                        class="text-primary uppercase tracking-[2px] text-sm font-semibold">
                        Facial
                    </span>
                    <h3
                        class="heading-font text-2xl group-hover:text-primary transition">
                        Luxury Facial
                    </h3>
                    <p
                        class="text-muted mt-5 leading-7">
                        Brighten and rejuvenate your skin using
                        premium skincare products.
                    </p>
                    <div
                        class="flex items-end justify-between mt-4">
                        <div>
                            <span
                                class="text-gray-400 line-through">
                                £70
                            </span>
                            <h4
                                class="text-primary text-2xl font-bold mt-1">
                                £55
                            </h4>
                        </div>
                        <div
                            class="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center group-hover:translate-x-1 transition">
                            <i class="ri-arrow-right-line text-xl"></i>
                        </div>
                    </div>
                </div>
            </a>
            <!-- Card -->
            <a href="#"
                class="group bg-white rounded-[36px] overflow-hidden shadow-lg hover:shadow-2xl transition duration-500">
                <div class="relative overflow-hidden">
                    <img
                        src="./assets/img/background/bg2.jpg"
                        class="w-full h-64 object-cover transition duration-700 group-hover:scale-110">
                    <div
                        class="absolute top-5 left-5">
                        <span
                            class="bg-primary text-white px-4 py-2 rounded-full text-sm">
                            New Offer
                        </span>
                    </div>
                </div>
                <div class="p-8">
                    <span
                        class="text-primary uppercase tracking-[2px] text-sm font-semibold">
                        Nails
                    </span>
                    <h3
                        class="heading-font text-2xl group-hover:text-primary transition">
                        Nail Extension
                    </h3>
                    <p
                        class="text-muted mt-5 leading-7">
                        Beautiful premium nail extensions with
                        elegant finishing.
                    </p>
                    <div
                        class="flex items-end justify-between mt-4">
                        <div>
                            <span
                                class="text-gray-400 line-through">
                                £55
                            </span>
                            <h4
                                class="text-primary text-2xl font-bold mt-1">
                                £40
                            </h4>
                        </div>
                        <div
                            class="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center group-hover:translate-x-1 transition">
                            <i class="ri-arrow-right-line text-xl"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<?php
include './includes/footer.php'
?>