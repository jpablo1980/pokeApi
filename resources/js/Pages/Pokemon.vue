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
                        type="search"
                        class="text-gray-600 w-2/3 p-2 rounded-l-lg focus:outline-none"
                        name="search"
                        v-model="search"
                        placeholder="pokemon name"
                    />
                    <button
                        @click="pokeSearch()"
                        class="p-2 w-1/3 bg-red-500 focus:outline-none rounded-r-lg text-white hover:bg-red-600"
                        type="button"
                    >
                        Search
                    </button>
                </div>
            </div>
        </div>
        <PokemonDetail v-if="pokemonData" :data = "data" :pokemonData = "pokemonData"/>
    </div>
</template>

<script>
import PokemonDetail from './PokemonDetail'
export default {
    components: {
        PokemonDetail,
    },
    mounted() {
        console.log("Component mounted")
    },
    data() {
        return {
            search: "",
            pokemonData: "",
        };
    },
    props: ['data'],
    methods: {
       async pokeSearch() {
           try {
            await axios
                .get(`https://pokeapi.co/api/v2/pokemon/${this.search.toLowerCase()}`)
                .then(response => (this.pokemonData = response))
            console.log(this.pokemonData.data);
           } catch(error) {
           alert('Pokemon finns inte')
           }
        },
    },
};
</script>
