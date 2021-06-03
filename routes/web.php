<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("variables", function (){
   $mensaje = 10;
   var_dump($mensaje);
   echo "<hr />";
   $mensaje ="John Vergel";
   var_dump($mensaje);
});

Route::get("arreglos", function (){

    $estudiantes = ["AN"=> "Ana",
                    "MA"=> "Maria",
                    "JO"=> "Jorge"
                    ];
    echo "<pre>";
    print_r($estudiantes);
    echo "</pre>";
});

Route::get( "Paises" , function() {
    $paises = [
         "COLOMBIA" =>[
          "Capital" => "Bogota",
          "Moneda" => "Peso",
          "Poblacion" => 50.34
        ],
        "PERU" =>[
            "Capital" => "Lima",
            "Moneda" => "SOL",
            "Poblacion" => 32.84
          ],
        "PARAGUAY" =>[
            "Capital" => "Asuncion",
            "Moneda" => "Guarani",
            "Poblacion" => 70.34
          ],

        ];
        return view("paises")->with("Naciones", $paises);

});

Route::get('formulario_buscador',"MetabuscadorController@formulario_buscador" );

Route::post('buscar',"MetabuscadorController@buscar");


