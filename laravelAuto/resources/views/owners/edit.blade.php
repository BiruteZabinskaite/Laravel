@extends('layouts.app')

@section('title', 'Redaguoti savininką')

@section('content')
    <h5 class="card-header d-flex justify-content-between">Redaguoti savininką</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 order-md-1">
                <form method="post" action="{{ route('owner.update', $owner->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <label for="name">Vardas</label>
                            <input type="text" class="form-control" name="name" placeholder="" value="{{ $owner->name }}" required>
                        </div>
                        <div class="col-md-4 mb-4">
                            <label for="surname">Pavardė</label>
                            <input type="text" class="form-control" name="surname" placeholder="" value="{{ $owner->surname }}">
                        </div>
                        <div class="col-md-4 mb-4">
                            <label for="">Pridėti automobilį</label>
                            <select class="form-control" name="auto">
                                <option name="auto" value="0"></option>
                                <?php foreach ($autos as $auto){ ?>
                                <option name="auto" value="<?php echo $auto['id']?>"><?php echo $auto['reg_number']." - ".$auto['brand']." ".$auto['model']?></option>
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