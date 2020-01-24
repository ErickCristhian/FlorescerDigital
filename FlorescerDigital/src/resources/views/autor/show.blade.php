@extends('layouts.admin')

@section('content')
    <h3>Ver Autor</h3>
    @if (\Auth::user()->role == 1? false: true)
    <a class="btn btn-primary" href="{{ route('admin.autor.edit',['autor' => $autor->id]) }}">Editar</a>
    <a class="btn btn-danger" href="{{ route('admin.autor.destroy',['autor' => $autor->id]) }}"
        onclick="event.preventDefault();if(confirm('Deseja excluir este item?')){document.getElementById('form-delete').submit();}">Excluir</a>

    {{Form::open(['route' => ['admin.autor.destroy',$autor->id],'method' => 'DELETE', 'id' => 'form-delete'])}}
    {{Form::close()}}
    @endif
    <br/><br/>

    <table class="table table-striped table-dark">
        <tbody>
        <tr>
            <th scope="row">ID</th>
            <td>{{$autor->id}}</td>
        </tr>
        <tr>
            <th scope="row">Nome</th>
            <td>{{$autor->name}}</td>
        </tr>
        </tbody>
    </table>
@endsection
