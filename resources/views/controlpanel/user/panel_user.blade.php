
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
                <div><a href="{{ url('/administrar') }}" ><button class="btn btn-default btn-block" type="button" name="button">Usuario</button></a></div>
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
          <div id="collapseTwo" class="panel-collapse collapse @isset($fotoreto_participar) in  @endisset @isset($fotoreto_proceso) in  @endisset @isset($fotoreto_filtrar) in  @endisset @isset($fotoreto_resultados) in  @endisset @isset($fotoreto_datos_generales) in  @endisset" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <div><a href="{{ url('/fotoreto_participar') }}"><button class="btn btn-default btn-block" type="button" name="button">Participar</button></a></div>
                <div><a href="{{ url('/fotoreto_proceso') }}"><button class="btn btn-default btn-block" type="button" name="button">Proceso</button></a></div>
                <div><a href="{{ url('/fotoreto_resultados') }}"><button class="btn btn-default btn-block" type="button" name="button">Resultados</button></a></div>
                <div><a href="{{ url('/fotoreto_datos_generales') }}"><button class="btn btn-default btn-block" type="button" name="button">Datos Generales</button></a></div>
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
                <div><a href="{{ url('/contract_pendientes') }}"><button class="btn btn-default btn-block" type="button" name="button">En Curso</button></a></div>
                <div><a href="{{ url('/contract_terminados') }}"><button class="btn btn-default btn-block" type="button" name="button">Terminados</button></a></div>
                <div><a href="{{ url('/contract_datos_generales') }}"><button class="btn btn-default btn-block" type="button" name="button">Datos Generales</button></a></div>
            </div>
          </div>
        </div>
      </div>
    <!-- Finish Collapsable menu -->
  </div>

  <!-- Start Date Submenu -->
  <div class="col-md-10">

<!-- USUARIO -->
    @if(isset($user))
      @include('controlpanel/user/user/mostrar_usuario')


<!-- FOTORETO -->
    @elseif(isset($fotoreto_participar))
      @include('controlpanel/user/photochallenge/participar')



<!--  CONTRATO -->
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
      @include('controlpanel/user/first_view')
    @endif


  </div>
<!-- Finish SubMenu -->

</div>
@include('layouts.footer')
