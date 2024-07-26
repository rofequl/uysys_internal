// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
    compatibilityDate: '2024-04-03',
    devtools: {enabled: true},
    modules: ["@nuxt/ui"],
    srcDir: 'src/',     // Update the root directory for Nuxt
    plugins: ["~/plugins/preline.client.ts"],
})