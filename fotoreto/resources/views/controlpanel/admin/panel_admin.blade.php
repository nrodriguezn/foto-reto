
@include('layouts.nab')

<div class="row">
  <div class="col-md-2">
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
              <ul >
                <li ><button type="button"  name="button">Administrar</button></li>
                <li ><button type="button"  name="button">Participación</button></li>
                <li ><button type="button"  name="button">Datos Generales </button></li>
              </ul>
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
              <ul>
                <li><button type="button" name="button">Iniciar / Finalizar </button></li>
                <li><button type="button" name="button"> Proceso </button></li>
                <li><button type="button" name="button"> Filtrar </button></li>
                <li><button type="button" name="button"> Resultados </button></li>
                <li><button type="button" name="button"> Datos Generales </button></li>
              </ul>
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
              <ul>
                <li><button type="button" name="button">Banner </button></li>
                <li><button type="button" name="button">Publicidad </button></li>
                <li><button type="button" name="button">Tutoriales </button></li>
                <li><button type="button" name="button">Productos</button></li>
              </ul>
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
              <ul>
                <li><button type="button" name="button">Pendientes </button></li>
                <li><button type="button" name="button">En Proceso </button></li>
                <li><button type="button" name="button">Terminados </button></li>
                <li><button type="button" name="button">Datos Generales </button></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    <!-- Finish Collapsable menu -->
  </div>

  <!-- Start Date Submenu -->

  <div class="col-md-10">
Informacion del menu que se apreta
  </div>

  <!-- Finish SubMenu -->
</div>
