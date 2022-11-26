<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import FrontendLayout from "@/Layouts/FrontendLayout.vue";
import HeroCom from "@/Components/Frontend/HeroCom.vue";
import PromoteCom from "@/Components/Frontend/PromoteCom.vue";
import AboutCom from "@/Components/Frontend/AboutCom.vue";
import SkillsCom from "@/Components/Frontend/SkillsCom.vue";
import PortfolioCom from "@/Components/Frontend/PortfolioCom.vue";
import ServicesCom from "@/Components/Frontend/ServicesCom.vue";
import ContactCom from "@/Components/Frontend/ContactCom.vue";

defineProps({
    skills: Object,
    projects: Object,
})
</script>

<template>
    <Head title="Welcome to portfolio"/>

    <FrontendLayout>
        <!--hero primary color-->
        <HeroCom/>
        <!--promote tail-100-->
        <PromoteCom/>
        <!--about secondary color-->
        <AboutCom/>
        <!--skills tail-100-->
        <SkillsCom :skills="skills"/>
        <!--portfolio primary-->
        <PortfolioCom :projects="projects" :skills="skills"/>
        <!--Services secondary color-->
        <ServicesCom/>
        <!--contact primary color-->
        <ContactCom/>
    </FrontendLayout>
</template>
