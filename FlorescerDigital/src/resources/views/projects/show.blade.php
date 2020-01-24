@extends('layouts.admin')

@section('content')
    <h3>Ver Projeto</h3>
    @if (\Auth::user()->role == 1? false: true)
        <a class="btn btn-primary" href="{{ route('admin.projects.edit',['project' => $project->id]) }}">Editar</a>
        <a class="btn btn-danger" href="{{ route('admin.projects.destroy',['project' => $project->id]) }}"
            onclick="event.preventDefault();if(confirm('Deseja excluir este item?')){document.getElementById('form-delete').submit();}">Excluir</a>

        {{Form::open(['route' => ['admin.projects.destroy',$project->id],'method' => 'DELETE', 'id' => 'form-delete'])}}
        {{Form::close()}}
    @endif
    <br/><br/>

    <table class="table table-striped table-dark">
        <tbody>
        <tr>
            <th scope="row">ID</th>
            <td>{{$project->id}}</td>
        </tr>
        <tr>
            <th scope="row">Titulo</th>
            <td>{{$project->title}}</td>
        </tr>
        <tr>
            <th scope="row">Descrição</th>
            <td>{{$project->description}}</td>
        </tr>
        </tbody>
    </table>
@endsection
