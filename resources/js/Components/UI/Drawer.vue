<script setup>
import { ref } from "vue";
import Drawer from "primevue/drawer";

import Accordion from "primevue/accordion";
import AccordionPanel from "primevue/accordionpanel";
import AccordionHeader from "primevue/accordionheader";
import AccordionContent from "primevue/accordioncontent";

const visible = ref(false);

const props = defineProps({
    generalServices: {
        type: Array,
        Default: [],
    },
    specialistServices: {
        type: Array,
        Default: [],
    },
    diagnosticServices: {
        type: Array,
        Default: [],
    },
    dentalServices: {
        type: Array,
        Default: [],
    },
});

const onlineServices = ref([
    { label: "Online Appointment Booking" },
    { label: "Online Lab Results" },
    { label: "E-Consultation with Specialists" },
]);
const ToggleDrawer = () => {
    visible.value = !visible.value;
};
</script>

<template>
    <div>
        <button @click="ToggleDrawer" class="text-white font-bold text-lg">
            <i
                class="pi pi-bars"
                style="font-size: 1.5rem; font-weight: 500"
            ></i>
        </button>

        <Drawer v-model:visible="visible">
            <nav class="flex flex-col">
                <Link :href="route('home')" class="font-medium mb-4">Home</Link>
                <Link :href="route('about')" class="font-medium">About Us</Link>

                <Accordion>
                    <AccordionPanel value="1">
                        <AccordionHeader>Our Service</AccordionHeader>
                        <AccordionContent>
                            <Accordion>
                                <AccordionPanel value="0">
                                    <AccordionHeader>
                                        General Services
                                    </AccordionHeader>
                                    <AccordionContent>
                                        <div class="flex flex-col gap-4">
                                            <Link
                                                :href="service.to"
                                                v-for="(
                                                    service, index
                                                ) in generalServices"
                                                :key="index"
                                                >{{ service.label }}</Link
                                            >
                                        </div>
                                    </AccordionContent>
                                </AccordionPanel>

                                <AccordionPanel value="1">
                                    <AccordionHeader>
                                        Specialized Services
                                    </AccordionHeader>
                                    <AccordionContent>
                                        <div class="flex flex-col gap-4">
                                            <Link
                                                :href="service.to"
                                                v-for="(
                                                    service, index
                                                ) in specialistServices"
                                                :key="index"
                                                >{{ service.label }}</Link
                                            >
                                        </div>
                                    </AccordionContent>
                                </AccordionPanel>

                                <AccordionPanel value="2">
                                    <AccordionHeader>
                                        Diagnostic Services
                                    </AccordionHeader>
                                    <AccordionContent>
                                        <div class="flex flex-col gap-4">
                                            <Link
                                                :href="service.to"
                                                v-for="(
                                                    service, index
                                                ) in diagnosticServices"
                                                :key="index"
                                                >{{ service.label }}</Link
                                            >
                                        </div>
                                    </AccordionContent>
                                </AccordionPanel>

                                <AccordionPanel value="3">
                                    <AccordionHeader>
                                        Dental Services
                                    </AccordionHeader>
                                    <AccordionContent>
                                        <div class="flex flex-col gap-4">
                                            <Link
                                                :href="service.to"
                                                v-for="(
                                                    service, index
                                                ) in dentalServices"
                                                :key="index"
                                                >{{ service.label }}</Link
                                            >
                                        </div>
                                    </AccordionContent>
                                </AccordionPanel>

                                <AccordionPanel value="4">
                                    <AccordionHeader>
                                        Online Services
                                    </AccordionHeader>
                                    <AccordionContent>
                                        <div class="flex flex-col gap-4">
                                            <Link
                                                class="opacity-50 cursor-not-allowed"
                                                href=""
                                                v-for="(
                                                    service, index
                                                ) in onlineServices"
                                                :key="index"
                                                >{{ service.label }}</Link
                                            >
                                        </div>
                                    </AccordionContent>
                                </AccordionPanel>
                            </Accordion>
                        </AccordionContent>
                    </AccordionPanel>

                    <AccordionPanel value="2">
                        <AccordionHeader>Media</AccordionHeader>
                        <AccordionContent>
                            <div class="flex flex-col gap-4">
                                <Link
                                    class="opacity-50 cursor-not-allowed"
                                    href=""
                                    >Latest Activities</Link
                                >
                                <Link
                                    class="opacity-50 cursor-not-allowed"
                                    href=""
                                    >Bolg</Link
                                >
                                <Link
                                    class="opacity-50 cursor-not-allowed"
                                    href=""
                                    >Gallery</Link
                                >
                            </div>
                        </AccordionContent>
                    </AccordionPanel>
                </Accordion>

                <Link :href="route('careers')" class="mt-4 font-medium"
                    >Careers</Link
                >
                <Link :href="route('contact')" class="mt-4 font-medium"
                    >Contact Us</Link
                >
                <Link :href="route('appointment')" class="mt-4 font-medium"
                    >Book Appointment</Link
                >
            </nav>
        </Drawer>
    </div>
</template>
