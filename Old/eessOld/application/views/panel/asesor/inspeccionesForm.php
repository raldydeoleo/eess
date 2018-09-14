<?php
/**
 * Created by PhpStorm.
 * User: GAMERX64
 * Date: 06/09/2016
 * Time: 08:31 PM
 */
?>

<div class="">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">Formulario de inspeccion</h4>
            <p>Progreso de fase de inspeccion realizado por asesor.</p>
        </div>

        <div class="panel-body">

            <!-- Formulario -->
            <div id="progressWizard" class="basic-wizard form-bordered form-horizontal">

                <ul class="nav nav-pills nav-justified collapse"><!-- tabs ocultas por espacio en movil-->
                    <li><a href="#ptab1" data-toggle="tab"><span>Step 1:</span> Datos cita y cliente</a></li>
                    <li><a href="#ptab2-1" data-toggle="tab"><span>Step 2.1:</span> Indicadores de vehiculo</a></li>
                    <li><a href="#ptab2-2" data-toggle="tab"><span>Step 2.2:</span> Equipos o componentes en el vehiculo</a></li>
                    <li><a href="#ptab3-1" data-toggle="tab"><span>Step 3.1:</span> Equipos o componentes en el vehiculo</a></li>
                    <li><a href="#ptab3-2" data-toggle="tab"><span>Step 3.2:</span> Equipos o componentes en el vehiculo</a></li>
                    <li><a href="#ptab3-3" data-toggle="tab"><span>Step 3.3:</span> Equipos o componentes en el vehiculo</a></li>
                    <li><a href="#ptab3-4" data-toggle="tab"><span>Step 3.4:</span> Equipos o componentes en el vehiculo</a></li>
                    <li><a href="#ptab3-5" data-toggle="tab"><span>Step 3.5:</span> Equipos o componentes en el vehiculo</a></li>
                    <li><a href="#ptab3-6" data-toggle="tab"><span>Step 3.6:</span> Equipos o componentes en el vehiculo</a></li>
                    <li><a href="#ptab4-1" data-toggle="tab"><span>Step 4.1:</span> Desperfectos del vehiculo</a></li>
                    <li><a href="#ptab5" data-toggle="tab"><span>Step 5:</span> Clausulas</a></li>
                </ul>

                <div class="tab-content">
                    <div class="progress progress-striped active">
                        <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>

                    </div>
                    <!-- Fase 1 -->
                    <div class="tab-pane" id="ptab1">
                        <div class="form-group">
                            <div class="col-md-3">
                                <h4 class="person-name"> Codigo: 10391</h4>
                                <h4 class="person-name"> Francisco J. Fernandez</h4>
                                </div>
                            <div class="col-md-3">
                                <h4 class="person-name"> Vehiculo</h4>
                                <p class="person-name"> Nissan Patrol 2016</p>
                                <p class="person-name"> Color: blanca</p>
                                <p class="person-name"> Placa: </p>
                            </div>
                        </div>
                    </div>
                <!-- Fase 2.1 -->
                    <!--  @todo: proporcion correcta en movil. Repara desordenada en PC o pantalla grande -->
                    <div class="tab-pane" id="ptab2-1">
                        <form class="form-horizontal">

                            <div class="form-group">                               
                                <label class="col-md-3 control-label">Ind. Bateria</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>

                                <label class="col-md-3 control-label">neumaticos</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Presion aceite</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>

                                <label class="col-sm-3 control-label">Cinturon</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>
                            </div>

                        </form>
                    </div>

                    <!-- Fase 2.2 -->
                    <div class="tab-pane" id="ptab2-2">
                        <form class="form-horizontal">

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Sistema de freno</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>

                                <label class="col-sm-3 control-label">Control de Traccion</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>
                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Falla bolsa de aire</label>
                                    <div class="col-sm-3 control-label">
                                        <div class="toggle toggle-primary"></div>
                                    </div>

                                <label class="col-sm-3 control-label">Indicador ABS</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>
                            </div>


                        </form>
                    </div>
                    <!-- Fase 3.1 -->
                    <div class="tab-pane" id="ptab3-1">
                        <form class="form-horizontal">

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Mal funcion Motor</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>

                                <label class="col-sm-3 control-label">Direccional</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Indicador de puertas</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>

                                <label class="col-sm-3 control-label">Indicador CRUISE</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Fase 3.2 -->
                    <div class="tab-pane" id="ptab3-2">
                        <form class="form-horizontal">

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Bocina</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>

                                <label class="col-sm-3 control-label">Switch cristales</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Funcionamiento cristales</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>

                                <label class="col-sm-3 control-label">Funcionamiento Seguros</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>
                            </div>

                        </form>
                    </div>

                    <!-- Fase 3.3 -->
                    <div class="tab-pane" id="ptab3-3">
                        <form class="form-horizontal">
                            <div class="form-group">
                            <label class="col-sm-3 control-label">Luces interiores</label>
                            <div class="col-sm-3 control-label">
                                <div class="toggle toggle-primary"></div>
                            </div>

                            <label class="col-sm-3 control-label">Tapasol</label>
                            <div class="col-sm-3 control-label">
                                <div class="toggle toggle-primary"></div>
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">A/C</label>
                        <div class="col-sm-3 control-label">
                            <div class="toggle toggle-primary"></div>
                        </div>

                        <label class="col-sm-3 control-label">Alfombras</label>
                        <div class="col-sm-3 control-label">
                            <div class="toggle toggle-primary"></div>
                        </div>
                    </div>

                        </form>
                    </div>

                    <!-- Fase 3.4 -->
                    <div class="tab-pane" id="ptab3-4">
                        <form class="form-horizontal">


                            <div class="form-group">
                                <label class="col-sm-3 control-label">Gaveta cenicero</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>

                                <label class="col-sm-3 control-label">Tapa Consola Central</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Beeper</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>

                                <label class="col-sm-3 control-label">Rejillas A/C</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>
                            </div>

                        </form>
                    </div>

                <!-- Fase 3.5 -->
                <div class="tab-pane" id="ptab3-5">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Sunroof</label>
                            <div class="col-sm-3 control-label">
                                <div class="toggle toggle-primary"></div>
                            </div>

                            <label class="col-sm-3 control-label">Tapizados asiento</label>
                            <div class="col-sm-3 control-label">
                                <div class="toggle toggle-primary"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Encendedor</label>
                            <div class="col-sm-3 control-label">
                                <div class="toggle toggle-primary"></div>
                            </div>

                            <label class="col-sm-3 control-label">Radio / Bocinas</label>
                            <div class="col-sm-3 control-label">
                                <div class="toggle toggle-primary"></div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Fase 3-6 -->
                <div class="tab-pane" id="ptab3-6">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Beeper</label>
                            <div class="col-sm-3 control-label">
                                <div class="toggle toggle-primary"></div>
                            </div>

                            <!-- label class="col-sm-2 control-label">Unidad</label -->
                            <div class="col-sm-2">
                                <select class="form-control input-sm">
                                    <option>Km</option>
                                    <option>Mi</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control input-sm" placeholder="distancia"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Emisora</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" placeholder="Emisora o CD-Player">
                            </div>

                            <label class="col-sm-3 control-label">Combustible</label>
                            <div class="col-sm-3">
                                <input  type="number" class="form-control" placeholder="Kg">
                            </div>
                        </div>
                    </form>
                </div>
                    
                    <!-- Fase 4-1 -->
                    <div class="tab-pane" id="ptab4-1">

                        <form class="form-horizontal">

                            <div class="form-group">
                                <p class="col-sm-3">Foto Frontal</p>
                                <div class="col-sm-3">
                                    <!--
                                     // input para captura de imagen usando camara disponible
                                     -->
                                    <input type="file" accept="image/jpg,png;capture=camera" class="form-control" contextmenu="Foto Frontal">
                                </div>

                                <p class="col-sm-3">Foto Lateral Derecho</p>
                                <div class="col-sm-3">
                                    <!--
                                     // input para captura de imagen usando camara disponible
                                     -->
                                    <input type="file" accept="image/jpg,png;capture=camera" class="form-control" contextmenu="Foto Frontal">
                                </div>


                                <p class="col-sm-3">Foto Lateral Izquierdo</p>
                                <div class="col-sm-3">
                                    <!--
                                     // input para captura de imagen usando camara disponible
                                     -->
                                    <input type="file" accept="image/jpg,png;capture=camera" class="form-control" contextmenu="Foto Frontal">
                                </div>

                                <p class="col-sm-3">Foto trasera</p>
                                <div class="col-sm-3">
                                    <!--
                                     // input para captura de imagen usando camara disponible
                                     -->
                                    <input type="file" accept="image/jpg,png;capture=camera" class="form-control" contextmenu="Foto Frontal">
                                </div>

                           </div>

                        </form>

                    </div>

                    <!-- Fase 5 -->
                    <div class="tab-pane" id="ptab5">
                        <form class="form-vertical">
                            <div class="col-sm-10 ui-accordion" align="center">
                                <p align="justify">
                                    El cliente declara que es propietario o está autorizado por
                                    éste a requerir los trabajos previamente descritos e igualm
                                    ente a la colocación o reemplazo de las piezas y materiales
                                </p>
                               <button class="btn btn-info">Leer texto completo</button>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <label for="" class="control-label">Centro de Servicios El Yaque Motors</label>

                                    <input type="text" class="form-control" accept="text/plain">
                                    <p align="center">Firma Cliente</p>
                                </div>
                            </div>

                        </form>
                    </div>
                    
                    


                    <!-- Botones justo cerrando  tab-content -->
                        <ul class="pager wizard">
                            <li class="previous"><a href="javascript:void(0)">Volver</a></li>
                            <li class="next"><a href="javascript:void(0)">Siguiente</a></li>
                        </ul>
                
                    </div>

                </div>



            </div>

    </div>
    <!-- Fin formulario -->

</div>



