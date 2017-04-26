<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\User;

use Storage;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      if(Auth::user()->id_user_type == 1){
        return view('controlpanel/admin/panel_admin');
      }
      elseif(Auth::user()->id_user_type == 2){
        return view('controlpanel/user/panel_user');
      }
      elseif(Auth::user()->id_user_type == 3){
        return view('controlpanel/empleador/panel_empleador');
      }
      else{
        return view('welcome');
      }
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
        dd('user controller');
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
      $usuario= User::find($id);
      return view('home')->with(['edit' => true, 'user' => $usuario]);

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
    /*  $img = $request -> file('urlImg');
      $file_route = time().'_'.$img -> getClientOriginalName();
      Storage::disk('imgNoticias')->put($file_route, file_get_contents($img->getRealPath() ) );
      Storage::disk('imgNoticias')->delete($request -> img);
      $noticia->urlImg=$file_route;  */
      if(auth::user()->id_user_type == 1){
          $this->validate($request, [
          'name' => 'required',
          'email' => 'required',
          'id_direction' => 'required',
          'phone' => 'required',
          'user_puntuation' => 'required',
          'id_user_type' => 'required'

              ]);

              $user = User::find($id);
              $user -> name = $request->name;
              $user -> email = $request->email;
              $user -> id_direction = $request->id_direction;
              $user -> user_puntuation = $request->user_puntuation;
              $user -> phone = $request->phone;
              $user -> id_user_type = $request->id_user_type;

            if($user->save()){
              return back()->with('msj', 'Datos Actualizados');
            }
            else {
              return back()->with('errormsj', 'Error');
            }
            return back();
      }
      elseif(auth::user()->id_user_type == 2){

            $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'id_direction' => 'required',
            'phone' => 'required'
            ]);

            $user = User::find($id);
            $user -> name = $request->name;
            $user -> email = $request->email;
            $user -> id_direction = $request->id_direction;
            $user -> phone = $request->phone;

            if($user->save()){
              return back()->with('msj', 'Datos Actualizados');
            }
            else {
              return back()->with('errormsj', 'Error');
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

    public function administrar(){
      if(Auth::user()->id_user_type == 1){
        $usuario = User::all();
       return view('controlpanel/admin/panel_admin')->with(['user' => $usuario]);
      }
      elseif(Auth::user()->id_user_type == 2){
        $id = auth::user()->id;
        $user = User::find($id);
        return view('controlpanel/user/panel_user')->with(['user' => $user]);
      }

    }

    public function participacion(){
      $participacion = new user;
      return view('controlpanel/admin/panel_admin')->with(['participacion' => $participacion]);
    }

    public function datos_usuario(){
      $datos_usuario = new user;
      return view('controlpanel/admin/panel_admin')->with(['datos_usuario' => $datos_usuario]);
   }

   public function contact(){
     return view('layouts/quienes_somos');
   }


}
