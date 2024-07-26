<script setup>
const name = ref(null)
const email = ref(null)
const password = ref(null)
</script>
<template>
  <!--  User register component form start -->
  <div class="divide-y divide-gray-200">
    <div class="py-6 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
      <!--Name input component Start-->
      <form-input-field id="name" label="Name" type="name" v-model="name" :autofocus="true"/>
      <!--Name input component End-->
      <!--Email input component Start-->
      <form-input-field id="email" label="Email" type="email" v-model="email"/>
      <!--Email input component End-->
      <!--Password input component Start-->
      <form-password id="password" label="Password" v-model="password"/>
      <!--Password input component End-->
      <UButton color="primary" variant="solid" size="sm" block>Login</UButton>
      <!--Others Information and Google signup Start-->
      <p class="text-xs text-gray-500 text-center">Already have an account?
        <nuxt-link to="/account/login" class="text-blue-500 hover:underline hover:text-blue-700">Log In</nuxt-link>
      </p>
      <UDivider label="or" :ui="{ label: 'text-gray-800 text-xs font-normal' }"/>
      <UButton label="Sign up with Google" color="gray" block>
        <template #leading>
          <UAvatar src="/img/google.png" size="2xs"/>
        </template>
      </UButton>
      <p class="text-xs text-gray-500 text-center">By signing up to create an account <br>I accept Company's
        <router-link to="" class="text-blue-600">Terms of Use and Privacy Policy.</router-link>
      </p>
      <!--Others Information and Google signup End-->
    </div>
  </div>
  <!--  User register component form end -->
</template>