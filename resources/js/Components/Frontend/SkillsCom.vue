<template>
    <section id="skills" class="bg-light-tail-100 dark:bg-dark-navy-500 py-16">
        <div class="container mx-auto">
            <div class="grid grid-cols-8 md:grid-flow-col">
                <div v-for="skill in skills.data" :key="skill.id" class="flex items-center justify-center">
                    <img :alt="skill.name" :src="skill.image" class="lg:h-20"/>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
const props = defineProps({
    skills: Object,
})
</script>

<style scoped>

</style>
