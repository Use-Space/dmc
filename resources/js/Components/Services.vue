<script setup>
import Tabs from "primevue/tabs";
import TabList from "primevue/tablist";
import Tab from "primevue/tab";
import TabPanels from "primevue/tabpanels";
import TabPanel from "primevue/tabpanel";

defineProps({
    generalServices: Array,
    specialistServices: Array,
    diagnosticServices: Array,
    dentalServices: Array,
});
</script>

<template>
    <section >
        <div class="max-w-7xl mx-auto p-4">
            <h1 class="text-center mt-4">Our services</h1>
            <h2 class="text-center max-w-3xl mx-auto">How can we help you?</h2>
            <p class="ms-4 font-medium text-slate-700">
                Choose Type Of Service <i class="fas fa-arrow-down"></i>
            </p>

            <div class="">
                <Tabs value="1">
                    <TabList class="overflow-x-scroll">
                        <Tab value="0">General Services</Tab>
                        <Tab value="1">Specialty Services</Tab>
                        <Tab value="2">Diagnostic Services</Tab>
                        <Tab value="3">Dental Clinic</Tab>
                    </TabList>
                    <TabPanels>
                        <TabPanel value="0">
                            <div class="grid grid-cols-12 gap-4">
                                <div
                                    class="col-span-12 p-4 md:col-span-6 lg:col-span-4"
                                    v-for="(service, index) in generalServices"
                                    :key="index"
                                >
                                    <div
                                        class="w-full h-12 flex items-center justify-between p-2 text-xl font-medium text-white bg-blue-800"
                                    >
                                        {{ service.label }}
                                        <Link :href="service.to"
                                            ><i
                                                class="fas fa-arrow-circle-right"
                                            ></i
                                        ></Link>
                                    </div>
                                    <div
                                        class="border overflow-hidden w-full h-56"
                                    >
                                        <img
                                            :src="service.img"
                                            :alt="service.label"
                                            class="w-full h-full object-cover"
                                        />
                                    </div>
                                </div>
                            </div>
                        </TabPanel>
                        <TabPanel value="1">
                            <div class="grid grid-cols-12 gap-4">
                                <div
                                    class="col-span-12 p-4 md:col-span-6 lg:col-span-4"
                                    v-for="(
                                        service, index
                                    ) in specialistServices"
                                    :key="index"
                                >
                                    <div
                                        class="w-full h-12 p-2 flex justify-between items-center text-xl font-medium text-white bg-blue-800"
                                    >
                                        {{ service.label }}

                                        <Link :href="service.to">
                                            <i
                                                class="fas fa-arrow-circle-right"
                                            >
                                            </i>
                                        </Link>
                                    </div>
                                    <div
                                        class="border overflow-hidden w-full h-56"
                                    >
                                        <img
                                            :src="service.img"
                                            :alt="service.label"
                                            class="w-full h-full object-cover"
                                        />
                                    </div>
                                </div>
                            </div>
                        </TabPanel>
                        <TabPanel value="2">
                            <div class="grid grid-cols-12 gap-4">
                                <div
                                    class="col-span-12 p-4 md:col-span-6 lg:col-span-4"
                                    v-for="(
                                        service, index
                                    ) in diagnosticServices"
                                    :key="index"
                                >
                                    <div
                                        class="w-full flex justify-between items-center h-12 p-2 text-xl font-medium text-white bg-blue-800"
                                    >
                                        {{ service.label }}
                                        <Link :href="service.to">
                                            <i
                                                class="fas fa-arrow-circle-right"
                                            >
                                            </i>
                                        </Link>
                                    </div>
                                    <div
                                        class="border overflow-hidden w-full h-56"
                                    >
                                        <img
                                            :src="service.img"
                                            :alt="service.label"
                                            class="w-full h-full object-cover"
                                        />
                                    </div>
                                </div>
                            </div>
                        </TabPanel>
                        <TabPanel value="3">
                            <div class="grid grid-cols-12 gap-4">
                                <div
                                    class="col-span-12 p-4 md:col-span-6 lg:col-span-4"
                                    v-for="(service, index) in dentalServices"
                                    :key="index"
                                >
                                    <div
                                        class="w-full flex justify-between items-center h-12 p-2 text-xl font-medium text-white bg-blue-800"
                                    >
                                        {{ service.label }}
                                        <Link :href="service.to">
                                            <i
                                                class="fas fa-arrow-circle-right"
                                            >
                                            </i>
                                        </Link>
                                    </div>
                                    <div
                                        class="border overflow-hidden w-full h-56"
                                    >
                                        <img
                                            :src="service.img"
                                            :alt="service.label"
                                            class="w-full h-full object-cover"
                                        />
                                    </div>
                                </div>
                            </div>
                        </TabPanel>
                    </TabPanels>
                </Tabs>
            </div>
        </div>
    </section>
</template>

<style scoped>
::-webkit-scrollbar {
    display: none;
}
</style>
