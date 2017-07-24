@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Profile</h1>
@stop

@section('content')
    <form action="{{ url('profile') }}" method="post">
    {!! csrf_field() !!}
        <div class="form-group">
            <input type="name" name="name" class="form-control">
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control">
        </div>
        <button type="submit">Guardar cambios</button>
    </form>
@stop