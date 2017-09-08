@if(session()->has('msj'))
<div class="alert alert-success" role="alert">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
<div class="alert alert-danger" role="alert">Error al guardar los datos</div>
@endif

<table class="table table-striped">
  <thead>
      <th>Nombre</th><th>Email</th><th>Dirección</th><th>Telefono</th><th>Puntuación</th><th>Tipo</th><td>Actualizar</td>
  </thead>
  <tbody>
    @foreach($user as $n)
    <tr>
      <form class="form-horizontal" role="form" action="{{ route('user.update', $n->id) }}" method="POST" >
        <input name="_method" type="hidden" value="PUT">
          {{ csrf_field() }}
      <td><input type="text" name="name" value="{{ $n->name }}" size="7"></td>
      <td><input type="text" name="email" value="{{ $n->email }}" size="20"></td>
      <td><input type="text" name="id_direction" value="{{ $n->id_direction }}" size="20"></td>
      <td><input type="text" name="phone" value="{{ $n->phone }}" size="7"></td>
      <td><input type="text" name="user_puntuation" value="{{ $n->user_puntuation }}" size="3"></td>
      <td><select class="form-control" name="id_user_type" >
        @if($n->id_user_type == 1) <option selected value="1" >Administrador</option> @else <option value="1" >Administrador</option> @endif
        @if($n->id_user_type == 2) <option selected value="2">Fotógrafo</option> @else <option value="2">Fotógrafo</option> @endif
        @if($n->id_user_type == 3) <option selected value="3">Empleador</option> @else <option value="3" >Empleador</option> @endif
          </select>
      </td>
      <td><button type="submit" class="btn btn-success btn-sm" name="button">Actualizar</button></td>
      </form>
    </tr>
  @endforeach
  </tbody>

</table>
