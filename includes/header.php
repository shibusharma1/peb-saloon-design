<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Elegance Beauty Salon</title>
    <meta name="description"
        content="Experience luxury beauty treatments, hair styling, skin care, spa therapies and bridal services at Professional Elegance Beauty Salon.">
    <meta name="keywords"
        content="Beauty Salon, Spa, Hair Styling, Bridal Makeup, Skin Care">
    <meta name="author"
        content="Professional Elegance Beauty Salon">
    <link rel="icon"
        href="./assets/img/favicon.png">
    <!-- Playfair Display -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">
    <!-- Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Swiper -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- AOS -->
    <link rel="stylesheet"
        href="https://unpkg.com/aos@2.3.4/dist/aos.css">
    <!-- Remix Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="./assets/css/app.css">
    <link rel="stylesheet" href="./assets/css/pricing.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .heading-font {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>

<body>
    <header class="fixed top-0 left-0 w-full z-50">
        <div class="backdrop-blur-xl bg-white/80 border-b" style="border-color: var(--accent)">
            <div class="max-w-7xl mx-auto px-6 lg:px-10">
                <div class="flex items-center justify-between h-24">
                    <!-- Logo -->
                    <a href="./" class="flex items-center gap-3">
                        <img src="./assets/img/favicon.png" class="h-14">
                        <div>
                            <h3 class="heading-font text-3xl text-primary">
                                Elegance Beauty
                            </h3>
                            <p class="text-xs tracking-[4px] uppercase text-muted">
                                Professional Salon
                            </p>
                        </div>
                    </a>
                    <!-- Menu -->
                    <nav class="hidden lg:flex items-center gap-10">
                        <a href="./" class="nav-link">
                            Home
                        </a>
                        <a href="about.php" class="nav-link">
                            About
                        </a>
                        <a href="services.php" class="nav-link">
                            Services
                        </a>
                        <a href="offers.php" class="nav-link">
                            Offers
                        </a>
                        <a href="pricing.php" class="nav-link">
                            Pricing
                        </a>
                        <a href="gallery.php" class="nav-link">
                            Gallery
                        </a>
                        <a href="contact.php" class="nav-link">
                            Contact
                        </a>
                    </nav>
                    <!-- CTA -->
                    <div
                        class="hidden lg:block float-animation">
                        <a href="bookappointment.php" class="px-7 py-3 rounded-full
                                btn-primary
                                text-white
                                font-medium
                                shadow-lg
                                hover:scale-105
                                transition">
                            Book Appointment
                        </a>
                    </div>
                    <!-- Mobile -->
                    <button id="mobileMenuBtn"
                        class="lg:hidden text-3xl">
                        <i class="ri-menu-3-line"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- Mobile Menu Overlay -->
    <div
        id="mobileMenu"
        class="fixed inset-0 bg-black/50 z-[999] hidden lg:hidden">
        <!-- Sidebar -->
        <div
            id="mobileDrawer"
            class="absolute right-0 top-0 h-full w-[300px] bg-white shadow-2xl transform translate-x-full transition-transform duration-300">
            <!-- Header -->
            <div class="flex items-center justify-between p-6 border-b">
                <h4 class="heading-font text-xl text-primary" data-aos="fade-up">
                    <a href="./" class="flex items-center gap-3">
                        <img src="./assets/img/favicon.png" class="h-14">
                        <div>
                            <h3 class="heading-font text-xl text-primary">
                                Elegance Beauty
                            </h3>
                            <p class="text-xs tracking-[4px] uppercase text-muted">
                                Professional Salon
                            </p>
                        </div>
                    </a>
                </h4>
                <button id="closeMenu">
                    <i class="ri-close-line text-3xl"></i>
                </button>
            </div>
            <!-- Links -->
            <nav class="flex flex-col p-6">
                <a href="./" class="py-4 border-b hover:text-primary">
                    Home
                </a>
                <a href="about.php" class="py-4 border-b hover:text-primary">
                    About
                </a>
                <a href="services.php" class="py-4 border-b hover:text-primary">
                    Services
                </a>
                <a href="offers.php" class="py-4 border-b hover:text-primary">
                    Offers
                </a>
                <a href="pricing.php" class="py-4 border-b hover:text-primary">
                    Pricing
                </a>
                <a href="galley.php" class="py-4 border-b hover:text-primary">
                    Gallery
                </a>
                <a href="contact.php" class="py-4 border-b hover:text-primary">
                    Contact
                </a>
                <div class="float-animation">
                    <a href="bookappointment.php"
                        class="mt-6 text-center px-6 py-4 rounded-full btn-primary text-white">
                        Book Appointment
                    </a>
                </div>
            </nav>
        </div>
    </div>
    <main>