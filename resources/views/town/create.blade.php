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
     'route' => 'town.store'
    ]) !!}

    <div class="form-group">
        {!! Form::label('cityname', 'Nazwa:', ['class' => 'control-label']) !!}
        {!! Form::text('cityname', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('postal', 'Kod pocztowy:', ['class' => 'control-label']) !!}
        {!! Form::text('postal', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Dodaj', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection
