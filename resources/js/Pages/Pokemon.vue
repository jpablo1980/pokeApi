<template>
  <div>
    <div
      class="w-full bg-gray-600 bg-no-repeat"
      style="
        background-blend-mode: multiply;
        background-position: center center;
        background-size: 100% auto;
        background-image: url('https://g2qkq20j3w22tgg8w3w482sr-wpengine.netdna-ssl.com/wp-content/uploads/2016/07/Pokemon_go_banner.png');
      "
    >
      <div
        class="p-10 py-20 flex flex-col flex-wrap justify-center content-center"
      >
        <div class="m-0 p-0 text-3xl text-white antialiased text-center">
          Pokedex
        </div>
        <div class="m-0 p-0 text-xl text-white antialiased text-center">
          Search your favourite Pokemon
        </div>
        <div class="mt-3 flex flex-row flex-wrap">
          <input
            type="text"
            class="text-gray-600 w-2/3 p-2 rounded-l-lg focus:outline-none"
            placeholder="pokemon name"
          />
          <button
            class="p-2 w-1/3 bg-red-500 focus:outline-none rounded-r-lg text-white hover:bg-red-600"
            type="button"
          >
            Search
          </button>
        </div>
      </div>
    </div>
    <!-- animation -->
    <section
      class="p-10 min-h-full flex md:flex-row items-center justify-around bg-red-500 flex-wrap sm:flex-col"
    >
      <!-- scale -->
      <div class="h-32 w-32 relative cursor-pointer mb-5">
        <div
          class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"
        ></div>
        <div
          class="absolute inset-0 transform hover:scale-75 transition duration-300"
        >
          <div class="h-full w-full bg-white rounded-lg shadow-2xl">Pikachu</div>
        </div>
      </div>

      <!-- roatate and scale -->
      <div class="h-32 w-32 relative cursor-pointer mb-5">
        <div
          class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"
        ></div>
        <div
          class="absolute inset-0 transform hover:rotate-90 hover:scale-75 transition duration-300"
        >
          <div class="h-full w-full bg-white rounded-lg shadow-2xl"></div>
        </div>
      </div>

      <!-- rotate -->
      <div class="h-32 w-32 relative cursor-pointer mb-5">
        <div
          class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"
        ></div>
        <div
          class="absolute inset-0 transform hover:rotate-45 transition duration-300"
        >
          <div class="h-full w-full bg-white rounded-lg shadow-2xl"></div>
        </div>
      </div>

      <!-- rotate minus -->
      <div class="h-32 w-32 relative cursor-pointer mb-5">
        <div
          class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"
        ></div>
        <div
          class="absolute inset-0 transform hover:-rotate-45 transition duration-300"
        >
          <div class="h-full w-full bg-white rounded-lg shadow-2xl"></div>
        </div>
      </div>

      <!-- Origin -->
      <div class="h-32 w-32 relative cursor-pointer mb-5">
        <div
          class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"
        ></div>
        <div
          class="absolute inset-0 transform origin-left hover:-rotate-45 transition duration-300"
        >
          <div class="h-full w-full bg-white rounded-lg shadow-2xl"></div>
        </div>
      </div>

      <!-- translate -->
      <div class="h-32 w-32 relative cursor-pointer mb-5">
        <div
          class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"
        ></div>
        <div
          class="absolute inset-0 transform hover:-translate-x-10 transition duration-300"
        >
          <div class="h-full w-full bg-white rounded-lg shadow-2xl"></div>
        </div>
      </div>

      <div class="h-32 w-32 relative cursor-pointer mb-5">
        <div
          class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"
        ></div>

        <div
          class="absolute inset-0 transform hover:rotate-90 hover:translate-x-full hover:scale-150 transition duration-300"
        >
          <div class="h-full w-full bg-white rounded-lg shadow-2xl"></div>
        </div>
      </div>

      <!-- skew -->
      <div class="h-32 w-32 relative cursor-pointer mb-5">
        <div
          class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"
        ></div>
        <div
          class="absolute inset-0 transform hover:skew-y-12 transition duration-300"
        >
          <div class="h-full w-full bg-white rounded-lg shadow-2xl"></div>
        </div>
      </div>
    </section>
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
