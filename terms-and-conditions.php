<?php
include './includes/header.php'
?>

<style>
    .terms-nav {

        display: inline-flex;
        align-items: center;
        gap: 10px;

        padding: 14px 28px;

        border-radius: 999px;

        border: 1px solid var(--primary);

        color: var(--primary);

        font-weight: 600;

        transition: .35s ease;

        flex-shrink: 0;

    }

    .terms-nav:hover {

        background: var(--primary);
        color: #fff;

    }

    .active-terms-nav {

        background: linear-gradient(135deg,
                var(--primary),
                var(--primary-light));

        color: #fff;

        border-color: transparent;

    }

    .scrollbar-hide::-webkit-scrollbar {

        display: none;

    }

    .scrollbar-hide {

        scrollbar-width: none;

    }
</style>

<div
    class="sticky top-24 z-40 bg-white/95 backdrop-blur-xl border-b border-gray-100 shadow-sm">

    <div class="max-w-7xl mx-auto px-4">

        <div
            class="flex justify-center gap-3 overflow-x-auto py-5 whitespace-nowrap scrollbar-hide">

            <a href="#general"
                class="terms-nav active-terms-nav">

                <i class="ri-file-list-3-line"></i>

                <span>General</span>

            </a>

            <a href="#cancellation"
                class="terms-nav">

                <i class="ri-calendar-close-line"></i>

                <span>Cancellation</span>

            </a>

            <a href="#patch"
                class="terms-nav">

                <i class="ri-shield-check-line"></i>

                <span>Patch Test</span>

            </a>

            <a href="#contact"
                class="terms-nav">

                <i class="ri-phone-line"></i>

                <span>Need Help</span>

            </a>

        </div>

    </div>

</div>
<section class="section-white">

    <div class="max-w-6xl mx-auto px-4">

        <div class="bg-white rounded-[40px] shadow-xl overflow-hidden">

            <div class="p-8 lg:p-14">

                <!-- General Terms -->
                <section id="general" class="scroll-mt-24">

                    <div class="flex items-start gap-5">

                        <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center flex-shrink-0">

                            <i class="ri-file-list-3-line text-2xl text-primary"></i>

                        </div>

                        <div>

                            <span class="uppercase tracking-[3px] text-primary font-semibold text-sm">
                                General Policy
                            </span>

                            <h2 class="heading-font text-4xl mt-3">
                                General Terms & Conditions
                            </h2>

                            <p class="mt-6 text-muted leading-8">

                                To ensure every client enjoys the best possible
                                salon experience, please review our booking
                                policies before your appointment.

                            </p>

                        </div>

                    </div>

                    <!-- Highlight Box -->

                    <div class="mt-10 rounded-[30px] bg-light p-8">

                        <ul class="space-y-5">

                            <li class="flex gap-4">

                                <i class="ri-checkbox-circle-fill text-primary text-xl mt-1"></i>

                                <span>
                                    Promotional offers are subject to availability and must be mentioned at the time of booking.
                                </span>

                            </li>

                            <li class="flex gap-4">

                                <i class="ri-checkbox-circle-fill text-primary text-xl mt-1"></i>

                                <span>
                                    Offers cannot be combined with any other discounts or promotional vouchers.
                                </span>

                            </li>

                            <li class="flex gap-4">

                                <i class="ri-checkbox-circle-fill text-primary text-xl mt-1"></i>

                                <span>
                                    Prices and services may change without prior notice.
                                </span>

                            </li>

                            <li class="flex gap-4">

                                <i class="ri-checkbox-circle-fill text-primary text-xl mt-1"></i>

                                <span>
                                    We reserve the right to refuse service where necessary.
                                </span>

                            </li>

                        </ul>

                    </div>

                </section>

                <div class="border-t border-gray-100"></div>
                <section id="cancellation" class="scroll-mt-24">

                    <div class="flex items-start gap-5">

                        <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center flex-shrink-0">

                            <i class="ri-calendar-close-line text-2xl text-primary"></i>

                        </div>

                        <div>

                            <span class="uppercase tracking-[3px] text-primary font-semibold text-sm">
                                Booking Policy
                            </span>

                            <h2 class="heading-font text-4xl mt-3">

                                Cancellation Policy

                            </h2>

                            <p class="mt-6 text-muted leading-8">

                                We kindly request at least 24 hours notice if you need to
                                cancel or reschedule your appointment.

                            </p>

                        </div>

                    </div>

                    <div class="grid md:grid-cols-3 gap-6 mt-10">

                        <div class="rounded-[30px] bg-light p-8">

                            <i class="ri-time-line text-primary text-3xl"></i>

                            <h4 class="font-semibold text-xl mt-5">

                                24 Hours Notice

                            </h4>

                            <p class="mt-3 text-muted">

                                Cancellation should be made at least 24 hours before your appointment.

                            </p>

                        </div>

                        <div class="rounded-[30px] bg-light p-8">

                            <i class="ri-bank-card-line text-primary text-3xl"></i>

                            <h4 class="font-semibold text-xl mt-5">

                                Deposits

                            </h4>

                            <p class="mt-3 text-muted">

                                Deposits are non-refundable if less than 24 hours notice is given.

                            </p>

                        </div>

                        <div class="rounded-[30px] bg-light p-8">

                            <i class="ri-group-line text-primary text-3xl"></i>

                            <h4 class="font-semibold text-xl mt-5">

                                Group Bookings

                            </h4>

                            <p class="mt-3 text-muted">

                                Large bookings may require advance deposits.

                            </p>

                        </div>

                    </div>

                </section>

                <div class="border-t border-gray-100"></div>
                <section id="patch" class="scroll-mt-12">

                    <div class="flex items-start gap-5">

                        <!-- Icon -->
                        <div
                            class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center flex-shrink-0">

                            <i class="ri-shield-check-line text-2xl text-primary"></i>

                        </div>

                        <!-- Content -->
                        <div>

                            <span
                                class="uppercase tracking-[3px] text-primary font-semibold text-sm">

                                Client Safety

                            </span>

                            <h2
                                class="heading-font text-4xl mt-3">

                                Patch Test Requirement

                            </h2>

                            <p
                                class="mt-6 text-muted leading-8">

                                Your safety is our highest priority. Certain beauty
                                treatments require a patch test before your appointment
                                to ensure that the products are suitable for your skin.

                            </p>

                        </div>

                    </div>

                    <!-- Highlight Box -->

                    <div
                        class="mt-10 rounded-[30px] bg-light p-8">

                        <h4
                            class="font-semibold text-xl mb-6">

                            A patch test is required before:

                        </h4>

                        <div
                            class="grid md:grid-cols-2 gap-5">

                            <div class="flex items-center gap-3">

                                <i class="ri-checkbox-circle-fill text-primary"></i>

                                Eyelash Extensions

                            </div>

                            <div class="flex items-center gap-3">

                                <i class="ri-checkbox-circle-fill text-primary"></i>

                                Eyebrow Tinting

                            </div>

                            <div class="flex items-center gap-3">

                                <i class="ri-checkbox-circle-fill text-primary"></i>

                                Lash Tint

                            </div>

                            <div class="flex items-center gap-3">

                                <i class="ri-checkbox-circle-fill text-primary"></i>

                                LVL Lash Lift

                            </div>

                            <div class="flex items-center gap-3">

                                <i class="ri-checkbox-circle-fill text-primary"></i>

                                Semi-Permanent Makeup

                            </div>

                            <div class="flex items-center gap-3">

                                <i class="ri-checkbox-circle-fill text-primary"></i>

                                Any Allergy Sensitive Treatment

                            </div>

                        </div>

                        <div
                            class="mt-8 rounded-2xl bg-primary/10 border border-primary/20 p-6">

                            <div class="flex items-start gap-4">

                                <i
                                    class="ri-information-line text-primary text-2xl mt-1"></i>

                                <p class="leading-8 text-gray-700">

                                    Please arrange your patch test at least
                                    <strong>24–48 hours before your treatment.</strong>
                                    This helps us ensure the safest and most enjoyable
                                    experience for every client.

                                </p>

                            </div>

                        </div>

                    </div>

                </section>
                <div class="border-t border-gray-100"></div>
                <section id="contact" class="scroll-mt-24">

                    <div class="flex items-start gap-5">

                        <div
                            class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center flex-shrink-0">

                            <i class="ri-customer-service-2-line text-primary text-2xl"></i>

                        </div>

                        <div>

                            <span
                                class="uppercase tracking-[3px] text-primary font-semibold text-sm">

                                Need Assistance?

                            </span>

                            <h2
                                class="heading-font text-4xl mt-3">

                                We're Here To Help

                            </h2>

                            <p
                                class="mt-6 text-muted leading-8">

                                If you have any questions regarding our salon policies,
                                bookings or treatments, our friendly team will be happy
                                to assist you.

                            </p>

                        </div>

                    </div>

                    <div
                        class="mt-10 rounded-[32px] bg-gradient-to-r from-primary to-primary-light text-white p-8 lg:p-10">

                        <div
                            class="flex flex-col lg:flex-row justify-between items-center gap-8">

                            <div>

                                <h3
                                    class="heading-font text-4xl">

                                    Contact Our Salon

                                </h3>

                                <p class="mt-4 text-white/80">

                                    Monday – Saturday | 9:00 AM – 6:00 PM

                                </p>

                            </div>

                            <div class="text-center lg:text-right">

                                <p class="text-white/70">

                                    Call Us

                                </p>

                                <a
                                    href="tel:01604315484"
                                    class="text-4xl font-bold hover:underline">

                                    01604 315484

                                </a>

                            </div>

                        </div>

                    </div>

                </section>

            </div> <!-- .p-8 lg:p-14 -->
        </div> <!-- white card -->
    </div> <!-- max-width container -->
</section>

<script>
    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll(".terms-nav");

    window.addEventListener("scroll", () => {

        let current = "";

        sections.forEach(section => {

            const sectionTop = section.offsetTop - 220;

            if (window.scrollY >= sectionTop) {

                current = section.getAttribute("id");

            }

        });

        navLinks.forEach(link => {

            link.classList.remove("active-terms-nav");

            if (link.getAttribute("href") === "#" + current) {

                link.classList.add("active-terms-nav");

            }

        });

    });
</script>

<?php
include './includes/footer.php'
?>