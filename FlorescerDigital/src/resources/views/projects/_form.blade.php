
@component('form._form_group',['field' => 'title'])
{{ Form::label('title','Titulo',['class' => 'control-label']) }}
{{ Form::text('title',null,['class' => 'form-control']) }}
@endcomponent

@component('form._form_group',['field' => 'status'])
{{ Form::label('status', 'Status',['class' => 'control-label']) }}
{{ Form::text('status', null,['class' => 'form-control'])}}
@endcomponent

@component('form._form_group',['field' => 'description'])
{{ Form::label('description', 'Descrição',['class' => 'control-label']) }}
{{ Form::text('description', null,['class' => 'form-control'])}}
@endcomponent

