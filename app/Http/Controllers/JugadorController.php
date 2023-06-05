<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugador;

class JugadorController extends Controller
{
    public function index(){
        return view('form');
    }

    public function store(request $request){
        $jugador = Jugador::create($request->all());
        return redirect()->route('jugadores.show');
    }

    public function show(){
        $jugadores = Jugador::all();

        return view('table', ['jugadores' => $jugadores]);
    }
}
