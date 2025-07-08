<template>
    <section class="py-8 bg-gradient-to-l from-blue-800 to-blue-900">
        <div class="flex flex-col items-center justify-center h-full">
            <h1 class="text-4xl font-bold text-white mb-6">Appointment</h1>
            <p class="text-lg text-white mb-4">
                Your appointment details will be displayed here.
            </p>
            <Link
                :href="route('appointment')"
                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
            >
                Book Now
            </Link>
        </div>
    </section>
    <section class="p-4 bg-white shadow">
        <h2 class="max-w-7xl mx-auto my-4">Accepted Insurance</h2>
        <div
            class="border-r-2 flex justify-center border-l-2 border-zinc-200 p-4 lg:max-w-7xl lg:mx-auto overflow-hidden"
        >
            <div class="lg:space-x-8">
                <img
                    src="/insurance/acacia-logo.png"
                    class="w-40 block lg:inline-block"
                    alt="acacia"
                />
                <img
                    src="/insurance/ace.png"
                    class="w-40 block lg:inline-block"
                    alt="ace"
                />
                <img
                    src="/insurance/apex.png"
                    class="w-40 block lg:inline-block"
                    alt="ace"
                />
                <img
                    src="/insurance/cosmopolitan.jpg"
                    class="w-40 block lg:inline-block"
                    alt="ace"
                />
                <img
                    src="/insurance/equity.png"
                    class="w-40 block lg:inline-block"
                    alt="ace"
                />
                <img
                    src="/insurance/gab.png"
                    class="w-40 block lg:inline-block"
                    alt="ace"
                />
            </div>
        </div>
    </section>
</template>
