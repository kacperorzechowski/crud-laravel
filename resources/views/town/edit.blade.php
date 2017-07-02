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
    <div class="row">
        <div class="col-md-1">

            {!! Form::submit('Zmień', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>

        <div class="col-md-1">
            <div class="pull-right"><a href="{{ route('town.index') }}" class="btn btn-success">Wróć</a></div>
        </div>
    </div>



@endsection
