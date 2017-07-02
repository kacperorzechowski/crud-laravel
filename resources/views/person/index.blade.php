@extends('layouts.app')

@section('content')

    <h3>Lista osób</h3> Może dodasz nową osobę? <a href="{{ route('person.create') }}" class="btn btn-success">Dodaj</a><div style="margin-bottom: 50px;"></div>

    <table class="table text-center">
            <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Imię</th>
                <th class="text-center">Nazwisko</th>
                <th class="text-center">Miasto</th>
                <th class="text-center">Operacja</th>
            </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach($people as $person)
                <tr>
                    <td class="col-md-1">{{ $i }}</td>
                    <td class="col-md-2">{{ $person->name }}</td>
                    <td class="col-md-2">{{ $person->surname}}</td>
                    <td class="col-md-2">{{ $person->town_id}}</td>
                    <td class="col-md-1"><a href="{{ route('person.show', $person->id) }}" class="btn btn-info">Zobacz</a></td>
                    <td class="col-md-1"><a href="{{ route('person.edit', $person->id) }}" class="btn btn-primary">Zmień</a></td>
                    <td class="col-md-1">
                                {!! Form::open([
                                    'method' => 'DELETE',
                                    'route' => ['person.destroy', $person->id],
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
