@extends('layouts.app')

@section('content')
    <div>
        <h1 class="page-title"> Actividades
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{{url('/')}}">Inicio</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Gastos</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Gastos</span>
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
                            <i class="fa fa-credit-card font-dark"></i>
                            <span class="caption-subject bold uppercase"> {{$title}}</span>
                        </div>
                    </div>
                    <div class="portlet-body">

                        @include('flash::message')
                        @include('activities.table')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

