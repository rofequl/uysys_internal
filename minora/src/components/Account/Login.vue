<script setup>
const email = ref(null)
const password = ref(null)
</script>
<template>
  <!--  User login component form start -->
  <div class="divide-y divide-gray-200">
    <div class="py-6 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
      <!--Email input component Start-->
      <form-input-field id="email" label="Email" type="email" v-model="email" :autofocus="true"/>
      <!--Email input component End-->
      <!--Password input component Start-->
      <form-password id="password" label="Password" v-model="password"/>
      <!--Password input component End-->
      <UButton color="primary" variant="solid" size="sm" block>Login</UButton>
      <!--Others Information and Google Login Start-->
      <p class="text-[14px] text-gray-500 text-center">
        <router-link to="/account/forgot-password" class="hover:underline hover:text-gray-700">Forgot Password?</router-link>
      </p>
      <UDivider label="or Log In with" :ui="{ label: 'text-gray-800 text-xs font-normal' }"/>
      <UButton label="Sign in with Google" color="gray" block>
        <template #leading>
          <UAvatar src="/img/google.png" size="2xs"/>
        </template>
      </UButton>
      <p class="text-xs text-gray-500 text-center">Don't have an account yet?
        <nuxt-link to="/account/register" class="text-blue-500 hover:underline hover:text-blue-700">Sign Up</nuxt-link>
      </p>
      <!--Others Information and Google Login End-->
    </div>
  </div>
  <!--  User login component form end -->
</template>