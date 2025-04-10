<script setup>

</script>

<template>
  <Head v-if="$page.props.pageInfo?.title" :title="$page.props.pageInfo?.title" />
  <slot />
</template>