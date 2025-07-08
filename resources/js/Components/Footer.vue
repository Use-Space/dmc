<script setup></script>
<template>
    <footer v-if="$page.component !== 'Appointment'" class="bg-blue-950">
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid grid-cols-12">
                <div
                    class="col-span-12 p-6 text-white bg-blue-800 flex flex-col items-center gap-4"
                >
                    <div class="rounded w-36 h-24 bg-neutral-100 p-2">
                        <img
                            src="logo.png"
                            alt="logo"
                            class="w-full h-full object-contain"
                        />
                    </div>
                    <p>
                        Discovery Medical Center is more than just a clinic;
                        it’s your partner in lifelong wellness. With expert
                        care, cutting-edge technology, and a patient-first
                        approach, we are here to help you live a healthier,
                        happier life. Whether you need a routine check-up or
                        specialized treatment, your health is in safe hands with
                        Discovery Medical Center.
                    </p>
                    <div class="overflow-hidden w-full flex">
                        <input
                            type="text"
                            class="p-4 grow text-slate-800 lowercase"
                            placeholder="Type your email and subscribe for news"
                        />
                        <button
                            class="p-4 bg-blue-600 duration-300 hover:bg-blue-700"
                        >
                            Subscribe
                        </button>
                    </div>
                </div>

                <div
                    class="col-span-12 text-white mt-4 space-y-4 lg:col-span-4 lg:flex lg:flex-col lg:justify-between"
                >
                    <h2>Get In Touch</h2>
                    <div class="bg-blue-500 w-28 h-0.5"></div>

                    <ul class="space-y-2">
                        <li>
                            <i class="fas fa-location-dot me-2"></i> Sofoline,
                            Same Building with Ghana Book Trust
                        </li>
                        <li>
                            <i class="fas fa-envelope me-2"></i
                            >dmcinfo@gmail.com
                        </li>
                        <li>
                            <i class="fas fa-phone me-2"></i>+233 (0) 201271621
                            / +233 (0) 541450256
                        </li>
                        <div class="flex space-x-1">
                            <a
                                href=""
                                class="flex items-center justify-center w-12 h-10 bg-blue-600 duration-300 hover:bg-blue-800"
                                ><i class="pi pi-tiktok"></i
                            ></a>
                            <a
                                href=""
                                class="flex items-center justify-center w-12 h-10 bg-blue-600 duration-300 hover:bg-blue-800"
                                ><i class="pi pi-facebook"></i
                            ></a>
                            <a
                                href=""
                                class="flex items-center justify-center w-12 h-10 bg-blue-600 duration-300 hover:bg-blue-800"
                                ><i class="pi pi-instagram"></i
                            ></a>
                            <a
                                href=""
                                class="flex items-center justify-center w-12 h-10 bg-blue-600 duration-300 hover:bg-blue-800"
                                ><i class="pi pi-linkedin"></i
                            ></a>
                            <a
                                href=""
                                class="flex items-center justify-center w-12 h-10 bg-blue-600 duration-300 hover:bg-blue-800"
                                ><i class="pi pi-whatsapp"></i
                            ></a>
                        </div>
                    </ul>
                </div>

                <div
                    class="col-span-12 text-white mt-4 space-y-4 lg:col-span-4"
                >
                    <h2>Quick Links</h2>
                    <div class="bg-blue-500 w-28 h-0.5"></div>

                    <ul class="space-y-2">
                        <li
                            class="hover:translate-x-4 duration-500 cursor-pointer"
                        >
                            <i class="fas fa-arrow-right me-2"></i>
                            <Link href="/">Home</Link>
                        </li>
                        <li
                            class="hover:translate-x-4 duration-500 cursor-pointer"
                        >
                            <i class="fas fa-arrow-right me-2"></i>
                            <Link :href="route('about')">About Us</Link>
                        </li>

                        <li
                            class="hover:translate-x-4 duration-500 cursor-pointer"
                        >
                            <i class="fas fa-arrow-right me-2"></i>
                            <Link :href="route('careers')">Career</Link>
                        </li>
                        <li
                            class="hover:translate-x-4 duration-500 cursor-pointer"
                        >
                            <i class="fas fa-arrow-right me-2"></i>
                            <Link :href="route('contact')">Contact Us</Link>
                        </li>
                    </ul>
                </div>
                <div
                    class="col-span-12 text-white mt-4 space-y-4 lg:col-span-4"
                >
                    <h2>Online Services</h2>
                    <div class="bg-blue-500 w-28 h-0.5"></div>

                    <ul class="space-y-2">
                        <li
                            class="opacity-50 cursor-not-allowed hover:translate-x-0 duration-500"
                        >
                            <i class="fas fa-arrow-right me-2"></i>
                            <span>Register / Login (Coming Soon)</span>
                        </li>
                        <li
                            class="opacity-50 cursor-not-allowed hover:translate-x-0 duration-500"
                        >
                            <i class="fas fa-arrow-right me-2"></i>
                            <span>Online Consultation (Coming Soon)</span>
                        </li>
                        <li
                            class="hover:translate-x-4 duration-500 cursor-pointer"
                        >
                            <i class="fas fa-arrow-right me-2"></i>
                            <Link :href="route('appointment')"
                                >Book An Appointment</Link
                            >
                        </li>
                        <li
                            class="opacity-50 cursor-not-allowed hover:translate-x-0 duration-500"
                        >
                            <i class="fas fa-arrow-right me-2"></i>
                            <span>Online Lab Results (Coming Soon)</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div
            class="w-full text-[10px] text-white p-6 flex flex-col items-center bg-gray-900 mt-12 sm:text-base"
        >
            <div>
                <Link href="/" class="text-red-500" preserve-scroll
                    >Discovery Medical Center.
                </Link>
                <span>
                    All rights reserved &copy; {{ new Date().getFullYear() }}.
                </span>
            </div>

            <p>Developed By Use Space</p>
        </div>
    </footer>
</template>
