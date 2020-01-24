

@extends('layouts.app')

@section('content')
    <br/>
    <h3>Listagem de Usuários</h3>
    <br/><br/>
    <a class="btn btn-success" href="{{ route('admin.users.create') }}">Criar novo</a>
    <br/><br/>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Instagram</th>
            <th>Papel</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->telefone }}</td>
                <td>{{ $user->instagram }}</td>
                <td>{{ $user->role == 1 ? "Usuário": "Admin" }}</td>
                <td>
                    @if (\Auth::user()->role == 1? false: true)
                        <a href="{{route('admin.users.edit',['user' => $user->id])}}">Editar</a> |
                    @endif
                    <a href="{{route('admin.users.show',['user' => $user->id])}}">Ver</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

