<template>
  <!--  User OTP validation component form start -->
  <div class="divide-y divide-gray-200">
    <div class="py-6 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
      <div class="flex space-x-5 flex-wrap justify-center" data-hs-pin-input="">
        <input
            class="block size-[38px] text-center px-2.5 pb-2 pt-2 text-sm text-gray-900 bg-transparent rounded-md border-[1px]
           border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500
           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="text" placeholder="-" data-hs-pin-input-item="" autofocus="">
        <input
            class="block size-[38px] text-center px-2.5 pb-2 pt-2 text-sm text-gray-900 bg-transparent rounded-md border-[1px]
           border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500
           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="text" placeholder="-" data-hs-pin-input-item="">
        <input
            class="block size-[38px] text-center px-2.5 pb-2 pt-2 text-sm text-gray-900 bg-transparent rounded-md border-[1px]
           border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500
           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="text" placeholder="-" data-hs-pin-input-item="">
        <input
            class="block size-[38px] text-center px-2.5 pb-2 pt-2 text-sm text-gray-900 bg-transparent rounded-md border-[1px]
           border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500
           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="text" placeholder="-" data-hs-pin-input-item="">
        <input
            class="block size-[38px] text-center px-2.5 pb-2 pt-2 text-sm text-gray-900 bg-transparent rounded-md border-[1px]
           border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500
           focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="text" placeholder="-" data-hs-pin-input-item="">
      </div>
      <p class="text-xs text-gray-600 text-center">Didn't receive the OTP? You can resend it after the timer expires.
        Time Left: <span id="timer">00:59</span></p>
      <UButton color="primary" variant="solid" size="sm" block>Submit</UButton>
      <p class="text-xs text-gray-600 text-center">This site is protected by reCAPTCHA and <br>the Google Privacy Policy
      </p>
    </div>
  </div>
  <!--  User OTP validation component form end -->
</template>
<script setup lang="ts">
</script>