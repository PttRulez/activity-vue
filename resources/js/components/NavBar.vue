<script setup>
import {ref} from "vue";
import Menubar from 'primevue/menubar';
import {Link, router, usePage} from "@inertiajs/vue3";
import {ToggleButton} from "primevue";
import Logo from "./Logo.vue";
import Divider from 'primevue/divider';
import {useI18n} from "vue-i18n";

const user = usePage().props.auth?.user;
const {t} = useI18n();

// Navbar menu items
const items = ref([
  {
    label: t('Weight Progress'),
    url: route('diaries'),
    show: user
  },
  {
    label: t('Activities'),
    url: route('activities.index'),
    show: user
  },
  {
    label: t('Meal Diary'),
    url: route('meals.index'),
    show: user
  },
  {
    label: t('Tracks'),
    show: true,
    items: [
      {
        label: t('menu.Cycling'),
        url: route('tracks.cycling'),
        show: true,
      }
    ]
  },

]);

// User Dropdown items
const accountItems = ref([
  {
    label: user?.name ?? 'Аккаунт',
    icon: 'pi pi-user',
    items: [
      {
        label: t('Settings'),
        icon: 'pi pi-cog',
        url: route('settings')
      },
      {
        label: t('Log Out'),
        icon: 'pi pi-sign-out',
        command: () => router.post(route('logout'), {} , {
          onSuccess: () => {
            window.location.reload();
          }
        })
      }
    ]
  },

]);

const darkMode = ref(true);

function toggleDarkMode() {
  document.documentElement.classList.toggle(darkModeClass);
}

const toggleDt = ref({
  borderRadius: '100%',
})

</script>

<template>
  <nav class="flex pt-3">
    <Menubar :model="items" class="flex-1 text-2xl">
      <template #start>
        <Link href="/" class="mr-10 text-indigo-300">
          <Logo/>
        </Link>
      </template>
      <template #item="{ item, props, hasSubmenu, root }">
        <template v-if="item.show">
          <Link v-if="item.url" :href="item.url" class="p-menubar-item-link">
            <span v-if="item.icon" :class="item.icon"/>
            <span>{{ item.label }}</span>
            <i v-if="hasSubmenu"
               :class="['pi pi-angle-down ml-auto', { 'pi-angle-down': root, 'pi-angle-right': !root }]"></i>
          </Link>
          <div v-else :href="item.url" class="p-menubar-item-link">
            <span v-if="item.icon" :class="item.icon"/>
            <span>{{ item.label }}</span>
            <i v-if="hasSubmenu"
               :class="['pi pi-angle-down ml-auto', { 'pi-angle-down': root, 'pi-angle-right': !root }]"></i>
          </div>
        </template>
      </template>

    </Menubar>
    <div class="flex gap-7 items-center">
      <ToggleButton
          @click="toggleDarkMode"
          v-model="darkMode"
          onIcon="ri-moon-line"
          offIcon="ri-sun-line"
          aria-label="Do you confirm"
          :dt="toggleDt"
      />
      <Menubar v-if="user" :model="accountItems" class="text-2xl">
        <template #item="{ item, props, hasSubmenu, root }">
          <Link v-if="item.url" :href="item.url" class="p-menubar-item-link">
            <span v-if="item.icon" :class="item.icon"/>
            <span>{{ item.label }}</span>
            <i v-if="hasSubmenu"
               :class="['pi pi-angle-down ml-auto', { 'pi-angle-down': root, 'pi-angle-right': !root }]"></i>
          </Link>
          <div v-else class="p-menubar-item-link">
            <span v-if="item.icon" :class="item.icon"/>
            <span>{{ item.label }}</span>
            <i v-if="hasSubmenu"
               :class="['pi pi-angle-down ml-auto', { 'pi-angle-down': root, 'pi-angle-right': !root }]"></i>
          </div>
        </template>
      </Menubar>
      <template v-else>
        <Link :href="route('login')" class="text-zinc-400 hover:underline">
          Login
        </Link>
        <Link :href="route('register')" class="text-zinc-400 hover:underline">
          <Button label="Register" severity="primary" variant="outlined" rounded/>
        </Link>
      </template>
    </div>

  </nav>
  <Divider/>
</template>

<style scoped>
:deep(.p-togglebutton-label) {
  display: none;
}


.login:hover {
  text-decoration: underline;
}

</style>


