<?php
/**
 * Created by PhpStorm.
 * User: GAMERX64
 * Date: 07/09/2016
 * Time: 07:24 PM
 */
?>

<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">Asignacion de Orden de trabajo</h4>
            <p>Asignacion de ordenes a equipo tecnico y supervision</p>
        </div>

        <div class="panel-body panel-body-noadding">

            <form class="form-horizontal form-bordered">

                <div class="row">
                    <div class="form-group">
                        <div class="col-md-6">
                            <div class="form-horizontal">
                                <div class="media-body">
                                    <label class="control-label"> Orden No.: 247333</label><br>
                                    <label class="control-label"> Codigo: 10391</label><br>
                                    <label class="control-label"> Nombre: Francisco J. Fernandez</label>
                                </div>
                                <div class="media-body">
                                    <label class="control-label"> Asesor: Saul Matos</label>
                                </div>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-horizontal">
                                <div class="media-body">
                                    <label class="control-label"> Vehiculo: Nissan Patrol 2016</label>
                                    <p class="person-name"> Color: blanca</p>
                                    <p class="person-name"> Placa: HB-95557</p>
                                    <p class="person-name">Chasis: HF4592145665</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-horizontal">
                        <div class="col-sm-6">
                            <button class="btn btn-info">Ver detalles de orden</button>
                        </div>
                    </div>

                    <div class="form-horizontal">
                        <div class="col-sm-6">
                            <button class="btn btn-warning">Ver comentarios de orden</button>
                        </div>
                    </div>

                </div><hr>

                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-6">

                            <label class="col-sm-5 control-label">Asigna Supervisor</label>
                            <div class="col-sm-5">
                                <select class="select2" data-placeholder="eleccion unica">
                                    <option value=""></option>
                                    <option value="Pablo Milanes">Pablo Milanes</option>
                                    <option value="Silvio Rodriguez">Silvio Rodriguez</option>
                                    <option value="Facundo Cabral">Facundo Cabral</option>
                                </select>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <label class="col-sm-6 control-label">Nivel tecnico requerido</label>
                            <div class="col-sm-5">
                                <select class="select2" multiple data-placeholder="Eleccion multiple">
                                    <option value=""></option>
                                    <option value="S-1">S-1</option>
                                    <option value="S-2">S-2</option>
                                    <option value="S-3">S-3</option>
                                    <option value="S-n">...</option>
                                    <option value="S-N">S-N</option>
                                </select>
                            </div>

                        </div>

                    </div>
                </div>

                        <div class="row">
                            <div class="col-sm-6">

                                <label class="col-sm-5 control-label">Asignar Tecnico</label>
                                <div class="col-sm-5">
                                    <select class="select2" multiple data-placeholder="eleccion multiple">
                                        <option value=""></option>
                                        <option value="Caifan Ramirez">Caifan Ramirez</option>
                                        <option value="Soda Silvestre">Soda Silvestre</option>
                                        <option value="Gonzalo Machete">Gonzalo Machete</option>
                                    </select>
                                </div>

                            </div>
                        </div>


                </form>


            </div>
            <div class="panel-body">
                <div class="col-sm-12 center" align="center">
                    <button class="btn btn-success">Aplicar asignacion</button>
                </div>
            </div>
        </div>
    </div>

