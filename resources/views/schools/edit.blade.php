@extends('app')
@section('content')
<h1>Update School</h1>
{!! Form::model($school,['method' => 'PATCH','route'=>['schools.update',$school->id]]) !!}
<div class="form-group">
    {!! Form::label('s_name', 'Name:') !!}
    {!! Form::text('s_name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('s_number', 'School ID:') !!}
    {!! Form::text('s_number',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('s_street', 'Street Address:') !!}
    {!! Form::text('s_street',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('s_city', 'City:') !!}
    {!! Form::text('s_city',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('s_state', 'State:') !!}
    {!! Form::text('s_state',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('s_zip', 'Zip:') !!}
    {!! Form::text('s_zip',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('s_contact', 'Primary Contact:') !!}
    {!! Form::text('s_contact',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('s_email', 'E-Mail:') !!}
    {!! Form::text('s_email',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('s_phone', 'Cell Phone:') !!}
    {!! Form::text('s_phone',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
@stop
