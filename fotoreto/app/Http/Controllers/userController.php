<?php

namespace App\Http\Controllers;

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

        return view('controlpanel/admin/panel_admin');
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
      $this->validate($request, [
      'name' => 'required',
      'email' => 'required',
      'password' => 'required',
      'id_direction' => 'required',
      'user_puntuation' => 'required',
      'id_user_type' => 'required'

          ]);
          $user = User::find($id);

          $user -> name = $request->name;
          $user -> email = $request->email;
          $user -> password = $request->password; //me va a llegar enciptada
          $user -> id_direction = $request->id_direction;
          $user -> user_puntuation = $request->user_puntuation;
          $user -> id_user_type = $request->id_user_type;     //tengo que recuperar los tipos de usuario que se encuentran en la tabla
        //  user->save();

        /*  $img = $request -> file('urlImg');
          $file_route = time().'_'.$img -> getClientOriginalName();
          Storage::disk('imgNoticias')->put($file_route, file_get_contents($img->getRealPath() ) );
          Storage::disk('imgNoticias')->delete($request -> img);
          $noticia->urlImg=$file_route;  */

        if($user->save()){
          return redirect('home');
        }
        else {
          return back()->with('msj', 'Error');
        }
        return back();

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
      $usuario = User::all();
     return view('controlpanel/admin/panel_admin')->with(['user' => $usuario]);


    }
}
