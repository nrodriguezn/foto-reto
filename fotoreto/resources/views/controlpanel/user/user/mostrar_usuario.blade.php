<br><br>

@if(session()->has('msj'))
<div class="alert alert-success" role="alert">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
<div class="alert alert-danger" role="alert">Error al guardar los datos</div>
@endif
<div class="container">

      <div class="col-md-6">
        <form class="form-horizontal" role="form" action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data" >
              <input name="_method" type="hidden" value="PUT">
                      {{ csrf_field() }}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                  </div>
                  <div class="form-group">
                    <label >Email</label>
                    <input class="form-control" type="email" name="email" rows="3" value="{{ $user->email }}"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Dirección </label>
                    <input type="text" class="form-control" name="id_direction" value="{{ $user->id_direction }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Telefono</label>
                    <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
                  </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
        </div>
        <div class="col-md-6" align="center">
            <h1>Imagen Perfil</h1>
            <img src="images/perfil.jpg" alt="Imagen Perfil" class="img-circle img-responsive" width="60%">
            <input type="file" name="urlImg_profile" value="{{ $user->urlImg_profile }}">
            <p>Queda pendiente arreglar esta seccion, aun no agrego imagenes al disco ni nada</p>
        </div>
      </form>
</div>
<br><br>
