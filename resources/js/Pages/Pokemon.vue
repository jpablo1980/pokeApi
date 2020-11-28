<template>
  <div class="container mt-10">
    <input
      class="w-1/3 h-10 px-3 mx-1 rounded focus:outline-none focus:shadow-outline text-l shadow-lg"
      type="search"
      placeholder="Search Pokemon Names"
      v-model="pokemon"
    />
    <button
      class="h-10 rounded bg-blue-400 hover:bg-blue-500 text-gray-800 font-bold py-0 px-4 mx-10 inline-flex items-center"
      @click="pokeSearch"
    >
      Search
    </button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      pokemon: "",
    };
  },
  props: ["data"],
  methods: {
    pokeSearch() {
      if (this.pokemon == this.$props.data.name) {
        console.log(this.pokemon);
      }
    },
  },
};
</script>
