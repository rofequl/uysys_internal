<script setup lang="ts">
const password = ref(null)
</script>
<template>
  <!--  Forgot password new password set form start -->
  <div class="divide-y divide-gray-200">
    <div class="py-6 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
      <!--Password input component Start-->
      <form-password id="password" label="Password" v-model="password" :suggestion="true"/>
      <!--Password input component End-->
      <UButton color="primary" variant="solid" size="sm" block>Submit</UButton>
      <p class="text-xs text-gray-500 text-center">If you want to cancel?
        <nuxt-link to="/account/login" class="text-blue-500 hover:underline hover:text-blue-700">Log In</nuxt-link>
      </p>
    </div>
  </div>
  <!--  Forgot password new password set form end -->
</template>