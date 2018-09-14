<!-- @todo: mejorar proporcion a movil -->

    <div class="row">

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-btns">
                        <a href="" class="panel-close">×</a>
                        <a href="" class="minimize">−</a>
                    </div>
                    <h4 class="panel-title">Checklist de Inspección para diagnósticos y Mantenimientos</h4>
                    <p>Marcar con: (√) Pasó   /  (x) Defectuoso   /   (-) N/A</p>
                </div>
                <div class="panel-body panel-body-nopadding">

                    <!-- BASIC WIZARD -->
                    <div id="validationWizard" class="basic-wizard">

                        <ul class="nav nav-pills nav-justified nav-disabled-click">
                            <li class="active"><a href="#vtab1" data-toggle="tab"><span>1:</span> Interior del vehículo</a></li>
                            <li><a href="#vtab2" data-toggle="tab"><span>2:</span> Exterior del vehículo</a></li>
                            <li><a href="#vtab3" data-toggle="tab"><span>3:</span> Compartimiento del Motor</a></li>
                            <li><a href="#vtab4" data-toggle="tab"><span>4:</span> Debajo del vehículo</a></li>
                            <li><a href="#vtab5" data-toggle="tab"><span>5:</span> Prueba de Carretera</a></li>
                            <li><a href="#vtab6" data-toggle="tab"><span>6:</span> Mantenimiento (Si aplica)</a></li>
                        </ul>

                        <form class="form" id="firstForm" novalidate="novalidate">
                            <div class="tab-content">
                                <div class="tab-pane active" id="vtab1">
                                    <div class="col-md-3">
                                        <div class="ckbox ckbox-primary">
                                            <input type="checkbox" value="1" id="checkboxPrimary">
                                            <label for="checkboxPrimary">Checkbox Primary</label>
                                        </div>

                                        <div class="ckbox ckbox-warning">
                                            <input type="checkbox" id="checkboxWarning" checked="checked">
                                            <label for="checkboxWarning">Checkbox Warning</label>
                                        </div>

                                        <div class="ckbox ckbox-success">
                                            <input type="checkbox" id="checkboxSuccess" checked="checked">
                                            <label for="checkboxSuccess">Checkbox Success</label>
                                        </div>

                                        <div class="ckbox ckbox-danger">
                                            <input type="checkbox" id="checkboxDanger" checked="checked">
                                            <label for="checkboxDanger">Checkbox Danger</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="vtab2">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Product ID</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="product_id" class="form-control" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Product Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="product_name" class="form-control" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Category</label>
                                        <div class="col-sm-4">
                                            <select class="select" data-placeholder="Choose One" required="">
                                                <option value=""></option>
                                                <option value="3d">3D Animation</option>
                                                <option value="web">Web Design</option>
                                                <option value="software">Software Engineering</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane" id="vtab3">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Card No</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="cardno" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Expiration</label>
                                        <div class="col-sm-4">
                                            <div class="select2-container select2" style="width: 100%;"><a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-20">Month</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen20" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-20" id="s2id_autogen20"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen20_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-20" id="s2id_autogen20_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-20">   </ul></div></div><select class="select2 select2-offscreen" data-placeholder="Month" tabindex="-1" title="">
                                                <option value=""></option>
                                                <option value="">January</option>
                                                <option value="">February</option>
                                                <option value="">March</option>
                                                <option value="">...</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="select2-container select2" id="s2id_autogen21" style="width: 100%;"><a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-22">Year</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen22" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-22" id="s2id_autogen22"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen22_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-22" id="s2id_autogen22_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-22">   </ul></div></div><select class="select2 select2-offscreen" data-placeholder="Year" tabindex="-1" title="">
                                                <option value=""></option>
                                                <option value="">2013</option>
                                                <option value="">2014</option>
                                                <option value="">2015</option>
                                                <option value="">...</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">CSV</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="csv" class="form-control">
                                        </div>
                                    </div>

                                </div>


                            </div><!-- tab-content -->
                        </form>

                        <ul class="pager wizard">
                            <li class="previous disabled"><a href="javascript:void(0)">Previous</a></li>
                            <li class="next"><a href="javascript:void(0)">Next</a></li>
                        </ul>

                    </div><!-- #validationWizard -->

                </div><!-- panel-body -->
            </div><!-- panel -->
        </div><!-- col-md-6 -->

    </div><!-- row -->
