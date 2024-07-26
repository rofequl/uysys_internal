<script setup>
const type = ref('validation')  // register or validation
const description = type.value === 'register' ? 'Registration this website by your email account' : 'We have sent a validation code to your email: nayem@uysys.com'

</script>
<template>
  <!--  Registration Page Layout Start -->
  <account-layout title="Sign Up" :description="description">
    <!--  User registration form start -->
    <account-register v-if="type === 'register'"/>
    <!--  User registration form end -->
    <!--  User registration email verify form start -->
    <account-validation v-if="type === 'validation'"/>
    <!--  User registration email verify form end -->
  </account-layout>
  <!--  Registration Page Layout End -->
</template>