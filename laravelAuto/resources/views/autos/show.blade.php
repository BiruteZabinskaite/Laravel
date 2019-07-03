@extends('layouts.app')

@section('title', 'Automoblis')

@section('content')
<h5 class="card-header d-flex justify-content-between">Automobilio informacija</h5>
<div class="card-body">
<table class="table table-striped text-center">
    <thead>
    <tr>
        <th></th>
        <th scope="col">Registracijos Nr.</th>
        <th scope="col">Markė</th>
        <th scope="col">Modelis</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><img src="{{route('autoImage',$auto->id.'.png') }}" height="200" alt=""></td>
            <td class="align-middle">{{ $auto->reg_number }}</td>
            <td class="align-middle">{{ $auto->brand }}</td>
            <td class="align-middle">{{ $auto->model }}</td>
        </tr>
    </tbody>
</table>
</div>
<hr>
<h5 class="card-header d-flex justify-content-between">Automobilio savininkai</h5>
<div class="card-body">
    <table class="table table-striped text-center">
        <thead>
        <tr>
            <th scope="col">Vardas</th>
            <th scope="col">Pavardė</th>
            <th scope="col">Nuo</th>
            <th scope="col">Iki</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($auto->owners as $owner)
            <tr>
                <td>{{$owner->name}}</td>
                <td>{{$owner->surname}}</td>
                <td>{{$owner->pivot->from_date}}</td>
                <td>{{$owner->pivot->to_date}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection