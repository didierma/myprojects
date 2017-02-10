<li class="nav-item start {!! setActive('/') !!} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-home"></i>
        <span class="title">Inicio</span>
        {!! setSelected('/') !!}
    </a>
</li>

<li class="nav-item">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-list-alt"></i>
        <span class="title">Mi Cuenta</span>
    </a>
</li>

<li class="nav-item {{setActive('activities/*')}}">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-calculator"></i>
        <span class="title">Gastos</span>
        {!! setSelected('activities/*') !!}
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu" style="display: none;">
        <li class="nav-item  {{setActive('activities/*')}}">
            <a href="{{route('activities.create')}}" class="nav-link ">
                <span class="title">Registrar Gastos</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{route('activities.index', ['type'=>''])}}" class="nav-link ">
                <span class="title">Gastos Registrados</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{route('activities.index', ['type'=>'reject'])}}" class="nav-link ">
                <span class="title">Gastos Rechazados</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{!! route('activities.index', ['type'=>'draft']) !!}" class="nav-link ">
                <span class="title">Borrador</span>
            </a>
        </li>
    </ul>
</li>


<li class="nav-item  ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-shuffle"></i>
        <span class="title">Transferencias</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item  ">
            <a href="{{route('deposits.create')}}" class="nav-link ">
                <span class="title">Registrar Transferencia</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{route('deposits.index',array('type'=>'transfer'))}}" class="nav-link ">
                <span class="title">Mis Transferencias</span>
            </a>
        </li>
        <li class="nav-item {{route('deposits.index',array('type'=>'force'))}} ">
            <a href="#" class="nav-link ">
                <span class="title">Forzar Transferencias</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{route('deposits.index',array('type'=>'pending'))}}" class="nav-link ">
                <span class="title">Aprobar Transferencia</span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item  ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-tasks"></i>
        <span class="title">Mis Tareas</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item  ">
            <a href="#" class="nav-link ">
                <span class="title">Recibir Gastos</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="#" class="nav-link ">
                <span class="title">Aprobar Gastos</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="#" class="nav-link ">
                <span class="title">Auditar Gastos</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="elements_overlay.html" class="nav-link ">
                <span class="title">Registrar Envio <br> de Gasto</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="#" class="nav-link ">
                <span class="title">Historico de Tareas</span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item  ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-reload"></i>
        <span class="title">Recarga</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item  ">
            <a href="#" class="nav-link ">
                <span class="title">Presupuesto</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{route('recharges.create')}}" class="nav-link ">
                <span class="title">Registrar Recarga</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="#" class="nav-link ">
                <span class="title">Registrar en Masivo</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{route('recharges.index')}}" class="nav-link ">
                <span class="title">Recargas</span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item  ">
    <a href="#" class="nav-link nav-toggle">
        <i class="fa fa-search"></i>
        <span class="title">Buscar</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item  ">
            <a href="#" class="nav-link ">
                <span class="title">Gasto</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="portlet_light.html" class="nav-link ">
                <span class="title">Recargas</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="portlet_solid.html" class="nav-link ">
                <span class="title">Transferencias</span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item  ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-line-chart"></i>
        <span class="title">Reportes</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item  ">
            <a href="charts_amcharts.html" class="nav-link ">
                <span class="title">General</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="charts_flotcharts.html" class="nav-link ">
                <span class="title">Usuarios</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="charts_flowchart.html" class="nav-link ">
                <span class="title">Tarjetas</span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{setActive('admin/*')}} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-settings"></i>
        <span class="title">Administrar</span>
        {!! setSelected('admin/*') !!}
        <span class="arrow"></span>

    </a>
    <ul class="sub-menu">
        <li class="nav-item {{setActive('admin/cards/*')}}">
            <a href="{{route('cards.index')}}" class="nav-link ">
                <span class="title">Tarjetas</span>
            </a>
        </li>
        <li class="nav-item {{setActive('admin/people/*')}} ">
            <a href="{{route('people.index')}}" class="nav-link ">
                <span class="title">Usuarios</span>
            </a>
        </li>
        <li class="nav-item {{setActive('admin/projects/*')}}">
            <a href="{{route('projects.index')}}" class="nav-link ">
                <span class="title">Proyectos</span>
            </a>
        </li>
        <li class="nav-item {{setActive('admin/providers/*')}}">
            <a href="{{route('providers.index')}}" class="nav-link ">
                <span class="title">Proveedores</span>
            </a>
        </li>
        <li class="nav-item {{setActive('admin/concepts/*')}}">
            <a href="{{route('concepts.index')}}" class="nav-link ">
                <span class="title">Conceptos</span>
            </a>
        </li>
        <li class="nav-item {{setActive('admin/sub_concepts/*')}}">
            <a href="{{route('sub_concepts.index')}}" class="nav-link ">
                <span class="title">Sub Conceptos</span>
            </a>
        </li>
        <li class="nav-item  {{setActive('admin/sub_concept_categories/*')}}">
            <a href="{{route('sub_concept_categories.index')}}" class="nav-link ">
                <span class="title">Sub Categoria Concepto</span>
            </a>
        </li>
        <li class="nav-item  {{setActive('admin/permissions/*')}}">
            <a href="{{route('permissions.index')}}" class="nav-link ">
                <span class="title">Permisos</span>
            </a>
        </li>
        <li class="nav-item {{setActive('admin/roles/*')}} ">
            <a href="{{route('roles.index')}}" class="nav-link ">
                <span class="title">Roles</span>
            </a>
        </li>
        <li class="nav-item {{setActive('admin/roles/*')}} ">
            <a href="{{route('approvers.index')}}" class="nav-link ">
                <span class="title">Aprobadores</span>
            </a>
        </li>
        <li class="nav-item {{setActive('admin/zones/*')}} ">
            <a href="{{route('zones.index')}}" class="nav-link ">
                <span class="title">Zonas</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="" class="nav-link ">
                <span class="title">Departamentos</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="#" class="nav-link ">
                <span class="title">Ciudades/Municipios</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="#" class="nav-link ">
                <span class="title">Tributarios/Financieros</span>
            </a>
        </li>
    </ul>
</li>














