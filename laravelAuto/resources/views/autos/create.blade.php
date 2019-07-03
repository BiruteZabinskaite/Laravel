@extends('layouts.app')

@section('title', 'Pridėti automobilį')

@section('content')
    <h5 class="card-header d-flex justify-content-between">Pridėti automobilį</h5>
    <div class="card-body">
    <div class="row">
        <div class="col-md-12 order-md-1 align-middle">
            <form method="post" action="{{ route('auto.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <label for="reg_number">Registracijos Nr.</label>
                        <input type="text" class="form-control" name="reg_number" placeholder="" value="{{ old('reg_number') }}" required>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="brand">Markė</label>
                        <input type="text" class="form-control" name="brand" placeholder="" value="{{ old('brand') }}">

                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="model">Modelis</label>
                        <input type="text" class="form-control" name="model" placeholder="" value="{{ old('model') }}">
                    </div>
                    <div class="form-group col-md-6 mb-6">
                        <label>Automobilio nuotrauka</label>
                        <input name="failas" type="file" class="form-control-file">
                    </div>
                </div>
                    <hr class="mb-4">
                    <button class="btn btn-success btn-lg btn-block" type="submit">Išsaugoti</button>
            </form>
        </div>
    </div>
    </div>
@endsection