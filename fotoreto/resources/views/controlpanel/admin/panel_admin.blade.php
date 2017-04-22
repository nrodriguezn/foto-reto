
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
          <div id="collapseOne" class="panel-collapse collapse @isset($user) in  @endisset @isset($participacion) in  @endisset @isset($datos_usuario) in  @endisset  " role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body" >
                <div><button class="btn btn-default btn-block" type="button" name="button"><a href="{{ url('/administrar') }}" >Administrar</a></button></div>
                <div><button class="btn btn-default btn-block" type="button"  name="button"><a href="{{ url('/participacion') }}">Participacion</a></button></div>
                <div><button class="btn btn-default btn-block" type="button"  name="button"><a href="{{ url('/datos_usuario') }}">Datos Generales</a></button></div>
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
          <div id="collapseTwo" class="panel-collapse collapse @isset($fotoreto_iniciar) in  @endisset @isset($fotoreto_proceso) in  @endisset @isset($fotoreto_filtrar) in  @endisset @isset($fotoreto_resultados) in  @endisset @isset($fotoreto_datos_generales) in  @endisset @isset($fotoreto_crear) in @endisset" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <div><button class="btn btn-default btn-block" type="button" name="button"><a href="{{ url('/fotoreto_iniciar_finalizar') }}">Iniciar / Finalizar</a> </button></div>
                <div><button class="btn btn-default btn-block" type="button" name="button"><a href="{{ url('/fotoreto_filtrar') }}">Filtrar</a> </button></div>
                <div><button class="btn btn-default btn-block" type="button" name="button"><a href="{{ url('/fotoreto_proceso') }}">Proceso</a> </button></div>
                <div><button class="btn btn-default btn-block" type="button" name="button"><a href="{{ url('/fotoreto_resultados') }}">Resultados</a> </button></div>
                <div><button class="btn btn-default btn-block" type="button" name="button"><a href="{{ url('/fotoreto_datos_generales') }}">Datos Generales</a> </button></div>
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
                <div><button class="btn btn-default btn-block" type="button" name="button"><a href="{{ url('/contenido_banner') }}">Banner</a></button></div>
                <div><button class="btn btn-default btn-block" type="button" name="button"><a href="{{ url('/contenido_publicidad') }}">Publicidad</a> </button></div>
                <div><button class="btn btn-default btn-block" type="button" name="button"><a href="{{ url('/contenido_tutoriales') }}">Tutoriales</a> </button></div>
                <div><button class="btn btn-default btn-block" type="button" name="button"><a href="{{ url('/contenido_productos') }}">Productos</a></button></div>
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
          <div id="collapseFour" class="panel-collapse collapse @isset($contract_pendientes) in  @endisset @isset($contract_in_process) in  @endisset @isset($contract_terminados) in  @endisset @isset($contract_datos_generales) in  @endisset " role="tabpanel" aria-labelledby="headingFour">
            <div class="panel-body">
                <div><button class="btn btn-default btn-block" type="button" name="button"><a href="{{ url('/contract_pendientes') }}">Pendientes</a></button></div>
                <div><button class="btn btn-default btn-block" type="button" name="button"><a href="{{ url('/contract_in_process') }}">En Proceso</a></button></div>
                <div><button class="btn btn-default btn-block" type="button" name="button"><a href="{{ url('/contract_terminados') }}">Terminados</a></button></div>
                <div><button class="btn btn-default btn-block" type="button" name="button"><a href="{{ url('/contract_datos_generales') }}">Datos Generales</a> </button></div>
            </div>
          </div>
        </div>
      </div>
    <!-- Finish Collapsable menu -->
  </div>

  <!-- Start Date Submenu -->
  <div class="col-md-10">

<!-- ADMIN USUARIO -->
    @if(isset($user))
      @include('controlpanel/admin/user/mostrar_usuarios')
    @elseif(isset($participacion))
      @include('controlpanel/admin/user/participacion')
    @elseif(isset($datos_usuario))
      @include('controlpanel/admin/user/datos_usuario')


<!-- ADMIN FOTORETO -->
    @elseif(isset($fotoreto_iniciar))
      @include('controlpanel/admin/photochallenge/iniciar')
    @elseif(isset($fotoreto_proceso))
      @include('controlpanel/admin/photochallenge/proceso')
    @elseif(isset($fotoreto_filtrar))
      @include('controlpanel/admin/photochallenge/filtrar')
    @elseif(isset($fotoreto_resultados))
      @include('controlpanel/admin/photochallenge/resultados')
    @elseif(isset($fotoreto_resultados))
      @include('controlpanel/admin/photochallenge/resultados')
    @elseif(isset($fotoreto_datos_generales))
      @include('controlpanel/admin/photochallenge/datos_generales')
    @elseif(isset($fotoreto_crear))
      @include('controlpanel/admin/photochallenge/crear')


<!-- ADMIN CONTRATO -->
    @elseif(isset($contract_pendientes))
      @include('controlpanel/admin/contract/contract_pendientes')
    @elseif(isset($contract_in_process))
      @include('controlpanel/admin/contract/contract_in_process')
    @elseif(isset($contract_terminados))
      @include('controlpanel/admin/contract/contract_terminados')
    @elseif(isset($contract_datos_generales))
      @include('controlpanel/admin/contract/contract_datos_generales')

<!--FIRST VIEW-->
    @else
      @include('controlpanel/admin/first_view')
    @endif


  </div>
<!-- Finish SubMenu -->

</div>
@include('layouts.footer')
