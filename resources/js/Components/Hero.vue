<template>
    <section
        class="w-full h-[calc(100vh-4.55rem)] p-4 lg:p-0 bg-gradient-to-l from-blue-900 to-blue-700"
    >
        <div class="h-full">
            <div class="grid grid-cols-12 grid-rows-4 h-full text-white">
                <div
                    class="col-span-12 row-span-2 flex flex-col justify-center space-y-1 sm:space-y-2 lg:col-span-6 lg:row-span-4 lg:ps-12"
                >
                    <p
                        class="text-xs flex items-center gap-1 md:text-sm lg:text-lg"
                    >
                        <span class="inline-block w-4 h-0.5 bg-white"></span>
                        Expert Medical Care.
                    </p>
                    <h1 class="text-white text-4xl sm:text-6xl">
                        Discovery Medical Center
                    </h1>
                    <p class="text-sm md:text-lg lg:text-xl">
                        Discover quality healthcare services and compassionate
                        care at our center.
                    </p>
                    <div>
                        <Link
                            :href="route('appointment')"
                            class="py-1 px-3 mt-2 rounded gap-1 bg-white text-blue-800 font-medium md:text-lg hover:text-blue-600"
                        >
                            Schedule Appointment
                            <i class="pi pi-angle-double-right"></i>
                        </Link>
                    </div>
                    <div
                        class="flex space-x-4 justify-end text-slate-300 lg:pe-8"
                    >
                        <a
                            href=""
                            class="hover:translate-y-1 duration-300 hover:text-white"
                            ><i class="pi pi-tiktok"></i
                        ></a>
                        <a
                            href=""
                            class="hover:translate-y-1 duration-300 hover:text-white"
                            ><i class="pi pi-facebook"></i
                        ></a>
                        <a
                            href=""
                            class="hover:translate-y-1 duration-300 hover:text-white"
                            ><i class="pi pi-instagram"></i
                        ></a>
                        <a
                            href=""
                            class="hover:translate-y-1 duration-300 hover:text-white"
                            ><i class="pi pi-linkedin"></i
                        ></a>
                        <a
                            href=""
                            class="hover:translate-y-1 duration-300 hover:text-white"
                            ><i class="pi pi-whatsapp"></i
                        ></a>
                    </div>
                </div>

                <div
                    class="col-span-12 row-span-2 overflow-hidden lg:col-span-6 lg:row-span-4"
                >
                    <img
                        src="dmc.jpg"
                        class="w-full h-full object-cover"
                        alt=""
                    />
                </div>
            </div>
        </div>
    </section>
</template>
