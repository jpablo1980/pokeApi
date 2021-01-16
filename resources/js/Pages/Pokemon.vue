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
                <div
                    class="m-0 p-0 text-3xl text-white antialiased text-center"
                >
                    Pokedex
                </div>
                <div class="m-0 p-0 text-xl text-white antialiased text-center">
                    Search your favourite Pokemon
                </div>
                <div class="mt-3 flex flex-row flex-wrap">
                    <input
                        @keyup.enter="onEnter"
                        type="search"
                        class="text-gray-600 w-2/3 p-2 rounded-l-lg focus:outline-none"
                        name="search"
                        v-model="search"
                        placeholder="pokemon name"
                    />
                    <button
                        @click="pokeSearch(search)"
                        class="p-2 w-1/3 bg-red-500 focus:outline-none rounded-r-lg text-white hover:bg-red-600"
                        type="button"
                    >
                        Search
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {

    mounted() {
        console.log("Component Pokemon mounted");
    },
    computed: {},
    data() {
        return {
            search: "",
            pokemonData: "",
            pokeDesc: "",
            loaded: ""
        };
    },
    methods: {
        onEnter(event) {
            if (event.key === "Enter") {
                console.log("You pressed Enter and sent: " + this.search);
                this.pokeSearch();
            }
        },
        pokeSearch() {
            this.$inertia.get(route('show', [this.search]));
                this.search = "";
        },
    }
};
</script>
