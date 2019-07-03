<?php

namespace App\Http\Controllers;

use App\Auto;
use App\Owner;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AutoController extends Controller
{
    public function index()
    {
        $autos=Auto::all();
        return view('autos.autos',[
            'autos'=>$autos
        ]);
    }

    public function create()
    {
        $owners=Owner::all();
        return view ('autos.create', [
            'owners'=>$owners
        ]);
    }

    public function store(Request $request)
    {
        $messages = [
            'reg_number.required'    => 'Prašome įvesti automobilio registracijos numerį.',
            'reg_number.unique'    => 'Automobilis su tokiais registracijos nr. jau yra.',
            'brand.required'    => 'Prašome įvesti automobilio gamintoją.',
            'model.required'    => 'Prašome įvesti automobilio modelį.',
            'reg_number.max'    => 'Automobilio registracijos numeris turi būti trumpesnis nei 64 simboliai.',
            'brand.max'    => 'Automobilio gamintojo pavadinimas turi būti trumpesnis nei 64 simboliai.',
            'model.max'    => 'Automobilio modelis turi būti trumpesnis nei 64 simboliai.'
            ];

        $this->validate($request,
            [
                'reg_number' => 'required|unique:autos|max:6',
                'brand' => 'required|max:64',
                'model' => 'required||max:64',
             ],
             $messages
        );

        $auto=new Auto();
        $auto->reg_number=$request->reg_number;
        $auto->brand=$request->brand;
        $auto->model=$request->model;

        $auto->save();

        $file=$request->file('failas');
        $file->storeAs('autos', $auto->id.'.'.$file->extension());
        return redirect()->route('auto.index');
    }

    public function show(Auto $auto)
    {
        return view('autos.show',[
            'auto'=>$auto
            ]);
    }

    public function edit(Auto $auto)
    {
        $owners=Owner::all();
        return view('autos.edit',
            [
                'auto'=>$auto,
                'owners'=>$owners
            ]);
    }

    public function update(Request $request, Auto $auto)
    {
        $auto->reg_number=$request->reg_number;
        $auto->brand=$request->brand;
        $auto->model=$request->model;
        $owner=$request->owner;
        $auto->owners()->attach($owner);
        $auto->save();

        return redirect()->route('auto.index');
    }

    public function destroy(Auto $auto)
    {
        $auto->owners()->detach();
        $auto->delete();
        return redirect()->route('auto.index');
    }

    public function showAuto($file, Request $request){
        return response()->file(storage_path('app/autos/'.$file));
    }
}
