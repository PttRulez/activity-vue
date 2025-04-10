<script setup>
    const props = defineProps(['description', 'heading'])
</script>

<template>
    <div class="mb-8 space-y-12">
        <h2 class="text-xl font-semibold tracking-tight text-primary">{{ heading }}</h2>
        <p v-if="description" class="text-sm text-muted-foreground">
            {{ description }}
        </p>
    </div>
</template>