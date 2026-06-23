<?php
include './includes/header.php'
?>
<style>
    .process-step {

        transition: .4s ease;

    }

    .process-step:hover {

        transform: translateY(-10px);

    }
    @keyframes glowPulse {

    0%{
        box-shadow: 0 0 0 rgba(177,50,122,.2);
    }

    50%{
        box-shadow:
            0 0 30px rgba(177,50,122,.35);
    }

    100%{
        box-shadow: 0 0 0 rgba(177,50,122,.2);
    }

}

.process-icon{

    animation: glowPulse 3s infinite;

}
</style>
<section class="relative min-h-[500px] flex items-center overflow-hidden">

    <!-- Background Image -->

    <img
        src="./assets/img/our-services/pic1.jpg"
        alt="Threading Service"
        class="absolute inset-0 w-full h-full object-cover">

    <!-- Overlay -->

    <div
        class="absolute inset-0 bg-gradient-to-r
        from-[rgba(109,27,71,.95)]
        via-[rgba(109,27,71,.75)]
        to-[rgba(109,27,71,.35)]">
    </div>

    <!-- Decorative Blur -->

    <div
        class="absolute right-0 top-0 w-[500px] h-[500px]
        rounded-full bg-[rgba(216,103,162,.15)]
        blur-[150px]">
    </div>

    <!-- Content -->

    <div
        class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">

        <div class="max-w-3xl">

            <!-- Breadcrumb -->

            <div
                class="flex items-center gap-3 text-white/70 text-sm uppercase tracking-[2px]">

                <a href="#" class="hover:text-white">
                    Home
                </a>

                <span>/</span>

                <a href="#" class="hover:text-white">
                    Services
                </a>

                <span>/</span>

                <span class="text-white">
                    Threading
                </span>

            </div>

            <!-- Badge -->

            <span
                class="inline-flex items-center gap-2
                mt-8
                px-5 py-2
                rounded-full
                bg-white/10
                backdrop-blur-lg
                border border-white/10
                text-white">

                <i class="ri-sparkling-line"></i>

                Luxury Beauty Treatment

            </span>

            <!-- Title -->

            <h1
                class="heading-font
                text-5xl
                md:text-6xl
                lg:text-7xl
                text-white
                mt-8
                leading-tight">

                Threading

            </h1>

            <!-- Subtitle -->

            <p
                class="mt-6
                text-lg
                md:text-xl
                text-white/80
                max-w-2xl
                leading-8">

                Expert threading treatments designed to create
                beautifully shaped brows and smooth, flawless skin
                with precision and care.

            </p>

            <!-- Buttons -->

            <div
                class="flex flex-wrap gap-4 mt-10" data-aos="fade-right">

                <a href="#"
                    class="btn-primary">

                    Book Appointment

                </a>

                <a href="#"
                    class="btn-outline border-white text-white hover:bg-white hover:text-primary">

                    View Pricing

                </a>

            </div>

            <!-- Mini Stats -->

            <div
                class="flex flex-wrap gap-8 mt-12 text-white">

                <div>

                    <h4 class="text-3xl font-bold">
                        10+
                    </h4>

                    <span class="text-white/70">
                        Years Experience
                    </span>

                </div>

                <div>

                    <h4 class="text-3xl font-bold">
                        5000+
                    </h4>

                    <span class="text-white/70">
                        Happy Clients
                    </span>

                </div>

                <div>

                    <h4 class="text-3xl font-bold">
                        ★ 4.9
                    </h4>

                    <span class="text-white/70">
                        Client Rating
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>
<section class="py-24 bg-white overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- Image Side -->

            <div
                data-aos="fade-right"
                class="relative">

                <!-- Decorative Border -->

                <div
                    class="absolute -top-6 -left-6 w-full h-full border-2 border-primary rounded-[40px]">
                </div>

                <!-- Main Image -->

                <img
                    src="./assets/img/our-services/pic1.jpg"
                    alt="Threading"
                    class="relative z-10 rounded-[40px] shadow-2xl w-full h-[650px] object-cover">

                <!-- Floating Badge -->

                <div
                    class="absolute bottom-8 right-8 bg-white rounded-3xl shadow-xl px-6 py-5 z-20 float-animation">

                    <h4 class="text-primary text-3xl font-bold">
                        15 Min
                    </h4>

                    <p class="text-muted text-sm">
                        Quick Treatment
                    </p>

                </div>

            </div>

            <!-- Content Side -->

            <div data-aos="fade-left">

                <!-- Small Label -->

                <span
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary font-medium">

                    <i class="ri-sparkling-line"></i>

                    Professional Treatment

                </span>

                <!-- Heading -->

                <h2
                    class="heading-font text-5xl mt-8">

                    Precision Threading
                    For Beautiful Results

                </h2>

                <!-- Spa Separator -->

                <div class="mt-6">

                    <div class="dlab-separator text-primary style-icon">
                        <i class="flaticon-spa text-primary float-animation"></i>
                    </div>

                </div>

                <!-- Description -->

                <p class="mt-8 text-muted leading-8">

                    Threading is a natural and highly precise hair removal
                    technique that shapes eyebrows and removes facial hair
                    using a twisted cotton thread.

                    It provides clean definition, longer-lasting results,
                    and is suitable even for sensitive skin.

                </p>

                <!-- Features -->

                <div
                    class="grid sm:grid-cols-2 gap-5 mt-10">

                    <div
                        class="flex items-center gap-4">

                        <div
                            class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center">

                            <i class="ri-check-line text-primary"></i>

                        </div>

                        <span>
                            Skin Friendly
                        </span>

                    </div>

                    <div
                        class="flex items-center gap-4">

                        <div
                            class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center">

                            <i class="ri-check-line text-primary"></i>

                        </div>

                        <span>
                            Precise Shaping
                        </span>

                    </div>

                    <div
                        class="flex items-center gap-4">

                        <div
                            class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center">

                            <i class="ri-check-line text-primary"></i>

                        </div>

                        <span>
                            Natural Technique
                        </span>

                    </div>

                    <div
                        class="flex items-center gap-4">

                        <div
                            class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center">

                            <i class="ri-check-line text-primary"></i>

                        </div>

                        <span>
                            Long Lasting Results
                        </span>

                    </div>

                </div>

                <!-- CTA -->

                <div
                    class="flex flex-wrap gap-4 mt-12">

                    <a href="#"
                        class="btn-primary">

                        Book Appointment

                    </a>

                    <a href="#"
                        class="btn-outline">

                        View Pricing

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>
<section class="py-24 bg-light overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading -->

        <div
            class="text-center max-w-3xl mx-auto"
            data-aos="fade-up">

            <span
                class="text-primary uppercase tracking-[4px] font-medium">

                Benefits

            </span>

            <h2
                class="heading-font text-5xl mt-4">

                Why Choose Threading?

            </h2>

            <p
                class="mt-6 text-muted leading-8">

                Threading is one of the most precise and natural
                hair removal techniques available today, offering
                long-lasting results with minimal irritation.

            </p>

        </div>
        <div
            class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">
            <div
                data-aos="fade-up"
                class="luxury-card p-8 text-center">

                <div
                    class="w-20 h-20 mx-auto rounded-full bg-primary/10 flex items-center justify-center">

                    <i class="ri-focus-3-line text-primary text-4xl"></i>

                </div>

                <h4 class="mt-6 text-xl font-semibold">
                    Precise Results
                </h4>

                <p class="mt-4 text-muted">
                    Creates perfectly shaped brows and removes
                    even the finest facial hair.
                </p>

            </div>
            <div
                data-aos="fade-up"
                data-aos-delay="100"
                class="luxury-card p-8 text-center">

                <div
                    class="w-20 h-20 mx-auto rounded-full bg-primary/10 flex items-center justify-center">

                    <i class="ri-leaf-line text-primary text-4xl"></i>

                </div>

                <h4 class="mt-6 text-xl font-semibold">
                    100% Natural
                </h4>

                <p class="mt-4 text-muted">
                    No chemicals, waxes or harsh products
                    are required during treatment.
                </p>

            </div>
            <div
                data-aos="fade-up"
                data-aos-delay="200"
                class="luxury-card p-8 text-center">

                <div
                    class="w-20 h-20 mx-auto rounded-full bg-primary/10 flex items-center justify-center">

                    <i class="ri-shield-check-line text-primary text-4xl"></i>

                </div>

                <h4 class="mt-6 text-xl font-semibold">
                    Sensitive Skin Friendly
                </h4>

                <p class="mt-4 text-muted">
                    Ideal for clients who experience
                    irritation from waxing.
                </p>

            </div>
            <div
                data-aos="fade-up"
                class="luxury-card p-8 text-center">

                <div
                    class="w-20 h-20 mx-auto rounded-full bg-primary/10 flex items-center justify-center">

                    <i class="ri-time-line text-primary text-4xl"></i>

                </div>

                <h4 class="mt-6 text-xl font-semibold">
                    Quick Treatment
                </h4>

                <p class="mt-4 text-muted">
                    Most appointments take only a few minutes
                    while delivering excellent results.
                </p>

            </div>
            <div
                data-aos="fade-up"
                data-aos-delay="100"
                class="luxury-card p-8 text-center">

                <div
                    class="w-20 h-20 mx-auto rounded-full bg-primary/10 flex items-center justify-center">

                    <i class="ri-star-line text-primary text-4xl"></i>

                </div>

                <h4 class="mt-6 text-xl font-semibold">
                    Long Lasting
                </h4>

                <p class="mt-4 text-muted">
                    Hair is removed from the root,
                    resulting in smoother skin for longer.
                </p>

            </div>
            <div
                data-aos="fade-up"
                data-aos-delay="200"
                class="luxury-card p-8 text-center">

                <div
                    class="w-20 h-20 mx-auto rounded-full bg-primary/10 flex items-center justify-center">

                    <i class="ri-heart-line text-primary text-4xl"></i>

                </div>

                <h4 class="mt-6 text-xl font-semibold">
                    Professional Care
                </h4>

                <p class="mt-4 text-muted">
                    Performed by trained professionals
                    focused on comfort and precision.
                </p>

            </div>
        </div>

    </div>

</section>
<section class="py-24 bg-white overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading -->

        <div
            class="text-center max-w-3xl mx-auto"
            data-aos="fade-up">

            <span
                class="text-primary uppercase tracking-[4px] font-medium">

                Simple Process

            </span>

            <h2
                class="heading-font text-5xl mt-4">

                How It Works

            </h2>

            <p
                class="mt-6 text-muted leading-8">

                Our treatment process is designed to be comfortable,
                professional and tailored to your individual beauty goals.

            </p>

        </div>

        <!-- Steps -->

        <div
            class="grid md:grid-cols-3 gap-10 mt-20 relative">

            <!-- Connector Line -->

            <div
                class="hidden md:block absolute top-14 left-0 w-full h-[2px] bg-primary/10">
            </div>

            <!-- STEP 1 -->

            <div
                data-aos="fade-up"
                class="relative text-center">

                <div
                    class="relative z-10 w-28 h-28 mx-auto rounded-full bg-primary text-white flex items-center justify-center shadow-xl">

                    <i class="ri-chat-1-line text-4xl process-icon"></i>

                </div>

                <span
                    class="inline-block mt-6 px-4 py-1 rounded-full bg-primary/10 text-primary text-sm font-semibold">

                    STEP 01

                </span>

                <h3
                    class="heading-font text-3xl mt-4">

                    Consultation

                </h3>

                <p
                    class="mt-4 text-muted leading-8">

                    We discuss your requirements, preferences
                    and desired results to create a treatment
                    plan that suits you.

                </p>

            </div>

            <!-- STEP 2 -->

            <div
                data-aos="fade-up"
                data-aos-delay="150"
                class="relative text-center">

                <div
                    class="relative z-10 w-28 h-28 mx-auto rounded-full bg-primary text-white flex items-center justify-center shadow-xl">

                    <i class="ri-scissors-cut-line text-4xl process-icon"></i>

                </div>

                <span
                    class="inline-block mt-6 px-4 py-1 rounded-full bg-primary/10 text-primary text-sm font-semibold">

                    STEP 02

                </span>

                <h3
                    class="heading-font text-3xl mt-4">

                    Treatment

                </h3>

                <p
                    class="mt-4 text-muted leading-8">

                    Your treatment is carried out by experienced
                    beauty professionals using proven techniques
                    and premium products.

                </p>

            </div>

            <!-- STEP 3 -->

            <div
                data-aos="fade-up"
                data-aos-delay="300"
                class="relative text-center">

                <div
                    class="relative z-10 w-28 h-28 mx-auto rounded-full bg-primary text-white flex items-center justify-center shadow-xl">

                    <i class="ri-sparkling-2-line text-4xl process-icon"></i>

                </div>

                <span
                    class="inline-block mt-6 px-4 py-1 rounded-full bg-primary/10 text-primary text-sm font-semibold">

                    STEP 03

                </span>

                <h3
                    class="heading-font text-3xl mt-4">

                    Beautiful Results

                </h3>

                <p
                    class="mt-4 text-muted leading-8">

                    Leave feeling refreshed, confident and
                    looking your absolute best with long-lasting
                    results.

                </p>

            </div>

        </div>

    </div>

</section>
<?php
include './includes/footer.php'
?>