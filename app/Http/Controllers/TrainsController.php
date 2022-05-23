<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainsController extends Controller
{
    public function index()
    {
        $trains = Train::where('data_di_partenza', 'like', '2022-05-23')->get();
        return view('visualizza_treni', ['arrayTreni' => $trains]);
    }
}
