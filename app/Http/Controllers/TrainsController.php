<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainsController extends Controller
{
    public function index(){
        $trains=train::all();
        return view('visualizza_treni');
    }
}
