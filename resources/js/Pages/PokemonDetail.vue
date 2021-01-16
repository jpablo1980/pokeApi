<template>
    <div>
    <pokemon />
    <div class="bg-white flex justify-center">
        <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24 items-center">
            <div class="space-y-12">
                <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl flex justify-center">
                        {{ pokemon.name.toUpperCase() }}</h2>
                    <p class="text-xl text-gray-500">{{ pokemon.description}}</p>
                </div>
                <ul class="space-y-12 ">
                    <li>
                        <div class="space-y-4 flex justify-center">
                            <div class="aspect-w-3 aspect-h-2 ">
                               <img class="object-cover shadow-lg rounded-lg" :src="pokemon.image">
                            </div>
                            <div class="space-y-2 pl-4">
                                <div class="text-lg leading-6 font-medium space-y-1">
                                    <h3 class="font-bold">Type: <span class="capitalize"> {{ pokemon.type }}</span></h3>
                                    <p class="font-semibold">Height: <span
                                        class="capitalize font-normal"> {{ pokemon.height }}</span></p>
                                    <p class="font-semibold">Weight: <span
                                        class="capitalize font-normal"> {{ pokemon.weight }}</span></p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</template>



<script>

import Pokemon from './Pokemon'

export default {
    components: {
        Pokemon,
    },
    mounted() {
        console.log('Component PokemonDetail mounted');
    },
    data() {
        return {};
    },
    props: ['pokemon'],
    methods: {},
};
</script>
