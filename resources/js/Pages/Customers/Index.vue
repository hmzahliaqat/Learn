<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Customers" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Customers
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <!-- <div class="p-6 text-gray-900">
                        This is Customers Section!
                    </div> -->
                    <div class="px-4 py-8 sm:px-6 lg:px-8">
                        <div class="sm:flex sm:items-center">
                            <div class="sm:flex-auto">
                                <h1 class="text-base font-semibold leading-6 text-gray-900">Customers</h1>
                                <p class="mt-2 text-sm text-gray-700">A list of all the customers in your account including
                                    their
                                    name, title, email and role.</p>
                            </div>
                            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none flex">
                                <button type="button"
                                    class="block mx-1 rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add
                                    user</button>

                                    <button type="button"
                                    class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Export
                                    </button>

                            </div>
                        </div>
                        <div class="mt-8 flow-root">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle">
                                    <table class="min-w-full divide-y divide-gray-300">
                                        <thead>
                                            <tr>
                                                <th scope="col"
                                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 lg:pl-8">
                                                    Name</th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Title</th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Email</th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Role</th>
                                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6 lg:pr-8">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 bg-white">
                                            <tr>
                                                <td
                                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                                    Lindsay Walton</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Front-end
                                                    Developer</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    lindsay.walton@example.com</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member
                                                </td>
                                                <td
                                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 lg:pr-8">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span
                                                            class="sr-only">, Lindsay Walton</span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                                    Lindsay Walton</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Front-end
                                                    Developer</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    lindsay.walton@example.com</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member
                                                </td>
                                                <td
                                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 lg:pr-8">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span
                                                            class="sr-only">, Lindsay Walton</span></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td
                                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                                    Lindsay Walton</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Front-end
                                                    Developer</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    lindsay.walton@example.com</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member
                                                </td>
                                                <td
                                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 lg:pr-8">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span
                                                            class="sr-only">, Lindsay Walton</span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                                    Lindsay Walton</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Front-end
                                                    Developer</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    lindsay.walton@example.com</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member
                                                </td>
                                                <td
                                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 lg:pr-8">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span
                                                            class="sr-only">, Lindsay Walton</span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                                    Lindsay Walton</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Front-end
                                                    Developer</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    lindsay.walton@example.com</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member
                                                </td>
                                                <td
                                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 lg:pr-8">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span
                                                            class="sr-only">, Lindsay Walton</span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                                    Lindsay Walton</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Front-end
                                                    Developer</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    lindsay.walton@example.com</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member
                                                </td>
                                                <td
                                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 lg:pr-8">
                                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span
                                                            class="sr-only">, Lindsay Walton</span></a>
                                                </td>
                                            </tr>


                                            <!-- More people... -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
