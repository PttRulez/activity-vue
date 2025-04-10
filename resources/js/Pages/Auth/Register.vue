<script setup>
import {useForm} from "@inertiajs/vue3";
import EmptyLayout from "../../Shared/EmptyLayout.vue";
import Logo from "@/components/Logo.vue";
import FormField from "@/components/Forms/FormInput.vue";

const form = useForm({
  name: '',
  email: '',
  password: '',
  password_confirmation: '',
  terms: false,
});

defineOptions({
  layout: EmptyLayout
});

const submit = () => {
  form.post(route('register'), {
    onFinish: () => {
      form.reset('password', 'password_confirmation')
    },
  });
};
</script>

<template>
  <div class="min-h-screen flex flex-col sm:justify-center gap-10 items-center pt-6 sm:pt-0">
    <Link href="/">
      <Logo/>
    </Link>
    <form @submit.prevent="submit" class="bg-surface-900 p-10 rounded-3xl space-y-7 w-full max-w-[500px]"

    >
      <h1 class="text-center">{{ $t('Register')}}</h1>

      <FormField
          :label="$t('Username')"
          :errors="form.errors.name"
          v-model="form.name"
          @input="(e) => form.clearErrors('name')"
      />
      <FormField
          :label="$t('Email')"
          :errors="form.errors.email"
          v-model="form.email"
          @input="(e) => form.clearErrors('email')"
      />
      <FormField
          :label="$t('Password')"
          :errors="form.errors.password"
          v-model="form.password"
          type="password"
      />
      <FormField
          :label="$t('Password Confirmation')"
          :errors="form.errors.password_confirmation"
          v-model="form.password_confirmation"
          type="password"
      />

      <Button
          icon="pi pi-user-plus"
          :label="$t('toRegister')"
          type="submit"
          class="w-full"
      />
    </form>
  </div>
</template>