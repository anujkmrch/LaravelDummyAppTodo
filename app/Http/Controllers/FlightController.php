<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use \App\Models\Flight;

class FlightController extends Controller
{
    public function list(): View {
        // Some Model Operation
        $flights = Flight::all();
        return view('flights/list',
        ['flights'=>$flights]);
    }

    public function show(string $id): View {
        // Some request from Model
        $flight = Flight::findOrFail($id); 

        return view('flights/single',['flight'=>$flight]);
        
    }
}