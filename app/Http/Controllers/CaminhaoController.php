<?php

namespace App\Http\Controllers;

use App\Caminhao;
use App\Http\Resources\CaminhaoResource;
use Illuminate\Http\Request;

class CaminhaoController extends Controller
{
    public function index()
    {
        return CaminhaoResource::collection(Caminhao::all()->where('ativo', 1));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('caminhoes-form');
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
            $caminhao = new Caminhao();
            $caminhao->placa = $request->input('placa');
            $caminhao->modelo = $request->input('modelo');
            $caminhao->cor = $request->input('cor');
            $caminhao->ano = $request->input('ano');
            $caminhao->chassi = $request->input('chassi');
            $caminhao->ativo = 1;
            $caminhao->save();
            return redirect()->route('caminhoes');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
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
        return CaminhaoResource::collection(Caminhao::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cm = new Caminhao();
        $caminhao = $cm->find($id);
        return view('caminhoes-form', compact('caminhao'));
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
            $caminhao = Caminhao::find($id);
            $caminhao->placa = $request->input('placa');
            $caminhao->modelo = $request->input('modelo');
            $caminhao->cor = $request->input('cor');
            $caminhao->ano = $request->input('ano');
            $caminhao->chassi = $request->input('chassi');
            $caminhao->save();
            return redirect()->route('caminhoes');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
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
            $caminhao = Caminhao::find($id);
            $caminhao->ativo = 0;
            $caminhao->save();
            return response()->json(['sucesso' => 'Caminhao deletado']);
        } catch (\Throwable $th) {
            return response()->json(['erro' => $th->getMessage()]);
        }
    }
}
