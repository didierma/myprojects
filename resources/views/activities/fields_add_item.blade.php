<div class="tab-pane" id="tab2">

        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <h5 class="block">Todos los campos marcados con <span class="text-danger">*</span> son obligatorios</h5>
                </div>
            </div>

            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="javascript:;" class="form-horizontal" id="form-add-legalization">
                    <input type="hidden" name="activity_id" id="activity_id" value="0">
                    <input type="hidden" name="ticket" id="ticket" value="0">
                    <div class="form-body">
                        <div class="form-group" >
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="tarjeta">Nit. Proveedor<span class="text-danger">*</span></label>
                                    <input type="text" id="ticket"  class="form-control" value="">
                                </div>
                                <div class="col-sm-3">
                                    <label for="inputEmail">Nombre Proveedor <span class="text-danger">*</span></label>
                                    <input type="text" id="ticket"  class="form-control" value="">
                                </div>
                                <div class="col-sm-3">
                                    <label for="inputEmail">Valor</label>
                                    <input type="text" id="ods" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="inputEmail">Iva <span class="text-danger">*</span></label><br>
                                    <input type="text" id="ods" class="form-control">
                                </div>

                            </div>
                        </div>

                        <div class="form-group" >
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="tarjeta">Tipo Comprobante<span class="text-danger">*</span></label>
                                    <select id="tarjeta"  class="form-control">
                                        <option selected="selected" value=""></option>
                                        <optgroup label="TARJETAS ASIGNADAS"> </optgroup><optgroup label="DINERO EN MI CUENTA"></optgroup>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label for="inputEmail">No. Comprobante  <span class="text-danger">*</span></label>
                                    <input type="text" id="ticket"  class="form-control" value="">
                                </div>
                                <div class="col-sm-3">
                                    <label for="inputEmail">Fecha Comprobante</label>
                                    <input type="text" id="ods" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="inputEmail">No. Tarjeta <span class="text-danger">*</span></label><br>
                                    <select id="tarjeta"  class="form-control">
                                        <option selected="selected" value=""></option>
                                        <optgroup label="TARJETAS ASIGNADAS"> </optgroup><optgroup label="DINERO EN MI CUENTA"></optgroup>
                                    </select>
                                </div>

                            </div>
                        </div>

                        <div class="form-group" >
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="tarjeta">Concepto<span class="text-danger">*</span></label>
                                    <select id="tarjeta"  class="form-control">
                                        <option selected="selected" value=""></option>
                                        <optgroup label="TARJETAS ASIGNADAS"> </optgroup><optgroup label="DINERO EN MI CUENTA"></optgroup>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <label for="inputEmail">Sub Concepto  <span class="text-danger">*</span></label>
                                    <input type="text" id="ticket"  class="form-control" value="">
                                </div>
                                <div class="col-sm-3">
                                    <label for="inputEmail">Sub Categoria Concepto</label>
                                    <input type="text" id="ods" class="form-control">
                                </div>
                                <div class="col-sm-3 hidden">
                                    <label for="inputEmail">Otro Concepto <span class="text-danger">*</span></label><br>
                                    <textarea id="descripcion" class="form-control" placeholder="Descripcion del gasto"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" >
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="inputEmail">Descripcion <span class="text-danger">*</span></label><br>
                                    <textarea id="descripcion" class="form-control" placeholder="Descripcion del gasto"></textarea>
                                </div>
                            </div>
                        </div>

                        <!--/row-->
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="file" name="file" id="btn-file-add" />

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->

                            <!--/span-->
                        </div>
                        <!--/row-->
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <a href="javascript:;" class="btn green btn-block todo-float-r" id="addItem">Agregar a Lista</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"> </div>
                        </div>
                    </div>
                </form>

                <!-- END FORM-->
            </div>
        </div>
</div>