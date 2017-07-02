@extends('layouts.app')

@section('content')
    {!! Form::model($town, [
    'method' => 'PATCH',
    'route' => ['town.update', $town->id]
    ]) !!}

    <h3>Edytuj: {{$town->name}} {{$town->surname}}</h3>

    <div class="form-group">
        {!! Form::label('cityname', 'Nazwa', ['class' => 'control-label']) !!}
        {!! Form::text('cityname', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('postal', 'Kod pocztowy', ['class' => 'control-label']) !!}
        {!! Form::text('postal', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Zmień', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection
