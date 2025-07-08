<script setup>
import SubHero from "@/Components/SubHero.vue";
</script>
<template>
    <Head :title="` - ${$page.component}`" />

    <SubHero
        title="Contact Us"
        :breadcrumb="[{ label: 'Contact' }]"
        bg="contact.png"
        position="bg-top"
    />

    <section class="px-4 py-20">
        <div class="max-w-7xl mx-auto grid grid-cols-12">
            <div class="col-span-12 lg:col-span-6">
                <h2>How To Reach Us?</h2>
                <h1>For any information or enuqiries.</h1>

                <div>
                    <div class="flex items-center space-x-4 mt-4">
                        <div class="py-4 px-6 rounded bg-blue-800">
                            <i class="pi pi-phone text-white"></i>
                        </div>
                        <div class="font-medium">
                            <p class="">Call to make further enquiries</p>
                            <p class="text-2xl">
                                +233 (0) 201271621 / +233 (0) 541450256
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4 mt-4">
                        <div class="py-4 px-6 rounded bg-blue-800">
                            <i class="pi pi-map-marker text-white"></i>
                        </div>
                        <div class="font-medium">
                            <p class="">Locate us at</p>
                            <p class="text-2xl">Sofoline, Ghana Book Trust</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4 mt-4">
                        <div class="py-4 px-6 rounded bg-blue-800">
                            <i class="pi pi-envelope text-white"></i>
                        </div>
                        <div class="font-medium">
                            <p class="">Email us on</p>
                            <p class="text-2xl">dmcinfo@gmail.com</p>
                        </div>
                    </div>
                    <div class="flex space-x-4 mt-8 text-blue-300 me-12">
                        <span class="text-blue-700">#follow us on</span>
                        <a
                            href=""
                            class="hover:translate-y-1 duration-300 hover:text-blue-700"
                            ><i class="pi pi-tiktok"></i
                        ></a>
                        <a
                            href=""
                            class="hover:translate-y-1 duration-300 hover:text-blue-700"
                            ><i class="pi pi-facebook"></i
                        ></a>
                        <a
                            href=""
                            class="hover:translate-y-1 duration-300 hover:text-blue-700"
                            ><i class="pi pi-instagram"></i
                        ></a>
                        <a
                            href=""
                            class="hover:translate-y-1 duration-300 hover:text-blue-700"
                            ><i class="pi pi-linkedin"></i
                        ></a>
                        <a
                            href=""
                            class="hover:translate-y-1 duration-300 hover:text-blue-700"
                            ><i class="pi pi-whatsapp"></i
                        ></a>
                    </div>
                </div>
            </div>
            <div class="overflow-hidden col-span-12 lg:col-span-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.563424334206!2d-1.65118609524933!3d6.700865042539703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb97005c31bba9%3A0x9234ae2275f657af!2sDiscovery%20Medical%20Center!5e0!3m2!1sen!2sgh!4v1750256661410!5m2!1sen!2sgh"
                    class="w-full h-full"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
        </div>
    </section>

    <section class="my-20">
        <h1 class="text-center">Would you like to send us a message?</h1>
        <h2 class="text-center">Kindly fill the form below.</h2>

        <div class="max-w-7xl my-12 mx-auto grid grid-cols-12 gap-6">
            <div class="col-span-12 bg-blue-950 p-6 my-6 lg:my-0 lg:col-span-8">
                <form class="flex flex-col gap-4">
                    <div class="flex flex-col gap-4 lg:flex-row lg:gap-1">
                        <div class="grow flex items-center">
                            <div class="bg-blue-900 h-full p-4 w-24 text-white">
                                Name:
                            </div>
                            <input
                                type="text"
                                class="p-4 grow outline-none border-0"
                                placeholder="Name"
                            />
                        </div>
                        <div class="grow flex items-center">
                            <div class="bg-blue-900 h-full p-4 w-24 text-white">
                                Email:
                            </div>
                            <input
                                type="text"
                                class="p-4 grow outline-none border-0"
                                placeholder="Email"
                            />
                        </div>
                    </div>

                    <div class="grow flex items-center">
                        <div class="bg-blue-900 h-full p-4 w-24 text-white">
                            Contact:
                        </div>
                        <input
                            type="text"
                            class="p-4 grow outline-none border-0"
                            placeholder="Contact"
                        />
                    </div>
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
                        rows="4"
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
            <div class="overflow-hidden col-span-12 lg:col-span-4">
                <img
                    src="contact.png"
                    alt="contact"
                    class="w-full h-full object-cover"
                />
            </div>
        </div>
    </section>
</template>
