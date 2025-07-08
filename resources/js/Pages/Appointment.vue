<script setup></script>
<template>
    <Head :title="` - ${$page.component}`" />

    <Section class="bg-gradient-to-l from-blue-800 to-blue-900 relative">
        <Link
            href="/"
            class="text-white hover:text-blue-300 transition-colors md:absolute md:top-8 md:left-8 text-lg p-4"
        >
            <i class="fas fa-arrow-left"></i>
        </Link>
        <div>
            <div
                class="max-w-7xl mx-auto h-screen md:h-[calc(100vh-4.5rem)] p-4 flex flex-col justify-center rounded"
            >
                <div class="lg:bg-blue-950 rounded shadow-xl p-4">
                    <h2 class="text-white text-center">Schedule Appointment</h2>
                    <form class="w-[100%] max-w-xl mx-auto">
                        <div class="mb-4">
                            <label for="name" class="block text-white mb-2"
                                >Name</label
                            >
                            <input
                                type="text"
                                id="name"
                                class="w-full p-2 rounded bg-white text-gray-800"
                                placeholder="Enter your full name"
                            />
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-white mb-2"
                                >Email</label
                            >
                            <input
                                type="email"
                                id="email"
                                class="w-full p-2 rounded bg-white text-gray-800"
                                placeholder="Enter your email"
                            />
                        </div>
                        <div class="mb-4">
                            <label for="hone" class="block text-white mb-2"
                                >Phone Number</label
                            >
                            <input
                                type="text"
                                id="phone"
                                class="w-full p-2 rounded bg-white text-gray-800"
                                placeholder="Enter your email"
                            />
                        </div>

                        <div class="mb-4">
                            <label for="date" class="block text-white mb-2"
                                >Date</label
                            >
                            <input
                                type="date"
                                id="date"
                                class="w-full p-2 rounded bg-white text-gray-800"
                            />
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-white mb-2"
                                >Message</label
                            >
                            <textarea
                                id="date"
                                class="w-full p-2 rounded bg-white text-gray-800"
                                placeholder="Enter any additional information or questions"
                                rows="2"
                            ></textarea>
                        </div>
                        <button
                            type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        >
                            Schedule Appointment
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </Section>

    <!--     <Section
        class="h-[calc(100vh-4.5rem)] bg-gradient-to-l from-blue-800 to-blue-900 p-8"
    >
        <div
            class="max-w-7xl mx-auto rounded shadow-xl bg-blue-950 flex flex-col items-center justify-center h-full p-4 relative"
        >
            <Link
                href="/"
                class="absolute top-4 left-4 text-white hover:text-blue-300 transition-colors"
            >
                <i
                    class="fas fa-arrow-left absolute top-0 left-0 text-white"
                ></i
            ></Link>
            <div class="flex items-center gap-2">
                <img
                    src="/logo.png"
                    alt="Logo"
                    class="w-12"
                />
                <h2 class="text-white">Schedule Appointment</h2>
            </div>
            <form class="w-[90%] max-w-xl">
                <div class="mb-4">
                    <label for="name" class="block text-white mb-2">Name</label>
                    <input
                        type="text"
                        id="name"
                        class="w-full p-2 rounded bg-white text-gray-800"
                        placeholder="Enter your full name"
                    />
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-white mb-2"
                        >Email</label
                    >
                    <input
                        type="email"
                        id="email"
                        class="w-full p-2 rounded bg-white text-gray-800"
                        placeholder="Enter your email"
                    />
                </div>
                <div class="mb-4">
                    <label for="hone" class="block text-white mb-2"
                        >Phone Number</label
                    >
                    <input
                        type="text"
                        id="phone"
                        class="w-full p-2 rounded bg-white text-gray-800"
                        placeholder="Enter your email"
                    />
                </div>
                <div class="mb-4">
                    <label for="service" class="block text-white mb-2"
                        >Service</label
                    >
                    <select
                        id="service"
                        class="w-full p-2 rounded bg-white text-gray-800"
                    >
                        <option value="">Select a service</option>
                        <option value="consultation">Diagnostic service</option>
                        <option value="follow-up">Follow-up</option>
                        <option value="emergency">Emergency</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="date" class="block text-white mb-2">Date</label>
                    <input
                        type="date"
                        id="date"
                        class="w-full p-2 rounded bg-white text-gray-800"
                    />
                </div>
                <button
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                >
                    Schedule Appointment
                </button>
            </form>
        </div>
    </Section>
 -->
</template>
