
@extends('layouts.admin')

@section('content')
    <br/>
    <h3>Listagem de Autores</h3>
    <br/><br/>
    <a class="btn btn-success" href="{{ route('admin.autor.create') }}">Criar novo</a>
    <br/><br/>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($autores as $autor)
            <tr>
                <td>{{ $autor->id }}</td>
                <td>{{ $autor->name }}</td>
                <td>
                    @if (\Auth::user()->role == 1? false: true)
                        <a href="{{route('admin.autor.edit',['autor' => $autor->id])}}">Editar</a> |
                    @endif
                    <a href="{{route('admin.autor.show',['autor' => $autor->id])}}">Ver</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
