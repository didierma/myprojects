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
                        <div class="caption">
                            <i class="icon-equalizer font-green-dark"></i>
                            <span class="caption-subject font-green-dark bold uppercase">Nuevo Usuario</span>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                    {!! Form::open(['route' => 'people.store']) !!}

                    @include('people.fields')

                    {!! Form::close() !!}
                    <!-- END FORM-->
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

@endpush


