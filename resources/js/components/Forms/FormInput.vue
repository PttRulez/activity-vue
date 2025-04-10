<script setup>
import {InputText, InputMask, Message, Password} from "primevue";

const {
  errors,
  label,
  mask,
  placeholder,
  type = 'text'
} = defineProps(['errors', 'label', 'mask', 'type', 'placeholder'])

const model = defineModel()
</script>

<template>
  <div class="flex flex-col gap-2">
    <label for="username">{{ label }}</label>
    <InputMask v-if="mask" :mask="mask" :placeholder="placeholder"/>
    <InputText v-else-if="type==='text'" v-model="model" />
    <Password v-else-if="type==='password'" v-model="model" toggleMask :feedback="false"/>
    <Message v-if="errors"
             size="small" severity="error" variant="simple">{{ errors }}
    </Message>
  </div>
</template>

