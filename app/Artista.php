<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artista extends Model
{
    //vincular modelo a tabla
    protected $table = "Artist";
    protected $primaryKey = "ArtistId";
    public $timestamps = false;

    //Relacion etre artista y albums
    public function discos(){
        return $this -> hasMany('App\Disco' ,  'ArtistId');
    }

    public function canciones(){
        //hasManyThroug = PARAMETROS
        //1.MODELO NIETO
        //2.MODELO PAPA
        //3.FK DEL ABUELO EN EL PAPA
        //4.FK DEL PAPA EN EL NIETO
        //5.CLAVE PRIMARIA DEL ABUELA
        //6.CLAVE PRIMARIA DEL PAPA
        return $this ->hasManyThrough('App\Cancion' ,
                                      'App\Disco'   ,
                                      'ArtistId',
                                      'AlbumId',
                                      'ArtistId',
                                      'AlbumId' );
    }
}
  