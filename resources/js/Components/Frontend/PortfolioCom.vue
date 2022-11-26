<script setup>
import ProjectsCom from "@/Components/Frontend/ProjectsCom.vue";

defineProps({
    projects: Object,
    skills: Object
})
</script>

<template>
    <section id="portfolio" class="section bg-light-primary dark:bg-dark-primary min-h-[1400px]">
        <div v-motion :initial="{opacity: 0,y: 100,}"
             :visible="{opacity: 1,y: 0,}" class="container mx-auto">
            <div class="flex flex-col items-center text-center">
                <h2 class="section-title">My Latest Work</h2>
                <p class="subtitle">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet cumque id nam odit quos repellat.
                </p>
            </div>
        </div>
        <ProjectsCom :projects="projects" :skills="skills"/>
    </section>
</template>


<style scoped>

</style>
