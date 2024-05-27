<template>
    <fwb-carousel :pictures="pictures" class="w-full h-auto"/>
</template>
  
<script setup>
    import { FwbCarousel } from 'flowbite-vue';

    const props = defineProps(['image_url']);

    const pictures = [
        {src: props.image_url, alt: 'Image 1'},
        {src: '/assets/home_pic/fac3.jpg', alt: 'Image 2'},
        {src: props.image_url, alt: 'Image 3'},
    ];
</script>