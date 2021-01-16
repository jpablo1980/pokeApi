<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use GuzzleHttp\Message\Response;
use GuzzleHttp\Client;
use App\Models\Pokemon;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class PokemonController extends Controller {

    public function index(Request $request) {

        return Inertia::render('Pokemon');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Pokemon $pokemon
     * @return \Illuminate\Http\Response
     */
    public function store(string $search) {
    //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function show(string $search) {
        // Instance of Pokemon model.
        $pok = Pokemon::where('name', $search)->first();
        if ($pok) {
            //return Inertia...... PokemonDetail
            return Inertia::render('PokemonDetail', ['pokemon' => $pok]);
        }

        // Om vi kom hit.. Fanns ingen pokemon i Databasen.
        // Kör en APi request.
        // Array med 17st ....

        $response = Http::get('https://pokeapi.co/api/v2/pokemon/' . $search);
        $pokemonData = $response->json();

        if ($pokemonData != null) {
            $response = Http::get('https://pokeapi.co/api/v2/pokemon-species/' . $pokemonData['name']);
            $description = $response->json();
            //dd($pokemonData);
            //dd($description);
            $pokemon = new Pokemon;
            //dd($pokemon);
            $pokemon->name = $pokemonData['name'];
            //dd($pokemon->name);
            $pokemon->type = $pokemonData['types'][0]['type']['name'];
            //dd($pokemon->type);
            $pokemon->height = $pokemonData['height'];
            $pokemon->weight = $pokemonData['weight'];
            $pokemon->description = $description['flavor_text_entries'][7]['flavor_text'];
            $pokemon->image = $pokemonData['sprites']['other']['official-artwork']['front_default'];
            //dd($pokemon->image);
            $pokemon->save();
            return Inertia::render('PokemonDetail', ['pokemon' => $pokemon]);
        }


        return Redirect::route('index');

        //return Redirect::route('show',  ['pokemon' => $pokemon],303);
        // Sen kan vi redirecta ned Inertia Redirect?? Till våra nya pokemon.. Eller bara köra Intertia Render..


        //return Redirect::route('store', ['search' => $search, 'data' => $data], 303);
        //return response()->json([]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
