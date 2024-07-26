<script setup>
const type = ref('login')  // validation or login
const description = type.value === 'login' ? 'Login to your account to continue' : 'We have sent a validation code to your email: nayem@uysys.com'
</script>
<template>
  <!--  Login Page Layout Start -->
  <account-layout title="Sign In" :description="description">
    <!--  User login form start -->
    <account-login v-if="type === 'login'"/>
    <!--  User login form end -->
    <!--  User login 2fa validation form start -->
    <account-validation v-if="type === 'validation'"/>
    <!--  User login 2fa validation form end -->
  </account-layout>
  <!--  Login Page Layout End -->
</template>