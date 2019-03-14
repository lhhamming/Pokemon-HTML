<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pokemon extends Model
{
    protected  $primaryKey = 'PokemonID';
    protected $table = 'Pokemons';
    protected $fillable = ['Pokemonname','PokemonType','PokemonMove1','PokemonMove2','PokemonMove3','PokemonMove4'];
    public $timestamps = false;
}
