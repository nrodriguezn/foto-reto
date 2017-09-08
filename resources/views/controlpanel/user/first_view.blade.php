<div class="container">

    <div class="col-md-6">
      <h2>Bienvenido {{ Auth::user()->name }}!!</h2>
    </div>
    <div class="col-md-6">
      <h1>Puntaje</h1>
      <h2>{{ Auth::user()->user_puntuation }} pts</h2>
    </div>

</div>
