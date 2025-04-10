<script setup>
import {Tabs, Tab, TabList, TabPanel, TabPanels} from "primevue";
import {ref} from "vue";

const tabListDt = ref({
  root: {background: 'yellow'},
  activeBar: {background: 'yellow'}
});

const pt = {
  root: {background: '{primary.900}'},
  activeBar: {background: '{primary.900}'}
}
</script>

<template>
  <div>
    <Tabs value="metrics">
      <TabList class="text-2xl" :pt="pt" :dt="tabListDt">
        <Tab value="metrics">{{ $t('Metrics') }}</Tab>
        <Tab value="profile">{{ $t('Profile') }}</Tab>
      </TabList>
      <TabPanels>
        <TabPanel value="metrics">
          <p class="m-0">
            metriki
          </p>
        </TabPanel>
        <TabPanel value="profile">
          <p class="m-0">
            profile
          </p>
        </TabPanel>
      </TabPanels>
    </Tabs>
  </div>

</template>