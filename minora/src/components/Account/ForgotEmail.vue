<script setup lang="ts">
const email = ref(null)
</script>

<template>
  <!--  Forgot password email entry form start -->
  <div class="divide-y divide-gray-200">
    <div class="py-6 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
      <!--Email input component Start-->
      <form-input-field id="email" label="Email" type="email" v-model="email"/>
      <!--Email input component End-->
      <UButton color="primary" variant="solid" size="sm" block>Submit</UButton>
      <p class="text-xs text-gray-500 text-center">If you want to back?
        <nuxt-link to="/account/login" class="text-blue-500 hover:underline hover:text-blue-700">Log In</nuxt-link>
      </p>
    </div>
  </div>
  <!--   Forgot password email entry form end -->
</template>