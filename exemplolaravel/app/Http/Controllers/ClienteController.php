<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function store(Request $request)
    {
        $cliente = Cliente::create([
            'nome' => $request->nome,
            'celular' => $request->celular,
            'CPF' => $request->CPF,
            'email' => $request->email,
            'data_nascimento' => $request->data_nascimento,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'pais' => $request->pais,
            'rua' => $request->rua,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'CEP' => $request->CEP
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Cliente cadastrado',
            'data' => $cliente
        ]);
    }

    public function findByEmail(Request $request){
        $cliente = Cliente::where('email', 'like', '%'. $request->email . '%')->get();

        if($cliente->isEmpty()){
            return response()->json([
            'status'=>false,
            'message'=> 'Cliente não encontrado'
            ]);
        }
        return response()->json([
            'status'=>true,
            'message'=>'Cliente encontrado',
            'data'=>$cliente
        ]);
    }

    public function findByCPF(Request $request){
        $cliente = Cliente::where('CPF', '=', $request->CPF)->get();

        if($cliente->isEmpty()){
            return response()->json([
                'status'=>false,
                'message'=>'Cliente não encontrado',
            ]);
        }
        return response()->json([
            'status'=> true,
            'message'=>'Cliente encontrado',
            'data'=> $cliente
        ]);
    }

    public function findByCidade(Request $request){
        $cliente = Cliente::where('cidade', 'like', '%'. $request->cidade . '%')->get();

        if($cliente->isEmpty()){
            return response()->json([
            'status'=>false,
            'message'=> 'Cliente não encontrado'
            ]);
        }
        return response()->json([
            'status'=>true,
            'message'=>'Cliente encontrado',
            'data'=>$cliente
        ]);
    }

    public function findByEstado(Request $request){
        $cliente = Cliente::where('estado', 'like', '%'. $request->estado . '%')->get();

        if($cliente->isEmpty()){
            return response()->json([
            'status'=>false,
            'message'=> 'Cliente não encontrado'
            ]);
        }
        return response()->json([
            'status'=>true,
            'message'=>'Cliente encontrado',
            'data'=>$cliente
        ]);
    }

    public function findByAno(Request $request){
        $cliente = Cliente::whereYear('data_nascimento', '=', $request->ano)->get();

        if($cliente->isEmpty()){
            return response()->json([
            'status'=>false,
            'message'=> 'Cliente não encontrado'
            ]);
        }
        return response()->json([
            'status'=>true,
            'message'=>'Cliente encontrado',
            'data'=>$cliente
        ]);
    }

    public function findByMes(Request $request){
        $cliente = Cliente::whereMonth('data_nascimento', '=', $request->mes)->get();

        if($cliente->isEmpty()){
            return response()->json([
            'status'=>false,
            'message'=> 'Cliente não encontrado'
            ]);
        }
        return response()->json([
            'status'=>true,
            'message'=>'Cliente encontrado',
            'data'=>$cliente
        ]);
    }

    public function findByMesAno(Request $request){
        $cliente = Cliente::whereMonth('data_nascimento', '=', $request->mes)->whereYear('data_nascimento',
         '=', $request->ano)->get();


        if($cliente->isEmpty()){
            return response()->json([
            'status'=>false,
            'message'=> 'Cliente não encontrado'
            ]);
        }
        return response()->json([
            'status'=>true,
            'message'=>'Cliente encontrado',
            'data'=>$cliente
        ]);
    }

    public function findByBairro(Request $request){
        $cliente = Cliente::where('cidade', 'like', '%'. $request->bairro. '%')->get();

        if($cliente->isEmpty()){
            return response()->json([
            'status'=>false,
            'message'=> 'Cliente não encontrado'
            ]);
        }
        return response()->json([
            'status'=>true,
            'message'=>'Cliente encontrado',
            'data'=>$cliente
        ]);
    }

    public function findByName(Request $request){
        $cliente = Cliente::where('nome', 'like', '%'. $request->nome. '%')->get();

        if($cliente->isEmpty()){
            return response()->json([
            'status'=>false,
            'message'=> 'Cliente não encontrado'
            ]);
        }
        return response()->json([
            'status'=>true,
            'message'=>'Cliente encontrado',
            'data'=>$cliente
        ]);
    }

    public function findById($id){
        $cliente = Cliente::find($id);

        if($cliente==null){
            return response()->json([
            'status'=>false,
            'message'=> 'Cliente não encontrado'
            ]);
        }
        return response()->json([
            'status'=>true,
            'message'=>'Cliente encontrado',
            'data'=>$cliente
        ]);
    }


}