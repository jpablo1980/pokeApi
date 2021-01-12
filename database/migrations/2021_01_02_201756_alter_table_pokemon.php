<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Pokemon;
class AlterTablePokemon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pokemon', function (Blueprint $table){
        $table->string('name');
        $table->string('type');
        $table->integer('height');
        $table->integer('weight');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pokemon', function (Blueprint $table) {
            Schema::dropIfExists(['name','type','height', 'weight']);
        });
    }
}
