<script setup>
import Hero from "../Components/Hero.vue";
import Overview from "@/Components/Overview.vue";
import Services from "@/Components/Services.vue";
import Enquiry from "@/Components/Enquiry.vue";
import Insurance from "@/Components/Insurance.vue";

defineProps({
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
</script>

<template>
    <Head :title="` - ${$page.component}`" />
    <Hero />
    <Overview />
    <Services
        :generalServices="generalServices"
        :specialistServices="specialistServices"
        :diagnosticServices="diagnosticServices"
        :dentalServices="dentalServices"
    />
    <Enquiry />
    <Insurance />
</template>
