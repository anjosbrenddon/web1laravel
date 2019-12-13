<?php

namespace App\Http\Controllers;

use App\Caminhao;
use App\Http\Resources\Viagem as AppViagem;
use App\Http\Resources\ViagemResource;
use App\Motorista;
use App\Viagem;
use Illuminate\Http\Request;

class ViagemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return ViagemResource::collection(Viagem::all());
    }

    public function create()
    {
        
        $caminhao = new Caminhao();
        $motorista = new Motorista();
        $caminhoes = $caminhao->all();
        $motoristas = $motorista->all();
        return view('viagens-criar', compact('caminhoes', 'motoristas')); 
    }

    public function store(Request $request)
    {
        if ($request->input('caminhao') == null || $request->input('motorista') == null) {
            return back()->withErrors('Verifique se possui ao menos um caminhão e um motorista cadastrado e tente novamente');
        }
        try {
            $data_inicio = $request->input('inicio')." ".str_replace(' ', '', $request->input('horario')).":00";
            $caminhao = Caminhao::find($request->input('caminhao'));
            $motorista = Motorista::find($request->input('motorista'));
            $viagem = new Viagem();
            $viagem->data_inicio = $data_inicio;
            $viagem->status = 'Em andamento';
            $viagem->ajuda_custo = $request->input('ajuda_custo');
            $viagem->quilometragem = $request->input('quilometragem');
            $viagem->combustivel = $request->input('combustivel');
            $viagem->observacao = $request->input('observacao');
            $viagem->motorista()->associate($motorista);
            $viagem->caminhao()->associate($caminhao);
            $viagem->save();
            return redirect()->route('viagens');

        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage());
        }
    }

    public function show($id)
    {
        return new ViagemResource(Viagem::find($id));
    }

    public function edit($id)
    {
        $vgm = new Viagem();
        $viagem = $vgm->with('caminhao')->with('motorista')->find($id);
        return view('viagens-finalizar', compact('viagem'));
    }

    public function update(Request $request, $id)
    {
        try {
            $data_chegada = $request->input('chegada')." ".str_replace(' ', '', $request->input('chegada_horario')).":00";
            $viagem = Viagem::find($id);
            $viagem->status ='Finalizada';
            $viagem->data_inicio = $request->input('inicio');
            $viagem->data_fim = $data_chegada;
            $viagem->ajuda_custo = $request->input('ajuda_custo');
            $viagem->quilometragem = $request->input('quilometragem');
            $viagem->combustivel = $request->input('combustivel');
            $viagem->observacao = $request->input('observacao');
            $viagem->save();
            return redirect()->route('viagens');
        } catch (\Throwable $th) {
            return back()->withErrors('Falha ao finalizar viagem');
        }
    }

    public function destroy($id)
    {
        try {
            $viagem = Viagem::find($id);
            $viagem->delete();
            return response()->json(['sucesso' => 'Viagem deletada']);
        } catch (\Throwable $th) {
            return response()->json(['erro' => $th->getMessage()]);
        }
    }
}
