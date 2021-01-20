<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Bike;

class BikeController extends Controller
{
    public function index(){
         // Data from DB
        $bikes = Bike::all();
        //dd($bikes);
        return response()->json($bikes);
    }
}
