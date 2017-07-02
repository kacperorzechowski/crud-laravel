@extends('layouts.app')

@section('content')

    <div style="margin-top: 300px"></div>
    <div class="row text-center" >

        <div class="col-lg-6">
            <a href="{{ route('person.index') }}"><span class="glyphicon glyphicon-user" style="font-size: 80px;" aria-hidden="true"></span>
            <h3>Osoby</h3></a>
        </div>
        <div class="col-lg-6">
            <a href="{{ route('town.index') }}"><span class="glyphicon glyphicon-home" style="font-size: 80px;" aria-hidden="true"></span>
                <h3>Miasta</h3></a>
        </div>

    </div>
@endsection

