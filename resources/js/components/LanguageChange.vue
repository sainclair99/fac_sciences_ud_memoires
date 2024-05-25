<template>
    <div class="relative inline-block text-left dark:bg-black">
        <div>
            <button @click="display=!display" type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true">
                <i class="fa-solid fa-language text-md">{{" "+props.code}}</i>
            </button>
        </div>
        <div v-if="display" class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <div class="py-1" role="none">
                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                <a href="en" class="text-gray-700 block px-4 py-2 text-sm hover:bg-blue-200" role="menuitem" tabindex="-1" id="menu-item-0">{{ props.en_label }}</a>
                <a href="fr" class="text-gray-700 block px-4 py-2 text-sm hover:bg-blue-200" role="menuitem" tabindex="-1" id="menu-item-1">{{ props.fr_label }}</a>
            </div>
        </div>
    </div>
</template>

<script setup>
    import {ref} from 'vue';

    const display = ref(false)

    const props = defineProps(['en_label','fr_label','code']);
</script>