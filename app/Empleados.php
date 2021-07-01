<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    //
    protected $table='employee';

    protected $primaryKey='EmployeeId';

    public $timestamps= false;


    //relacion
    public function clientes (){
        return $this->hasMany ('App\Cliente' , 'SupportRepId');
    }
    //
    public function facturas (){
        return $this->hasManyThrough ('App\Factura' ,
                                      'App\Cliente',
                                      'SupportRepId',
                                      'CustomerId',
                                      'EmployeeId',
                                      'CustomerId'
                                    );
    }
}
