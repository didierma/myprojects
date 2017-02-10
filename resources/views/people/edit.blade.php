<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-equalizer font-red-sunglo"></i>
            <span class="caption-subject font-red-sunglo bold uppercase">Nuevo Usuario</span>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
    {!! Form::model($person, ['route' => ['people.update', $person->id], 'method' => 'patch']) !!}

        @include('people.fields')

    {!! Form::close() !!}
    <!-- END FORM-->
    </div>
</div>