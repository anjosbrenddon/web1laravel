<?php

namespace App\Http\Controllers;

use App\Http\Resources\MotoristaResource;
use App\Motorista;
use Illuminate\Http\Request;

class MotoristaController extends Controller
{
    public function index()
    {
        return MotoristaResource::collection(Motorista::all()->where('ativo', 1));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('motoristas-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $motorista = new Motorista();
            $motorista->nome = $request->input('nome');
            $motorista->cnh = $request->input('cnh');
            $motorista->telefone = $request->input('telefone');
            $motorista->data_nascimento = $request->input('data_nascimento');
            $motorista->estado_civil = $request->input('estado_civil');
            $motorista->experiencia = $request->input('experiencia');
            $motorista->ativo = 1;
            $motorista->save();
            return redirect()->route('motoristas');
        } catch (\Throwable $th) {
            return back()->withErrors('Falha ao cadastrar motorista');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mt = new Motorista();
        $motorista = $mt->find($id);
        return view('motoristas-form', compact('motorista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $motorista = Motorista::find($id);
            $motorista->nome = $request->input('nome');
            $motorista->cnh = $request->input('cnh');
            $motorista->telefone = $request->input('telefone');
            $motorista->data_nascimento = $request->input('data_nascimento');
            $motorista->estado_civil = $request->input('estado_civil');
            $motorista->experiencia = $request->input('experiencia');
            $motorista->save();
            return redirect()->route('motoristas');
        } catch (\Throwable $th) {
            return back()->withErrors('Falha ao editar motorista');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        try {
            $motorista = Motorista::find($id);
            $motorista->ativo = 0;
            $motorista->save();
            return response()->json(['sucesso' => 'Motorista deletado']);
        } catch (\Throwable $th) {
            return response()->json(['erro' => $th->getMessage()]);
        }
    }
}
