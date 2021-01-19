<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class HomeController extends Controller
{   
    // Homepage
    public function index(){

        // Get data from DB
        $cars = Car::all();
        //dd($cars);

        /* $cars = Car::where('marca', '!=' , 'Ford')
            ->orderBy('modello', 'asc')
            ->get(); */



      return view('home', compact('cars'));
    }
}
