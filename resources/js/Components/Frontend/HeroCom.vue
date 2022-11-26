<template>
    <section id="home"
             class="lg:h-[85vh] flex items-center bg-light-primary dark:bg-dark-primary py-32 lg:py-0 overflow-hidden">
        <div v-motion :initial="{opacity: 0,y: 100,}" :visible="{opacity: 1,y: 0,}"
             class="container mx-auto h-full">
            <div class="flex flex-col md:flex-row items-center h-full pt-8">
                <div class="flex flex-1 flex-col items-center lg:items-start">
                    <p class="text-lg text-accent text-md mb-[22px]">Hey, I'm Temmy! 👋</p>
                    <h1 class="text-4xl leading-[44px] md:text-5xl md:leading-tight lg:text-7xl lg:leading-[1.2] font-bold md:tracking-[-2px]">
                        I Build & Design <br> Web Applications
                    </h1>
                    <p class="pt-4 pb-8 md:pt-6 md:pb-12 max-w-[480px] text-lg text-center lg:text-left">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum delectus eligendi facilis illum
                        iure neque non perspiciatis quis sit voluptas!
                    </p>
                    <button
                        class="btn btn-md bg-accent hover:bg-light-secondary hover:text-light-tail-500 dark:hover:bg-dark-secondary dark:hover:text-dark-navy-100 md:btn-lg transition-all">
                        Work With
                        Me
                    </button>
                    <div class="pt-12 ">
                        <h5 class="text-lg flex items-center text-black dark:text-white mb-2">
                            Follow me on:
                        </h5>
                        <div class="flex justify-center lg:justify-start items-center mb-6">
                            <a class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-transparent border-white text-black dark:text-white hover:bg-light-secondary hover:border-light-secondary dark:hover:bg-dark-secondary dark:hover:border-dark-secondary mr-3 sm:mr-4"
                               href="https://facebook.com/temmmy">
                                <svg data-name="Ebene 1" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1024,512C1024,229.23016,794.76978,0,512,0S0,229.23016,0,512c0,255.554,187.231,467.37012,432,505.77777V660H302V512H432V399.2C432,270.87982,508.43854,200,625.38922,200,681.40765,200,740,210,740,210V336H675.43713C611.83508,336,592,375.46667,592,415.95728V512H734L711.3,660H592v357.77777C836.769,979.37012,1024,767.554,1024,512Z"
                                        fill="#1877f2"/>
                                    <path
                                        d="M711.3,660,734,512H592V415.95728C592,375.46667,611.83508,336,675.43713,336H740V210s-58.59235-10-114.61078-10C508.43854,200,432,270.87982,432,399.2V512H302V660H432v357.77777a517.39619,517.39619,0,0,0,160,0V660Z"
                                        fill="#fff"/>
                                </svg>
                            </a>
                            <a class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-transparent border-white text-black dark:text-white hover:bg-light-secondary hover:border-light-secondary dark:hover:bg-dark-secondary dark:hover:border-dark-secondary mr-3 sm:mr-4"
                               href="https://linkedin.com/temmmy">
                                <svg viewBox="0 0 28.87 28.87" xmlns="http://www.w3.org/2000/svg">
                                    <g data-name="Layer 2">
                                        <g data-name="Layer 1">
                                            <rect fill="#0b86ca" height="28.87" rx="6.48" ry="6.48" width="28.87"/>
                                            <path
                                                d="M8 12h3v9.68H8zm1.53-4.81a1.74 1.74 0 11-1.74 1.75 1.74 1.74 0 011.74-1.75M12.92 12h2.89v1.32a3.16 3.16 0 012.85-1.56c3 0 3.61 2 3.61 4.61v5.31h-3V17c0-1.12 0-2.57-1.56-2.57s-1.8 1.22-1.8 2.48v4.79h-3z"
                                                fill="#fff"/>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <a class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-transparent border-white text-black dark:text-white hover:bg-light-secondary hover:border-light-secondary dark:hover:bg-dark-secondary dark:hover:border-dark-secondary mr-3 sm:mr-4"
                               href="https://youtube.com/temmmy">
                                <svg height="1756" viewBox="5.368 13.434 53.9 37.855" width="2500"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M41.272 31.81c-4.942-2.641-9.674-5.069-14.511-7.604v15.165c5.09-2.767 10.455-5.301 14.532-7.561h-.021z"
                                        fill="#FFF"/>
                                    <path
                                        d="M41.272 31.81c-4.942-2.641-14.511-7.604-14.511-7.604l12.758 8.575c.001 0-2.324 1.289 1.753-.971z"
                                        fill="#E8E0E0"/>
                                    <path
                                        d="M27.691 51.242c-10.265-.189-13.771-.359-15.926-.803-1.458-.295-2.725-.95-3.654-1.9-.718-.719-1.289-1.816-1.732-3.338-.38-1.268-.528-2.323-.739-4.9-.323-5.816-.4-10.571 0-15.884.33-2.934.49-6.417 2.682-8.449 1.035-.951 2.239-1.563 3.591-1.816 2.112-.401 11.11-.718 20.425-.718 9.294 0 18.312.317 20.426.718 1.689.317 3.273 1.267 4.203 2.492 2 3.146 2.035 7.058 2.238 10.118.084 1.458.084 9.737 0 11.195-.316 4.836-.57 6.547-1.288 8.321-.444 1.12-.823 1.711-1.479 2.366a7.085 7.085 0 0 1-3.76 1.922c-8.883.668-16.426.813-24.987.676zM41.294 31.81c-4.942-2.641-9.674-5.09-14.511-7.625v15.166c5.09-2.767 10.456-5.302 14.532-7.562l-.021.021z"
                                        fill="#CD201F"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="lg:flex flex-1 mt-8 md:mt-0 justify-end items-center h-full">
                    <img alt="hero" class="rounded-lg" src="http://portfolio.test/assets/images/coder2.jpg">
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>

</script>

<style scoped>

</style>
