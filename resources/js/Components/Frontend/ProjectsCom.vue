<script setup>
import ProjectCom from "@/Components/Frontend/ProjectCom.vue";
import { ref } from "vue";

const props = defineProps({
    projects: Object,
    skills: Object
})

const filteredProjects = ref(props.projects.data);
const selectedSkill = ref('all');

const filterProjects = (id) => {
    if (id === "all") {
        filteredProjects.value = props.projects.data
        selectedSkill.value = id;
    } else {
        filteredProjects.value = props.projects.data.filter(project => project.skill.id === id);
        selectedSkill.value = id;
    }
}
</script>

<template>
    <div class="container mx-auto">
        <nav class="mb-12 border-b-2 border-light-tail-100 dark:text-dark-navy-100">
            <ul class="flex flex-col lg:flex-row justify-evenly items-center">
                <li class="cursor-pointer capitalize m-4">
                    <button :class="{'bg-accent-hover dark:bg-accent-hover':selectedSkill==='all'}"
                            class="flex text-center px-4 py-2 text-light-tail-100 hover:text-light-tail-500 dark:text-white bg-light-tail-500 dark:bg-dark-navy-100 dark:hover:bg-accent-hover rounded hover:bg-accent-hover"
                            @click="filterProjects('all')">All
                    </button>
                </li>
                <li v-for="project_skill in skills.data" :key="project_skill.id" class="cursor-pointer capitalize m-4">
                    <button :class="{'bg-accent-hover dark:bg-accent-hover':selectedSkill=== project_skill.id}"
                            class="flex text-center px-4 py-2 text-light-tail-100 hover:text-light-tail-500 dark:text-white bg-light-tail-500 dark:bg-dark-navy-100 dark:hover:bg-accent-hover rounded hover:bg-accent-hover"
                            @click="filterProjects(project_skill.id)">{{ project_skill.name }}
                    </button>

                </li>
            </ul>
        </nav>

        <section class="grid gap-y-12 lg:grid-cols-3 lg:gap-8">
            <ProjectCom v-for="project in filteredProjects" :key="project.id" :project="project"/>
        </section>
    </div>
</template>


<style scoped>

</style>
