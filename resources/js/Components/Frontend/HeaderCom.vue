<script setup>
import {onMounted, ref} from "vue";

const showMobileMenu = ref(false);
const scrollBg = ref(false)

const navigations = [
    {name: "Home", href: "#home"},
    {name: "About", href: "#about"},
    {name: "Portfolio", href: "#portfolio"},
    {name: "Services", href: "#services"},
    {name: "Contact", href: "#contact"},
]

const setScrollBg = (value) => {
    scrollBg.value = value;
}
onMounted(() => {
    window.addEventListener('scroll', () => {
        return window.scrollY > 50 ? setScrollBg(true) : setScrollBg(false);
    })
})
</script>
<template>
    <header>
        <nav :class="{'bg-light-primary dark:bg-dark-primary':scrollBg,'bg-white dark:bg-slate-800':!scrollBg }"
             class="fixed z-20 w-full bg-light-primary border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-dark-primary">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <a :href="$page.props.domain.hostname" class="flex items-center">
                    <img :src="`${$page.props.domain.hostname}/assets/images/logo.png`" alt="Temmy Logo"
                         class="h-6 mr-3 sm:h-9"/>
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Temmy</span>
                </a>
                <button aria-controls="navbar-default" aria-expanded="false"
                        class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        data-collapse-toggle="navbar-default"
                        type="button" @click="showMobileMenu = !showMobileMenu">
                    <span class="sr-only">Open main menu</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd"
                              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                              fill-rule="evenodd"></path>
                    </svg>
                </button>
                <div id="navbar-default" :class="{'hidden':!showMobileMenu}" class="w-full md:block md:w-auto">
                    <ul class="flex flex-col p-4 mt-4 rounded-lg border border-light-tail-500 dark:border-dark-navy-100 md:font-medium md:flex-row md:space-x-8 md:mt-0 md:border-0">
                        <li v-for="(navigation,index) in navigations" :key="index++">
                            <a :href="navigation.href"
                               class="block py-2 pl-3 pr-4 text-light-tail-100 rounded dark:md:text-dark-navy-100 md:p-0 hover:text-light-tail-500 dark:hover:text-white">{{
                                    navigation.name
                                }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
</template>

<style scoped>

</style>
