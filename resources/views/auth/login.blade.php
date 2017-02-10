@extends('layouts.login')

@section('content')
    <div class="login-title"><strong>Bienvenido</strong>, Inicia sesión.</div>
    @if (count($errors))
        <div class="panel-body list-group list-group-contacts">
            @foreach($errors->all() as $error)
                <div  class="list-group-item">

                    <span class="contacts-title  text-danger"><i class="fa fa-times text-danger"></i>{{ $error }}</span>

                </div>
            @endforeach
        </div>
    @endif
    <form action="{{ url('/login') }}" class="form-horizontal" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <div class="col-md-12">
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="fa fa-user"></span>
                    </div>
                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Nombre de Usuario" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="fa fa-lock"></span>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <a href="{{ url('/password/reset') }}">Olvidaste tu contraseña?</a>
            </div>
            <div class="col-md-6 text-right">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Permanecer conectado
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <button class="btn btn-primary btn-lg btn-block">Ingresar</button>
            </div>
        </div>
    </form>

@endsection
