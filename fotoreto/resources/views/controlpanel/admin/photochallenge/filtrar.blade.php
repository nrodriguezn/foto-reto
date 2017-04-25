<br>
<div class="container">



        <h1 align="center">Filtrar Fotografias del FotoReto en Curso!</h1>
        @if(session()->has('msj'))
          <div class="alert alert-success" role="alert" align="center">{{ session('msj') }}</div>
        @endif
        @if(session()->has('errormsj'))
          <div class="alert alert-danger" role="alert" align="center">{{ session('errormsj')}}</div>
        @endif
          <br>
        @if(isset($fotos))
        <table class="table table-striped">
          <thead>
            <th>Fotografia</th><th>Nombre</th><th>Descripcion</th><th>Aceptar</th><th>Rechazar</th>
          </thead>
        <tbody>
          @foreach($fotos as $n)
              <form class="form-horizontal" role="form" action="" method="POST" enctype="multipart/form-data" >
                  <input type="text" name="id_foto" value="{{ $n->id}}" hidden>
                        {{ csrf_field() }}
                  <tr>
                    <td width="350px"><img src="imgParticipante/{{ $n->urlImg_photo }}" alt="imagen" class="img-thumbnail" width="90%"> </td>
                    <td><p>{{ $n->photo_name }}</p></td>
                    <td><p>{{ $n->description }}</p></td>
                    <td><button  class="btn btn-success btn-lg btn-block" name="aceptar" value="aceptar" onclick=this.form.action="{{ route('photo.decision') }}">Aceptar</button> </td>
                    <td><button  class="btn btn-danger btn-lg btn-block" name="rechazar" value="rechazar" onclick=this.form.action="{{ route('photo.decision') }}">Rechazar</button></input></td>
                  </tr>
                </form>
            @endforeach
            </tbody>
          </table>
        @else
      <h1>No hay fotos por filtrar! :)  Buen Trabajo!</h1>
      <p>Mantente pendiente por nuevas actualizaciones, los usuarios seguiran publicando sus Fotografias...</p>

    @endif
</div>
