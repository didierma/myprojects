@extends('layouts.app')

@section('content')
    <div >
        <!-- BEGIN PAGE HEADER-->

        <h1 class="page-title"> Recargas
            <small>Formulario de Recargas individual</small>
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="#">Inicio</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Recargas</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE HEADER-->

        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet light portlet-fit portlet-form ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class=" icon-layers font-green"></i>
                            <span class="caption-subject font-green sbold uppercase">Registrar Recarga</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <!-- BEGIN FORM-->
                        <div class="form-group col-md-12">
                            <div class="col-md-10">
                                @include('adminlte-templates::common.errors')
                            </div>
                        </div>

                        {!! Form::open(['route' => 'recharges.store','class'=>'form-horizontal','id'=>'single-recharge']) !!}

                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                            <div class="alert alert-success display-hide">
                                <button class="close" data-close="alert"></button> Your form validation is successful! </div>

                        @include('recharges.fields')

                        {!! Form::close() !!}
                        <!-- END FORM-->
                    </div>
                </div>
                <!-- END VALIDATION STATES-->
            </div>

        </div>
    </div>

@endsection

@push('level_script')
<script src="{{asset('assets/pages/scripts/form-validation-recharge.min.js')}}" type="text/javascript"></script>
@endpush