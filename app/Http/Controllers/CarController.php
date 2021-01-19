<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    public function store(){
        $car = new Car();

        $car->marca = 'Maserati';
        $car->modello = 'Quattroporte S';
        $car->targa = 'FR090TX';

        $car->save();
    }
}
