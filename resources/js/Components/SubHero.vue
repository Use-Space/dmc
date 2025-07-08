<script setup>
import Breadcrumb from "primevue/breadcrumb";
import { ref } from "vue";

const props = defineProps({
    title: String,
    bg: String,
    breadcrumb: Array,
    position: String,
});

const home = ref({
    label: "Home",
    icon: "pi pi-home",
});
const items = ref([...props.breadcrumb]);
</script>

<template>
    <section
        class="h-[calc(100vh/2)] bg-cover"
        :style="{'background-image': `url('${bg}')`}"
        :class="position"
    >
        <div
            class="h-full bg-[#0000008a] flex flex-col justify-center items-center"
        >
            <h1 class="text-white capitalize">{{ title }}</h1>
            <Breadcrumb :home="home" :model="items" class="capitalize" />
        </div>
    </section>
</template>
