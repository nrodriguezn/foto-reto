<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Photochallenge;

class photochallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function fotoreto_iniciar_finalizar()
    {
        $fotoreto_iniciar = new photochallenge;
        //metodo para iniciar fotoreto
        return view('controlpanel/admin/panel_admin')->with(['fotoreto_iniciar' => $fotoreto_iniciar]);
    }

    public function fotoreto_proceso(){
      $fotoreto_iniciar = new photochallenge;
      return view('controlpanel/admin/panel_admin')->with(['fotoreto_proceso' => $fotoreto_proceso]);
    }

    public function fotoreto_filtrar(){
      $fotoreto_filtrar = new photochallenge;
      return view('controlpanel/admin/panel_admin')->with(['fotoreto_filtrar' => $fotoreto_filtrar]);
    }

    public function fotoreto_resultados(){
      $fotoreto_resultados = new photochallenge;
      return view('controlpanel/admin/panel_admin')->with(['fotoreto_resultados' => $fotoreto_resultados]);
    }
    public function fotoreto_datos_generales(){
      $fotoreto_datos_generales = new photochallenge;
      return view('controlpanel/admin/panel_admin')->with(['fotoreto_datos_generales' => $fotoreto_datos_generales]);
    }






}
