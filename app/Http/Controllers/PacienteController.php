<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarPacienteRequest;
use App\Http\Requests\GuardarPacienteRequest;
use App\Http\Resources\PacienteResource;
use App\Models\Paciente;

class PacienteController extends Controller
{
    public function index()
    {
        // return PacienteResource::collection(Paciente::paginate(2));

        return PacienteResource::collection(Paciente::where([
            ['status', true],
        ])->simplePaginate(2));
    }

    public function store(GuardarPacienteRequest $request)
    {
        $paciente = Paciente::create($request->all());
        // return response()->json([
        //     'res' => true,
        //     'message' => 'Paciente creado correctamente.',
        //     'paciente' => $paciente
        // ], 200);
        
        return (new PacienteResource($paciente))->additional([
            'message' => 'Paciente creado correctamente.'
        ]);
    }

    public function show(Paciente $paciente)
    {
        // return response()->json([
        //     'res' => true,
        //     'paciente' => $paciente
        // ], 200);

        if($paciente->status){
            return new PacienteResource($paciente);
        } else {
            return response()->json(["res" => false, "error" => "Dato no encontrado.", 'data' => []], 404);
        }
    }

    public function update(ActualizarPacienteRequest $request, Paciente $paciente)
    {
        $paciente->update($request->all());
        // return response()->json([
        //     'res' => true,
        //     'message' => 'Actualizado correctamente.',
        //     'paciente' => $paciente
        // ], 200);
        return (new PacienteResource($paciente))->additional([
            'message' => 'Paciente actualizado correctamente.'
        ]);
    }

    public function destroy(Paciente $paciente)
    {
        $paciente->update([$paciente->status = false]);

        return response()->json([
            'res' => true,
            'message' => 'Paciente eliminado correctamente.',
        ], 200);
            
        // $paciente->delete();
        // return (new PacienteResource($paciente))->additional([
        //     'message' => 'Paciente eliminado correctamente.'
        // ]);
    }
}
