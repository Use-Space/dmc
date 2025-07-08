<script setup>
import SubHero from "@/Components/SubHero.vue";
</script>
<template>
    <Head :title="` - ${$page.component}`" />

    <SubHero
        title="Careers"
        :breadcrumb="[{ label: 'Career' }]"
        bg="career.png"
        position="bg-bottom"
    />

    <section class="my-20">
        <div class="max-w-7xl mx-auto p-4">
            <h1 class="text-center">
                We Would Be Glad To Have You In Our Team ?
            </h1>
            <h2 class="text-center">
                Are you looking to expand Discovery Medical Center's reach or
                enhance your services?
            </h2>

            <div class="grid grid-cols-12 p-4 gap-8 lg:gap-0">
                <div
                    class="col-span-12 lg:col-span-4 lg:border-r border-gray-500 px-2"
                >
                    <h2>What To Know ?</h2>
                    <p class="text-base">
                        Are you passionate about healthcare and looking to be
                        part of a dynamic, purpose-driven team? Discovery
                        Medical Center welcomes individuals who are interested
                        in contributing their skills—whether as a marketer
                        helping us reach and serve more people, or as a
                        professional offering specialized services. If you're
                        driven, committed, and eager to make a difference, we’d
                        love to hear from you. Kindly reach out to us or submit
                        your CV to be considered for current or future
                        opportunities.
                    </p>
                </div>
                <div
                    class="flex flex-col justify-between col-span-12 lg:col-span-4 lg:border-r border-gray-500 px-2"
                >
                    <h2>Be A Marketer.</h2>
                    <p class="text-base">
                        Are you passionate about health and wellness, and
                        skilled in communication, outreach, or promotion?
                        Discovery Medical Center is offering a unique
                        opportunity for individuals who would like to work with
                        us as marketers—helping us reach more people, build
                        strong community relationships, and promote our quality
                        healthcare services.
                    </p>
                    <p class="text-base my-4">
                        Click the button below if you're interested in becoming
                        a marketer with us.
                    </p>
                    <div>
                        <Link
                            href=""
                            class="px-4 py-2 text-center bg-blue-700 rounded text-white duration-300 hover:bg-blue-600"
                            >Become A Marketer</Link
                        >
                    </div>
                </div>
                <div
                    class="flex flex-col justify-between col-span-12 lg:col-span-4 border-gray-500 px-2"
                >
                    <h2>Be A Staff.</h2>
                    <p class="text-base">
                        Are you looking to build a meaningful career in
                        healthcare? Discovery Medical Center is always open to
                        welcoming passionate, skilled, and dedicated individuals
                        who want to be part of a growing and impactful medical
                        team.
                    </p>
                    <p class="text-base my-4">
                        Click the button below to apply or express interest in
                        working with us.
                    </p>
                    <div>
                        <Link
                            href=""
                            class="px-4 py-2 text-center bg-blue-700 rounded text-white duration-300 hover:bg-blue-600"
                            >Become A Staff</Link
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
