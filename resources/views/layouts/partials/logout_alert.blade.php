<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Cerrar <strong>sesión</strong> ?</div>
            <div class="mb-content">
                <p>Seguro que quieres salir?</p>
                <p>Pulse NO si desea continuar con el trabajo. Pulse SI para salir del usuario actual.</p>
            </div>
            <div class="mb-footer">
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <div class="pull-right">
                    <a href="{{ url('/logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-success btn-lg">SI</a>
                    <button class="btn btn-default btn-lg mb-control-close">NO</button>
                </div>
            </div>
        </div>
    </div>
</div>
