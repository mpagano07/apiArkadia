@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <h1 class="card-header">Arkadia</h1>

            </div>
            <div class="panel-body">
                <form method="POST" action="{{ route('login')}}">

                    {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name">Nombre de usuario</label>

                        <input class="form-control"  
                        name="name" 
                        value="{{ old('name') }}"
                        placeholder="Ingresa tu nombre de usuario">

                        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}

                    </div>
                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label for="password">Contraseña</label>

                        <input class="form-control" 
                        type="password" 
                        name="password" 
                        placeholder="Ingresa tu contraseña">

                        {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                    </div>
                    <button class="btn btn-primary btn-block">Acceder</button>
                </form>

            </div>

        </div>
    </div>
</div>

@endsection