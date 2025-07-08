<script setup>
import SubHero from "@/Components/SubHero.vue";
import ContactInfo from "@/Components/ContactInfo.vue";
import Insurance from "@/Components/Insurance.vue";

const props = defineProps({
    services: Object,
    typeOfService: String,
    service: String,
});
</script>
<template>
    <Head :title="` - ${$page.component}`" />

    <SubHero
        :title="props.services.label"
        :breadcrumb="[
            { label: props.typeOfService },
            { label: props.services.label },
        ]"
        :bg="props.services.img"
        position="bg-center"
    />

    <section class="my-12">
        <div class="max-w-7xl mx-auto p-4">
            <h1 class="text-center">{{ services.article_one.title }}</h1>
            <h2 class="text-center">
                {{ services.article_one.subtitle }}
            </h2>

            <div class="max-w-5xl mx-auto text-base">
                <p>{{ services.article_one.description }}</p>
            </div>

            <div class="grid grid-cols-12 p-4 gap-8 lg:gap-0">
                <div
                    class="col-span-12 lg:col-span-4 lg:border-r border-gray-500 px-2"
                >
                    <img
                        :src="services.img"
                        :alt="services.label"
                        class="w-full h-full object-cover"
                    />
                </div>

                <div
                    class="col-span-12 lg:col-span-4 border-gray-500 px-2 text-base"
                >
                    <h2>{{ services.article_two.list_title }}</h2>
                    <ul class="list-disc ms-6 font-semibold">
                        <li
                            v-for="(service, index) in services.article_two
                                .list"
                            :key="index"
                        >
                            {{ service }}
                        </li>
                    </ul>
                </div>

                <div
                    class="flex flex-col col-span-12 lg:col-span-4 lg:border-l border-gray-500 px-2 text-base"
                >
                    <h2>{{ services.article_two.title }}</h2>
                    <p class="grow">{{ services.article_two.description }}</p>
                    <div class="mt-4 lg:mt-0">
                        <Link
                            :href="route('appointment')"
                            class="px-4 py-2 text-center bg-blue-700 rounded text-white duration-300 hover:bg-blue-600"
                            >Book Appointment
                            <i class="fas fa-calendar ms-2"></i
                        ></Link>
                    </div>
                </div>
            </div>

            <div class="max-w-5xl mx-auto mt-8 text-base">
                <h2 class="text-center">
                    {{ services.article_two.second_list_title }}
                </h2>
                <ol
                    class="list-decimal ms-4 font-semibold space-y-1 mb-4 flex flex-wrap"
                >
                    <li
                        v-for="(service, index) in services.article_two
                            .second_list"
                        :key="index"
                        class="w-[calc(100%/2)]"
                    >
                        {{ service }}
                    </li>
                </ol>
                <h2>{{ services.article_three.title }}</h2>
                <ul class="list-disc ms-4 font-semibold space-y-2">
                    <li
                        v-for="(service, index) in services.article_three.list"
                        :key="index"
                    >
                        {{ service }}
                    </li>
                </ul>
                <ContactInfo />
                <h2 class="mt-4">Conclusion</h2>
                <p>{{ services.article_three.conclusion }}</p>
                <p>
                    <q
                        ><i>{{ services.article_three.slogan }}</i></q
                    >
                </p>
            </div>
        </div>
    </section>

    <Insurance />
</template>
