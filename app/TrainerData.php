<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainerData extends Model
{
    protected  $primaryKey = 'UserID';
    protected $table = 'UserData';
    protected $fillable = ['UserName','CaughtPokemon','Balance'];
    public $timestamps = false;
}
