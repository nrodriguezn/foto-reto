<table class="table table-striped">
  <thead>
      <th>Nombre</th><th>Email</th><th>password</th><th>direccion</th><th>puntuacion</th><th>tipo</th>
  </thead>
  <tbody>
    @foreach($user as $n)
    <tr>
      <td>{{ $n->name }}</td><td>{{ $n->email }}</td><td>{{ $n->password }}</td><td>{{ $n->id_direction }}</td><td>{{ $n->id_puntuation }}</td><td>{{ $n->id_user_type }}</td>
    </tr>
  </tbody>
    @endforeach
</table>
