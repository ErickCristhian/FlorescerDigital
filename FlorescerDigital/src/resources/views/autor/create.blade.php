
@extends('layouts.admin')

@section('content')
    <br/>
    <h3>Novo Projeto</h3>
    <br/>
    {{ Form::open(['route'=>'admin.autor.store']) }}
        @include('autor._form')
        <button type="submit" class="btn btn-success">Criar</button>
    {{ Form::close() }}
@endsection
