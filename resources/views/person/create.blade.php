@extends('layouts.app')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <p><strong>Popraw następujące błędy:</strong></p><hr>
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    {!! Form::open([
     'route' => 'person.store'
    ]) !!}

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
        {!! Form::text('town_id', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Dodaj', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection
