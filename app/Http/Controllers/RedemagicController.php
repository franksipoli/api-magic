<?php

namespace App\Http\Controllers;

use App\Redemagic;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RedemagicController extends Controller
{
    public function index()
    {
        $redemagics = Redemagic::all();
        return response()->json($redemagics);
    }

    public function show($id)
    {
        $redemagic = Redemagic::find($id);

        if(!$redemagic) {
            return response()->json([
                'message'   => 'Registro Não Encontrado',
            ], 404);
        }

        return response()->json($redemagic);
    }

    public function store(Request $request)
    {
        $redemagic = new Redemagic();
        $redemagic->fill($request->all());
        $redemagic->save();

        return response()->json($redemagic, 201);
    }    

    public function update(Request $request, $id)
    {
        $redemagic = Redemagic::find($id);

        if(!$redemagic) {
            return response()->json([
                'message'   => 'Registro não encontrado',
            ], 404);
        }

        $redemagic->fill($request->all());
        $redemagic->save();

        return response()->json($redemagic);
    }

    public function destroy($id)
    {
        $redemagic = Redemagic::find($id);

        if(!$redemagic) {
            return response()->json([
                'message'   => 'Registro não encontrado',
            ], 404);
        }

        $redemagic->delete();
    }
    
}
