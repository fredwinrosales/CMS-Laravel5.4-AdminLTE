@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Profile</h1>
@stop

@section('content')
    <form action="{{ url(route('profile-update', ['id'=>$user->id])) }}" method="post">
    {!! csrf_field() !!}
        <input type="hidden" name="_method" value="put">
        <div class="form-group">
            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <input type="text" name="email" class="form-control" value="{{ $user->email }}">
        </div>
        <button type="submit">Guardar cambios</button>
    </form>
@stop