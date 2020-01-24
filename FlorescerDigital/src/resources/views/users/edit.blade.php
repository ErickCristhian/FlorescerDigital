@extends('layouts.admin')

@section('content')
    <h3>Editar cliente</h3>
    @include('form._form_errors')
    {{ Form::model($user,['route' => ['admin.users.update',$user->id], 'method' => 'PUT' ]) }}
        @include('users._form')
        <button type="submit" class="btn btn-success">Salvar</button>
    {{ Form::close() }}
@endsection
