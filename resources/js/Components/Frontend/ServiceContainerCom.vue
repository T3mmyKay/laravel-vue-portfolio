<script setup>

</script>

<template>
    <div class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl">
        <div
            class="text-accent rounded-sm w-12 h-12 flex justify-center mb-24 text-[28px] items-center">
            <slot name="icon"/>
        </div>
        <h4 class="text-xl font-medium mb-2">
            <slot name="title"/>
        </h4>
        <p>
            <slot name="description"/>
        </p>
    </div>

</template>


<style scoped>

</style>
