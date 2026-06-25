<?php
include './includes/header.php'
?>
<style>
    .gallery-filter {

        padding: 14px 30px;

        border-radius: 999px;

        border: 1px solid var(--accent);

        transition: .35s;

        font-weight: 600;

        color: var(--primary);

        background: white;

        flex-shrink: 0;

    }

    .gallery-filter:hover {

        background: var(--primary);

        color: white;

        transform: translateY(-2px);

    }

    .active-filter {

        background: linear-gradient(135deg,
                var(--primary),
                var(--primary-light));

        color: white;

        border: none;

        box-shadow: 0 15px 35px rgba(177, 50, 122, .25);

    }

    .gallery-card {

        position: relative;

        overflow: hidden;

        border-radius: 28px;

        cursor: pointer;

        box-shadow: 0 15px 40px rgba(0, 0, 0, .08);

        transition: .45s;

        background: white;

    }

    .gallery-card:hover {

        transform: translateY(-8px);

        /* box-shadow: 0 25px 55px rgba(0, 0, 0, .18); */
        box-shadow: 0 20px 50px rgba(177, 50, 122, .25);

    }

    /* .gallery-image {

        width: 100%;

        display: block;

        transition: .8s;

        border-radius: 28px;

    }

    .gallery-card:hover .gallery-image {

        transform: scale(1.12);

    } */
    .gallery-item.hide {

        opacity: 0;

        transform: scale(.9);

        filter: blur(4px);

        pointer-events: none;

    }

    .gallery-item.show {

        opacity: 1;

        transform: scale(1);

        filter: none;

    }

    .gallery-overlay {

        position: absolute;

        inset: 0;

        display: flex;

        justify-content: center;

        align-items: center;

        background:

            linear-gradient(180deg,

                rgba(177, 50, 122, .05),

                rgba(109, 27, 71, .75));

        opacity: 0;

        transition: .45s;

        backdrop-filter: blur(3px);

    }

    .gallery-card:hover .gallery-overlay {

        opacity: 1;

    }

    .gallery-open {

        width: 65px;

        height: 65px;

        border-radius: 50%;

        background: white;

        display: flex;

        align-items: center;

        justify-content: center;

        font-size: 26px;

        color: var(--primary);

        transition: .35s;

    }

    .gallery-open:hover {

        transform: scale(1.12) rotate(12deg);

    }

    .gallery-title {

        font-size: 18px;

        font-weight: 600;

        text-align: center;

        margin-top: 18px;

        color: var(--primary);
        transition: .35s;


    }

    .gallery-card:hover+.gallery-title {

        color: var(--primary);

        transform: translateY(-3px);

    }

    .gallery-item {

        transition: .5s;

    }

    .gallery-item {

        opacity: 0;

        transform: translateY(60px);

        transition:

            opacity .45s ease,

            transform .45s ease,

            filter .45s ease;

    }

    .gallery-item.show {

        opacity: 1;

        transform: none;

    }

    body.lightbox-open {

        overflow: hidden;

    }

    #lightbox.show {

        display: block;

    }

    #lightboxImage {

        transition:

            opacity .35s,

            transform .45s;

    }

    #lightboxImage.show {

        opacity: 1;

        transform: scale(1);

    }

    #lightboxImage {

        opacity: 0;

        transform: scale(.92);

    }


    #lightboxBackdrop.show {

        opacity: 1;

    }

    #thumbnailContainer {

        scroll-behavior: smooth;

    }

    .gallery-thumb {

        width: 72px;

        height: 72px;

        border-radius: 16px;

        overflow: hidden;

        cursor: pointer;

        opacity: .45;

        transition: .35s;

        border: 2px solid transparent;

        flex-shrink: 0;

    }

    .gallery-thumb img {

        width: 100%;
        height: 100%;
        object-fit: cover;

    }

    .gallery-thumb.active {

        opacity: 1;

        border-color: white;

        transform: translateY(-4px);

    }

    .gallery-thumb:hover {

        opacity: 1;

    }

    /* Gallery image loading effect */
    /* Skeleton Loading */
    .gallery-card.loading {
        position: relative;
        min-height: 320px;
        background: #f5f5f5;
        overflow: hidden;
    }

    .gallery-card.loading::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg,
                transparent,
                rgba(255, 255, 255, .7),
                transparent);
        animation: skeleton 1.2s infinite;
    }

    @keyframes skeleton {

        from {
            transform: translateX(-100%);
        }

        to {
            transform: translateX(100%);
        }

    }

    /* image zoom in and zoom out effect */
    .zoomed {

        transform: scale(1.8) !important;

        cursor: zoom-out;

    }

    #imageCounter {

        transition: .3s;

    }

    .counter-animation {

        transform: scale(1.15);

    }

    .gallery-card:hover {

        box-shadow:

            0 20px 50px rgba(177, 50, 122, .25);

    }

    @media(max-width:768px) {

        #prevImage,
        #nextImage {

            bottom: 130px;

            top: auto;

            transform: none;

        }

        #prevImage {

            left: 25%;

        }

        #nextImage {

            right: 25%;

        }

    }
</style>
<!-- <section
    class="relative pt-40 pb-28 overflow-hidden bg-light">

    

    <div
        class="absolute top-0 left-0 w-80 h-80 rounded-full blur-3xl opacity-20 bg-primary">
    </div>

    <div
        class="absolute bottom-0 right-0 w-96 h-96 rounded-full blur-3xl opacity-10 bg-primary-light">
    </div>

    <div
        class="max-w-7xl mx-auto px-4 relative z-10">

        <div
            class="text-center">

            <span
                class="inline-flex
                   px-5
                   py-2
                   rounded-full
                   bg-primary/10
                   text-primary
                   font-medium">

                Our Work

            </span>

            <h1
                class="heading-font
                   text-5xl
                   md:text-6xl
                   mt-8">

                Gallery Album

            </h1>

            <div class="mt-6">

                <div class="dlab-separator text-primary style-icon">
                    <i class="flaticon-spa text-primary"></i>
                </div>

            </div>

            <p
                class="max-w-3xl
                   mx-auto
                   mt-8
                   text-light
                   text-lg
                   leading-8">

                Explore our latest beauty transformations,
                luxury treatments, salon atmosphere and
                the artistry behind every client experience.

            </p>

        </div>

    </div>

</section> -->
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

    <!-- Close -->

    <button
        id="closeLightbox"
        class="absolute top-6 right-6 z-50
               w-14 h-14
               rounded-full
               bg-white/10
               hover:bg-white/20
               backdrop-blur
               text-white
               text-3xl
               transition">

        <i class="ri-close-line"></i>

    </button>

    <!-- Previous -->

    <button
        id="prevImage"
        class="absolute
               left-4
               lg:left-8
               top-1/2
               -translate-y-1/2
               z-50
               w-16
               h-16
               rounded-full
               bg-white/10
               hover:bg-white/20
               backdrop-blur
               text-white
               text-3xl
               transition">

        <i class="ri-arrow-left-s-line"></i>

    </button>

    <!-- Next -->

    <button
        id="nextImage"
        class="absolute
               right-4
               lg:right-8
               top-1/2
               -translate-y-1/2
               z-50
               w-16
               h-16
               rounded-full
               bg-white/10
               hover:bg-white/20
               backdrop-blur
               text-white
               text-3xl
               transition">

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

<script>
    const observer = new IntersectionObserver(entries => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                entry.target.classList.add("show");

            }

        });

    }, {
        threshold: .15
    });

    document.querySelectorAll(".gallery-item").forEach(item => {

        observer.observe(item);

    });
</script>

<script>
    const galleryImages = document.querySelectorAll(".gallery-image");

    const galleryButtons = document.querySelectorAll(".gallery-open");

    const lightbox = document.getElementById("lightbox");

    const lightboxImage = document.getElementById("lightboxImage");

    const backdrop = document.getElementById("lightboxBackdrop");

    const counter = document.getElementById("imageCounter");

    const closeBtn = document.getElementById("closeLightbox");

    const nextBtn = document.getElementById("nextImage");

    const prevBtn = document.getElementById("prevImage");

    let currentIndex = 0;

    document.querySelectorAll(".gallery-card").forEach((card, index) => {

        card.addEventListener("click", () => {

            currentIndex = index;

            showImage();

        });

    });

    function showImage() {

        console.log("Show Image");
        console.log(galleryImages[currentIndex]);
        console.log(lightbox);

        lightbox.classList.add("show");

        document.body.classList.add("lightbox-open");

        setTimeout(() => {

            backdrop.classList.add("show");

            lightboxImage.classList.add("show");

        }, 20);

        lightboxImage.src = galleryImages[currentIndex].src;

        counter.innerHTML = (parseInt(currentIndex) + 1) + " / " + galleryImages.length;
        document.querySelectorAll(".gallery-thumb").forEach((thumb, index) => {

            thumb.classList.remove("active");

            if (index == currentIndex) {

                thumb.classList.add("active");

                thumb.scrollIntoView({

                    inline: "center",

                    behavior: "smooth"

                });

            }

        });

        lightboxImage.classList.remove("show");

        setTimeout(() => {

            lightboxImage.src = galleryImages[currentIndex].src;

            lightboxImage.classList.add("show");

        }, 80);

        let next = currentIndex + 1;

        let prev = currentIndex - 1;

        if (next >= galleryImages.length) next = 0;

        if (prev < 0) prev = galleryImages.length - 1;

        preload(next);

        preload(prev);

    }

    galleryButtons.forEach((button, index) => {

        button.addEventListener("click", () => {

            console.log("Clicked", index);

            currentIndex = index;

            showImage();

        });

    });

    function closeGallery() {

        backdrop.classList.remove("show");

        lightboxImage.classList.remove("show");

        setTimeout(() => {

            lightbox.classList.remove("show");

            document.body.classList.remove("lightbox-open");

        }, 300);

    }

    closeBtn.onclick = closeGallery;

    backdrop.onclick = closeGallery;
    nextBtn.onclick = () => {

        currentIndex++;

        if (currentIndex >= galleryImages.length) {

            currentIndex = 0;

        }

        showImage();

    }
    prevBtn.onclick = () => {

        currentIndex--;

        if (currentIndex < 0) {

            currentIndex = galleryImages.length - 1;

        }

        showImage();

    }
    document.addEventListener("keydown", e => {

        if (!lightbox.classList.contains("show")) return;

        if (e.key === "ArrowRight") {

            nextBtn.click();

        }

        if (e.key === "ArrowLeft") {

            prevBtn.click();

        }

        if (e.key === "Escape") {

            closeGallery();

        }

    });
</script>
<script>
    const thumbnailContainer = document.getElementById("thumbnailContainer");

    galleryImages.forEach((image, index) => {

        const thumb = document.createElement("div");

        thumb.className = "gallery-thumb";

        thumb.innerHTML = `

        <img src="${image.src}" alt="">

    `;

        thumb.onclick = () => {

            currentIndex = index;

            showImage();

        }

        thumbnailContainer.appendChild(thumb);

    });


    function preload(index) {

        const img = new Image();

        img.src = galleryImages[index].src;

    }
</script>

<!-- Mobile swiper -->
<script>
    let startX = 0;

    let endX = 0;

    lightbox.addEventListener("touchstart", (e) => {

        startX = e.touches[0].clientX;

    });

    lightbox.addEventListener("touchmove", (e) => {

        endX = e.touches[0].clientX;

    });

    lightbox.addEventListener("touchend", () => {

        if (startX - endX > 70) {

            nextBtn.click();

        }

        if (endX - startX > 70) {

            prevBtn.click();

        }

    });
    const filterButtons = document.querySelectorAll(".gallery-filter");

    const galleryItems = document.querySelectorAll(".gallery-item");

    filterButtons.forEach(button => {

        button.onclick = () => {

            filterButtons.forEach(btn => btn.classList.remove("active-filter"));

            button.classList.add("active-filter");

            const category = button.dataset.filter;

            galleryItems.forEach(item => {

                item.style.opacity = 0;

                item.style.transform = "scale(.9)";

                setTimeout(() => {

                    if (category === "all") {

                        item.style.display = "block";

                    } else {

                        item.style.display = item.dataset.category === category ?
                            "block" : "none";

                    }

                    requestAnimationFrame(() => {

                        item.style.opacity = 1;

                        item.style.transform = "scale(1)";

                    });

                }, 200);

            });

        }

    });
</script>
<script>
    document.querySelectorAll(".gallery-image").forEach(img => {

        img.closest(".gallery-card").classList.add("loading");

        img.onload = () => {

            img.closest(".gallery-card").classList.remove("loading");

        }

    });
</script>
<script>
    galleryImages.forEach(img => {

        if (img.complete) {

            img.classList.add("loaded");

        } else {

            img.onload = () => {

                img.classList.add("loaded");

            }

        }

    });
    lightboxImage.addEventListener("dblclick", () => {

        lightboxImage.classList.toggle("zoomed");

    });
    lightboxImage.addEventListener("wheel", (e) => {

        e.preventDefault();

        if (e.deltaY < 0) {

            lightboxImage.classList.add("zoomed");

        } else {

            lightboxImage.classList.remove("zoomed");

        }

    });
    document.addEventListener("keydown", (e) => {

        if (e.key === "Escape") {

            if (lightboxImage.classList.contains("zoomed")) {

                lightboxImage.classList.remove("zoomed");

            } else {

                closeGallery();

            }

        }

    });
</script>
<script>
    counter.classList.add("counter-animation");

    setTimeout(() => {

        counter.classList.remove("counter-animation");

    }, 250);
    document.querySelectorAll(".gallery-item").forEach((item, index) => {

        item.style.transitionDelay = (index * 70) + "ms";

    });
    document.querySelector(".gallery-thumb.active")?.scrollIntoView({

        behavior: "smooth",

        inline: "center",

        block: "nearest"

    });
</script>

<?php
include './includes/footer.php'
?>