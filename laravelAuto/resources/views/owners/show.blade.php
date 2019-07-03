@extends('layouts.app')

@section('title', 'Savininkas')

@section('content')
<h5 class="card-header d-flex justify-content-between">Savininko informacija</h5>
<div class="card-body">
    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th scope="col">Vardas</th>
                <th scope="col">Pavardė</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $owner->name }}</td>
                <td>{{ $owner->surname }}</td>
            </tr>
        </tbody>
    </table>
</div>
<hr>
<h5 class="card-header d-flex justify-content-between">Savininko automobiliai</h5>
<div class="card-body">
    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th scope="col">Registracijos Nr.</th>
                <th scope="col">Gamintojas</th>
                <th scope="col">Modelis</th>
                <th scope="col">Nuo</th>
                <th scope="col">Iki</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($owner->autos as $auto)
                    <tr>
                        <td>{{ $auto->reg_number }}</td>
                        <td>{{ $auto->brand }}</td>
                        <td>{{ $auto->model }}</td>
                        <td>{{ $auto->pivot->from_date }}</td>
                        <td>{{ $auto->pivot->to_date }}</td>
                    </tr>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>
@endsection