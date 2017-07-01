@extends('layouts.app')

@section('content')

    <form class="form-horizontal">
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


        <a href="{{ route('person.edit', $person->id) }}" class="btn btn-primary">Zmień</a>
        <a href="{{ route('person.destroy', $person->id) }}" class="btn btn-danger">Usuń</a>
    </form>

@endsection
