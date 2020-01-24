
@extends('layouts.admin')

@section('content')
    <br/>
    <h3>Novo Usuário</h3>
    <h4>{{$type == \App\User::ROLE_USER? 'Usuário comum': 'Administrador'}}</h4>
    <br/>
    <a href="{{route('admin.users.create',['role' => \App\User::ROLE_USER])}}">Usuário</a> |
    <a href="{{route('admin.users.create',['role' => \App\User::ROLE_ADMIN])}}">Administrador</a>
    {{ Form::open(['route'=>'admin.users.store']) }}
        @include('users._form')
        <button type="submit" class="btn btn-success">Criar</button>
    {{ Form::close() }}
@endsection
