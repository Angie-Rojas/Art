<template>
  <Head title="Dashboard" />

  <breeze-authenticated-layout>
    <template #header>
      <h2 class="h4 font-weight-bold">
        Dashboard
      </h2>
    </template>

    <div class="card my-4 shadow-sm">
      <div class="card-body">
        You're logged in!
      </div>
    </div>
  </breeze-authenticated-layout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3'

export default {
  components: {
    BreezeAuthenticatedLayout,
    Head,
  },
}
</script>
