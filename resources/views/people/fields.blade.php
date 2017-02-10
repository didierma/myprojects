<div class="form-body">
        <h3 class="form-section">Informacion Basica</h3>
        <div class="row col-md-12">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label col-md-3">No. Cedula</label>
                    <div class="col-md-9">
                        {!! Form::text('colombian_id', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            <!--/span-->
            <div class="col-md-4">
                <div class="form-group ">
                    <label class="control-label col-md-3">Nombres</label>
                    <div class="col-md-9">
                        {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            <!--/span-->
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label col-md-3">Apellidos</label>
                    <div class="col-md-9">
                        {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            <!--/span-->
        </div>
        <!--/row-->
    <div class="row col-md-12">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label col-md-3">Email</label>
                <div class="col-md-9">
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
        <!--/span-->
        <div class="col-md-4">
            <div class="form-group ">
                <label class="control-label col-md-3">Estado</label>
                <div class="col-md-9">
                    {!! Form::select('active',['1'=>'Activo','0'=>'Inactivo'], null, ['class' => 'form-control select2','required']) !!}
                </div>
            </div>
        </div>
        <!--/span-->

        <!--/span-->
    </div>
    <hr class="cm-hr">


        <!--/row-->

        <div class="row">
            <div class="col-md-6">
                <h3 class="form-section">Roles</h3>
                <div class="form-group">
                    <div class="col-md-9">
                        <div class="form-group">
                            <div class="col-md-9">
                                {!! Form::select('roles[]',$roles, $rolesSelected, ['multiple'=>'multiple','id'=>'my_multi_select1','class' => 'form-control multi-select','required']) !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/span-->
            <div class="col-md-6">
                <h3 class="form-section">Permisos</h3>
                <div class="form-group">
                    <div class="col-md-9">
                        <div class="form-body">
                            <div class="form-group last">
                                <div class="col-md-9">
                                    <select multiple="multiple" class="multi-select" id="my_multi_select2" name="permissions[]">
                                        <optgroup label="NFC EAST">
                                            <option selected>Dallas Cowboys</option>
                                            <option>New York Giants</option>
                                            <option>Philadelphia Eagles</option>
                                            <option>Washington Redskins</option>
                                        </optgroup>
                                        <optgroup label="NFC NORTH">
                                            <option>Chicago Bears</option>
                                            <option>Detroit Lions</option>
                                            <option>Green Bay Packers</option>
                                            <option>Minnesota Vikings</option>
                                        </optgroup>
                                        <optgroup label="NFC SOUTH">
                                            <option>Atlanta Falcons</option>
                                            <option>Carolina Panthers</option>
                                            <option>New Orleans Saints</option>
                                            <option>Tampa Bay Buccaneers</option>
                                        </optgroup>
                                        <optgroup label="NFC WEST">
                                            <option>Arizona Cardinals</option>
                                            <option>St. Louis Rams</option>
                                            <option>San Francisco 49ers</option>
                                            <option>Seattle Seahawks</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--/span-->
        </div>
        <!--/row-->

        <!--/row-->

        <div class="row">

            <!--/span-->
            <
            <!--/span-->
        </div>
    </div>
<div class="form-actions">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="button" data-dismiss="modal" class="btn btn-outline dark">Cancelar</button>
                        {!! Form::submit('Guardar', ['class' => 'btn green']) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6"> </div>
        </div>
    </div>