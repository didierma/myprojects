@extends('layouts.app')
@push('style')

<link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/uploadify/uploadify.css')}}" />
@endpush

@section('content')
    <div>
        <!-- BEGIN PAGE HEADER-->
        <h1 class="page-title"> Registrar Gastos
            <small>Registrar Gastos Asociados a un ticket</small>
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{{url('/')}}">Inicio</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <i class="icon-home"></i>
                    <a href="#">Gastos</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Registrar Gasto</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <div class="m-heading-1 border-green m-bordered hidden">

                </div>
                <div class="portlet light " id="form_wizard_1">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class=" icon-layers font-red"></i>
                            <span class="caption-subject font-red bold uppercase">
                                Registrar Gasto - <span class="step-title"> Paso 1 de 4 </span>
                            </span>
                        </div>
                        <div class="actions hidden">
                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                <i class="icon-cloud-upload"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                <i class="icon-wrench"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                <i class="icon-trash"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <form class="form-horizontal" action="#" id="submit_form" method="POST">
                            <div class="form-wizard">
                                <div class="form-body">
                                    <ul class="nav nav-pills nav-justified steps">
                                        <li>
                                            <a href="#tab1" data-toggle="tab" class="step">
                                                <span class="number"> 1 </span>
                                                <span class="desc">
                                                                <i class="fa fa-check"></i> Informacion Preliminar </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab2" data-toggle="tab" class="step">
                                                <span class="number"> 2 </span>
                                                <span class="desc">
                                                                <i class="fa fa-check"></i> Agregar Item </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab3" data-toggle="tab" class="step active">
                                                <span class="number"> 3 </span>
                                                <span class="desc">
                                                                <i class="fa fa-check"></i> Items Agregados </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab4" data-toggle="tab" class="step">
                                                <span class="number"> 4 </span>
                                                <span class="desc">
                                                                <i class="fa fa-check"></i> Finalizar </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div id="bar" class="progress progress-striped" role="progressbar">
                                        <div class="progress-bar progress-bar-success"> </div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="alert alert-danger display-none"><button class="close" data-dismiss="alert"></button> Usted Presenta algunos errores el formulario. </div>
                                        <div class="alert alert-success display-none"><button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                        @include('activities.fields_preliminary')
                                        @include('activities.fields_add_item')
                                        @include('activities.fields_added_item')
                                        @include('activities.fields_finalize')
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <a href="javascript:;" class="btn default button-previous">
                                                <i class="fa fa-angle-left"></i> Regresar </a>
                                            <a href="javascript:;" class="btn btn-outline green button-next"> Continuar
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                            <a href="javascript:;" class="btn green button-submit"> Finalizar
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('level_plugin')

@endpush
@push('level_script')
<script src="{{asset('assets/pages/scripts/form-wizard.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/scripts/form-legalization.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-repeater/jquery.repeater.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/uploadify/jquery.uploadify.min.js')}}" type="text/javascript"></script>
<script>


    $(document).ready(function (e) {

        var activity_code = $('#activity_id').val();

        $(document).on('click','.button-next',function (e) {
            var activity = activity_code;
            if(activity==0){
                //Registrar Actividad en Borrador
                var activity_id = activity;
                var project_id = $("#project_id").val();
                var current_approver = $("#current_approver").val();
                var city_id = $("#city_id").val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN':'{{ csrf_token() }}'
                    },
                    type: 'POST',
                    url:'{{route('activities.store')}}',
                    data:'activity_id='+ activity_id+'&project_id='+ project_id+'&current_approver='+ current_approver+'&city_id='+ city_id,
                    success: function(msg){
                        var activity_code = msg;
                        $('#activity_id').val(msg)
                    }
                });
            }
        });

        $('#btn-file-add').uploadify({
            'formData'     : {
                'activity_id' : activity_code,
                '_token'     : '{{ csrf_token() }}'
            },
            'buttonClass':'btn btn-success',
            'buttonText':'<i class="fa fa-plus"></i> Agregar Archivo',
            'onUploadSuccess' : function(file, data, response) {
                //alert('The file ' + file.name + ' was successfully uploaded with a response of ' + response + ':' + data);
                console.log(data);
                console.log(file);
            },
            'swf'      : '{{asset('assets/global/plugins/uploadify/uploadify.swf')}}',
            'uploader' : '{{route('upload.legalization')}}'
        });
    });
</script>


@endpush