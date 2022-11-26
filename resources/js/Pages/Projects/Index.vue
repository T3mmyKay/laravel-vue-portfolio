<template>
    <Head title="Projects Index"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Projects</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-end m-2 p-2">
                    <Link :href="route('projects.create')"
                          class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md">New Project
                    </Link>
                </div>

                <div class="overflow-x-auto bg-white relative shadow-md">
                    <TableComp>
                        <template #table-headers>
                            <TableHeader title="id"/>
                            <TableHeader title="skill"/>
                            <TableHeader title="name"/>
                            <TableHeader title="image"/>
                            <TableHeader title="project_url"/>
                            <TableHeader title=""/>
                        </template>
                        <template #table-body>
                            <tr v-for="project in projects.data" :key="project.id"
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ project.id }}
                                </th>
                                <td class="py-4 px-6">{{ project.skill.name }}</td>
                                <td class="py-4 px-6">{{ project.name }}</td>
                                <td class="py-4 px-6"><img :src="project.image" alt="" class="w-12 h-12 rounded-full">
                                </td>
                                <td class="py-4 px-6">{{ project.project_url }}</td>
                                <td class="py-4 px-6">
                                    <Link :href="route('projects.edit',project.id)"
                                          class="font-medium text-blue-500 hover:text-blue-700 mr-2">Edit
                                    </Link>
                                    <Link :href="route('projects.destroy',project.id)"
                                          class="font-medium text-red-500 hover:text-red-700 mr-2" as="button"
                                          type="button"
                                          method="delete">Delete
                                    </Link>
                                </td>
                            </tr>
                        </template>
                    </TableComp>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import TableComp from "@/Components/TableComp.vue";
import TableHeader from "@/Components/TableHeader.vue";

defineProps({
    projects: Object,
})
</script>
