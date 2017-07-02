@extends('layouts.app')

@section('content')

    <h3>Zobacz: {{$town->name}} {{$town->surname}}</h3>


    <div class="form-group">
        <label class="col-sm-2 control-label">Nazwa</label>
        <div class="col-sm-10">
            <p class="form-control-static">{{ $town->cityname }}</p>
        </div>
        <label class="col-sm-2 control-label">Kod pocztowy</label>
        <div class="col-sm-10">
            <p class="form-control-static">{{ $town->postal }}</p>
        </div>
    </div>





    <div class="row">
        <div class="col-md-1"><a href="{{ route('town.edit', $town->id) }}" class="btn btn-primary">Zmień</a></div>
        <div class="col-md-1">
            {!! Form::open([
                            'method' => 'DELETE',
                            'route' => ['town.destroy', $town->id],
                            'onsubmit' => 'return confirm("Jesteś pewien?")'
            ]) !!}
            {!! Form::submit('Usuń', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
        <div class="col-md-1">
            <div class="pull-right"><a href="{{ route('town.index') }}" class="btn btn-success">Wróć</a></div>
        </div>
    </div>



@endsection
