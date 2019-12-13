<?php

namespace App\Http\Controllers;

use App\Caminhao;
use App\Motorista;
use App\Viagem;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $viagens = new Viagem();
        $motoristas = new Motorista();
        $caminhoes = new Caminhao();
        $count = array(
            'viagens' => Viagem::count(),
            'motoristas' => count($motoristas->all()),
            'caminhoes' => count($caminhoes->all())
        );
        return view('home', compact('count'));
    }
}
