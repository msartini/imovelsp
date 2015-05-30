@extends('master')


@section('container')

    <h1>Nova imagem</h1>

    
    {!! Form::open(['route' => 'images.store', 'files' => true]) !!}
     
        <div class="form-group">
            {!! Form::label('title', 'Título:') !!}
            {!! Form::text('title', null, ['class'=> 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('description', 'Descrição:') !!}
            {!! Form::textarea('description', null, ['class'=> 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('Criar imagem', ['class' => 'btn btn-primary']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('image', 'Imagem:') !!}
            {!! Form::file('image') !!}
        </div>

    {!! Form::close() !!}

@stop