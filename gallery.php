<?php
include './includes/header.php'
?>

<div
    class="sticky top-24 z-30 bg-white/90 backdrop-blur-xl border-b">
    <div
        class="max-w-7xl mx-auto px-4">
        <div
            class="flex justify-center overflow-x-auto gap-4 py-6 whitespace-nowrap scrollbar-hide">
            <button
                class="gallery-filter active-filter"
                data-filter="all">
                All
            </button>
            <button
                class="gallery-filter"
                data-filter="threading">
                Threading
            </button>
            <button
                class="gallery-filter"
                data-filter="lashes">
                Brows & Lashes
            </button>
            <button
                class="gallery-filter"
                data-filter="makeup">
                Makeup
            </button>
            <button
                class="gallery-filter"
                data-filter="facial">
                Facial
            </button>
            <button
                class="gallery-filter"
                data-filter="nails">
                Nails
            </button>
            <button
                class="gallery-filter"
                data-filter="salon">
                Salon
            </button>
        </div>
    </div>
</div>
<section class="py-20 bg-light">
    <div class="max-w-7xl mx-auto px-4">
        <div
            id="galleryContainer"
            class="columns-1 sm:columns-2 lg:columns-3 gap-6 space-y-6">
            <!-- Gallery Item -->
            <div
                class="gallery-item break-inside-avoid"
                data-category="threading">
                <div
                    class="gallery-card">
                    <img
                        loading="lazy" decoding="async" fetchpriority="low"
                        src="./assets/img/gallery/gallery1.png"
                        alt="Threading"
                        class="gallery-image">
                    <div
                        class="gallery-overlay">
                        <button
                            class="gallery-open"
                            data-index="0">
                            <i class="ri-search-eye-line"></i>
                        </button>
                    </div>
                </div>
                <h4
                    class="gallery-title">
                    Threading
                </h4>
            </div>
            <!-- Item -->
            <div
                class="gallery-item break-inside-avoid"
                data-category="lashes">
                <div class="gallery-card">
                    <img
                        loading="lazy" decoding="async" fetchpriority="low"
                        src="./assets/img/gallery/gallery2.png"
                        alt="Brows"
                        class="gallery-image">
                    <div class="gallery-overlay">
                        <button
                            class="gallery-open"
                            data-index="1">
                            <i class="ri-search-eye-line"></i>
                        </button>
                    </div>
                </div>
                <h4 class="gallery-title">
                    Eyebrow & Eyelash
                </h4>
            </div>
            <!-- Item -->
            <div
                class="gallery-item break-inside-avoid"
                data-category="makeup">
                <div class="gallery-card">
                    <img
                        loading="lazy" decoding="async" fetchpriority="low"
                        src="./assets/img/gallery/gallery3.png"
                        alt=""
                        class="gallery-image">
                    <div class="gallery-overlay">
                        <button
                            class="gallery-open"
                            data-index="2">
                            <i class="ri-search-eye-line"></i>
                        </button>
                    </div>
                </div>
                <h4 class="gallery-title">
                    Bridal Makeup
                </h4>
            </div>
            <!-- Item -->
            <div
                class="gallery-item break-inside-avoid"
                data-category="nails">
                <div class="gallery-card">
                    <img
                        loading="lazy" decoding="async" fetchpriority="low"
                        src="./assets/img/gallery/gallery4.png"
                        alt=""
                        class="gallery-image">
                    <div class="gallery-overlay">
                        <button
                            class="gallery-open"
                            data-index="3">
                            <i class="ri-search-eye-line"></i>
                        </button>
                    </div>
                </div>
                <h4 class="gallery-title">
                    Nail Extension
                </h4>
            </div>
            <!-- Continue same structure -->
        </div>
    </div>
</section>
<!-- =============================
    Luxury Gallery Lightbox
    ============================== -->
<div
    id="lightbox"
    class="fixed inset-0 z-[9999] hidden">
    <!-- Dark Background -->
    <div
        id="lightboxBackdrop"
        class="absolute inset-0 bg-black/90 backdrop-blur-md opacity-0 transition duration-300">
    </div>

    <button id="closeLightbox"
        class="lightbox-btn absolute top-6 right-6 z-50">
        <i class="ri-close-line"></i>
    </button>

    <button id="prevImage"
        class="lightbox-btn absolute left-4 lg:left-8 top-1/2 z-50">
        <i class="ri-arrow-left-s-line"></i>
    </button>

    <button id="nextImage"
        class="lightbox-btn absolute right-4 lg:right-8 top-1/2 z-50">
        <i class="ri-arrow-right-s-line"></i>
    </button>
    <!-- Center -->
    <div
        class="relative
        z-40
        h-full
        flex
        items-center
        justify-center
        px-5">
        <img
            id="lightboxImage"
            src=""
            class="max-h-[82vh]
            max-w-full
            rounded-[28px]
            shadow-2xl
            scale-90
            opacity-0
            transition
            duration-500">
    </div>
    <!-- Bottom -->
    <!-- Bottom Controls -->
    <div
        class="absolute bottom-6 left-1/2 -translate-x-1/2 z-40 w-full max-w-5xl px-6">
        <!-- Counter -->
        <div class="text-center mb-5">
            <span
                id="imageCounter"
                class="inline-flex px-5 py-2 rounded-full bg-white/10 backdrop-blur text-white">
                1 / 12
            </span>
        </div>
        <!-- Thumbnails -->
        <div
            id="thumbnailContainer"
            class="flex justify-center gap-3 overflow-x-auto scrollbar-hide pb-2">
        </div>
    </div>
</div>

<?php
include './includes/footer.php'
?>