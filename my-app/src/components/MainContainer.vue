<template>
  <div class="container">
    <h1>ADC Calculator</h1>
    <!-- select dropdown with all champion names -->
    <select v-model="selectedChampion">
      <option v-for="champion in champions" :key="champion.id" :value="champion.id">
        {{ champion.name }}
      </option>
    </select>
  </div>
</template>

<script>
import { championService } from '../services/ChampionService.js';
import { itemService } from '../services/ItemsService.js';

export default {
  name: 'MainContainer',
  data() {
    return {
      champions: [],
      items: [],
    };
  },
  mounted () {
    championService.getChampions().then((champions) => {
      this.champions = champions;
    });
    itemService.getItems().then((items) => {
      this.items = items;
    });
  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
