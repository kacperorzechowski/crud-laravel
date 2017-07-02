@extends('layouts.app')

@section('content')

    <h3>Zobacz: {{$person->name}} {{$person->surname}}</h3>


        <div class="form-group">
            <label class="col-sm-2 control-label">Imię</label>
            <div class="col-sm-10">
                <p class="form-control-static">{{ $person->name }}</p>
            </div>
            <label class="col-sm-2 control-label">Nazwisko</label>
            <div class="col-sm-10">
                <p class="form-control-static">{{ $person->surname }}</p>
            </div>
            <label class="col-sm-2 control-label">Miasto</label>
            <div class="col-sm-10">
                <p class="form-control-static">{{ $person->town_id }}</p>
            </div>
        </div>





    <div class="row">
        <div class="col-md-1"><a href="{{ route('person.edit', $person->id) }}" class="btn btn-primary">Zmień</a></div>
        <div class="col-md-1">
            {!! Form::open([
                            'method' => 'DELETE',
                            'route' => ['person.destroy', $person->id],
                            'onsubmit' => 'return confirm("Jesteś pewien?")'
            ]) !!}
            {!! Form::submit('Usuń', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
        <div class="col-md-1">
            <div class="pull-right"><a href="{{ route('person.index') }}" class="btn btn-success">Wróć</a></div>
        </div>
    </div>



@endsection
