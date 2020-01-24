@extends('layouts.admin')

@section('content')
    <h3>Ver Usuário</h3>
    @if (\Auth::user()->role == 1? false: true)
    <a class="btn btn-primary" href="{{ route('admin.users.edit',['user' => $user->id]) }}">Editar</a>
    <a class="btn btn-danger" href="{{ route('admin.users.destroy',['user' => $user->id]) }}"
        onclick="event.preventDefault();if(confirm('Deseja excluir este item?')){document.getElementById('form-delete').submit();}">Excluir</a>

    {{Form::open(['route' => ['admin.users.destroy',$user->id],'method' => 'DELETE', 'id' => 'form-delete'])}}
    {{Form::close()}}
    <br/><br/>
    @endif

    <table class="table table-striped table-dark">
        <tbody>
        <tr>
            <th scope="row">ID</th>
            <td>{{$user->id}}</td>
        </tr>
        <tr>
            <th scope="row">Nome</th>
            <td>{{$user->name}}</td>
        </tr>
        <tr>
            <th scope="row">E-mail</th>
            <td>{{$user->email}}</td>
        </tr>
        <tr>
            <th scope="row">Telefone</th>
            <td>{{$user->telefone}}</td>
        </tr>
        <tr>
            <th scope="row">Instagram</th>
            <td>{{$user->instagram}}</td>
        </tr>
        <tr>
            <th scope="row">Role</th>
            <td>{{$user->role == 2 ? 'Admin': 'Usuário Padrão'}}</td>
        </tr>
        </tbody>
    </table>
@endsection
