
@extends('layouts.admin')

@section('content')
    <h3>Editar Projeto</h3>
    @include('form._form_errors')
    {{ Form::model($project,['route' => ['admin.projects.update',$project->id], 'method' => 'PUT' ]) }}
        @include('projects._form')
        <button type="submit" class="btn btn-success">Salvar</button>
    {{ Form::close() }}
@endsection
