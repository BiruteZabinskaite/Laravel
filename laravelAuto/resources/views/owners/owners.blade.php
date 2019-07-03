@extends('layouts.app')

@section('title', 'Savininkai')

@section('content')
    <div class="card-header d-flex justify-content-between">
        <h5>Savininkų sąrašas</h5>
        <a href="{{ route('owner.create') }}"><button class="btn btn-secondary">Pridėti</button></a>
    </div>
    <div class="card-body">
        <table class="table table-hover text-center">
            <thead>
            <tr>
                <th scope="col">Vardas</th>
                <th scope="col">Pavardė</th>
                <th scope="col" colspan="3">Veiksmas</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($owners as $owner)
                <tr>
                    <td>{{ $owner->name }}</td>
                    <td>{{ $owner->surname }}</td>
                    <th> <a href="{{ route('owner.show', $owner->id) }}"><button class="btn btn-primary">Peržiūrėti</button></a></th>
                    <td><a href="{{ route('owner.edit', $owner->id) }}"><button class="btn btn-success">Redaguoti</button></a></td>
                    <td>
                    <form method="post" action="{{ route('owner.destroy', $owner->id) }}">
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