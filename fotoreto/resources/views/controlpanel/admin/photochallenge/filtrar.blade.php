<br>
<div class="container">

    @if(isset($fotos))

    <h1 align="center">Filtrar Fotografias del FotoReto en Curso!</h1>
<br>
    <table class="table table-striped">
      <thead>
        <th>Fotografia</th><th>Nombre</th><th>Descripcion</th><th>Aceptar</th><th>Rechazar</th>
      </thead>
    <tbody>
      @foreach($fotos as $n)
<form class="form-horizontal" role="form" action="{{ url('fotoreto_filtrar_decision') }} " method="POST" enctype="multipart/form-data" >
              {{ csrf_field() }}
        <tr>
          <td width="350px"><img src="imgParticipante/{{ $n->urlImg_photo }}" alt="imagen" class="img-thumbnail" width="90%"> </td>
          <td><p>{{ $n->photo_name }}</p></td>
          <td><p>{{ $n->description }}</p></td>
          <td><button type="submit" class="btn btn-success btn-lg btn-block" name="aceptar">Aceptar</button></td>
          <td><button type="submit" class="btn btn-danger btn-lg btn-block" name="rechazar">Rechazar</button></td>
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
