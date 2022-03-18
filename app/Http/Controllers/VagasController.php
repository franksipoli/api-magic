<?php

namespace App\Http\Controllers;

use App\Vagas;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class VagasController extends Controller
{
    public function index()
    {
        $vagas = Vagas::with('redemagic')->get();
        return response()->json($vagas);
    }

    public function show($id)
    {
        $vaga = Vagas::with('redemagic')->find($id);

        if(!$vaga) {
            return response()->json([
                'message'   => 'Registro não encontrado!',
            ], 404);
        }

        return response()->json($vaga);
    }

    public function store(Request $request)
    {
        $vagas = new Vagas();
        $vagas->fill($request->all());
        $vagas->save();

        return response()->json($vagas, 201);
    }    

    public function update(Request $request, $id)
    {
        $vaga = Vagas::find($id);

        if(!$vaga) {
            return response()->json([
                'message'   => 'Registro não encontrado',
            ], 404);
        }

        $vaga->fill($request->all());
        $vaga->save();

        return response()->json($vaga);
    }

    public function destroy($id)
    {
        $vaga = Vagas::find($id);

        if(!$vaga) {
            return response()->json([
                'message'   => 'Registro não encontrado',
            ], 404);
        }

        $vaga->delete();
    }

}