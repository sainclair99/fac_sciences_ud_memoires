<template>
    <img v-if="props.dark" :src="props.logo_text_white" alt="" srcset="" :class="props.class">
    <img v-if="!props.dark" :src="props.logo_text_black" alt="" srcset="" :class="props.class">
</template>

<script setup>
    // import {ref} from 'vue'; 
    const props = defineProps(['logo_text_white', 'logo_text_black','class','dark']);
</script>