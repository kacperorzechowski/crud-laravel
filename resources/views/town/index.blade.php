@extends('layouts.app')

@section('content')

    <h3>Lista miast</h3> Może dodasz nowe miasto? <a href="{{ route('town.create') }}" class="btn btn-success">Dodaj</a><div style="margin-bottom: 50px;"></div>

    <table class="table text-center">
        <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">Nazwa</th>
            <th class="text-center">Kod pocztowy</th>
            <th class="text-center">Operacja</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
        @foreach($towns as $town)
            <tr>
                <td class="col-md-1">{{ $i }}</td>
                <td class="col-md-2">{{ $town->cityname }}</td>
                <td class="col-md-2">{{ $town->postal}}</td>
                <td class="col-md-1"><a href="{{ route('town.show', $town->id) }}" class="btn btn-info">Zobacz</a></td>
                <td class="col-md-1"><a href="{{ route('town.edit', $town->id) }}" class="btn btn-primary">Zmień</a></td>
                <td class="col-md-1">
                    {!! Form::open([
                        'method' => 'DELETE',
                        'route' => ['town.destroy', $town->id],
                        'onsubmit' => 'return confirm("Jesteś pewien?")'
                    ]) !!}
                    {!! Form::submit('Usuń', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            <?php $i++; ?>
        @endforeach
        </tbody>
    </table>

@endsection
