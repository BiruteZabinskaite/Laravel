<?php

namespace App\Http\Controllers;

use App\Owner;
use App\Auto;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        $owners=Owner::all();
        return view('owners.owners',['owners'=>$owners]);
    }

    public function create()
    {
        $autos=Auto::all();
        return view ('owners.create', ['autos'=>$autos]);
    }

    public function store(Request $request)
    {
        $owner=new Owner();
        $owner->name=$request->name;
        $owner->surname=$request->surname;
        $owner->save();
        return redirect()->route('owner.index');
    }

    public function show(Owner $owner)
    {
        return view('owners.show',['owner'=>$owner]);
    }

    public function edit(Owner $owner)
    {
        $autos=Auto::all();
        return view('owners.edit',[
            'owner'=>$owner,
            'autos'=>$autos
        ]);
    }

    public function update(Request $request, Owner $owner)
    {
        $owner->name=$request->name;
        $owner->surname=$request->surname;
        $auto=$request->auto;
        $owner->autos()->attach($auto);
        $owner->save();
        return redirect()->route('owner.index');
    }

    public function destroy(Owner $owner)
    {
        $owner->autos()->detach();
        $owner->delete();

        return redirect()->route('owner.index');
    }
}
