<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Photochallenge;

Use Storage;

use Illuminate\Support\Facades\DB;

class photochallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('inicio, first view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      dd('create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $this->validate($request, [
              'name' => 'required',
              'description' => 'required',
              'end_date' => 'required',
              'url_video' => 'required'
            ]);

            $photochallenge = new photoChallenge();

            $photochallenge -> name = $request->name;
            $photochallenge -> description = $request->description;
            $photochallenge -> end_date = $request->end_date;
            $photochallenge -> url_video = $request->url_video;
            $photochallenge -> status = 1;



            if($photochallenge->save()){
            return redirect('fotoreto_iniciar_finalizar');
            }
            else {
            return back()->with('msj', 'Error');
            }
            return back();

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
      if($request -> aceptar){

            $this->validate($request,[
              'name' => 'required',
              'description' => 'required',
              'url_video' => 'required',
              'end_date' => 'required'
              ]);

              $photochallenge = Photochallenge::find($id);
              $photochallenge -> name = $request -> name;
              $photochallenge -> description = $request -> description;
              $photochallenge -> end_date = $request -> end_date;
              $photochallenge -> url_video = $request -> url_video;

              if($photochallenge->save()){
                return back()->with('msj', 'Datos Actualizados');
              }
              else{
                return back()-> with('errormsj', 'Error');
              }
              return back();
        }
        elseif($request -> finalizar){
          if(DB::table('photochallenges')->where('id', $id)->update(['status' => 0])){
            return back()->with('msj', 'Fotoreto Desactivado');
          }
          else{
            return back()-> with('errormsj', 'Error');
          }
          return back();

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
        //
    }



    public function fotoreto_iniciar_finalizar()
    {

        $fotoreto_iniciar =  photochallenge::all()->sortByDesc("id");;
        if($fotoreto_activo = DB::select('select * from photochallenges where status = 1')){ //retorna si hay fotoretos activos
/*
              //separo la fecha obtenida de la base de datos... end_date
            list($ano, $meses ,$dias, $horas, $minutos, $segundos) = multiexplode(array("-",":", " "), $fotoreto_activo[0]->end_date);

              //resto ambas fechas para obtener el tiempo restante
              $cdano = $ano - $hora_actual['0'];
              $cdmes = $meses - $hora_actual['1'];
              $cddia = $dias - $hora_actual['2'];
              $cdhora = $horas -$hora_actual['3'];
              $cdminutos = $minutos - $hora_actual['4'];
              $cdsegundos = $segundos - $hora_actual['5'];
              //vuelvo a armar la fecha de finalización del fotoreto para luego simplemente enviarla en la variable correspondiente
*/
            $datetime1 = new \DateTime(' ',new \DateTimeZone('America/Mexico_City'));
            $datetime1->getTimestamp();
            $datetime2 = new \DateTime($fotoreto_activo[0]->end_date);
              $diff_date= $datetime1->diff($datetime2);


              $date_diff = array(     //las guardo en un arreglo
                0 => $diff_date -> y,
                1 => $diff_date -> m,
                2 => $diff_date -> d,
                3 => $diff_date -> h,
                4 => $diff_date -> i,
                5 => $diff_date -> s
              );
              //dd($datetime1, $datetime2, $date_diff);
            

              //retorno fecha actual junto con ambas vistas
            return view('controlpanel/admin/panel_admin')
            ->with(['fotoreto_activo' => $fotoreto_activo])
            ->with(['fotoreto_iniciar' => $fotoreto_iniciar])
            ->with(['count_down' => $diff_date]);
          }
        else
          return view('controlpanel/admin/panel_admin')
            ->with(['fotoreto_iniciar' => $fotoreto_iniciar]);
    }

    public function fotoreto_finalizar($id){
      dd($id);
      $photochallenge = Photochallenge::find($id);
      $photochallenge -> status = 0;

      if($photochallenge->save()){
        return back()->with('msjfinalizado', 'Fotoreto Finalizado');
      }
      else{
        return back()-> with('errormsjfinalizado', 'Error al finalizar');
      }
      return back();
    }

    public function fotoreto_filtrar(){
      $fotoreto_filtrar = new photochallenge;
      $fotoreto = DB::table('photochallenges')->where('status', 1)->value('id');
      if( $fotos = DB::table('photos')->where('id_photochallenge', $fotoreto)->where('admin_acepted', 0)->get() ){
            return view('controlpanel/admin/panel_admin')
            ->with(['fotoreto_filtrar' => $fotoreto_filtrar])
            ->with(['fotos' => $fotos]);
      }else
      return view('controlpanel/admin/panel_admin')->with(['fotoreto_filtrar' => $fotoreto_filtrar]);
    }


    public function fotoreto_crear(){
      $fotoreto_crear = new photochallenge;
      return view('controlpanel/admin/panel_admin')->with(['fotoreto_crear' => $fotoreto_crear]);
    }

    public function fotoreto_proceso(){
      $fotoreto_proceso = new photochallenge;
      return view('controlpanel/admin/panel_admin')->with(['fotoreto_proceso' => $fotoreto_proceso]);
    }

    public function fotoreto_resultados(){
      $fotoreto_resultados = new photochallenge;
      return view('controlpanel/admin/panel_admin')->with(['fotoreto_resultados' => $fotoreto_resultados]);
    }
    public function fotoreto_datos_generales(){
      $fotoreto_datos_generales = new photochallenge;
      return view('controlpanel/admin/panel_admin')->with(['fotoreto_datos_generales' => $fotoreto_datos_generales]);
    }

    //CONTROLADOR DEL usuario
    public function fotoreto_participar(){
      //si ya participo debe ocurrir una accion
      $fotoreto_participar = new photochallenge;
      if($fotoreto = DB::select('select * from photochallenges where status = 1')){
        return view('controlpanel/user/panel_user')->with(['fotoreto_participar' => $fotoreto_participar])->with(['fotoreto'=>$fotoreto]);}
      else {
        return view('controlpanel/user/panel_user')->with(['fotoreto_participar' => $fotoreto_participar]);
      }
    }




}
