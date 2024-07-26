<script setup>
defineProps({
  title: {
    type: String,
    default: '',
  },
  description: {
    type: String,
    default: '',
  }
});
</script>
<template>
  <!--  Authentication Layout Start-->
  <div class="min-h-screen flex flex-col justify-center bg-gray-100 sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto lg:w-96">
      <div class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0
          sm:-rotate-6 sm:rounded-3xl"></div>
      <div class="relative bg-white px-2 py-5 shadow-lg sm:rounded-3xl sm:p-5">
        <div class="max-w-md mx-auto">
          <!--  Authentication Layout Heading Start-->
          <div>
            <div class="flex flex-wrap items-center justify-center gap-2">
              <img src="/img/logo.webp" alt="logo" class="w-6">
              <h2 class="text-2xl font-bold text-purple-800">{{title}}</h2>
            </div>
            <p class="text-gray-600 text-center">{{description}}</p>
          </div>
          <!--  Authentication Layout Heading End-->
          <slot/>
        </div>
      </div>
    </div>
  </div>
  <!--  Authentication Layout End-->
</template>