<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //
    protected $table='artist';

    protected $primaryKey='ArtistId';

    public $timestamps= false;
}