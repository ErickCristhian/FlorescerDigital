
@component('form._form_group',['field' => 'name'])
    {{ Form::label('name','Nome',['class' => 'control-label']) }}
    {{ Form::text('name',null,['class' => 'form-control']) }}
@endcomponent

@component('form._form_group',['field' => 'email'])
    {{ Form::label('email', 'E-mail',['class' => 'control-label']) }}
    {{ Form::email('email', null,['class' => 'form-control'])}}
@endcomponent

@component('form._form_group',['field' => 'telefone'])
    {{ Form::label('telefone', 'Telefone',['class' => 'control-label']) }}
    {{ Form::text('telefone', null,['class' => 'form-control'])}}
@endcomponent

@component('form._form_group',['field' => 'instagram'])
    {{ Form::label('instagram', 'Instagram',['class' => 'control-label']) }}
    {{ Form::text('instagram', null,['class' => 'form-control'])}}
@endcomponent

@if(\Request::is('admin/users/create'))
    @component('form._form_group',['field' => 'password'])
        {{ Form::label('password', 'Senha',['class' => 'control-label']) }}
        {{ Form::text('password', null,['class' => 'form-control'])}}
    @endcomponent
@endif
