<script setup>
import { ref } from "vue";
import Drawer from "./UI/Drawer.vue";
import Menubar from "primevue/menubar";

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

const generalServices = props.generalServices;

const specialtyServices = props.specialistServices;

const diagnosticServices = props.diagnosticServices;

const dentalServices = props.dentalServices;

const onlineServices = ref([
    { label: "Book An Appointment", to: route("appointment") },
    { label: "Online Lab Results", disabled: true },
    { label: "Online Consultation", disabled: true },
]);

const items = ref([
    {
        label: "Home",
        to: route("home"),
    },
    {
        label: "About Us",
        to: route("about"),
    },
    {
        label: "Our Services",
        items: [
            {
                label: "General Services",
                items: generalServices,
            },
            {
                label: "Specialized Services",
                items: specialtyServices,
            },
            {
                label: "Diagnostic Services",
                items: diagnosticServices,
            },
            {
                label: "Dental Services",
                items: dentalServices,
            },
            {
                label: "Online Services",
                items: [...onlineServices.value],
            },
        ],
    },
    {
        label: "Media",
        items: [
            { label: "Latest Activities", disabled: true },
            { label: "Blogs", disabled: true },
            { label: "Gallery", disabled: true },
        ],
    },
    {
        label: "Careers",
        to: route("careers"),
    },
    {
        label: "Contact Us",
        to: route("contact"),
    },
]);
</script>

<template>
    <header class="shadow-lg sticky z-40 top-0 bg-blue-950">
        <div
            class="p-4 flex text-white items-center justify-between lg:gap-4 lg:max-w-7xl mx-auto"
        >
            <Link
                :href="route('home')"
                class="flex items-center gap-2 w-8 text-nowrap cursor-pointer"
                preserve-scroll
            >
                <img src="logo.png" alt="Logo" />
                <span class="font-semibold">Discovery Medical Center</span>
            </Link>

            <div class="lg:hidden">
                <Drawer
                    :generalServices="generalServices"
                    :specialistServices="specialistServices"
                    :diagnosticServices="diagnosticServices"
                    :dentalServices="dentalServices"
                />
            </div>

            <div class="hidden lg:block ms-28">
                <Menubar :model="items">
                    <template #item="{ item, props, hasSubmenu, root }">
                        <template v-if="hasSubmenu">
                            <span
                                v-bind="props.action"
                                class="cursor-pointer select-none"
                            >
                                <span>{{ item.label }}</span>
                                <span
                                    class="text-xs text-gray-300"
                                    :class="[
                                        '',
                                        root
                                            ? 'fas fa-angle-down'
                                            : 'fas fa-angle-right',
                                    ]"
                                ></span>
                            </span>
                        </template>
                        <template v-else>
                            <Link v-bind="props.action" :href="item.to">
                                <span>{{ item.label }}</span>
                            </Link>
                        </template>
                    </template>
                </Menubar>
            </div>

            <button
                class="hidden xl:block xl:px-4 xl:py-2 xl:bg-blue-700 xl:text-white"
            >
                <Link :href="route('appointment')">Book An Appointment</Link>
                <i class="pi pi-calendar ms-2"></i>
            </button>
        </div>
    </header>
</template>
