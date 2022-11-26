<script setup>
import { Link } from "@inertiajs/inertia-vue3";

defineProps({
    project: Object
})
</script>

<template>
    <Link v-motion :enter="{opacity: 1,y: 0,}"
          :href="project.project_url" :initial="{opacity: 0,y: 100,}"
          class="group flex flex-col items-center text-center cursor-pointer">
        <div class="mb-6">
            <img :alt="project.name" :src="project.image" class="rounded-2xl h-56">
        </div>
        <span class="group-hover:text-light-tail-500 capitalize text-accent text-sm mb-3">{{
                project.skill.name
            }}</span>

        <h3 class="group-hover:text-light-tail-500 text-2xl font-semibold capitalize mb-3">
            {{ project.name }}
        </h3>
    </Link>
</template>


<style scoped>

</style>
