<br>
<div class="container">

<h1>Crear Nuevo Fotoreto</h1>
<br>



<div class="col-md-8">


  <form class="form-horizontal" role="form" action="{{ url('photochallenge') }}" method="POST" enctype="multipart/form-data" >

      {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre de Fotoreto</label>
    <input type="text" class="form-control" name="name" placeholder="Nombre del fotoreto" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Descripción de Fotoreto</label>
    <textarea class="form-control" name="description" rows="3" placeholder="Descripción del Fotoreto" required></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Fecha Finalización </label>
    <input type="datetime-local" class="form-control" name="end_date" placeholder="AAAA-MM-DD hh:mm:ss" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Url Video</label>
    <input type="url" class="form-control" name="urlVideo" placeholder="Url del video en YouTube" required>
  </div>

  <button type="submit" class="btn btn-success">Crear Nuevo</button>
</form>
</div>

</div>
<div class="col-md-4">

</div>
<br><br><br>
