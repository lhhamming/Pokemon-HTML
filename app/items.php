<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    protected  $primaryKey = 'ItemID';
    protected $table = 'Items';
    protected $fillable = ['Itemname','ItemDescription','Itemprice','Buyable'];
    public $timestamps = false;
}
