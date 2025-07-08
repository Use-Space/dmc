<script setup>
import Header from "../Components/Header.vue";
import Footer from "@/Components/Footer.vue";
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
    <Header
        :generalServices="generalServices"
        :specialistServices="specialistServices"
        :diagnosticServices="diagnosticServices"
        :dentalServices="dentalServices"
    />
    <main>
        <slot></slot>
    </main>
    <Footer />
</template>
