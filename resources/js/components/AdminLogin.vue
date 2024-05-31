<template>
    <div class="w-full h-screen flex">
        <div class="w-1/2 flex flex-col justify-center items-center m-10">
            <img :src="props.app_logo" alt="" srcset="" class="h-40 w-40">
            <div class="bg-gray-100 rounded-md shadow-2xl grid-cols-1 gap-y-2 p-4 w-full">
                <p class="text-center">Admin Login page</p>
                <label for="email" class="flex flex-col text-md font-semibold font-mono">
                    Name
                    <input type="text" name="email" id="email" required class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                </label><br>
                
                <label for="password" class="flex flex-col text-md font-semibold font-mono">
                    Password
                    <input type="text" name="password" id="password" required class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                </label>
            </div>
        </div>
        <div class="bg-black h-screen w-1/2">

        </div>
    </div>
</template>

<script setup>
    const props = defineProps(['app_logo']);
</script>