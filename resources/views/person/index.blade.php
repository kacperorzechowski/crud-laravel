@extends('layouts.app')

@section('content')

    <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Miasto</th>
                <th>Operacja</th>
            </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach($people as $person)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->surname}}</td>
                    <td>{{ $person->town_id}}</td>
                    <td>
                        <a href="{{ route('person.show', $person->id) }}" class="btn btn-info">Zobacz</a>
                        <a href="{{ route('person.edit', $person->id) }}" class="btn btn-primary">Edytuj</a>
                    </td>
                </tr>
                <?php $i++; ?>
                @endforeach
            </tbody>
        </table>

@endsection
