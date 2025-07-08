<script setup>
import SubHero from "@/Components/SubHero.vue";
import ContactInfo from "@/Components/ContactInfo.vue";
</script>

<template>
    <Head :title="` - ${$page.component}`" />
    <section>
        <SubHero
            title="About Us"
            :breadcrumb="[{ label: 'About' }]"
            bg="about.png"
            position="bg-bottom"
        />
    </section>

    <section class="px-4 py-20">
        <div class="max-w-7xl mx-auto grid grid-cols-12">
            <div class="col-span-12 lg:col-span-7">
                <h2>Who are we?</h2>
                <h1>Trusted care center, delivered with excellence.</h1>
                <p>
                    Welcome to <b>Discovery Medical Center,</b> where health
                    meets excellence. We are a modern, patient-centered medical
                    facility dedicated to providing high-quality healthcare
                    services across a range of specialties. With a team of
                    experienced doctors, specialists, and healthcare
                    professionals, Discovery Medical Center is committed to
                    delivering personalized care, innovative treatments, and a
                    welcoming environment for all our patients. From general
                    consultations to specialized treatments, including
                    comprehensive dental care, Discovery Medical Center stands
                    as a beacon of trust and professionalism in the healthcare
                    sector. Our goal is to promote healing, wellness, and
                    preventive care with compassion and expertise.
                </p>
                <br />
                <p>
                    <b>Discovery Medical Center</b> is a multi-specialty
                    healthcare facility offering top-tier medical services for
                    individuals and families. We prioritize our patients'
                    wellbeing through accurate diagnoses, evidence-based
                    treatments, and a holistic approach to health. Our
                    state-of-the-art facility is equipped with modern medical
                    technology, ensuring safe, efficient, and effective
                    healthcare delivery.
                </p>
                <ContactInfo />
            </div>
            <div class="overflow-hidden col-span-12 lg:col-span-5">
                <img
                    src="about.png"
                    alt="about img"
                    class="w-full h-full object-cover"
                />
            </div>
        </div>
    </section>
    <section class="mb-20">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-center">What to expect.</h1>
            <h2 class="text-center">How We Serve and Satisfy Our Patients</h2>

            <div class="grid grid-cols-12 grid-rows-4 gap-4">
                <div
                    class="col-span-12 lg:col-span-4 p-4 space-y-4 lg:row-span-2"
                >
                    <div
                        class="bg-blue-800 inline-block py-4 px-6 rounded text-lg text-white"
                    >
                        <i class="fas fa-user-doctor"></i>
                    </div>
                    <h2>Expert Medical Care</h2>
                    <p>
                        You’ll receive treatment from highly qualified doctors
                        and specialists who are experienced in handling both
                        general and complex health conditions.
                    </p>
                </div>
                <div
                    class="hidden lg:flex lg:col-span-4 p-4 space-y-4 lg:row-span-4 items-center"
                >
                    <img src="dmc3d.png" alt="about" />
                </div>
                <div
                    class="col-span-12 lg:col-span-4 p-4 space-y-4 lg:row-span-2"
                >
                    <div
                        class="bg-blue-800 inline-block py-4 px-6 rounded text-lg text-white"
                    >
                        <i class="fas fa-hospital-user"></i>
                    </div>
                    <h2>Warm and Respectful Service</h2>
                    <p>
                        From reception to consultation, expect to be treated
                        with kindness, respect, and professionalism at every
                        step of your visit.
                    </p>
                </div>
                <div
                    class="col-span-12 lg:col-span-4 p-4 space-y-4 lg:row-span-2"
                >
                    <div
                        class="bg-blue-800 inline-block py-4 px-6 rounded text-lg text-white"
                    >
                        <i class="fas fa-kit-medical"></i>
                    </div>
                    <h2>Fast and Efficient Attention</h2>
                    <p>
                        We value your time. Our systems are designed to reduce
                        waiting and ensure you receive timely care and results.
                    </p>
                </div>
                <div
                    class="col-span-12 lg:col-span-4 p-4 space-y-4 lg:row-span-2"
                >
                    <div
                        class="bg-blue-800 inline-block py-4 px-6 rounded text-lg text-white"
                    >
                        <i class="fas fa-hand-holding-medical"></i>
                    </div>
                    <h2>Confidentiality and Trust</h2>
                    <p>
                        Your privacy is important to us. All medical records and
                        consultations are handled with strict confidentiality
                        and professionalism.
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>
