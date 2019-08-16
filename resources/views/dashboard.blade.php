@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

            <h1 class="panel-title">Bienvenido {{ auth()->user()->name }}</h1>

        </div>

        <div class="panel-body">
            <strong>Correo Electronico: </strong> {{ auth()->user()->email}}<br/> 
        </div>
        <div class="panel-footer">

            <form method="POST" action="{{ route ('logout')}}">
                {{ csrf_field() }}
                <button class="btn btn-primary btn-block">Cerrar sesion</button>
            </form>
        </div>
    </div>
</div>
@endsection