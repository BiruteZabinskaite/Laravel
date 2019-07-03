@extends('layouts.app')

@section('title', 'Automobiliai')

@section('content')
    <div class="card-header d-flex justify-content-between">
        <h5>Automobilių sąrašas</h5>
        <a href="{{ route('auto.create') }}"><button class="btn btn-secondary">Pridėti</button></a>
    </div>
    <div class="card-body">
<table class="table text-center table-hover">
    <thead>
    <tr>
        <th>Registracijos Nr.</th>
        <th>Markė</th>
        <th>Modelis</th>
        <th colspan="3">Veiksmas</th>
    </tr>
    </thead>
    <tbody>

    @foreach ($autos as $auto)
    <tr>
        <td>{{ $auto->reg_number }}</td>
        <td>{{ $auto->brand }}</td>
        <td>{{ $auto->model }}</td>
        <th> <a href="{{ route('auto.show', $auto->id) }}"><button class="btn btn-primary">Peržiūrėti</button></a></th>
        <td><a href="{{ route('auto.edit', $auto->id) }}"><button class="btn btn-success">Redaguoti</button></a></td>
        <td>
        <form method="post" action="{{ route('auto.destroy', $auto->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Pašalinti</button>
        </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
    </div>
@endsection