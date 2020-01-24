
@extends('layouts.admin')

@section('content')
    <h3>Editar Autor</h3>
    @include('form._form_errors')
    {{ Form::model($autor,['route' => ['admin.autor.update',$autor->id], 'method' => 'PUT' ]) }}
        @include('autor._form')
        <button type="submit" class="btn btn-success">Salvar</button>
    {{ Form::close() }}
@endsection
