@extends('layouts.app')

@section('title', 'Redaguoti automobilį')

@section('content')
    <h5 class="card-header d-flex justify-content-between">Redaguoti automobilį</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 order-md-1">
                <form method="post" action="{{ route('auto.update', $auto->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="reg_number">Reg. Nr.</label>
                            <input type="text" class="form-control" name="reg_number" placeholder="" value="{{ $auto->reg_number }}" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="brand">Markė</label>
                            <input type="text" class="form-control" name="brand" placeholder="" value="{{ $auto->brand }}">

                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="model">Modelis</label>
                            <input type="text" class="form-control" name="model" placeholder="" value="{{ $auto->model }}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="">Pridėti savininką</label>
                            <select class="form-control" name="owner">
                                <option name="owner" value="0"></option>
                                <?php foreach ($owners as $owner){ ?>
                                <option name="owner" value="<?php echo $owner['id']?>"><?php echo $owner['name']." ".$owner['surname']?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-success btn-lg btn-block" type="submit" name="edit">Išsaugoti</button>
                </form>
            </div>
        </div>
    </div>
@endsection