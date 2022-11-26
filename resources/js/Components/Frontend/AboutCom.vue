<template>
    <section id="about" class="section bg-light-secondary dark:bg-dark-secondary">
        <div v-motion :initial="{opacity: 0,y: 100,}" :visible="{opacity: 1,y: 0,}"
             class="mx-auto container">
            <div class="flex flex-col xl:flex-row gap-24">
                <img :src="`${$page.props.domain.hostname}/assets/images/coding.jpg`"
                     alt="" class="object-cover h-[400px] w-[566px] md:mx-auto lg:mx-0 rounded-2xl">

                <div class="flex flex-col items-center text-center lg:items-start lg:text-left">
                    <div class="flex flex-col">
                        <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3">About Me</h2>
                        <p class="mb-4 text-accent">Freelance Web Development</p>
                        <hr class="mb-8 opacity-90 dark:opacity-5">
                        <p class="mb-8">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa delectus, dicta dignissimos
                            eos est facere natus nihil officia totam vel. Amet assumenda at consectetur deserunt
                            dignissimos dolorem dolorum et eveniet fugiat in iusto laborum minima minus nam
                            necessitatibus nesciunt nisi non odio placeat praesentium reiciendis saepe, totam vel
                            veritatis voluptatum? <br>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, similique.
                        </p>
                    </div>
                    <a class="btn btn-md bg-accent text-light-tail-100" href="#contact">Contact me</a>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>

</script>

<style scoped>

</style>
