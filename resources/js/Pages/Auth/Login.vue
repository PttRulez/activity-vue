<script setup>
import {useForm} from "@inertiajs/vue3";
import EmptyLayout from "../../Shared/EmptyLayout.vue";
import Logo from "@/components/Logo.vue";
import {ref} from "vue";

const form = useForm({
  name: '',
  email: '',
  password: '',
  password_confirmation: '',
  remember: false,
});

defineOptions({
  layout: EmptyLayout
});

const submit = () => {
  form.post(route('login'), {
    onFinish: () => {
      form.reset('password')
    },
  });
};

const test = ref('');
</script>

<template>
  <div class="min-h-screen flex flex-col sm:justify-center gap-10 items-center pt-6 sm:pt-0">
    <Link href="/">
      <Logo/>
    </Link>
    <form @submit.prevent="submit" class="bg-surface-900 p-10 rounded-3xl space-y-7 w-full max-w-[500px]"
          autocomplete="off"

    >
      <h1 class="text-center">{{ $t('Login') }}</h1>

<!--      <FormInput-->
<!--          :label="$t('Email')"-->
<!--          :errors="form.errors.email"-->
<!--          v-model="form.email"-->
<!--          @input="(e) => form.clearErrors('email')"-->
<!--      />-->
<!--      <FormInput-->
<!--          :label="$t('Password')"-->
<!--          :errors="form.errors.password"-->
<!--          v-model="form.password"-->
<!--          type="password"-->

<!--      />-->
<!--      <div class="flex items-center gap-2">-->
<!--        <Checkbox v-model="form.remember" inputId="remember" binary/>-->
<!--        <label for="remember">{{ $t('Remember me') }}</label>-->
<!--      </div>-->
<!--      <Button-->
<!--          icon="pi pi-sign-in"-->
<!--          :label="$t('Log In')"-->
<!--          type="submit"-->
<!--          class="w-full"-->
<!--      />-->
    </form>
  </div>
</template>