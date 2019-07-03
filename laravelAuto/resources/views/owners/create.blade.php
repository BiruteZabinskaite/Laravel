@extends('layouts.app')

@section('title', 'Sukurti savininką')

@section('content')
    <h5 class="card-header d-flex justify-content-between">Pridėti savininką</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 order-md-1">
                <form method="post" action="{{ route('owner.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="name">Vardas</label>
                            <input type="text" class="form-control" name="name" placeholder="Vardas" value="{{ old('name') }}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="surname">Pavardė</label>
                            <input type="text" class="form-control" name="surname" placeholder="Pavardė" value="{{ old('surname') }}">
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-success btn-lg btn-block" type="submit" name="edit">Išsaugoti</button>
                </form>
            </div>
        </div>
    </div>
@endsection