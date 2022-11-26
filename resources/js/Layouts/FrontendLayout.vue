<template>
    <div class="bg-slate-200 dark:accent-slate-900">
        <!--header-->
        <HeaderCom/>
        <main class="min-h-screen">
            <slot></slot>
        </main>
        <!--footer-->
        <FooterCom/>
    </div>
</template>

<script setup>

import HeaderCom from "@/Components/Frontend/HeaderCom.vue";
import FooterCom from "@/Components/Frontend/FooterCom.vue";
</script>

<style scoped>

</style>
