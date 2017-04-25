

    <div class="title_sec">
      <h1>Iniciar o Finalizar fotoreto</h1>
    </div>


<div class="col-md-5">
@if(isset($fotoreto_iniciar))

    <table class="table table-striped">
      <thead>
          <th>Id</th><th>Nombre</th><th>Participantes</th><th>Ganadores</th><th>Perdedores</th>
      </thead>
      <tbody>
        @foreach($fotoreto_iniciar as $n)
        <tr>
          <form class="form-horizontal" role="form" action="" method="POST" >
            <input name="_method" type="hidden" value="PUT">
              {{ csrf_field() }}
          <td>{{ $n->id }}</td>
          <td>{{ $n->name }}</td>
          <td>#participantes</td>
          <td><button type="submit" class="btn btn-info btn-block btn-sm" name="button" size="10">Ver 3</button></td>
          <td><button type="submit" class="btn btn-info btn-block btn-sm" name="button" size="10">Ver 240</button></td>
          </form>
        </tr>
        @endforeach
      </tbody>
    </table>

@endif
</div>
<div class="col-md-1">

</div>

<div class="col-md-5">
  <h2> Fotoretos Activos </h2>

@if(isset($fotoreto_activo))
  @foreach($fotoreto_activo as $fa)
    <form class="form-horizontal" role="form" action="" method="POST" enctype="multipart/form-data" >
          <input name="_method" type="hidden" value="PUT">
              {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre de Fotoreto</label>
            <input type="text" class="form-control" name="name" value="{{ $fa->name }}">
          </div>
          <div class="form-group">
            <label >Descripción de Fotoreto</label>
            <input class="form-control" name="description" rows="3" value="{{ $fa->description }}"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Fecha Finalización </label>
            <input type="datetime-local" class="form-control" name="end_date" value="{{ $fa->end_date }}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Url Video</label>
            <input type="url" class="form-control" name="url_video" value="{{ $fa->url_video }}">
          </div>
        <div class="col-md-4"><button  class="btn btn-success btn-lg btn-block"
          name="aceptar" value="aceptar" onclick=this.form.action="{{ route('photochallenge.update', $fa->id) }}">Actualizar</button></div>
        <div class="col-md-4"> Count Down</div>
        <div class="col-md-4"><button class="btn btn-danger btn-lg btn-block"
          name="finalizar" value="finalizar" onclick=this.form.action="{{ route('photochallenge.update', $fa->id) }}"> Finalizar</button></div>
     </form>

    <br><br><br>
    @if(session()->has('msj'))
      <div class="alert alert-success" role="alert">{{ session('msj') }}</div>
    @endif
    @if(session()->has('errormsj'))
      <div class="alert alert-danger" role="alert">{{ session('errormsj') }}</div>
    @endif
    <br>
  @endforeach
<br>
@else

    @if(session()->has('msjfinalizado'))
      <div class="alert alert-success" role="alert">{{ session('msjfinalizado') }}</div>
    @endif
    @if(session()->has('errormsjfinalizado'))
      <div class="alert alert-danger" role="alert">{{ session('errormsjfinalizado')}}</div>
    @endif
      <p>No hay FotoRetos Activos por el momento</p>
      <a href="{{ url('/fotoreto_crear') }}"><button type="button" name="button" class="btn btn-success btn-lg"> Iniciar Fotoreto</button></a>
    @endif
<div class="col-md-1">

</div>

</div>
