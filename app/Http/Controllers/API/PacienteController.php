<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Paciente;
use App\Http\Requests\GuardarPacienteRequest;
use App\Http\Requests\ActualizarPacienteRequest;
use App\Http\Resources\PacienteResource;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PacienteResource::collection(Paciente::paginate(4));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarPacienteRequest $request)
    {
        return (new PacienteResource(Paciente::create($request->all())))
                ->additional(['msg' => 'Paciente guardado con éxito']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        return new PacienteResource($paciente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarPacienteRequest $request, Paciente $paciente)
    {
        $paciente->update($request->all());

        return (new PacienteResource($paciente))
                ->additional(['msg' => 'Paciente actualizado con éxito']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();

        return (new PacienteResource($paciente))
                ->additional(['msg' => 'Paciente eliminado con éxito']);
    } 
}
