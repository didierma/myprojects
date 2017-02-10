@extends('layouts.app')
@push('level_plugin')
<link href="{{asset('assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/jquery-multi-select/css/multi-select.css')}}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
    <div id="addEditItem" class="modal container fade" tabindex="-1" data-backdrop="static">
        <div class="modal-body">
            <p> <img src="{{asset('assets/global/img/cargando.gif')}}"> </p>
        </div>
    </div>

    <div>
        <h1 class="page-title"> Usuarios </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{{url('/')}}">Inicio</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Admnistrar</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Usuarios</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="fa fa-list-alt font-dark"></i>
                            <span class="caption-subject bold uppercase"> Usuarios</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-group">
                                        <a href="{!! route('people.create') !!}" class="btn sbold green"> Agregar
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="btn-group pull-right">
                                        <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Opciones
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;" id="filter-table">
                                                    <i class="fa fa-file-text-o"></i> Aplicar Filtros </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-file-pdf-o" id="export-pdf"></i> Exportar a PDF </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-file-excel-o" id="export-excel"></i> Exportar a Excel </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('flash::message')
                        @include('people.table')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('level_plugin')
<script src="{{asset('assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js')}}" type="text/javascript"></script>
@endpush
@push('level_script')

<script src="{{asset('assets/pages/scripts/delete-alert.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/scripts/components-multi-select.min.js')}}" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $('#addEditItem').on('loaded.bs.modal', function () {
            ComponentsDropdowns.init();
        });
        $('#addEditItem').on('hidden.bs.modal', function () {
            // do something…
            //ComponentsDropdowns.destroy();
           // $("select").multiselect('destroy');
        })

    })
</script>

@endpush