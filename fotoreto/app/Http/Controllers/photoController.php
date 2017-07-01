<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Photo;

Use Storage;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;


class photoController extends photochallengeController
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

 //validate request
      $this->validate($request, [
        'name' => 'required',
        'description' => 'required',
        'urlImg' => 'required'
      ]);

          //  $fotoreto = DB::select('select * from photochallenges where status = 1');
            $fotoreto = DB::table('photochallenges')->latest()->value('id');
            $photo = new Photo;

            $photo -> id_user = auth::user()->id;
            $photo -> id_photochallenge = $fotoreto;
            $photo -> photo_name = $request -> name;
            $photo -> description = $request -> description;
            $photo -> admin_acepted = 0;
            $photo -> photo_puntuation = 0;
            $photo -> visiting_sum = 0;

            $img = $request -> file('urlImg');

            $file_route = time().'_'.$img -> getClientOriginalName();

            Storage::disk('imgParticipante')->put($file_route, file_get_contents($img->getRealPath() ) );
            //nombre del archivo y contenido.
            //Storage::disk('imgParticipante')->delete($request -> img);

            $photo-> urlImg_photo = $file_route;


          if($photo->save()){
            return back()->with('msj', 'Subida con Exito!, el administrador revisara que este todo bien y
            luego será publicada');
          }
          else {
            return back()->with('errormsj', 'Error1');
          }

          return back()->with('errormsj', 'Error2');


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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function photochallenge_desktop_show()
    {
        if($photochallenge = DB::table('photochallenges')->where('status',1)->first()){// hay un fotoreto activo
          $id = $photochallenge->id;
            $diff_date = photochallengeController::diferencia_date($photochallenge);

          $photos = DB::table('photos')->where([['id_photochallenge',$id],['admin_acepted', 1]])->get();

          if(empty($photos[0])){ // no hay fotos pero si un fotoreto activo
            return view('welcome')->with(['photochallenge' => $photochallenge]);

          }
          else {  //hay un fotoreto activo con fotos autorizadas

            return view('welcome')->with(['photos' => $photos])->with(['photochallenge' => $photochallenge])->with(['diff_date' => $diff_date]);
          }
        }
        else{//no hay ni un fotoreto activo
            return view('welcome');
        }
    }


    public function photo_decision(Request $request){
      //solo actualiza admin_acepted = 1
      if($request -> aceptar){
          $id = $request -> id_foto;
          if(DB::table('photos')->where('id', $id)->update(['admin_acepted' => 1])){
            return back()->with('msj', 'Foto Publicada');
          }
          else{
            return back()-> with('errormsj', 'Ha ocurrido un error');
          }
          return back();

      }
      elseif($request -> rechazar){
          $id = $request -> id_foto;
          $url_img = DB::table('photos')->where('id', $id)->value('urlImg_photo');
          if(Storage::disk('imgParticipante')->delete($url_img)){
            if(DB::table('photos')->where('id', $id)->delete()){
              return back()->with('msj', 'Foto Eliminada Correctamente');
                }
            }
        else{
          return back()->with('errormsj', 'Ha ocurrido un error, revisar base de datos y disk');
        }
        return back();
      }
    }
}
