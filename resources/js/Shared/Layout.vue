<script setup>
import NavBar from "@/components/NavBar.vue";
import EmptyLayout from "./EmptyLayout.vue";

</script>

<template>
  <EmptyLayout>
    <NavBar/>
    <main class="mx-auto px-5">
      <h1
          v-if="$page.props.pageInfo?.heading"
          v-text="$page.props.pageInfo?.heading"
          class="text-xl font-semibold tracking-tight text-primary mb-5"
      />
      <slot/>
    </main>
  </EmptyLayout>
</template>