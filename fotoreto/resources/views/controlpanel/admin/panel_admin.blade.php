
@include('layouts.nab')

<div class="row">
  <div class="col-md-2 nav_menu_izq">
    <!-- Start Collapsable menu -->
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Usuario
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body" >
              <li>
                <ul><button type="button" name="button"><a href="{{ url('/administrar') }}">Administrar</a></button></ul>
                <ul><button type="button"  name="button">Participación</button></ul>
                <ul><button type="button"  name="button">Datos Generales</button></ul>
              </li>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                FotoReto
              </a>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
              <li>
                <ul><button type="button" name="button"><a href="{{ url('/fotoreto_iniciar_finalizar') }}">Iniciar / Finalizar</a> </button></ul>
                <ul><button type="button" name="button"> Proceso </button></ul>
                <ul><button type="button" name="button"> Filtrar </button></ul>
                <ul><button type="button" name="button"> Resultados </button></ul>
                <ul><button type="button" name="button"> Datos Generales </button></ul>
              </li>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Contenido
              </a>
            </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
              <li>
                <ul><button type="button" name="button">Banner </button></ul>
                <ul><button type="button" name="button">Publicidad </button></ul>
                <ul><button type="button" name="button">Tutoriales </button></ul>
                <ul><button type="button" name="button">Productos</button></ul>
              </li>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                Contratos
              </a>
            </h4>
          </div>
          <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="panel-body">
              <li>
                <ul><button type="button" name="button">Pendientes </button></ul>
                <ul><button type="button" name="button">En Proceso </button></ul>
                <ul><button type="button" name="button">Terminados </button></ul>
                <ul><button type="button" name="button">Datos Generales </button></ul>
              </li>
            </div>
          </div>
        </div>
      </div>
    <!-- Finish Collapsable menu -->
  </div>

  <!-- Start Date Submenu -->
  <div class="col-md-10">

    @if(isset($user))
      @include('controlpanel/admin/user/mostrar_usuarios')
    @elseif(isset($iniciar_fotoreto))
      @include('controlpanel/photochallenge/iniciar')
    @else
      @include('controlpanel/admin/first_view')
    @endif



  </div>


  <!-- Finish SubMenu -->
</div>
@include('layouts.footer')
