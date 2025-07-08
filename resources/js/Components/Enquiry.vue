<script setup></script>

<template>
    <section class="p-8" >
        <div class="max-w-7xl mx-auto grid grid-cols-12 lg:gap-8">
            <div
                class="flex flex-col space-y-6 col-span-12 lg:col-span-7 lg:space-y-0 lg:justify-between"
            >
                <div>
                    <h2>Make an Enquiry</h2>
                    <h1>Have a question or need more information?</h1>
                    <h2 class="text-neutral-700">we’re here to help</h2>
                </div>

                <div class="text-lg text-neutral-700">
                    <i class="fas fa-reply"></i>
                    Reply within 24 hours
                </div>

                <div class="text-neutral-700">
                    <p>
                        We’re here to help you with any questions, concerns, or
                        information you may need. Whether it’s about our
                        services, appointments, insurance, or general
                        enquiries—our team is ready to assist you with prompt
                        and friendly support.
                    </p>
                    <h2 class="my-2">How To reach Us</h2>
                    <div class="space-y-2 lg:space-y-0">
                        <p class="text-lg">
                            <i class="fas fa-location-dot"></i> Visit Us:
                        </p>
                        <p>
                            Sofoline, Same Building With Ghana Book Trust,
                            before Pizzaman-Chickenman
                        </p>

                        <p class="text-lg">
                            <i class="fas fa-envelope"></i> Send Email:
                        </p>
                        <p>dmcinfo@gmail.com</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4 mt-4">
                    <div class="py-4 px-6 rounded bg-blue-800">
                        <i class="pi pi-phone text-white"></i>
                    </div>
                    <div class="font-medium">
                        <p class="">You can also call us on</p>
                        <p class="text-xl">
                            +233 (0) 541450256 / +233 (0) 201271621
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-span-12 bg-blue-800 p-6 my-6 lg:my-0 lg:col-span-5">
                <form class="flex flex-col gap-4">
                    <input type="text" class="p-4" placeholder="Name" />
                    <input type="text" class="p-4" placeholder="Email" />
                    <input type="text" class="p-4" placeholder="Contact" />
                    <select name="" id="" class="p-4">
                        <option
                            value=""
                            disabled
                            selected
                            class="text-neutral-500"
                        >
                            Select An Option
                        </option>
                        <option value="">Obstetrics and Gynaecology</option>
                    </select>
                    <textarea
                        class="p-4"
                        cols="30"
                        rows=""
                        placeholder="Type your message here"
                    ></textarea>
                    <div class="text-white">
                        <button
                            class="px-4 py-2 border duration-300 hover:bg-blue-500 flex items-center gap-2"
                        >
                            Send Message <i class="pi pi-send"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</template>
