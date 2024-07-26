<script setup>
defineProps({
  id: {
    type: String,
    required: true,
  },
  label: {
    type: String,
    required: true,
  },
  placeholder: {
    type: String,
    default: '',
  },
  modelValue: {
    type: String,
    default: '',
  },
  suggestion: {
    type: Boolean,
    default: false,
  },
});
const emit = defineEmits(['update:modelValue']);
</script>
<template>
  <!-- Strong Password -->
  <div class="max-w-sm">
    <div class="flex">
      <div class="relative flex-1">
        <input type="password" id="hs-strong-password-with-indicator-and-hint-in-popover" placeholder=""
               class="block px-2.5 pb-2 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-md border-[1px]
               border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500
               focus:outline-none focus:ring-0 focus:border-blue-600 peer">
        <label for="hs-strong-password-with-indicator-and-hint-in-popover"
               class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75
           top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600
           peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2
           peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4
           rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
          Password
        </label>
        <button type="button" data-hs-toggle-password='{
        "target": "#hs-strong-password-with-indicator-and-hint-in-popover"
      }' class="absolute top-0 end-0 p-3 rounded-e-md">
          <svg class="flex-shrink-0 size-3.5 text-gray-400 dark:text-neutral-600" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
            <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
            <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
            <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
            <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
            <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
          </svg>
        </button>
        <div id="hs-strong-password-popover" v-if="suggestion"
             class="hidden absolute z-10 w-full bg-white shadow-md rounded-lg p-4 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700">
          <div id="hs-strong-password-in-popover" data-hs-strong-password='{
            "target": "#hs-strong-password-with-indicator-and-hint-in-popover",
            "hints": "#hs-strong-password-popover",
            "stripClasses": "hs-strong-password:opacity-100 hs-strong-password-accepted:bg-teal-500 h-2 flex-auto rounded-full bg-blue-500 opacity-50 mx-1",
            "mode": "popover"
          }' class="flex mt-2 -mx-1">
          </div>

          <h4 class="mt-3 text-sm font-semibold text-gray-800 dark:text-white">
            Your password must contain:
          </h4>

          <ul class="space-y-1 text-sm text-gray-500 dark:text-neutral-500">
            <li data-hs-strong-password-hints-rule-text="min-length"
                class="hs-strong-password-active:text-teal-500 flex items-center gap-x-2">
            <span class="hidden" data-check="">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                   viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </span>
              <span data-uncheck="">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                   viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
              </svg>
            </span>
              Minimum number of characters is 6.
            </li>
            <li data-hs-strong-password-hints-rule-text="lowercase"
                class="hs-strong-password-active:text-teal-500 flex items-center gap-x-2">
            <span class="hidden" data-check="">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                   viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </span>
              <span data-uncheck="">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                   viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
              </svg>
            </span>
              Should contain lowercase.
            </li>
            <li data-hs-strong-password-hints-rule-text="uppercase"
                class="hs-strong-password-active:text-teal-500 flex items-center gap-x-2">
            <span class="hidden" data-check="">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                   viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </span>
              <span data-uncheck="">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                   viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
              </svg>
            </span>
              Should contain uppercase.
            </li>
            <li data-hs-strong-password-hints-rule-text="numbers"
                class="hs-strong-password-active:text-teal-500 flex items-center gap-x-2">
            <span class="hidden" data-check="">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                   viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </span>
              <span data-uncheck="">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                   viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
              </svg>
            </span>
              Should contain numbers.
            </li>
            <li data-hs-strong-password-hints-rule-text="special-characters"
                class="hs-strong-password-active:text-teal-500 flex items-center gap-x-2">
            <span class="hidden" data-check="">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                   viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </span>
              <span data-uncheck="">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                   viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
              </svg>
            </span>
              Should contain special characters.
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Strong Password -->
</template>