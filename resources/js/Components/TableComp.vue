<template>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <slot name="table-headers"></slot>
        </thead>
        <slot name="table-body"></slot>
    </table>
</template>

<script setup>

</script>

<style scoped>

</style>
