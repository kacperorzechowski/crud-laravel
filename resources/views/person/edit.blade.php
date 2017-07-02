@extends('layouts.app')

@section('content')
    {!! Form::model($person, [
    'method' => 'PATCH',
    'route' => ['person.update', $person->id]
    ]) !!}

    <h3>Edytuj: {{$person->name}} {{$person->surname}}</h3>

    <div class="form-group">
        {!! Form::label('name', 'Imię:', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('surname', 'Nazwisko:', ['class' => 'control-label']) !!}
        {!! Form::text('surname', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('town_id', 'Miasto:', ['class' => 'control-label']) !!}
        {!! Form::select('town_id', $towns, $person->townid, ['class' => 'form-control']) !!}
    </div>
    <div class="row">
        <div class="col-md-1">
            {!! Form::submit('Zmień', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>


        <div class="col-md-1">
            <div class="pull-right"><a href="{{ route('person.index') }}" class="btn btn-success">Wróć</a></div>
        </div>
    </div>

@endsection
