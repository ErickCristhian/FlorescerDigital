
@extends('layouts.admin')

@section('content')
    <br/>
    <h3>Listagem de Projetos</h3>
    <br/><br/>
    <a class="btn btn-success" href="{{ route('admin.projects.create') }}">Criar novo</a>
    <br/><br/>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Status</th>
            <th>Description</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->title }}</td>
                <td>{{ $project->status }}</td>
                <td>{{ $project->description }}</td>

                <td>
                    <a href="{{route('admin.projects.edit',['project' => $project->id])}}">Editar</a> |
                    <a href="{{route('admin.projects.show',['project' => $project->id])}}">Ver</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
