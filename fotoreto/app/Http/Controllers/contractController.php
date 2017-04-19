<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contract;

class contractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('contract controller index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function contract_pendientes(){
      $contract_pendientes = new contract;
      return view('controlpanel/admin/panel_admin')->with(['contract_pendientes'=> $contract_pendientes]);
    }

    public function contract_in_process(){
      $contract_in_process = new contract;
      return view('controlpanel/admin/panel_admin')->with(['contract_in_process'=> $contract_in_process]);
    }

    public function contract_terminados(){
      $contract_terminados = new contract;
      return view('controlpanel/admin/panel_admin')->with(['contract_terminados'=> $contract_terminados]);
    }

    public function contract_datos_generales(){
      $contract_datos_generales = new contract;
      return view('controlpanel/admin/panel_admin')->with(['contract_datos_generales'=> $contract_datos_generales]);

    }
}
