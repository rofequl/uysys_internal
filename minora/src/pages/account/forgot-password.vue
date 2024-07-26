<script setup>
const type = ref('password')  // email or validation or password
const description = type.value === 'password' ? 'Your validation successfully, now you insert a new password.' : 'validation' ? 'We have sent a validation code to your email: nayem@uysys.com' : 'Recover your account access'

</script>
<template>
  <!--  Forgot Password Page Layout Start -->
  <account-layout title="Forgot Password" :description="description">
    <!--  Forgot password email insert form start -->
    <account-forgot-email v-if="type === 'email'"/>
    <!--  Forgot password email insert form end -->
    <!--  User OTP verify form start -->
    <account-validation v-if="type === 'validation'"/>
    <!--  User OTP verify form end -->
    <!--  User new password entry form start -->
    <account-forgot-password v-if="type === 'password'"/>
    <!--  User new password entry form end -->
  </account-layout>
  <!--  Forgot Password Page Layout End -->
</template>