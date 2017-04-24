
<br><br>
<div class="col-md-6">
    @if(isset($fotoreto))
      <form class="form-horizontal" role="form" action="{{ route('photo.store') }} " method="POST" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre de la Foto</label>
                  <input type="text" class="form-control" name="name" placeholder="Nombre de la Fotografia" required>
                </div>
                <div class="form-group">
                  <label > Descripción</label>
                  <textarea class="form-control" type="text" name="description" rows="3" placeholder="Descripción" required></textarea>
                </div>
                <div class="form-group">
                  <label> Imagen </label>
                  <input type="file" name="urlImg" required>
                  <p>No puede superar los 5Mb</p>
                </div>
          <button type="submit" class="btn btn-success" name="button">Publicar</button>
      </form>
      @else
        <h1>No hay fotoretos activos aún</h1>
        <p>Quedate al pendiente! muy pronto se publicará un nuevo FotoReto!</p>
      @endif
      @if(session()->has('msj'))
      <div class="alert alert-success" role="alert">{{ session('msj') }}</div>
      @endif
      @if(session()->has('errormsj'))
      <div class="alert alert-danger" role="alert">Error al guardar los datos</div>
      @endif
  <br><br>
</div>
<div class="col-md-6">
      <h1>Datos Importantes</h1>
      <p>•Si la publicación no tiene relevancia al FotoReto, esta no será aceptada por
      los administradores y simplemente sera borrada.</p>
      <p>•Varios terminos y condiciones</p>
</div>
<br><br>
